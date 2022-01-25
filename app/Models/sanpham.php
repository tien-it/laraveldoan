<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'MALOAISP',
        'TENSP',
        'TRANGTHAI',
        'HINHANH',
        'MOTA',
    ];
    protected $primarykey = 'id';
    protected $table = 'sanphams'; 
    
}
