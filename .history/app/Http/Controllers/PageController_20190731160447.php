<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;

class PageController extends Controller
{
    //

    function trangchu(){
        $theloai=theloai::all();
        return view('pages.trangchu',['theloai'=>$theloai]);
    }
    function lienhe(){
        $theloai=theloai::all();
        return view('pages.lienhe',['theloai'=>$theloai]);
    }
}
