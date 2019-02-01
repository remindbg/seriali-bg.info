<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stelevision extends Model
{
    protected $table = 'stelevisions';
    public function series() {
        return $this->hasMany('App\Series');
    }
}
