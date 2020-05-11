<?php

use Illuminate\Database\Seeder;

class SeederCrearUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(/*cualquier tabla necesario*/)->insert([
          "ejemplo1" => /*valor a insertar*/,
          "ejemplo2" => /*valor a insertar*/,
          "ejemplo3" => /*valor a insertar*/,
          "ejemplo4" => /*valor a insertar*/
        ])
    }
}
