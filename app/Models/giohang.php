<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giohang extends Model
{
    use HasFactory;
    protected $fillable = [     
        'MAKHACHHANG',
        'MACHITIETSANPHAM',
        'SOLUONG',
        'TRANGTHAI',                              
    ];
    //protected $primarykey = 'id';
    protected $table = 'giohangs';
}