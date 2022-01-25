<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietsanpham extends Model
{
    use HasFactory;   
    protected $fillable = [      
        'MASANPHAM',
        'THUONGHIEU',
        'NOISANXUAT',
        'CHATLIEU',
        'PHONGCACH',
        'MAUSAC',
        'CHIEUDAI',
        'CHIEURONG',
        'BAOHANH',
    ];
    protected $primarykey = 'id';
    protected $table = 'chitietsanphams'; 
}
