<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';
    protected $fillable=['thumbnail_brt','judul_brt','slug','berita'];

    public function getTakeImageAttribute(){
        return "/storage/" . $this->thumbnail_brt;
    }
}

