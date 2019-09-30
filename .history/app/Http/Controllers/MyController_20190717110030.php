<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
class MyController extends Controller
{
    //

    public function danhsachtheloai(){

        $theloai=theloai::all();
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
       
    }
    public function themtheloai(){
        return view('admin.theloai.them');
    }
    public function suatheloai(){
        return view('admin.theloai.sua');
    }

    public function danhsachuser(){

        $user=User::all();
        return view('admin.user.danhsach',['user'=>$user]);
       
    }

}
