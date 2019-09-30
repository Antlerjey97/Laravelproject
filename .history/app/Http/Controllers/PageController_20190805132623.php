<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\slide;
use App\loaitin;
use App\tintuc;
use App\user;
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
               
                view()->share('theloai',$theloai);
                view()->share('slide',$slide);
                 view()->share('loaitin',$loaitin);
                 view()->share('tintuc',$tintuc);
                 
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

            $comment=new comment();
            $comment->idTinTuc=$idtintuc;


            $comment->Noidung=$request->comment;
            $comment->save();
        }
        public function dangxuat(){
            Auth::logout();
            return view('pages/dangnhap');
        }
        public function getdangky(){
            return view('pages/dangky');
            
        }
        public function postdangky(Request $request){
            $user=new user();
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=bcrypt($request['password']);
            $user->save();

            return redirect('dangky')->with('thongbao','Đăng Ký Thành công');
            
        }
}
