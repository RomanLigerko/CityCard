<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::truncate();
        $tickets = [
            [
                'name' => 'Проїзд у автобусі',
                'price' => 6,

            ],
            [
                'name' => 'Проїзд у тролейбусі',
                'price' => 3,

            ]
        ];
        foreach ($tickets as $ticket) {
            Ticket::create($ticket);
        }
    }
}
