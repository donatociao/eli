<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immobile extends Model
{
    protected $fillable = [
      'title',
      'description',
      'price',
      'address',
      'slug',
      'city_id',
      'category_id',
      'stato_id',
      'feature_id',
      'detail_id'
    ];

    /**
    * Chiam la Città assocciata all'immobile.
    */
    public function city() {
      return $this->hasOne('App\City');
    }

    /**
    * Chiama lo Stato assocciato all'immobile.
    */
    public function stato() {
      return $this->hasOne('App\Stato');
    }

    /**
    * Chiama la Categoria assocciata all'immobile.
    */
    public function category() {
      return $this->hasOne('App\Category');
    }

    /**
    * Chiama le Caratteristiche assocciate all'immobile.
    */
    public function feature() {
      return $this->hasOne('App\Feature');
    }

    /**
    * Chiama i Dettagli assocciati all'immobile.
    */
    public function detail() {
      return $this->hasOne('App\Detail');
    }

    /**
    * Chiama le Immagini assocciate all'immobile.
    */
    public function images() {
      return $this->hasMany('App\ImmobileImage');
    }

}
