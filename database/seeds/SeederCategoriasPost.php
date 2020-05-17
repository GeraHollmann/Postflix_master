<?php

use Illuminate\Database\Seeder;

class SeederCategoriasPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('post_categories')->insert([
        'category_name' => 'Acción',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Comedia',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Drama',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Suspenso',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Crimen',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Romance',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Aventura',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Terror',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Musicales',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Ciencia ficción',

      ]);
      DB::table('post_categories')->insert([
        'category_name' => 'Guerra',

      ]);

    }
}
