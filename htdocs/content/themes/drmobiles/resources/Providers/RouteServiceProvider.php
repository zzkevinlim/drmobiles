<?php

namespace Theme\Providers;

use App\WordpressOption;
use Illuminate\Database\Eloquent\Model;
use Themosis\Core\Support\Providers\RouteServiceProvider as ServiceProvider;
use Themosis\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Controller namespace for theme routes.
     *
     * @var string
     */
    protected $namespace = 'Theme\Controllers';

    public function boot()
    {
        parent::boot();
    }

    /**
     * Load theme routes.
     */
    public function map()
    {
        $themeName = ltrim(
            str_replace(themes_path(), '', realpath(__DIR__.'/../../')),
            '\/'
        );

        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(themes_path($themeName.'/routes.php'));
    }

    public function register()
    {
        $wp_url = env('WP_URL');
        $wp_options = new WordpressOption;
        $siteurl = $wp_options->where('option_name', 'siteurl')->first();
        $home = $wp_options->where('option_name', 'home')->first();

        if ($wp_url) {
            if ($siteurl->option_value != $wp_url) {
                WordpressOption::where('option_id', $siteurl->option_id)->update(['option_value' => $wp_url]);
            }

            if ($home->option_value != $wp_url) {
                WordpressOption::where('option_id', $home->option_id)->update(['option_value' => $wp_url]);
            }
        }
    }
}
