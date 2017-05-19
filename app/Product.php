<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id', 'name', 'serial_num', 'product_img',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_product');
    }
}
