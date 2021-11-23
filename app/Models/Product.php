<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'summary', 'description', 'cat_id', 'child_cat_id', 'price', 'brand_id', 'coupon_id', 'status', 'photo1', 'photo2', 'photo3', 'photo4', 'stock', 'condi', 'offer_price'];
}
