<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theloai;
use App\LoaiTin;
class AjaxController extends Controller
{

    public function getloaitin($idtheloai){
        $loaitin=loaitin::where('idtheloai',$idtheloai)->get();
        foreach ($loaitin as $key) {
           echo " <option value="{{}}"></option>";
        }
    }
    //
}
