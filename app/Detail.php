<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
      'mq',
      'vani',
      'wc',
      'box',
      'ape'
    ];

    public function immobile() {
        return $this->hasOne('App\Immobile');
    }
}
