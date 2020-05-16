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
      DB::table('Post_categories')->insert([
        'category_name' => 'Acción',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Comedia',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Drama',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Suspenso',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Crimen',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Romance',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Aventura',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Terror',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Musicales',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Ciencia ficción',

      ]);
      DB::table('Post_categories')->insert([
        'category_name' => 'Guerra',

      ]);

    }
}
