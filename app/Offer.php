<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {
    protected $fillable = [
        'immobile_id'
    ];

    public function immobile() {
        return $this->belongsTo('App\Immobile');
    }

}
