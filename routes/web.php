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

Route::get('admin', function () {
    return view('admin.home');
});
Route::get('admin/categories', function (){
	return view('admin.categories.show');
});
Route::get('admin/register', function (){
	return view('admin.register');
});
Route::get('admin/login', function (){
	return view('admin.login');
});
