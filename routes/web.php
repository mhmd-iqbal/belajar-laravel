<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

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

Route::get('/posts', [PostController::class, 'index']);

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Category',
        'categories' => Category::all()
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => 'Category',
        'posts' => $category->posts->load('category', 'user'),
        'category_name' => $category->name,
    ]);
});

Route::get('authors', function (User $authors) {
    return view('authors', [
        'title' => 'Authors',
        'authors' => $authors->all(),
    ]);
});

Route::get('/authors/{user:username}/posts', function (User $user) {
    return view('posts', [
        'title' => 'User Posts',
        'posts' => $user->posts->load('category', 'user'),
    ]);
});

Route::get('/auth/login', [AuthController::class, 'login_page'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/auth/register', [AuthController::class, 'register_page']);
Route::post('/auth/register', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
