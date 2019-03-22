<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = 'books';

    public function authors(){
    	return $this->hashMany('App\authors','authors_id','id');
    }
    public function nxb(){
    	return $this->hashMany('App\nxb','nxb_id','id');
    }
    public function categorys(){
    	return $this->hashMany('App\categorys','categorys_id','id');
    }
    public function url_books(){
    	return $this->belongsTo('App\url_books','url_books_id','id');
    }
}
