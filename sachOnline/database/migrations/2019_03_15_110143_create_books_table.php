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
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->integer('nxb_id')->unsigned();
            $table->foreign('nxb_id')->references('id')->on('nxb')->onDelete('cascade');
            $table->integer('namxb');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categorys')->onDelete('cascade');
            $table->string('description');
            $table->integer('url_id_books')->unsigned();
            $table->foreign('url_id_books')->references('id')->on('url_books')->onDelete('cascade');
            $table->integer('views');
            $table->integer('count');
            $table->string('images');
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
