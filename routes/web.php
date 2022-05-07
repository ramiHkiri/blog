<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

//home page
Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);
});
// route to selected post
Route::get('posts/{post}', function ($slug) {

    return view('post', [
        'post' => Post::findOrFail($slug),
    ]);
});
