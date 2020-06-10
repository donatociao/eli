<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image as Img;

class Image extends Model
{

  protected $fillable = ['immobile_id', 'filepath'];

  /**
  * Chiama Immobile associato all'immagine.
  */
  public function immobile() {
    return $this->belongsTo('App\Immobile', 'immobile_id');
  }

  public static function addWaterMark($img_path, $img_name) {
      $img_name = explode('.', $img_name);

      $img = Img::make($img_path);

      if($img->width() > 800 && $img->height() > 600)
        $img = Image::resizeImage($img);

      $img->insert(public_path('images/watermark.png'), 'top-left', 10, 10);
      $img->save(public_path('/storage/public/immobili_images/'.$img_name[0].'.'.$img_name[1]));
      $img->encode($img_name[1]);

  }

  public static function resizeImage($imgObject) {
      $imgObject->fit(800, 600);

      return $imgObject;
  }

}
