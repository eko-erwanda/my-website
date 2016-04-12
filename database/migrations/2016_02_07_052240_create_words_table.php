<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function(Blueprint $table){
            $table->increments('id');
            $table->text('service_words');
            $table->text('portofolio_words');
            $table->text('about_words_1');
            $table->text('about_words_2');
            $table->text('about_words_3');
            $table->text('client_words_1');
            $table->text('client_words_2');
            $table->text('paket_words_1');
            $table->text('paket_words_2');
            $table->text('newsletter_words');
            $table->text('contact_words');
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
        Schema::drop('words');
    }
}
