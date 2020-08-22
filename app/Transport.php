<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['name', 'city_id', 'ticket_id'];
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }
}
