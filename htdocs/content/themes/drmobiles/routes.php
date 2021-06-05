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
        return view('pages.contact');
    }
]);
