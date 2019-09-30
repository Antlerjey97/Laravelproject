<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
use App\tintuc;
use App\loaitin;
class LoaitinController extends Controller
{
    //Thể loại

    public function danhsach(){
        $loaitin=loaitin::all();
        $theloai=theloai::all();
     return view('admin.loaitin.danhsach',['loaitin'=>$loaitin,'theloai'=>$theloai]);}
    public function getthem(){
        $theloai=theloai::all();  
        $loaitin=loaitin::all();  
        return view('admin.loaitin.them',['theloai'=>$theloai,'loaitin'=>$loaitin]);
    }
    // public function sua(){return view('admin.theloai.sua'); }

    public function postthem(Request $request){
        $this->validate($request,['ten'=>'required|min:3|max:100'],
        ["ten.required"=>"Bạn chưa nhập tên thể loại",
        'ten.min'=>'Tên thể loại có độ dài từ 3 đến 100 kí tự',
        'ten.max'=>'Tên thể loại có 3 đến 100 ký tự']);

        
        $loaitin=new loaitin;
        
        $loaitin->Ten=$request->ten;
        $loaitin->TenKhongDau=$request->tenkhongdau;
        $loaitin->Ten=$request->loaitin;
        $loaitin->save();
        return view('admin/Loaitin/them')->with('thongbao','Thêm Thành công');
    }
    public function getsua($id){
        $loaitin= loaitin::find($id);
        return view('admin/loaitin/sua',['loaitin'=>$loaitin]);
        
    }
    public function postsua(Request $request,$id){
        $loaitin= loaitin::find($id);

        $this->validate($request,[
            'Ten'=>'required|unique:Theloai,Ten|min:3|max:100'
        ]
        ,['Ten.required'=>'Bạn chưa nhập tên thể loại' ,
            'Ten.unique'=>'Tên thể loại đã tồn tại',
            'Ten.min'=>'Tên phải có độ dài 3 đến 100 kí tự',
            'Ten.max'=>'Tên phải có độ dài từ 3 đến 100 kí tự'
        ]);
        $loaitin->Ten=$request->Ten;
        $loaitin->save();
        return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Sửa Loại tin  Thành công');
    }

    public function getxoa($id){
        $loaitin=loaitin::find($id);
    
        $loaitin->delete();
        return redirect('admin/loaitin/danhsach/')->with('thongbao','Xóa Loại tin thành công');
    }
}