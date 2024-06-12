<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'nama' => 'Admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('123'), // Password untuk admin 123
                'role_id' => '1'
            ],
            [
                'nama' => 'Jelita Senja',
                'email' => 'jelita@gmail.com',
                'password' => bcrypt('123'), // Password untuk user 123
                'role_id' => '2'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
