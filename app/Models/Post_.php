<?php

namespace App\Models;


class Post_
{
    private static $blog_post =
    [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem minus est culpa dolores ad exercitationem maxime reprehenderit aliquid. Deleniti ea eius vitae perspiciatis voluptatem dolorem ad distinctio laboriosam excepturi libero quo consequatur tenetur quia culpa nisi, cum eaque quam ut. Autem commodi possimus quod dolorem repellendus eum molestias dicta libero pariatur, repudiandae omnis minima porro magnam cumque reprehenderit, dolorum nemo amet eveniet assumenda labore sapiente dignissimos harum. Molestias voluptas sapiente optio, nemo explicabo ut fuga dignissimos alias minima error beatae tenetur ea, praesentium maiores iure nam! Delectus aspernatur, quia nam enim eaque magnam consequatur repudiandae voluptatem doloremque odit nulla ad!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem minus est culpa dolores ad exercitationem maxime reprehenderit aliquid. Deleniti ea eius vitae perspiciatis voluptatem dolorem ad distinctio laboriosam excepturi libero quo consequatur tenetur quia culpa nisi, cum eaque quam ut."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
