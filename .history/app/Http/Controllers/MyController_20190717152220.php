<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
use App\tintuc;
class MyController extends Controller
{
    //Thể loại

    public function danhsachtheloai(){$theloai=theloai::all();
     return view('admin.theloai.danhsach',['theloai'=>$theloai]);}
    public function themtheloai(){return view('admin.theloai.them');}
    public function suatheloai(){return view('admin.theloai.sua'); }

    public function postthemtheloai(Request $request){
        $this->validate($request,['ten'=>'required|min:3|max:100'],
        ["ten.required"=>"Bạn chưa nhập tên thể loại",
        'ten.min'=>'Tên thể loại có độ dài từ 3 đến 100 kí tự',
        'ten.max'=>'Tên thể loại có 3 đến 100 ký tự']);
        $theloai=new theloai();
        $theloai->Ten=$request->ten;
        $theloai->TenKhongDau=$request->tenkhongdau;
        $theloai->save();
        return redirect('admin/theloai/them')->with('thongbao','Thêm Thành công');
    }
//User
    public function danhsachuser(){$user=User::all();
    return view('admin.user.danhsach',['user'=>$user]);  }
    public function themuser(){ return view('admin.user.them');}
    public function suauser(){ return view('admin.user.sua');}

    public function postthemuser(Request $request){
        $User=new user();
        $User->name=$request->name;
        $User->email=$request->email;
        $User->quyen=$request->rdoStatus;
        $User->password=$request->password;
     $User->save();
     return redirect('admin/user/them')->with('thanhcong','Bạn đã đăng ký user thành công');    }
//Tin Tức
    public function danhsachtintuc(){$tintuc=tintuc::all();
        return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);  }
        public function themtintuc(){ return view('admin.tintuc.them');}
        public function suatintuc(){ return view('admin.tintuc.sua');}
    

}
