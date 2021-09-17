<?php

use Illuminate\Support\Facades\Route;

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

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('informacion', function () {
    return view('informacion');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('futbol', function () {
    return view('futbol');
});

Route::get('nadar', function () {
    return view('nadar');
});

Route::get('tenis', function () {
    return view('tenis');
});

Route::get('box', function () {
    return view('box');
});