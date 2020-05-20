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
       //$this->call(SeederCrearUsuario::class);
       //$this->call(SeederEliminarUsuario::class);
       //$this->call(SeederModificarUsuario::class);
       $this->call(SeederCategoriasPost::class);

       //CREO ESTE PARA HACER PRUEBAS CON LOS POSTEOS DE JOSESITO
       //$this->call(SeederPosteo::class);

       //AGREGAR DATOS CON FACTORIES(crear datos en DB fakes) DESCOMENTAR LOS 4
        factory(App\User::class, 5)->create();
        factory(App\Post::class, 5)->create();
        factory(App\Contact::class, 5)->create();



    }
}
