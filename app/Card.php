<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Card extends Model
{
    protected $fillable=['number', 'user_id', 'balance'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
