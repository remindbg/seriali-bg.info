<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'home');







Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

/*
 * admin routes
 */
Route::get('/admin', function () {
    return view('layouts.adminapp');
});
Route::resources([
    '/admin/series' => 'admin\SeriesController',
    '/admin/stelevision' => 'admin\StelevisionController'

]);
