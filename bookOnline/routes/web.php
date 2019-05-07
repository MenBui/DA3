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


Route::get('index',['as'=>'index','uses'=>'UserController@index']);
Route::get('categories',['as'=>'categories','uses'=>'UserController@categories']);
Route::get('book',['as'=>'newbook','uses'=>'UserController@book']);


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
	Route::get('listOrder',['as'=>'listOrder','uses'=>'AdminController@listOrder']);
	Route::get('listNxb',['as'=>'listNxb','uses'=>'AdminController@listNxb']);


	Route::get('add-user',['as'=>'add-user','uses'=>'AdminController@addUser']);
	Route::get('add-author',['as'=>'add-author','uses'=>'AdminController@addAuthor']);
	Route::get('add-product',['as'=>'add-product','uses'=>'AdminController@addProduct']);
	Route::get('add-nxb',['as'=>'add-nxb','uses'=>'AdminController@addNxb']);
	Route::get('add-category',['as'=>'add-category','uses'=>'AdminController@addCategory']);




	
	Route::post('post-add-user',['as'=>'postAddUser','uses'=>'AdminController@postAddUser']);
	Route::post('post-add-author',['as'=>'postAddAuthor','uses'=>'AdminController@postAddAuthor']);
	Route::post('post-add-product',['as'=>'postAddProduct','uses'=>'AdminController@postAddProduct']);
	Route::post('post-add-nxb',['as'=>'postAddNxb','uses'=>'AdminController@postAddNxb']);
	Route::post('post-add-category',['as'=>'postAddCategory','uses'=>'AdminController@postAddCategory']);



	Route::get('editCategory/{id}/{parent_id}',['as'=>'editCategory','uses'=>'AdminController@editCategory']);
	Route::get('editUser/{id}',['as'=>'editUser','uses'=>'AdminController@editUser']);
	Route::get('editNxb/{id}',['as'=>'editNxb','uses'=>'AdminController@editNxb']);
	Route::get('editAuthor/{id}',['as'=>'editAuthor','uses'=>'AdminController@editAuthor']);
	Route::get('editProduct/{id}',['as'=>'editProduct','uses'=>'AdminController@editProduct']);



	Route::post('postEditCategory/{id}',['as'=>'postEditCategory','uses'=>'AdminController@postEditCategory']);
	Route::post('postEditUser/{id}',['as'=>'postEditUser','uses'=>'AdminController@postEditUser']);
	Route::post('postEditNxb/{id}',['as'=>'postEditNxb','uses'=>'AdminController@postEditNxb']);
	Route::post('postEditAuthor/{id}',['as'=>'postEditAuthor','uses'=>'AdminController@postEditAuthor']);
	Route::post('postEditProduct/{id}',['as'=>'postEditProduct','uses'=>'AdminController@postEditProduct']);


    

   	Route::get('deleteAuthor/{id}',['as'=>'deleteAuthor','uses'=>'AdminController@deleteAuthor']);
   	Route::get('deleteNxb/{id}',['as'=>'deleteNxb','uses'=>'AdminController@deleteNxb']);
   	Route::get('deleteUser/{id}',['as'=>'deleteUser','uses'=>'AdminController@deleteUser']);
   	Route::get('deleteCategory/{id}',['as'=>'deleteCategory','uses'=>'AdminController@deleteCategory']);
   	Route::get('deleteProduct/{id}',['as'=>'deleteProduct','uses'=>'AdminController@deleteProduct']);
});
