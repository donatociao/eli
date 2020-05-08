<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

  protected $fillable = ['item_id', 'filepath'];

  /**
  * Chiama Immobile associato all'immagine.
  */
  public function immobile() {
    return $this->belongsTo('App\Immobile');
  }



}
