<?php

use App\Transport;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transport::truncate();
        $transports = [
            [
                'name' => 'Богдан',
                'ticket_id' => 1,
                'city_id' => 4

            ],
            [
                'name' => 'NEOPLAN',
                'ticket_id' => 1,
                'city_id' => 4

            ],
            [
                'name' => 'ЗАЗ',
                'ticket_id' => 1,
                'city_id' => 4

            ]
        ];
        foreach ($transports as $transport) {
            Transport::create($transport);
        }
    }
}
