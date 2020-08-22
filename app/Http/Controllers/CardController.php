<?php

namespace App\Http\Controllers;

use App\BalanceHistory;
use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function rechargeBalance(Request $request, $card_id)
    {

        $bodyContent = $request->all();
        $sum = $bodyContent['sum'];

        $card = Card::findOrFail($card_id);
        if ($card){
            $card->balance += $sum;
            $card->save();
        }

        $record = new BalanceHistory();
        $record->sum = $sum;
        $record->user_id = $card->user->id;
        $record->card_number = $card->number;

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
