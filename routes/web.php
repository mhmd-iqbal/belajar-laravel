<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

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
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});

// Category::create([
//     'name' => 'Personal',
//     'slug' => 'personal',
// ]);

// Post::create([
//     'title' => 'Judul Pertama',
//     'category_id' => '1',
//     'slug' => 'judul-pertama',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, alias nesciunt aspernatur nihil laboriosam doloribus praesentium! Unde consequatur voluptates consectetur nesciunt quos sed omnis atque, amet voluptatibus dicta eius culpa accusamus suscipit accusantium labore? Quas, commodi. Dolorem rerum consectetur dolor! Veritatis unde nam, saepe labore pariatur ullam facere nulla dolores?',
// ]);

// Post::create([
//     'title' => 'Judul Kedua',
//     'category_id' => '2',
//     'slug' => 'judul-kedua',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, alias nesciunt aspernatur nihil laboriosam doloribus praesentium! Unde consequatur voluptates consectetur nesciunt quos sed omnis atque, amet voluptatibus dicta eius culpa accusamus suscipit accusantium labore? Quas, commodi. Dolorem rerum consectetur dolor! Veritatis unde nam, saepe labore pariatur ullam facere nulla dolores?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, alias nesciunt aspernatur nihil laboriosam doloribus praesentium! Unde consequatur voluptates consectetur nesciunt quos sed omnis atque, amet voluptatibus dicta eius culpa accusamus suscipit accusantium labore? Quas, commodi.</p>',
// ]);

// Post::create([
//     'title' => 'Judul Ketiga',
//     'category_id' => 3,
//     'slug' => 'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae',
//     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, alias nesciunt aspernatur nihil laboriosam doloribus praesentium! Unde consequatur voluptates consectetur nesciunt quos sed omnis atque, amet voluptatibus dicta eius culpa accusamus suscipit accusantium labore? Quas, commodi. Dolorem rerum consectetur dolor! Veritatis unde nam, saepe labore pariatur ullam facere nulla dolores?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, alias nesciunt aspernatur nihil laboriosam doloribus praesentium! Unde consequatur voluptates consectetur nesciunt quos sed omnis atque, amet voluptatibus dicta eius culpa accusamus suscipit accusantium labore? Quas, commodi.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, alias nesciunt aspernatur nihil laboriosam doloribus praesentium! Unde consequatur voluptates consectetur nesciunt quos sed omnis atque, amet voluptatibus dicta eius culpa accusamus suscipit accusantium labore? Quas, commodi.</p>',
// ]);