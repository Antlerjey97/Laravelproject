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
        return $this->hasmany('App\comment','idtintuc','id');
    }
}
