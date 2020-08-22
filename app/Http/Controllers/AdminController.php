<?php

namespace App\Http\Controllers;

use App\City;
use App\Ticket;
use App\Transport;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.index', ['cities'=> $cities]);
    }

    public function transports()
    {
        $transports = Transport::all();
        return view('admin.transports.index', ['transports'=> $transports]);
    }

    public function tickets()
    {
        $tickets = Ticket::all();
        return view('admin.tickets.index',  ['tickets'=> $tickets]);
    }
}
