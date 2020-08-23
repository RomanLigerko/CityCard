<?php

namespace App\Http\Controllers;

use App\BalanceHistory;
use App\Card;
use App\JourneyHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            $balanceRecords = BalanceHistory::where('user_id', auth()->user()->id)->paginate(5);
            $journeyRecords = JourneyHistory::where('user_id', auth()->user()->id)->paginate(5);
            $cards = auth()->user()->card;
        }
        return view('home', ['cards' => $cards, 'balanceRecords' => $balanceRecords, 'journeyRecords'=> $journeyRecords]);
    }
}
