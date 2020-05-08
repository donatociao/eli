<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stato extends Model
{
    protected $fillable = ['name'];

    public function immobile() {
      return $this->hasMany('App\Immobile');
    }
}
