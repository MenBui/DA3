<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';

    public function editCategory($request, $id){
    	
    	$cate = Category::where('id',$id)->get()->first();
    	$url_cate = Url_Category::where('id',$cate->url_id)->get()->first();
    	$cate->name = $request->name;
    	$cate->parents_id = $request->parents_id;
    	$cate->url_id= $url_cate->id;
    	$cate->save();
    	$url_cate->url = $request->url;
        $url_cate->title = $request->title;
        $url_cate->keyword_seo=$request->keyword_seo;
        $url_cate->description_seo=$request->description_seo;
        $url_cate->image_seo=$request->image_seo;
        $url_cate->save();

    }
     public function deleteCategory($id){
        $category = Category::where('id',$id)->get()->first();
        $category->delete();
    }
}

