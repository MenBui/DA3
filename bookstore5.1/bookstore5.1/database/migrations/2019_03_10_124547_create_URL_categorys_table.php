<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateURLCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('URL_categorys', function (Blueprint $table) {
             $table->increments('id');
            $table->string('url');
            $table->string('title');
            $table->string('keyword_SEO');
            $table->string('description_SEO');
            $table->string('image_SEO');
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
        Schema::drop('URL_categorys');
    }
}
