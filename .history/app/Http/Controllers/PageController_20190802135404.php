<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\slide;
use App\loaitin;
use App\tintuc;

class PageController extends Controller
{
    //
        function __construct(){
                $theloai=theloai::all();
                $slide=slide::all();
                // $loaitin=loaitin::all();
               
                view()->share('theloai',$theloai);
                view()->share('slide',$slide);
                // view()->share('loaitin',$loaitin);
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
        
            
        public function tintuc($id){
    

            
            $loaitin=loaitin::find($id);

            
            $tintuc=tintuc::where('idLoaiTin',$id)->paginate(5);
            
           
            return view('pages.loaitin}',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
        }

        public function news($id){
            $tintuc=tintuc::find($id);
            $tinnotbat=tintuc::where('NoiBat',1)->take(4)->get();
            $tinlienquan=tintuc::where('idloaitin',$tintuc->idLoaiTin)->take(4)->get();
            return view('pages.tintuc',['tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat,'tinlienquan'=>$tinlienquan]);
            
        }

        public function getdangnhap(){
            return view('pages.dangnhap');
        }
        public function postdangnhap(){
            
        }
}
