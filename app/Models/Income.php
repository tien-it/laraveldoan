<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory; 
    public $timestamp = true;
    public $fillable = [
        'INCOME_INVOICE_ID',
        'ACCOUNT_ID',
        'FROMCPN',
        'ISSUE_DATE',   
        'TOTAL_AMOUNT',  
        'VAT', 
        'TOTAL_PAYMENT',
    ];  
    protected $primarykey = 'INCOME_INVOICE_ID';
    protected $table = 'Income';
}
