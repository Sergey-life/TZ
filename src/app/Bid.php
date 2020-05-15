<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $guarded = [];

    public function events()
    {
        return $this->belongsTo('App\Event');
    }
}
