<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    //
    protected $table="loaitin";
        public function theloai(){
            return $this->belongsto('App\theloai','idtheloai','id');
        }

        public function tintuc (){
            return $this->hasOne('App\tintuc','idloaitin','id');
           
        }
}
