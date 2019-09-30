<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
use App\tintuc;
class TheloaiController extends Controller
{
    //Thể loại

    public function danhsach(){$theloai=theloai::all();
     return view('admin.theloai.danhsach',['theloai'=>$theloai]);}
    public function getthem(){return view('admin.theloai.them');}
    // public function sua(){return view('admin.theloai.sua'); }

    public function postthem(Request $request){
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
    public function getsua($id){
        $theloai= theloai::find($id);
        return view('admin/theloai/sua',['theloai'=>$theloai]);
        
    }
    public function postsua(Request $request,$id){
        $theloai= theloai::find($id);

        $this->validate($request,[
            'Ten'=>'required|unique:Theloai,Ten|min:3|max:100'
        ]
        ,['Ten.required'=>'Bạn chưa nhập tên thể loại' ,
            'Ten.unique'=>'Tên thể loại đã tồn tại',
            'Ten.min'=>'Tên phải có độ dài 3 đến 100 kí tự',
            'Ten.max'=>'Tên phải có độ dài từ 3 đến 100 kí tự'
        ]);
        $theloai->Ten=$request->Ten;
        $theloai->save();
        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Sửa Thể loại Thành công');
    }

    public function getxoa($id){
        $theloai=theloai::find($id);
        $theloai->delete();
       
        return redirect('admin/theloai/danhsach')->with('thongbao','Xóa  thể loại thành công');
    }
}