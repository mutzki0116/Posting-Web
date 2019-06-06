<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_tbl', function (Blueprint $table){
            $table->integer('id');
            $table->string('username');
            $table->string('password');
            $table->string('role');
            $table->timestamps();
            $table->softDeletes();  
           });
           Schema::create('job_posts', function (Blueprint $table){
            $table->integer('id');
            $table->string('job_title');
            $table->string('job_description');
            $table->string('job_address');
            $table->timestamps();
            $table->softDeletes();  
           });
           Schema::create('accounts', function (Blueprint $table){
            $table->integer('id');
            $table->string('username');
            $table->string('password');
            $table->string('role');
            $table->timestamps();
            $table->softDeletes();  
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_tbl');
        Schema::dropIfExists('job_posts');
    }
}
