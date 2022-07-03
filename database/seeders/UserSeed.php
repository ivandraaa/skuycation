<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                'name'           => 'admin',
                'email'          => 'admin@gmail.com',
                'password'       => bcrypt('123'),
                'remember_token' => null,
            ],
            [
                'name'           => 'Fawwaz Ivandra',
                'email'          => 'ivan@gmail.com',
                'password'       => bcrypt('123'),
                'remember_token' => null,
            ],
            [
                'name'           => 'Maulana Daffa Athaullah Yahya',
                'email'          => 'maul@gmail.com',
                'password'       => bcrypt('123'),
                'remember_token' => null,
            ],
            [
                'name'           => 'Muhammad Kholilullah Hilmy Burhanuddin',
                'email'          => 'hilmy@gmail.com',
                'password'       => bcrypt('123'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
