<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\theloai;
use App\loaitin;
use App\tintuc;

Route::get('/', function () {
    return view('welcome');
});

Route::get('thu',function(){
$theloai= theloai::find(1);
echo '<pre>';
var_dump($theloai);
echo '</pre>';

foreach($theloai->loaitin as $dl){
   echo $dl->Ten.'<br>';
    }
});

Route::get('test',function(){
    return view('admin.user.danhsach');
});

Route::get('admin/dangnhap','UserController@getdangnhapuser');
Route::post('admin/dangnhap','UserController@postdangnhapuser');


Route::group(['prefix' => 'admin','middleware'=>'adminlogin'], function () {
    Route::group(['prefix' => 'theloai'], function () {
        Route::get('danhsach','TheloaiController@danhsach');
        Route::get('sua/{id}','TheloaiController@getsua');
        Route::post('sua/{id}','TheloaiController@postsua');
        Route::get('them','TheloaiController@getthem');
        Route::post('them', 'TheloaiController@postthem' );
        Route::get('xoa/{id}','TheloaiController@getxoa');
    });

    Route::group(['prefix' => 'tintuc','middleware'=>'adminlogin'], function () {
        Route::get('danhsach','MyController@danhsachtintuc');
        Route::get('them','MyController@themtintuc');
        Route::get('sua/{id}','MyController@suatintuc');
        Route::post('sua/{id}','MyController@postsuatintuc');
        Route::post('them', 'MyController@postthemtintuc');
        Route::get('xoa/{id}','MyController@getxoatintuc');
    });

    Route::group(['prefix' => 'loaitin','middleware'=>'adminlogin'], function () {
        Route::get('danhsach','LoaitinController@danhsach');
        Route::get('sua/{id}','LoaitinController@getsua');
        Route::post('sua/{id}','LoaitinController@postsua');
        Route::get('them','LoaitinController@getthem');
        Route::post('them', 'LoaitinController@postthem' );
        Route::get('xoa/{id}','LoaitinController@getxoa');
    });

   

    Route::group(['prefix' => 'user'], function () {
        Route::get('danhsach','UserController@danhsach')->name('danhsach');
        Route::get('them','UserController@getthem');
        Route::post('them','UserController@postthem');
        Route::get('sua/{id}','UserController@getsua');
        Route::post('sua/{id}','UserController@postsua');
        Route::get('xoa/{id}','UserController@getxoa');
       
    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('loaitin/{idtheloai}','AjaxController@getloaitin');
    });
});

