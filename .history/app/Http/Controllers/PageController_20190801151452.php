<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\slide;

class PageController extends Controller
{
    //
        function __construct(){
                $theloai=theloai::all();
                $slide=slide::all();
                view()->share('theloai',$theloai);
                view()->share('slide',$slide);
        }
    function trangchu(){
        $theloai=theloai::all();
        return view('pages.trangchu');
    }
    function lienhe(){
        $theloai=theloai::all();
        return view('pages.lienhe');
    }
        function loaitin(){
            return view('pages.lienhe');
        }
}
