<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('profile_picture')->nullable();           
            $table->string('email')->unique()->nullable();
            $table->enum('role', ['user','main-admin','other_admin']);
            $table->string('facebook_id')->nullable();
            $table->string('facebook_token')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('twitter_token')->nullable();
            $table->string('google_id')->nullable();
            $table->string('google_token')->nullable();
            $table->string('password')->nullable();
            $table->string('hash')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
