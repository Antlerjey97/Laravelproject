<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
use App\tintuc;
class MyController extends Controller
{
    //

    public function danhsachtheloai(){$theloai=theloai::all();
     return view('admin.theloai.danhsach',['theloai'=>$theloai]);}
    public function themtheloai(){return view('admin.theloai.them');}
    public function suatheloai(){return view('admin.theloai.sua'); }

    public function danhsachuser(){$user=User::all();
    return view('admin.user.danhsach',['user'=>$user]);  }
    public function themuser(){ return view('admin.user.them');}
    public function suauser(){ return view('admin.user.sua');}

    public function danhsachtintuc(){$tintuc=tintuc::all();
        return view('admin.user.danhsach',['user'=>$user]);  }
        public function themuser(){ return view('admin.user.them');}
        public function suauser(){ return view('admin.user.sua');}
    

}
