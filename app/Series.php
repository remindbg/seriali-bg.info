<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $guarded = [];



    public function tv() {
        return $this->belongsTo('App\Stelevision','stelevision_id');
    }
    public function country() {
        return $this->belongsTo('App\Scountry','scountry_id');
    }
    public function cat() {
        return $this->belongsTo('App\Scategory','scategory_id');
    }
}
