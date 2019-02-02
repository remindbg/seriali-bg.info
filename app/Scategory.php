<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scategory extends Model
{
    public function series() {
        return $this->hasMany('App\Series');
    }
}
