<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->nullable();
            $table->integer('category_id')->unsigned();
            $table->string('image')->nullable();
            $table->timestamps();
//            $table->foreign('category_id')
//                ->references('id')
//                ->on('news')
//                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page_gallery');
    }
}
