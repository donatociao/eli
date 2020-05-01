<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
  protected $fillable = [
    'ristrutturato',
    'riscaldamento',
    'balconi',
    'terrazzo',
    'posto_auto'
  ];
}
