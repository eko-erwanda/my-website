<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('content1');
            $table->string('content2');
            $table->string('content3');
            $table->string('content4');
            $table->string('content5');
            $table->string('content6');
            $table->string('content7');
            $table->string('content8');
            $table->string('content9');
            $table->string('content10');
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
        Schema::drop('paket');
    }
}
