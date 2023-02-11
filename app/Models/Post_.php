<?php

namespace App\Models;


class Post
{

  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Rony Setiawan",
      "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae doloremque obcaecati natus corrupti ad eaque mollitia sint laudantium error molestias laborum adipisci ullam maiores quibusdam fuga, iusto magni debitis non libero facere recusandae delectus modi tempore? Earum eos aspernatur quibusdam saepe maxime, adipisci voluptatibus veritatis sint accusantium corrupti quos consequuntur accusamus laboriosam suscipit sit? Repellat, sint! Suscipit quod eligendi delectus beatae ab voluptas, hic impedit dolorem mollitia tenetur ullam amet quasi inventore aliquam itaque. Nulla inventore dolores maiores dolorum iste."
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Yudi Satriawan",
      "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati dolore expedita repellendus, rerum neque in nesciunt, accusantium eius voluptas magnam aliquam voluptates ipsam corrupti incidunt accusamus illo asperiores modi laudantium unde, eos qui repellat nostrum ipsum! Exercitationem aspernatur doloremque eligendi quod? Harum fugit aperiam, quas, assumenda at eveniet in mollitia sint deserunt enim dolores a ipsam voluptatibus magni inventore incidunt ex facilis dicta earum iusto quam expedita, porro obcaecati consectetur! Tempore mollitia dolore porro hic deserunt unde expedita, quis excepturi rem nulla, soluta voluptate aut laboriosam eos, autem quo cupiditate nam voluptatem doloribus. Cum rerum earum eius exercitationem ratione modi, voluptatibus optio. Vel ab temporibus ex ad a. Eligendi quod recusandae aut error, culpa assumenda non totam nesciunt tenetur nam?"
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
