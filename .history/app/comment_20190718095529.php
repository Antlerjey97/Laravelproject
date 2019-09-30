<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $table="comment";

  public function tintuc(){
      return $this->belongsto('App\tintuc','loaitin','id');
  }
  public function user(){
      return $this->hasmany('App\User','idUser','id');
  }
}
