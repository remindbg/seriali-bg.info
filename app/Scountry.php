<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scountry extends Model
{
    public function series() {
        return $this->hasMany('App\Series','scountry_id');
    }
}
