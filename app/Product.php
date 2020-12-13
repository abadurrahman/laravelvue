<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model  

{
	protected $fillable = [
        'category_id',
        'subcategory_id',
        'brand_id',
        'product_name',
        'title',
        'product_code',
        'product_quantity',
        'product_details',
        'product_color',
        'product_size',
        'selling_price',
        'discount_price',
        'video_link',
        'image_one',
        'image_one_1',
        'image_two',
        'image_three',
        'image_four',

    ];

     public function comments()
    {
        return $this->hasMany('App\Comment');
    }

   
}
 