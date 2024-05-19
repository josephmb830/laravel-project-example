<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function () {
    // consulta a base de datos
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];

    return view('blog', ['posts' => $posts]);
});

Route::get('blog/{slug}', function ($slug) {
    //consulta a base de datos
    $post = $slug;

    return view('post', ['post' => $post]);
});