<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Cart extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
       'CART_ID',
       'ACCOUNT_ID',
       'PRODUCT_ID',
       'SOLUONG',
       'TRANGTHAI',
    ];
    protected $primarykey = 'CART_ID';
    protected $table = 'Cart';
}
