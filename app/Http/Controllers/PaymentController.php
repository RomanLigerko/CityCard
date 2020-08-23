<?php

namespace App\Http\Controllers;

use App\Card;
use App\JourneyHistory;
use App\Transport;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $bodyContent = $request->all();
        $card_id = $bodyContent['card_id'];
        $transport_id = $bodyContent['transport_id'];

        $transport = Transport::findOrFail($transport_id);
        $card = Card::findOrFail($card_id);

        if ($card) {
            $card->balance -= $transport->ticket->price;
            $card->save();
        }

        $record = new JourneyHistory();
        $record->user_id = $card->user->id;
        $record->card_number = $card->number;
        $record->transport_name = $transport->name;
        $record->price = $transport->ticket->price;
        $record->city_name = $transport->city->name;

        if ($record->save()) {
            return response()->json($record, 200);
        } else {
            return response()->json([
                'message' => 'Щось пішло не так. Спробуйте знову',
                'status_code' => 500
            ], 500);
        }
    }
}
