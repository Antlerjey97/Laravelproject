<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    //
    protected $table ="tintuc";
   public function loaitin(){
    return $this->belongsto('App\loaitin','idtheloai','id');
   }
   public function comment(){
        return $this->hasMany('App\comment','idtintuc','id');
   }
   public function theloai(){
       return $this->hasManyThrough('App\theloai','App\tintuc','idtintuc','idtheloai','id');

   }
   

}
