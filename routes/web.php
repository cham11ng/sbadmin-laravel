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

Route::get('/', function () {
    return view('admin.home');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/login', function () {
    return view('admin.auth.login');
});

Route::get('/charts', function () {
    return View::make('admin.charts');
});

Route::get('/tables', function () {
    return View::make('admin.table');
});

Route::get('/forms', function () {
    return View::make('admin.form');
});

Route::get('/grid', function () {
    return View::make('admin.grid');
});

Route::get('/buttons', function () {
    return View::make('admin.buttons');
});

Route::get('/icons', function () {
    return View::make('admin.icons');
});

Route::get('/panels', function () {
    return View::make('admin.panel');
});

Route::get('/typography', function () {
    return View::make('admin.typography');
});

Route::get('/notifications', function () {
    return View::make('admin.notifications');
});

Route::get('/blank', function () {
    return View::make('admin.blank');
});

Route::get('/documentation', function () {
    return View::make('admin.documentation');
});

Route::get('/stats', function() {
   return View::make('admin.stats');
});

Route::get('/progressbars', function() {
    return View::make('admin.progressbars');
});

Route::get('/collapse', function() {
    return View::make('admin.collapse');
});
