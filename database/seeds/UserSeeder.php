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
                'phone_number' => '0501984758',
                'password' => bcrypt('password')

            ],
            [
                'name' => 'Петро',
                'phone_number' => '0501985679',
                'password' => bcrypt('password')

            ],
            [
                'name' => 'Василь',
                'phone_number' => '0501784758',
                'password' => bcrypt('password')

            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
