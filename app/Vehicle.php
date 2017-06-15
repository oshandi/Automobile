<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['image_path','title','manufacturer','model','country','fuel','transmission','steering',
                          'category','body_type','v_condition','mileage','model_year','drive','price','color','seats','doors','engine
                           description'];
}
