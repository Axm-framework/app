<?php

use Axm\Http\Router as Route;

use Axm\Validation\Validator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

Route::get('/', fn () => view('pages.welcome'));

Route::get('/home', [App\Controllers\SiteController::class, 'index']);
