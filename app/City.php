<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name'];
    public function transport()
    {
        return $this->hasMany('App\Transport');
    }
}
