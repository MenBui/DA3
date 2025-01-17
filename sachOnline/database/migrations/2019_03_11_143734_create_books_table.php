<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->reference('id')->on('authors');
            $table->integer('nxb_id')->unsigned();
            $table->foreign('nxb_id')->reference('id')->on('nxb');
            $table->integer('namxb');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->reference('id')->on('categorys');
            $table->string('description');
            $table->integer('url_books_id')->unsigned();
            $table->foreign('url_books_id')->reference('id')->on('url_books');
            $table->integer('view');
            $table->integer('count');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
