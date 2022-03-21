<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => " Halomoan Nababan",
            "body" => "Lorem ipsumsjahdka ahfakfha hkahdka hakhfkahakhk ajkjffh kasjhfskjhskhfsfsf,sf sjhfskfs
            sjfhskfhsfhskfhs fhskfhs fsfs,s kjsfskhf sf
            sjhdksfh sjhf skhsfsfks hkfsh"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dody",
            "body" => "Lorem ipsumsjahdka ahfakfha hkahdka hakhfkahakhk ajkjffh kasjhfskjhskhfsfsf,sf sjhfskfs
            sjfhskfhsfhskfhs fhskfhs fsfs,s kjsfskhf sf
            sjhdksfh sjhf skhsfsfks hkfsh"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        //$post = [];
        //foreach($posts as $p){
        //    if($p["slug"] === $slug){
        //        $post = $p;
        //    }
        //}

        return $posts->firstWhere('slug',$slug);
    }
}
