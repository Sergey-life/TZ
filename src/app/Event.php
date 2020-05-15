<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function bids()
    {
        return $this->hasMany('App\Bid', 'id_event');
    }
}
