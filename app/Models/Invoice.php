<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory; 
    public $timestamp = true;
    public $fillable = [
        'INVOICE_ID',
        'ACCOUNT_ID',
        'PHONE',
        'ADDRESS',   
        'NOTE',  
        'ISSUE_DATE', 
        'DELIVERY_DATE',
        'TOTAL_AMOUNT',
        'VAT',
        'TOTAL_PAYMENT',
        'STATUS',
    ];  
    protected $primarykey = 'INVOICE_ID';
    protected $table = 'INVOICE';
}