<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
                'name' => "Jilcimar",
                'email' => "teste@teste.com",
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
