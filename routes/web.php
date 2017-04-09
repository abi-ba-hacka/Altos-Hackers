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
    return view('page-home');
});

Route::get('/enciclopedia', function () {
    return view('page-enciclopedia');
});
Route::get('/tip/{id}', function ($id) {
    return view('page-tip',['tip' => $id]);
});
Route::get('/canjear', function () {
    return view('page-canjear');
});

