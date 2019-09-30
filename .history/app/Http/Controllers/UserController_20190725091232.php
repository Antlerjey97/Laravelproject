<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
use App\tintuc;
class UserController extends Controller
{
    //Thể loại

    public function danhsach(){$user=user::all();
     return view('admin.user.danhsach',['user'=>$user]);}
    public function getthem(){return view('admin.user.them');}
    // public function sua(){return view('admin.theloai.sua'); }

    public function postthem(Request $request){
        $this->validate($request,['ten'=>'required|min:3|max:100'],
        ["ten.required"=>"Bạn chưa nhập tên thể loại",
        'ten.min'=>'Tên thể loại có độ dài từ 3 đến 100 kí tự',
        'ten.max'=>'Tên thể loại có 3 đến 100 ký tự']);
        $user=new user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        
        return redirect('admin/user/them')->with('thongbao','Thêm Thành công');
    }
    public function getsua($id){
        $user= user::find($id);
        return view('admin/user/sua',['user'=>$user]);
        
    }
    public function postsua(Request $request,$id){
        $user= user::find($id);

        $this->validate($request,[
            'Ten'=>'required|unique:user,Ten|min:3|max:100'
        ]
        ,['Ten.required'=>'Bạn chưa nhập tên thể loại' ,
            'Ten.unique'=>'Tên thể loại đã tồn tại',
            'Ten.min'=>'Tên phải có độ dài 3 đến 100 kí tự',
            'Ten.max'=>'Tên phải có độ dài từ 3 đến 100 kí tự'
        ]);
       


        $user=user::find($id);
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password=bcrypt($request->password);
         $user->quyen=$request->quyen;
         $user->save();
         return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa Thể loại Thành công');
    }

    public function getxoa($id){
        DB::table('comment')->where('idUser', '=', $id)->delete();
        $user=user::find($id);
        $user->delete();
       
        return redirect('admin/user/danhsach')->with('thongbao','Xóa  User thành công');
    }
}