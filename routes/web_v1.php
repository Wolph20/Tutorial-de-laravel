<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

    $posts = collect(File::files(resource_path("posts/"))) // find all the files in the directory.

        ->map(fn($file) => YamlFrontMatter::parseFile($file))// map over collection of files and return each files as a document.
        // map over each document and return the post with their components. works like a linked for loop
        ->map(fn($document) => new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ));

    /*$posts = array_map( function ($file) {
        $document = YamlFrontMatter::parseFile($file);

        return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }, $files);

    foreach ($files as $file) {
        $document = YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
    }*/

    return view('posts', [
        'posts' => $posts
    ]);

   // return view('posts', [
     //   'posts'=> Post::all()
    //]);
});

Route::get('/posts/{post}', function ($slug) {
    return view('post',[
        'post' => Post::find($slug)
    ]);
})->where('post','[A-z_\-]+');
