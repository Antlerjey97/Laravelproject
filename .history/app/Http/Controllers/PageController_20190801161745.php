<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\slide;
use App\Loaitin;
use App\tintuc;

class PageController extends Controller
{
    //
        function __construct(){
                $theloai=theloai::all();
                $slide=slide::all();
                $loaitin=loaitin::all();
                $tintuc=tintuc::all();
                view()->share('tintuc',$tintuc);
                view()->share('theloai',$theloai);
                view()->share('slide',$slide);
                view()->share('loaitin',$loaitin);
        }
    function trangchu(){
        $theloai=theloai::all();
        return view('pages.trangchu');
    }
    function lienhe(){
        $theloai=theloai::all();
        return view('pages.lienhe');
    }
        function loaitin($id){
            $loaitin=loaitin::find($id);
            $tintuc=tintuc::where('idLoaiTin',$id)->paginate(5);
            $tintuc=tintuc::paginate(5);

            return view('pages.loaitin',['loaitin'=>$loaitin,'tintuc'=>$tintuc]);
        }
}
