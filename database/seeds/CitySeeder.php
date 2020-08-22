<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();
        $cities = [
            [
                'name' => 'Київ',

            ],
            [
                'name' => 'Львів',

            ],
            [
                'name' => 'Одеса',

            ],
            [
                'name' => 'Луцьк',

            ]
        ];
        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
