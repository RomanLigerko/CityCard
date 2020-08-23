<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\TransportRequest;
use App\Ticket;
use App\Transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $tickets = Ticket::all();
        return view('admin.transports.form', ['cities' => $cities, 'tickets' => $tickets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransportRequest $request)
    {
        $params = $request->all();
        Transport::create($params);
        return redirect()->route('admin.dashboard.transports');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transport $transport)
    {
        $cities = City::all();
        $tickets = Ticket::all();
        return view('admin.transports.form', ['transport' => $transport, 'cities' => $cities, 'tickets' => $tickets]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransportRequest $request, Transport $transport)
    {
        $params = $request->all();
        $transport->update($params);

        return redirect()->route('admin.dashboard.transports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        $transport->delete();
        return redirect()->route('admin.dashboard.transports');
    }
}
