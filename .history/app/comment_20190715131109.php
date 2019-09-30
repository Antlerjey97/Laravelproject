<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    protected $table="comment";

  public function tintuc(){
      return $this->hasmany('App\tintuc','loaitin','id');
  }
  public function user(){
      return $this->belongsto('App\User','idUser','id')
  }
}
