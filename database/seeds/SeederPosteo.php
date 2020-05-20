<?php

use Illuminate\Database\Seeder;

class SeederPosteo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'title_post' => 'Kil Bill 2' ,
        'title_movie' => 'Kill Bill 2',
        'image' => 'https://lorempixel.com/150/140/?91240',
        'description' => 'pelicula genial y entretenida para niños',
        'rating' => 8,
        'users_id' => 7,
        'post_categories_id' => 2,
      ]);
    }
}
