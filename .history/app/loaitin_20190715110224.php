<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    //
    protected $table="loaitin";
    public function theloai(){
        return $this->belongsto('App\loaitin',)
    }
}
