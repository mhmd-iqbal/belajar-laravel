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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'Muhammad Iqbal',
        'email' => 'mhmd.iqbal1599@gmail.com',
        'github' => 'https://github.com/mhmd-iqbal',
        'gambar' => 'iqbal.jpg',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
});
