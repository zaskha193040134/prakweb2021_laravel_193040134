<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama", 
            "author" => "Zaskha Sasmita",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente rerum consequuntur error eos iste, qui expedita ratione quod numquam recusandae culpa itaque laborum. Animi culpa provident sed magni odio blanditiis amet placeat quasi, voluptate, nobis rem rerum, expedita officia delectus voluptatem accusantium quam ipsa quaerat qui exercitationem esse eaque ipsam ea. Amet tempora praesentium, doloremque a voluptatibus quam quidem molestias eaque nobis similique minima placeat alias optio rerum consequuntur repudiandae impedit est eveniet quis voluptates ipsum officia id! Quod, id."
        ] ,
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Mang Agus",
            "body" => "Lorem ipsum dolor sit, ametsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adip consectetur adipisicing elit. Sapiente rerum consequuntur error eos iste, qui expedita ratione quod numquam recusandae culpa itaque laborum. Animi culpa provident sed magni odio blanditiis amet placeat quasi, voluptate, nobis rem rerum, expedita officia delectus voluptatem accusantium quam ipsa quaerat qui exercitationem esse eaque ipsam ea. Amet tempora praesentium, doloremque a voluptatibus quam quidem molestias eaque nobis similique minima placeat alias optio rerum consequuntur repudiandae impedit est eveniet quis voluptates ipsum officia id! Quod, id."
        ]
        ];

        public static function all() {
            return collect(self::$blog_posts);
        }
        
        public static function find($slug) {
            $posts = static::all();

            return $posts->firstWhere('slug', $slug);
        }
    }