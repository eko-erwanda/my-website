<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';

    protected $fillable = [
    	'title', 'content1', 'content2', 
    	'content3', 'content4', 'content5', 
    	'content6', 'content7' ,'content8',
    	'content9', 'content10',
    ];
}
