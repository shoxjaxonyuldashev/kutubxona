<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public $guarded=[];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
