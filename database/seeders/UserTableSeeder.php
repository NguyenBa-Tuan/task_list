<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('1111111'),
                'role' => 0,
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => bcrypt('1111111'),
                'role' => 1,
            ]
        );
    }
}
