<?php

namespace App\Models;


class Post 
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Nurhalilis Saputri Enal",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, voluptatem, suscipit dolorum dolore voluptate atque eveniet laboriosam, 
        molestias neque commodi debitis maiores? Ea corrupti eum, quam minima laudantium vitae voluptas minus, reiciendis autem fugit voluptates! 
        Odio asperiores hic accusantium consequatur repellendus magni impedit at, aut beatae. Vitae itaque iusto magni harum tempora possimus aliquam 
        doloribus facilis ut. Tempora quae quisquam alias atque sequi pariatur hic,maxime animi voluptatum id fuga eligendi sed reprehenderit asperiores
         adipisci voluptatibus iure quod dolor itaque!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Moch. Revansah Apriandi ",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus in cum eius doloremque debitisveritatis blanditiis
        deserunt iure dolores dolorum sint ullam eum, labore officia, nam eaque quidem quod dolore repellat repudiandae tempore!
         Eveniet, aut? Exercitationem aspernatur suscipit officia, cum numquam obcaecati quo aut eius repudiandae labore, 
         vitae dolorum sunt minima libero quod sit quasi sequi! Veniam quasivelit nesciunt fugiat ipsam ducimus,
          amet maxime qui incidunt sed cumque quos et saepe, dicta id quaerat! Et ad reprehenderit,  iure culpa quaerat
       officia alias quidem harum ipsa ipsum rem maiores aperiam quo quis illo nam similique earum corrupti aut sapiente adipisci."
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
