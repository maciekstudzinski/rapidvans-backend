<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

// Route::get('/posts', function () use ($posts) {
//     return view('posts.index', ['posts' => $posts]);
// })->name('posts.index');

// Route::get('/posts/{id}', function ($id) use ($posts) {


//     abort_if(!isset($posts[$id]), 404);

//     return view('posts.show', ['post' => $posts[$id]]);
// })->name('posts.show');

Route::resource('posts', PostsController::class);

// Route::get('/test/responses', function () use ($posts) {
//     return response($posts, 201)->header('Content-Type', 'application/json')->cookie('TEST_COOKIE', 'the cookie', 3600);
// });

Route::get('/test/redirect', function () {
    return redirect('/contact');
});

Route::get('/single', AboutController::class);
