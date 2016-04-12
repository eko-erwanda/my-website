<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recrutment extends Model
{
    protected $table = 'recrutment';

    protected $fillable = [
    	'title','description',
    ];
}
