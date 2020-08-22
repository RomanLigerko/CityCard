<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        $admins = [
            [
                'name' => 'Василь',
                'email' => 'admin@gmail.com',
                'job_title' => 'administrator',
                'password' => bcrypt('password')

            ]
        ];
        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
