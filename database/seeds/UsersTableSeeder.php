<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {

        factory(App\User::class)->create([
            'username' => 'ralph',
            'firstname' => 'Ralph John',
            'lastname' => 'Galindo',
            'email' => 'ralphjesy@gmail.com',
            'password' => bcrypt('ralph123$$'),
        ]);

        factory(App\User::class, 9)->create();

    }
}
