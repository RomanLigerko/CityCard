<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $users = [
            [
                'name' => 'Іван',
                'email' => 'ivan@gmail.com',
                'password' => bcrypt('password')

            ],
            [
                'name' => 'Петро',
                'email' => 'petro@gmail.com',
                'password' => bcrypt('password')

            ],
            [
                'name' => 'Василь',
                'email' => 'vasia@gmail.com',
                'password' => bcrypt('password')

            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
