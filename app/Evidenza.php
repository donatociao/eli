<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidenza extends Model
{
    protected $fillable = ['immobile_id'];

    public function immobile() {
      return $this->belongsTo('App\Immobile', 'immobile_id' );
    }
}
