<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post_v1
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

        return collect(File::files(resource_path("posts/"))) // find all the files in the directory.
            ->map(fn($file) => YamlFrontMatter::parseFile($file))// map over collection of files and return each files as a document.
            // map over each document and return the post with their components. works like a linked for loop
            ->map(fn($document) => new Post_v1(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            ));
        }
    public static function find($slug){
        if (!file_exists($path = resource_path("posts/{$slug}.html"))){
          throw new ModelNotFoundException();
         }
        return cache()->remember("posts.{$slug}", 12, fn() => file_get_contents($path));

    }
}
