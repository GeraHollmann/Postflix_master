<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      //SEEDERS(modificadores de DB)

      // DESCOMENTAR EL ADMIN PRIMERO PARA GENERARLO EN EL ID 1
       $this->call(SeederCrearAdmin::class);
       $this->call(SeederCategoriasPost::class);


       //AGREGAR DATOS CON FACTORIES(crear datos en DB fakes) DESCOMENTAR LOS 4
        factory(App\User::class,2)->create();
        factory(App\Post::class,2)->create();



    }
}
