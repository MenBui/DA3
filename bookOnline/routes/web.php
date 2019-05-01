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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',['as'=>'index','uses'=>'AdminController@index']);


Route::get('indexUser',['as'=>'indexUser','uses'=>'UserController@index']);
Route::get('categories',['as'=>'categories','uses'=>'UserController@categories']);


Route::get('signin',['as'=>'signin','uses'=>'Auth\LoginController@signin']);
Route::get('logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);
Route::post('postLogin',['as'=>'postLogin','uses'=>'Auth\LoginController@postLogin']);

Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@login']);

Route::group(['prefix'=>'auth','middleware'=>'auth'],function(){
	Route::get('index',['as'=>'authIndex','uses'=>'AdminController@index']);

	Route::get('listUsers',['as'=>'listUsers','uses'=>'AdminController@listUsers']);
	Route::get('listAuthor',['as'=>'listAuthor','uses'=>'AdminController@listAuthor']);
	Route::get('listProduct',['as'=>'listProduct','uses'=>'AdminController@listProduct']);
	Route::get('listCategory',['as'=>'listCategory','uses'=>'AdminController@listCategory']);
	Route::get('listUrlBook',['as'=>'listUrlBook','uses'=>'AdminController@listUrlBook']);
	Route::get('listUrlCategory',['as'=>'listUrlCategory','uses'=>'AdminController@listUrlCategory']);
	Route::get('listOrder',['as'=>'listOrder','uses'=>'AdminController@listOrder']);
	Route::get('listNxb',['as'=>'listNxb','uses'=>'AdminController@listNxb']);


	Route::get('add-user',['as'=>'add-user','uses'=>'AdminController@addUser']);
	Route::get('add-author',['as'=>'add-author','uses'=>'AdminController@addAuthor']);
	Route::get('add-product',['as'=>'add-product','uses'=>'AdminController@addProduct']);
	Route::get('add-nxb',['as'=>'add-nxb','uses'=>'AdminController@addNxb']);
	Route::get('add-category',['as'=>'add-category','uses'=>'AdminController@addCategory']);
	Route::get('add-url-category',['as'=>'add-url-category','uses'=>'AdminController@addUrlCategory']);
	Route::get('add-url-book',['as'=>'add-url-book','uses'=>'AdminController@addUrlBook']);



	Route::get('editCategory/{id}/{parent_id}',['as'=>'editCategory','uses'=>'AdminController@editCategory']);
	Route::get('editUser/{id}',['as'=>'editUser','uses'=>'AdminController@editUser']);
	Route::get('editNxb/{id}',['as'=>'editNxb','uses'=>'AdminController@editNxb']);
	Route::get('editAuthor/{id}',['as'=>'editAuthor','uses'=>'AdminController@editAuthor']);


	
	Route::post('post-add-user',['as'=>'postAddUser','uses'=>'AdminController@postAddUser']);
	Route::post('post-add-author',['as'=>'postAddAuthor','uses'=>'AdminController@postAddAuthor']);
	Route::post('post-add-product',['as'=>'postAddProduct','uses'=>'AdminController@postAddProduct']);
	Route::post('post-add-nxb',['as'=>'postAddNxb','uses'=>'AdminController@postAddNxb']);
	Route::post('post-add-category',['as'=>'postAddCategory','uses'=>'AdminController@postAddCategory']);
	Route::post('post-add-url-category',['as'=>'postAddUrlCategory','uses'=>'AdminController@postAddUrlCategory']);
	Route::post('post-add-url-book',['as'=>'postAddUrlBook','uses'=>'AdminController@postAddUrlBook']);



	Route::post('postEditCategory/{id}',['as'=>'postEditCategory','uses'=>'AdminController@postEditCategory']);
	Route::post('postEditUser/{id}',['as'=>'postEditUser','uses'=>'AdminController@postEditUser']);
	Route::post('postEditNxb/{id}',['as'=>'postEditNxb','uses'=>'AdminController@postEditNxb']);
	Route::post('postEditAuthor/{id}',['as'=>'postEditAuthor','uses'=>'AdminController@postEditAuthor']);


    

   	Route::get('deleteAuthor/{id}',['as'=>'deleteAuthor','uses'=>'AdminController@deleteAuthor']);
});
