<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Immobile extends Model implements Viewable
{
  use InteractsWithViews;

  protected $fillable = [
      'titolo', 'description', 'price', 'address', 'slug', 'img_preview','stato_id', 'category_id', 'city_id', 'feature_id', 'detail_id', 'video_link', 'visible', 'venduto'
    ];

    /**
    * Chiamo la Città assocciata all'immobile.
    */
    public function city() {
      return $this->belongsTo('App\City', 'city_id');
    }

    /**
    * Chiama lo Stato assocciato all'immobile.
    */
    public function stato() {
      return $this->belongsTo('App\Stato', 'stato_id');
    }

    /**
    * Chiama la Categoria assocciata all'immobile.
    */
    public function category() {
      return $this->belongsTo('App\Category', 'category_id');
    }

    /**
    * Chiama le Caratteristiche assocciate all'immobile.
    */
    public function feature() {
      return $this->belongsTo('App\Feature', 'feature_id');
    }

    /**
    * Chiama i Dettagli assocciati all'immobile.
    */
    public function detail() {
      return $this->belongsTo('App\Detail', 'detail_id');
    }

    /**
    * Chiama le Immagini assocciate all'immobile.
    */
    public function images() {
      return $this->hasMany('App\Image');
    }

    /**
    * Chiama gli immobili in evidenza.
    */
    public function evidenza() {
      return $this->hasOne('App\Evidenza');
    }

    /**
    * Chiama immobile inserito nello slider.
    */
    public function slider() {
      return $this->hasOne('App\Slider');
    }

}
