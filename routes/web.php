<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/admindashboard', 'App\Http\Controllers\AdminDashController@index');
Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'index')->name('event.get');
    Route::post('/event', 'store')->name('event.store');
});
