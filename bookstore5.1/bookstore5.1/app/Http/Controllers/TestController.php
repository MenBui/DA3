<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Books;
use App\User;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo "store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        echo "destroy";
    }
    public function test(){
        // lấy dữ liệu từ bảng Books
        $book = Books::where('name','Búp sen xanh')->get()->first();
        return $book;
    }
    public function xinchao(){
        echo "Xin chào Laravel";
    }
    public function KhoaHoc($ten){
        echo "Khóa học: ".$ten;
        return redirect()->route('men');
    }
    public function GetURL(Request $request){
        //return $request->url();
        // if ($request->isMethod('post')) {
        //     echo "Đây là phương thức Post";
        // }else{
        //     echo "Đây không phải phương thức Post";
        // }
        if ($request->is('My*')) {
            echo "Có My";
        } else {
            echo "Không có My";
        }

    }
    public function postForm(Request $request){
        echo "Tên của bạn là: ";
        echo $request->input('HoTen');
        // if ($request->has('Tuoi')) {
        //     echo "Có tham số";
        // } else {
        //     echo "Không có tham số";
        // }
        
    }
    public function setCookie(){
        $response = new Response();
        $response->withCookie('KhoaHoc','Laravel - MenBui',1);
        echo "Đã setCookie";
        return $response;
    }
    public function getCookie(Request $request){
        echo "Cookie của bạn là: ";
        return $request->cookie('KhoaHoc');                                        

    }
    public function postFile(Request $request){
        if ($request->hasFile('myFile')) {
            $file = $request->file('myFile');
            if ($file->getClientOriginalExtension('myFile')=="JPG") {
                
                $filename = $file->getClientOriginalName('myFile');
                $file->move('img',$filename);
                echo "Đã lưu file: ".$filename;
            } else {
                echo "Không được phép upload File";
            }
            
            
        } else {
            echo "Chưa có File";
        }
        
    }
    public function getJson(){
        $array = ['KhoaHoc'=>'Laravel - MenBui'];
        return response()->json($array);
    }
    public function myView(){
        return view('view.menbui');
    }
    public function Time($t){
        return view('myView',['time'=>$t]);
    }
    public function blade($str){
        $khoaHoc="Laravel - Mến Bùi";
        if ($str=="laravel") {
            return view('pages.laravel',['khoaHoc'=>$khoaHoc]);
        } elseif ($str=="php") {
            return view('pages.php',['khoaHoc'=>$khoaHoc]);
        }
    }
    public function foo(){
         $user = User::where('name','Nguyễn Văn A')->get();
        return view('myView',['user'=>$user]);
    }
   
}