<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortofolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolio', function(Blueprint $table){
            $table->increments('id');
            $table->string('label');
            $table->string('caption');
            $table->string('title');
            $table->string('client');
            $table->date('date');
            $table->string('skills');
            $table->string('link');
            $table->string('image');
            $table->string('category');
            $table->text('description');
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
        Schema::drop('portofolio');
    }
}
