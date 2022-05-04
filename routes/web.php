<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

//home page
Route::get('/', function () {
    $posts = collect(File::files(resource_path("posts")))
        ->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->slug,
                $document->excerpt,
                $document->date,
                $document->body()
            );

        });

    return view('posts', [
        'posts' => $posts,
    ]);
});
// route to selected post
Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug),
    ]);
})->where('post', '[A-z_\-]+'); //wildcard constraints
