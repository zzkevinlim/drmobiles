<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

use Themosis\Support\Facades\Asset;
use Themosis\Support\Facades\Route;

$theme = app()->make('wp.theme');

Route::get('/', function () use ($theme) {
    return view('pages.home');
});


Route::get('page', [
    'services',
    function () use ($theme) {

        return view('pages.services');
    }
]);

Route::get('page', [
    'contact',
    function () use ($theme) {
        $contact = Asset::add('contact-script', 'js/contact.js', [], $theme->getHeader('version'))->to('front');
        $contact->localize('contact_script_data', [
            'wp_ajax'                     => admin_url('admin-ajax.php'),
            'wp_nonce'                    => wp_create_nonce('wp-nonce'),
            'google_maps_api_key'         => get_field('google_recaptcha_site_key', 'option'),
            'google_maps_latitude'        => get_field('google_maps_latitude', 'option'),
            'google_maps_longitude'       => get_field('google_maps_longitude', 'option'),
            'google_recaptcha_site_key'   => get_field('google_recaptcha_site_key', 'option'),
            'google_recaptcha_secret_key' => get_field('google_recaptcha_secret_key', 'option'),
            'contact_title'               => get_field('contact_title', 'option'),
            'contact_label_1'             => get_field('contact_label_1', 'option'),
            'contact_label_2'             => get_field('contact_label_2', 'option'),
            'contact_label_3'             => get_field('contact_label_3', 'option'),
            'contact_label_4'             => get_field('contact_label_4', 'option'),
            'contact_label_5'             => get_field('contact_label_5', 'option'),
            'contact_error_1'             => get_field('contact_error_1', 'option'),
            'contact_error_2'             => get_field('contact_error_2', 'option'),
            'contact_error_3'             => get_field('contact_error_3', 'option'),
            'contact_error_4'             => get_field('contact_error_4', 'option'),
        ]);

        return view('pages.contact');
    }
]);
