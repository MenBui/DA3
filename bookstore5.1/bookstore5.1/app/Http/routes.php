<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('men', function (){
	echo "Laravel";
});
Route::get('themSach', function(){
	$sach = new App\Books();
	$sach->name = "sách 1" ;
	$sach->price = 1000;
	$sach->save();
	echo "Đã thêm sách";
});

Route::get('HoTen/{ten}',function($ten){
	echo "Tên của bạn là: ".$ten;
});
Route::get('Route1',['as'=>'men',function(){
	echo "Hello Laravel";
}]);
Route::get('Route2',function(){
	echo "Đây là Laravel";
})->name('men1');

Route::group(['prefix'=>'myGroup'],function(){
	Route::get('User1',function(){
		echo "User1";
	});
	Route::get('User2',function(){
		echo "User2";
	});
});

Route::get('GoiTen',function(){
	return redirect()->route('men');
});

Route::get('/books',['as'=>'books','uses'=>'TestController@test']);

Route::get('GoiController','TestController@xinchao');

Route::get('KhoaHoc/Laravel',function(){
	echo "<h1>Khóa học - Laravel</h1>";
});

Route::get('ThamSo/{ten}','TestController@KhoaHoc');

Route::get('MyRequest','TestController@GetURL');

Route::get('getForm',function(){
	return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'TestController@postForm']);

Route::get('setCookie','TestController@setCookie');

Route::get('getCookie','TestController@getCookie');

Route::get('uploadFile',function(){
	return view('postFile');
});

Route::post('postFile',['as'=>'postFile','uses'=>'TestController@postFile']);

Route::get('getJson','TestController@getJson');

Route::get('myView','TestController@myView');

Route::get('Time/{t}','TestController@Time');

View::share('KhoaHoc','Laravel');

Route::get('blade',function(){
	return view('pages.php');
});

Route::get('BladeTemplate/{str}','TestController@blade');

Route::get('query/selec-all',function(){
	$data = DB::table('books')->get();
	echo "<pre>";
	print_r($data);
	echo "</pre>";
});

Route::resource('Books','ControllerBooks');

Route::get('laydulieu','TestController@test');

Route::get('layuser','TestController@foo');

