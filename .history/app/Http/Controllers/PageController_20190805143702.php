<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\slide;
use App\loaitin;
use App\tintuc;
use App\User;
use App\comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
        function __construct(){
                $theloai=theloai::all();
                $slide=slide::all();
                 $loaitin=loaitin::all();
                 $tintuc=tintuc::all();
               $user=user::all();
                view()->share('theloai',$theloai);
                view()->share('slide',$slide);
                view()->share('loaitin',$loaitin);
                view()->share('tintuc',$tintuc);
                view()->share('user',$user);  
                 if(Auth::check()){
             view()->share('nguoidung',Auth::user());
                 }
        }
    function trangchu(){
        $theloai=theloai::all();
        return view('pages.trangchu');
    }
    function lienhe(){
        $theloai=theloai::all();
        return view('pages.lienhe');
    }
        public function loaitin(){
            
       
          
            $tintuc=tintuc::paginate(5);

            return view('pages.loaitin',['tintuc'=>$tintuc]);
        }
        
            
       function tintuc($id){
    

            // $tintuc=tintuc::find($id);
            // $tinnotbat=tintuc::where('NoiBat',1)->take(4)->get();
            // $tinlienquan=tintuc::where('idloaitin',$tintuc->idLoaiTin)->take(4)->get();
            // return view('pages.tintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan]);
            $loaitin=loaitin::find($id);

            
            $tintuc=tintuc::where('idLoaiTin',$id)->paginate(5);
            
           
            return view('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
        // }
        }
        public function news($id){
            $tintuc=tintuc::find($id);
            $tinnoibat=tintuc::where('NoiBat',1)->take(4)->get();
            $tinlieuquan=tintuc::where('idloaitin',$tintuc->idLoaiTin)->take(4)->get();
            return view('pages.tintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlieuquan'=>$tinlieuquan]);
             
        }

        public function getdangnhap(){
            return view('pages.dangnhap'); 
        }
        public function postdangnhap(Request $request){
            $tintuc=tintuc::paginate(5);
            $email=$request->email;
            $password=$request->password;

            if(Auth::attempt(['email'=>$email,'password'=>$password]))
            return view('pages.trangchu');

          else return view('pages.dangnhap')->with('thongbao','đăng nhập không thành công');


        }
        public function postcomment($id,Request $request){
            $idtintuc=$id;

            $tintuc=tintuc::find($id);
            $comment=new comment();
            $comment->idTinTuc=$idtintuc;
            $comment->idUser=Auth::User()->id;

            $comment->Noidung=$request->comment;
            $comment->save();
            return redirect("news/$id")->with('thongbao','Viết Bình luận thành công');
        }
        public function dangxuat(){
            Auth::logout();
            return view('pages/dangnhap');
        }
        public function getdangky(){
            return view('pages/dangky');
            
        }
        public function postdangky(Request $request){
            // $this->validate($request,[
            //     'password'=>'required|min:3|max:32',
            //     'passwoordAgain'=>'required|same:password'
            // ],[
            //     'password.required'=>'Bạn chưa Nhập mật Khẩu',
            //     'password.min'=>'Bạn  Nhập mật Khẩu chưa đủ 3 kí tự',
            //     'password.max'=>'Bạn  Nhập mật Khẩu quá 32 kí tự',
            //     'passwordAgain.required'=>'Bạn chưa Nhập lại mật Khẩu',
            //     'passwordAgain.same'=>'Mật khẩu nhập lại chưa chính xác',
            // ]);
            $user=new user();
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=bcrypt($request['password']);
            $user->quyen=$request->rdoStatus;
            $user->save();

            return redirect('dangky')->with('thongbao','Đăng Ký Thành công');
            
        }
        public function getthongtin(){
            $user= User::all();
            return view('pages/thongtin',['user'=>$user]);
            
        }
        public function postthongtin(Request $request){

       
            $user=Auth::user();
            $user->name=$request->name;
            // $user->email=$request->email;
            if($request->changePassword=="on"){
                $this->validate($request,[
                    'password'=>'required|min:3|max:32',
                    'passwordAgain'=>'required|same:password'
                ],[
                    'password.required'=>'Bạn chưa Nhập mật Khẩu',
                    'password.min'=>'Bạn  Nhập mật Khẩu chưa đủ 3 kí tự',
                    'password.max'=>'Bạn  Nhập mật Khẩu quá 32 kí tự',
                    'passwordAgain.required'=>'Bạn chưa Nhập lại mật Khẩu',
                    'passwordAgain.same'=>'Mật khẩu nhập lại chưa chính xác',
                ]);
                $user->password=bcrypt($request->password);
                }
            $user->save();

            return redirect("thongtin")->with('thongbao','Đã Sửa User Thành công ');
            
        }
}
