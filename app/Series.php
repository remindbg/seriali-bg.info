<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded = [];



    public function stelevision() {
        return $this->belongsTo('App\Stelevision');
    }
}
