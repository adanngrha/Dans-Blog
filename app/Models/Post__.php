<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
        [
            "title" => "Web Programming",
            "slug" => "web-programming",
            "author" => "Ardana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, mollitia sapiente. Facilis at exercitationem, provident aliquid soluta sapiente aut repellendus, omnis earum accusamus similique quidem perspiciatis laboriosam in eos laudantium commodi laborum dolore nobis! Adipisci ipsam optio suscipit dignissimos necessitatibus, illum quae alias eligendi quam deleniti maiores voluptatem, expedita nemo distinctio amet eos aliquam ratione? Eum quasi asperiores officia, voluptatem vitae, beatae atque aperiam ab illo harum praesentium vero, accusantium quisquam nesciunt quae deleniti ullam molestias perspiciatis sint sequi tempore.",
        ],
        [
            "title" => "Object Oriented Programming",
            "slug" => "object-oriented-programming",
            "author" => "Adan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. At error dolorem ullam enim neque architecto corporis atque ad voluptates repudiandae, debitis eius ab aperiam mollitia rem, hic odit totam nostrum libero illo quas sequi earum fugit unde! Earum assumenda impedit est molestiae doloremque quas reprehenderit qui natus repellat ullam tempore amet debitis quam optio aliquid, voluptatum eligendi? Veritatis nesciunt dolore ut cumque sint exercitationem, dicta molestias eum dolorum, ab culpa amet esse quia sequi eligendi facilis illo, minus autem! Porro iusto ea est repudiandae delectus aut! Ducimus quibusdam quod soluta officia, itaque amet totam doloribus temporibus officiis obcaecati, enim quas.",
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
