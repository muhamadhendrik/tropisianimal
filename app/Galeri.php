<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = ['gambar'];


    public function getTakeImageAttribute(){
        return "/storage/" . $this->gambar;
    }
}
