<?php

namespace Theme\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Themosis\Core\ThemeManager;
use Themosis\Support\Facades\Asset;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Theme Assets
     *
     * Here we define the loaded assets from our previously defined
     * "dist" directory. Assets sources are located under the root "assets"
     * directory and are then compiled, thanks to Laravel Mix, to the "dist"
     * folder.
     *
     * @see https://laravel-mix.com/
     */
    public function register()
    {
        /** @var ThemeManager $theme */
        $theme = $this->app->make('wp.theme');

//        Asset::add('theme_styles', 'css/theme.css', [], $theme->getHeader('version'))->to('front');
//        Asset::add('theme_woo', 'css/woocommerce.css', ['theme_styles'], $theme->getHeader('version'))->to('front');
//        Asset::add('theme_js', 'js/theme.min.js', [], $theme->getHeader('version'))->to('front');

        Asset::add('app-style', 'css/app.css', [], $theme->getHeader('version'))->to('front');
        Asset::add('app-script', 'js/app.js', [], $theme->getHeader('version'))->to('front');

        View::composer(['layouts.header', 'layouts.footer'], function ($view) {
            $logo = get_theme_mod( 'custom_logo' );
            $logo_image = wp_get_attachment_image_src( $logo , 'full' );
            $logo_image_url = $logo_image[0];
            $logo_image_width = $logo_image[1];
            $logo_image_height = $logo_image[2];

            $menus = wp_get_nav_menu_items(get_nav_menu_locations()['menu-1']);

            global $wp;
            $current_url = home_url(add_query_arg(array(), $wp->request)) . '/';

            $view->with(compact('menus', 'current_url', 'logo_image_url'));
        });
    }
}
