<?php

use App\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::truncate();
        $cards = [
            [
                'number' => '1232333',
                'user_id' => 1,
                'balance' => 69
            ],
            [
                'number' => '5187333',
                'user_id' => 1,
                'balance' => 14
            ],
            [
                'number' => '1187344',
                'user_id' => 3,
                'balance' => 150
            ]
        ];
        foreach ($cards as $card) {
            Card::create($card);
        }

    }
}

