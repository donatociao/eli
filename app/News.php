<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {
    protected $fillable = ['title','body','slug'];

    public function news_images() {
        return $this->hasMany('App\NewsImage');
    }
}
