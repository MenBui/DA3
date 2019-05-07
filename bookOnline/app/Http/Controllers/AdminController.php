<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Author;
use App\Book;
use App\Category;
use App\Url_Book;
use App\Url_Category;
use App\Order;
use App\Nxb;
use App\Http\Requests\addUserRequest;
use App\Http\Requests\addAuthorRequest;
use App\Http\Requests\addProductRequest;
use App\Http\Requests\addNxbRequest;
use App\Http\Requests\addCategoryRequest;
use App\Http\Requests\editCategoryRequest;
use App\Http\Requests\editUserRequest;
use App\Http\Requests\editNxbRequest;
use App\Http\Requests\editAuthorRequest;
use App\Http\Requests\editProductRequest;
use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function create()
    {
        //
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
    }
    public function addProduct(){
        $authors = Author::select()->get();
        $nxbs = Nxb::select()->get();
        $categorys = Category::select()->get();
        return view('admin.add-product',['authors'=>$authors,'nxbs'=>$nxbs,'categorys'=>$categorys]);
    }
    public function addUser(){
        $users =  User::select()->get();
        return view('admin.add-user',['users'=>$users]);
    }
    public function addAuthor(){

        return view('admin.add-author');
    }
    public function addNxb(){
        $nxb = Nxb::select()->get();
        return view('admin.add-nxb',['nxb'=>$nxb]);
    }
    public function addCategory(){
        $categorys = Category::select()->get();
        return view('admin.add-category',['categorys'=>$categorys]);
    }


   
   
    public function listUsers(){
        $users = User::select()->get();
        return view('admin.list-user',['users'=>$users]);
    }
    public function listAuthor(){
        $authors = Author::select()->get();
        return view('admin.list-author',['authors'=>$authors]);
    }
    public function listProduct(){
        $books = Book::select()->get();
        return view('admin.list-product',['books'=>$books]);
    }
    public function listCategory(){
        $categorys = Category::select()->get();
        return view('admin.list-category',['categorys'=>$categorys]);
    }
    public function listUrlBook(){
        $url_books = Url_Book::select()->get();
        return view('admin.list-url-book',['url_books'=>$url_books]);
    }
    public function listUrlCategory(){
        $url_categorys = Url_Category::select()->get();
        return view('admin.list-url-category',['url_categorys'=>$url_categorys]);
    }
    public function listOrder(){
        $orders = Order::select()->get();
        return view('admin.list-order',['orders'=>$orders]);
    }
    public function listNxb(){
        $nxb = Nxb::select()->get();
        return view('admin.list-nxb',['nxb'=>$nxb]);
    }



    public function postAddUser(addUserRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->phone = $request->phone;
        $user->cmnd = $request->cmnd;
        $user->date = $request->date;
        $user->address = $request->address;
        $user->sex = $request->sex;
        $user->role = $request->role;
        $user->save();
        return redirect('auth/listUsers')->with(['flash_level'=>'success','flash_message'=>'Thêm User thành công']);
    }
    public function postAddAuthor(addAuthorRequest $request){
        $authors = new Author;
        $authors->name = $request->name;
        $authors->save();
        return redirect('auth/listAuthor')->with(['flash_level'=>'success','flash_message'=>'Thêm tác giả thành công']);
    }
    public function postAddProduct(addProductRequest $request){
        $books = new Book;
        $books->addProduct($request);
        return redirect('auth/listProduct')->with(['flash_level'=>'success','flash_message'=>'Thêm sách thành công']);
    
    }
    public function postAddNxb(addNxbRequest $request){
        $nxb = new Nxb;
        $nxb->name = $request->name;
        $nxb->save();
        return redirect('auth/listNxb')->with(['flash_level'=>'success','flash_message'=>'Thêm nhà xuất bản thành công']);
    }
    public function postAddCategory(addCategoryRequest $request){
        $url_category = new Url_Category;
        $url_category->url = $request->url;
        $url_category->title = $request->title;
        $url_category->keyword_seo=$request->keyword_seo;
        $url_category->description_seo=$request->description_seo;
        $url_category->image_seo=$request->image_seo;
        $url_category->save();
        $categorys = new Category;
        $categorys->name = $request->name;
        $categorys->parents_id = $request->parents_id;
        $categorys->url_id = $url_category->id;
        $categorys->save();
        if($categorys->parents_id ==0){
            $categorys->parents_id =$categorys->id;
            $categorys->save();
        }
        return redirect('auth/listCategory')->with(['flash_level'=>'success','flash_message'=>'Thêm danh mục thành công']);
    }


    public function postEditCategory(editCategoryRequest $request,$id){
        $cate =new Category;
        $cate->editCategory($request,$id);
        return redirect('auth/listCategory')->with(['flash_level'=>'success','flash_message'=>'Sửa danh mục thành công']);
    }
    public function editCategory($id,$parents_id){
        $category = Category::where('id',$id)->get()->first();
        $categorys = Category::select()->get();
        $url_category= Url_Category::where('id',$category->url_id)->get()->first();
        $parent = Category::where('id',$parents_id)->get()->first();
        return View('admin.edit-category',['category'=>$category,'categorys'=>$categorys,'parent'=>$parent,'url_category'=>$url_category]);
    }


    public function postEditUser(editUserRequest $request,$id){
        $us = new User;
        $us->editUser($request,$id);
        return redirect('auth/listUsers')->with(['flash_level'=>'success','flash_message'=>'Sửa User thành công']);
    }
    public function editUser($id){
        $us = User::where('id',$id)->get()->first();
        $user = User::select()->get();
        return View('admin.edit-user',['us'=>$us,'user'=>$user]);
    }


    public function postEditNxb(editNxbRequest $request,$id){
        $nxb = new Nxb;
        $nxb->editNxb($request,$id);
        return redirect('auth/listNxb')->with(['flash_level'=>'success','flash_message'=>'Sửa nhà xuất bản thành công']);
    }
    public function editNxb($id){
        $nxb = Nxb::where('id',$id)->get()->first();
        $nxbs = Nxb::select()->get();
        return View('admin.edit-nxb',['nxb'=>$nxb,'nxbs'=>$nxbs]);
    }


    public function postEditAuthor(editAuthorRequest $request,$id){
        $author = new Author;
        $author->editAuthor($request,$id);
        return redirect('auth/listAuthor')->with(['flash_level'=>'success','flash_message'=>'Sửa tác giả thành công']);
    }
    public function editAuthor($id){
        $author = Author::where('id',$id)->get()->first();
        $authors = Author::select()->get();
        return View('admin.edit-author',['author'=>$author,'authors'=>$authors]);
    }


    public function postEditProduct(editProductRequest $request,$id){
        $book = new Book;
        $book->editProduct($request,$id);
        return redirect('auth/listProduct')->with(['flash_level'=>'success','flash_message'=>'Sửa thông tin sách thành công']);
    }
    public function editProduct($id){
       
        $book = Book::where('id',$id)->get()->first();
        $books = Book::select()->get();
        $url_book = Url_Book::where('id',$book->url_books_id)->get()->first();
        $author = Author::where('id',$book->author_id)->get()->first();
        $authors = Author::select()->get();
        $nxb = Nxb::where('id',$book->nxb_id)->get()->first();
        $nxbs = Nxb::select()->get();
        $cate = Category::where('id',$book->category_id)->get()->first();
        $categorys = Category::select()->get();
        return View('admin.edit-product',['book'=>$book,'books'=>$books,'url_book'=>$url_book,'author'=>$author,'authors'=>$authors,'nxb'=>$nxb,'nxbs'=>$nxbs,'cate'=>$cate, 'categorys'=>$categorys]);

    }




    public function deleteAuthor($id){
        $author = new Author;
        $author->deleteAuthor($id);
        return redirect('auth/listAuthor')->with(['flash_level'=>'success','flash_message'=>'Xóa tác giả thành công']);
    }
    public function deleteNxb($id){
        $nxb = new Nxb;
        $nxb->deleteNxb($id);
        return redirect('auth/listNxb')->with(['flash_level'=>'success','flash_message'=>'Xóa nhà xuất bản thành công']);
    }
    public function deleteUser($id){
        $us = new User;
        $us->deleteUser($id);
        return redirect('auth/listUsers')->with(['flash_level'=>'success','flash_message'=>'Xóa User thành công']);
    }
    public function deleteCategory($id){
        $category = new Category;
        $category->deleteCategory($id);
        return redirect('auth/listCategory')->with(['flash_level'=>'success','flash_message'=>'Xóa danh mục thành công']);
    }

    public function deleteProduct($id){
        $book = new Book;
        $book->deleteProduct($id);
        return redirect('auth/listProduct')->with(['flash_level'=>'success','flash_message'=>'Xóa sách thành công']);
    }




}
