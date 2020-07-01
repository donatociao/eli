<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Immobile;

class ImageController extends Controller {
    public function removeImage($id) {
        $img_object = Image::find($id);
        $img_path = storage_path() .  '/app/public/' . $img_object->filepath;
        Image::destroy($id);
        unlink($img_path);
    }

    public function removeImageFromImmobile($immobile_id) {
        $immobile_obj = Immobile::find($immobile_id);
        if(strpos($immobile_obj->img_preview, 'default') > 0)
            return false;
        $path =  storage_path() . '/app/public/' . $immobile_obj->img_preview;
        $immobile_obj->img_preview = 'public/preview/default.png'; // Setting default img.
        unlink($path);
    }

    public function updatePreviewImg($immobile_id) {
      

    }

}
