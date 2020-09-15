<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['product_name','catagory_id','product_short_describtion','product_long_describtion','product_price','publication_status','deleted_at','product_image'];
}
