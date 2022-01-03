<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Product extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'PRODUCT_ID',
        'PRODUCT_TYPE_ID',
        'NAME',
        'IMAGE',
        'TRADEMARK ',
        'PRODUCTION_ADDRESS ',
        'MATERIAL ',
        'STYLE',
        'COLORS' ,
        'LONGS' ,
        'WIDTH' ,
        'INSURANCE' ,
        'DESCRIPTION ',
        'STATUS ',
    ];
    protected $primarykey = 'PRODUCT_ID';
    protected $table = 'PRODUCTS';
}
