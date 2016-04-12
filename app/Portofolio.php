<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';

    protected $dates = ['date'];
    
    protected $fillable = [
    	'label','caption','title','client','date','skills','link','category','description','image',
    ];

}
