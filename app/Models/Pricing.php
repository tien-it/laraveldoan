<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Pricing extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'PRODUCT_ID',
        'TOTAL_INCOME',
        'REMAIN',
        'CHANGE_COUNT',
        'NEW_CHANGE_COUNT',
        'CURRENT_PRICE',
        'NEW_PRICE',
        'INCOME_INVOICE_DETAIL_ID',
        'NEW_INCOME_INVOICE_DETAIL_ID',
    ];
    protected $primarykey = 'PRODUCT_ID';
    protected $table = 'PRODUCT_TYPE';
}
