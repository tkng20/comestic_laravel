<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'type', 'value', 'status', 'is_voucher', 'quantity'];
    public static function getCouponDiscount($id){
        // return $slug;
        return Coupon::where('id', $id)->first();
    }
}
