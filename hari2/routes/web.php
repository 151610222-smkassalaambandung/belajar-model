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
    return view('welcome');
});

Route::get('/produk', function () {
	$a = App\produk::all();
	$w = App\pengguna::all();
	$c = App\pengaturan::all();
    return $a .'<br><br>' .$w .'<br><br>'. $c;
});

Route::get('/pengguna', function () {
	$b = App\pengguna::all();
    return $b;
});

Route::get('/pengaturan', function () {
	$c = App\pengaturan::all();
    return $c;
});
