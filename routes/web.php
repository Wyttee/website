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

Route::view('/', 'index');
Route::view('/blog', 'blog', [
    'categories' => \App\Category::all(),
    'posts' => \App\Post::all(),
])->name('posts');
Route::view('/post/{post}', 'post', [
    'categories' => \App\Category::all(),
    'post' => \App\Post::query()->first(),
])->name('post');
Route::view('/career', 'career', [
    'positions' => \App\Position::all(),
    'vacancies' => \App\Vacancy::all(),
]);
Route::view('/vacancy/{vacancy}', 'vacancy', [
    'positions' => \App\Position::all(),
    'vacancy' => \App\Vacancy::query()->first(),
])->name('vacancy');
