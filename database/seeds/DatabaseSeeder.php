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
        $this->call(SeederCrearAdmin::class);
       //$this->call(SeederCrearUsuario::class);
       //$this->call(SeederEliminarUsuario::class);
       //$this->call(SeederModificarUsuario::class);

       //FACTORIES(crear datos en DB fakes)

<<<<<<< HEAD
       // factory(App\User::class, 5)->create();
       // factory(App\Post_category::class, 5)->create();
       // factory(App\Post::class, 5)->create();
       // factory(App\Contact::class, 5)->create();
=======
       //factory(App\User::class, 5)->create();
       //factory(App\Post_category::class, 5)->create();
       //factory(App\Post::class, 5)->create();
       //factory(App\Contact::class, 5)->create();
>>>>>>> 892f5c07943373e20403f25a1cda47cd01deda91

    }
}
