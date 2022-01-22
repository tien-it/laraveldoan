<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class InvoiceDetail extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'INVOICE_ID',
        'PRODUCT_ID',
        'QUANTITY',
        'UNIT_PRICE',
        'TOTAL',
        'STATUS',
    ];
    protected $primarykey = 'INVOICE_ID';
    protected $table = 'INVOICE_DETAIL';
}