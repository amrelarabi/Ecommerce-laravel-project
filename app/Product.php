<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','image','description'];
    
    public function order()
    {
        return $this->hasOne('App\Order');

    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
