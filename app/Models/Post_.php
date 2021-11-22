<?php

namespace App\Models;

class post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Lintang Bima",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet possimus quis vel, velit voluptate voluptatibus voluptatum error, voluptas, exercitationem voluptatem quae ex maxime nostrum? Aliquid ipsam at consequatur earum iure sunt, ducimus, ut natus harum quasi cum libero maiores tempora quaerat placeat laborum veniam commodi minus officiis rem similique dolores repudiandae reiciendis. Excepturi, architecto! Autem tenetur eius nemo itaque esse ut molestiae sequi laudantium sint culpa quas doloribus nesciunt laborum voluptatibus dolore eaque, odio officia? Nemo dolor cum ipsa consequatur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lintang Bima2",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet possimus quis vel, velit voluptate voluptatibus voluptatum error, voluptas, exercitationem voluptatem quae ex maxime nostrum? Aliquid ipsam at consequatur earum iure sunt, ducimus, ut natus harum quasi cum libero maiores tempora quaerat placeat laborum veniam commodi minus officiis rem similique dolores repudiandae reiciendis. Excepturi, architecto! Autem tenetur eius nemo itaque esse ut molestiae sequi laudantium sint culpa quas doloribus nesciunt laborum voluptatibus dolore eaque, odio officia? Nemo dolor cum ipsa consequatur."
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
