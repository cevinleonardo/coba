<?php

namespace App\Models;

class post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Cevin Ganteng",
            "body" => "Ini Cerita si Cevin Ganteng.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Cevin Hebat",
            "body" => "Ini Cerita si Cevin Hebat.",
        ],
    ];

    public static function all(){
        return collect (self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        // pengganti foreach vvvvv

        return $posts-> firstWhere('slug', $slug);
    }
}
