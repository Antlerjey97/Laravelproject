<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
class MyController extends Controller
{
    //

    public function danhsach(){

        $theloai=theloai::all();
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }
    public function them(){
        return view('admin.theloai.them');
    }
    public function sua(){
        return view('admin.theloai.them');
    }

}
