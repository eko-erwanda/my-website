<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
    protected $table = 'words';

    protected $fillable = [
    	'service_words',
    	'portofolio_words',
    	'about_words_1',
    	'about_words_2',
    	'about_words_3',
    	'client_words_1',
    	'client_words_2',
    	'paket_words_1',
    	'paket_words_2',
    	'newsletter_words',
    	'contact_words',
    ];
}
