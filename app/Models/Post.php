<?php

namespace App\Models;

class Post
{
    public static function find($id) {
            $get_posts = json_decode(file_get_contents(__DIR__ . "\posts.json"));
            $posts = cache()->remember("post.{id}", 1200, fn() => $get_posts, true);
            $post_key = array_search(+$id, array_map(fn($post) => $post["id"], $posts));
            if($post_key === false) return abort(404);
            return $posts[$post_key];
    }

    public static function findAll()
    {
        return cache()->rememberForever("posts.all", fn() => json_decode(file_get_contents(__DIR__ . "\posts.json"), true));
    }

}
