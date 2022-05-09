<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

//home page
Route::get('/', function () {

    return view('posts', [
        'posts' => Post::with('category')->get()
    ]);
});
// route to selected post
Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category){

    return view('posts', [
        'posts' => $category->posts
        ]);
});