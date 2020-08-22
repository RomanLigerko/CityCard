<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['name', 'price'];
    public function transport()
    {
        return $this->hasMany('App\Transport');
    }
}
