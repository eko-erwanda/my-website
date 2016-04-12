<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    protected $fillable = [
    	'addres', 'email', 'phone1', 'phone2', 'phone3', 'phone4',
    ];
}
