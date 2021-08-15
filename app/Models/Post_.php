<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [

            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Penulis 1",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, adipisci earum nesciunt rerum perferendis odit expedita provident quod officia aut, cum ipsam voluptatum, blanditiis eaque quis debitis rem possimus temporibus labore corporis at. Nobis, nulla. Fuga, veritatis harum? Mollitia necessitatibus quae iusto, laborum doloribus sapiente. Accusantium laudantium suscipit pariatur ex!"
        ],
        [

            "title" => "Judul Post 2 Elang",
            "slug" => "judul-post-2",
            "author" => "Penulis 2",
            "body" => "Adipisci earum nesciunt rerum perferendis odit expedita provident quod officia aut, cum ipsam voluptatum, blanditiis eaque quis debitis rem possimus temporibus labore corporis at. Nobis, nulla. Fuga, veritatis harum? Mollitia necessitatibus quae iusto, laborum doloribus sapiente. Accusantium laudantium suscipit pariatur ex!"
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
