<?php

use Illuminate\Database\Seeder;

class SeederCrearAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'first_name' => 'Admin' ,
        'last_name' => 'Postflix',
        'email' => 'adminpostflix@gmail.com',
        'nickname' => 'adminpostflix',
        'password' => '1234',
        'role' => 'admin'
      ]);
    }
}
