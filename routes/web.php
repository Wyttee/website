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
    $team = \App\User::query()->take(3)->get();
    $posts = \App\Post::query()->take(2)->get();
    $projects = \App\Project::query()->take(3)->get();
    $vacancies = \App\Vacancy::query()->take(2)->get();
    $technologies = \App\Technology::query()->take(3)->get();

    return view('main', [
        'team' => $team,
        'posts' => $posts,
        'projects' => $projects,
        'vacancies' => $vacancies,
        'technologies' => $technologies
    ]);
});
