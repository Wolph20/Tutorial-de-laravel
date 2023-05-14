<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post_v2
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all(){
        return cache()->rememberForever('posts.all', function (){
            return collect(File::files(resource_path("posts/"))) // find all the files in the directory.
            ->map(fn($file) => YamlFrontMatter::parseFile($file))// map over collection of files and return each files as a document.
            // map over each document and return the post with their components. works like a linked for loop
            ->map(fn($document) => new Post_v2(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ))->sortByDesc('date');
        });
        }

    public static function find($slug){
        return static::all()->firstWhere('slug', $slug);
    }

    public static function findorFail($slug){
        $post = static::find($slug);

        if (!$post) throw new ModelNotFoundException();
        return $post;
    }
}
