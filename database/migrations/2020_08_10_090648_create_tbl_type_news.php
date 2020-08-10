<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTypeNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categorys_id')->unsigned();
            $table->string('type_name');
            $table->integer('ordernum')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreign('categorys_id')->references('id')->on('categorys')->onDelete('cascade');
            
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
        Schema::dropIfExists('type_news');
    }
}
