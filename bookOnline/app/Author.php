<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    public function editAuthor($request,$id){
    	$authors = Author::where('id',$id)->get()->first();
        $authors->name = $request->name;
        $authors->save();
       
    }

    public function deleteAuthor($id){
    	$author = Author::where('id',$id)->get()->first();
    	$author->delete();
    }
}
