<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class ProductTypes extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'PRODUCT_TYPE_ID',
        'PRODUCT_TYPE_NAME',
        'STATUS',
    ];
    protected $primarykey = 'PRODUCT_TYPE_ID';
    protected $table = 'PRODUCT_TYPES';
}
