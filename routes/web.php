<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here we can register our web routes for our app and you can too for the same reason. They
| get loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
