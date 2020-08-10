<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('users_id')->unsigned();
            $table->string('title');
            $table->string('avatar')->nullable();
            $table->text('summary')->nullable();
            $table->text('content');
            $table->tinyInteger('status')->default(0);
            $table->integer('ordernum')->default(0);
            $table->double('like')->default(0);
            $table->double('view')->default(0);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('news');
    }
}
