<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    //
    protected $table ="theloai";

    public function loaitin(){
        return $this->hasOne('App\loaitin','idtheloai','id');
    }
    public function tintuc(){
       return $this->hasManyThrough('App\tintuc','App\theloai','idtheloai','id','idloaitin'); 
    }

}
