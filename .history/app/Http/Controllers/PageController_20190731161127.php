<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;

class PageController extends Controller
{
    //
        function __construct(){
                $theloai=theloai::all();
                view()->share('theloai',$theloai);
        }
    function trangchu(){
        $theloai=theloai::all();
        return view('pages.trangchu');
    }
    function lienhe(){
        $theloai=theloai::all();
        return view('pages.lienhe',['theloai'=>$theloai]);
    }
}
