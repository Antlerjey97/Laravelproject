<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\user;
use Validator;
use App\tintuc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //Thể loại

    public function danhsach(){$user=user::all();
     return view('admin.user.danhsach',['user'=>$user]);}
    public function getthem(){return view('admin/user/them');}
    // public function sua(){return view('admin.theloai.sua'); }

    public function postthem(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:100',
            'password'=>'Required|min:3|max:100',
            'email'=>'Required|min:3|max:100'             ],
        ["name.required"=>"Bạn chưa nhập tên ",
        'name.min'=>'Tên  có độ dài từ 3 đến 100 kí tự',
        'name.max'=>'Tên  có 3 đến 100 ký tự',
        "password.required"=>"Bạn chưa nhập password ",
        'password.min'=>'Passwordcó độ dài từ 3 đến 100 kí tự',
        'password.max'=>'Password có 3 đến 100 ký tự',
        "email.required"=>"Bạn chưa nhập Email ",
        'email.min'=>'Email có độ dài từ 3 đến 100 kí tự',
        'email.max'=>'Email có 3 đến 100 ký tự']);

        $User=new user();
        $User->name=$request->name;
        $User->email=$request->email;
        $User->quyen=$request->rdoStatus;
        $User->password=bcrypt($request->password);
        $User->save();

       
     return redirect('admin/user/them')->with('thongbao','Bạn đã đăng ký user thành công');
    }
    public function getsua($id){
        $user= user::find($id);
        return view('admin/user/sua',['user'=>$user]);
        
    }
    public function postsua(Request $request,$id){
        // $user= user::find($id);

  

        $this->validate($request,[
            'name'=>'required|unique:user,name|min:3|max:100',
            'password'=>'Required|min:3|max:100',
            'email'=>'Required|min:3|max:100'             ],
        ["name.required"=>"Bạn chưa nhập tên ",
        'name.unique'=>'Tên  đã tồn tại',
        'name.min'=>'Tên  có độ dài từ 3 đến 100 kí tự',
        'name.max'=>'Tên  có 3 đến 100 ký tự',
        "password.required"=>"Bạn chưa nhập password ",
        'password.min'=>'Passwordcó độ dài từ 3 đến 100 kí tự',
        'password.max'=>'Password có 3 đến 100 ký tự',
        "email.required"=>"Bạn chưa nhập Email ",
        'email.min'=>'Email có độ dài từ 3 đến 100 kí tự',
        'email.max'=>'Email có 3 đến 100 ký tự']);
       


        $user=User::find($id);
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password=bcrypt($request->password);
         $user->quyen=$request->quyen;
         $user->save();
         return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa user Thành công');
    }

    public function getxoa($id){
        DB::table('comment')->where('idUser', '=', $id)->delete();
        $user=user::find($id);
        $user->delete();
       
        return redirect('admin/user/danhsach')->with('thongbao','Xóa  User thành công');
    }

    public function getdangnhapuser(){
        return view('admin/login');
    }
    public function postdangnhapuser(Request $request){
        $this->validate($request,[
                    'email'=>'required',
                    'password'=>'required|min:3|max:32'
        ],['email.required'=>'Bạn Chưa nhập email',
            'password.required'=>'Bạn chưa nhập Password',
            'password.min'=>'Password phải lớn hơn 3 kí tự ',
            'password.max'=>'Password Phải nhỏ hơn 32 kí tự'
        ]);

      $email=  $request['email'];
      $password= $request['password'];

        $tintuc=tintuc::all();
        $theloai=theloai::all();
        if(Auth::attempt(['email'=>$email,'password'=>$password]))
                return view('admin/tintuc/danhsach',['tintuc'=>$tintuc]);

        else return view('admin/theloai/danhsach',['theloai'=>$theloai]);
    }
}