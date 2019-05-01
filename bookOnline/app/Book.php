<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    public function addProduct($request){
    	$books = new Book;
    	$url_books = new Url_Book;
    	$url_books->url = $request->url;
    	$url_books->title = $request->title;
    	$url_books->keyword_seo = $request->keyword_seo;
    	$url_books->description_seo = $request->description_seo;
    	$url_books->image_seo = $request->image_seo;
    	$url_books->save();
        $books->name = $request->name;
        $books->price = $request->price;
        $books->author_id = $request->author_id;
        $books->category_id = $request->category_id;
        $books->nxb_id = $request->nxb_id;
        $books->namxb = $request->namxb;
        $books->description1 = $request->description1;
        $books->url_books_id = $url_books->id;
        $books->count = $request->count;
        $books->images = $request->images;
        $books->views = 0;
        $books->save();


    }
}