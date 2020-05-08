<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function immobile() {
      return $this->hasMany('App\Immobile');
    }

}
