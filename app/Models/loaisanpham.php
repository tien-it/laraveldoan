<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'TENLOAISP',
        'TRANGTHAI',
    ];
    protected $primarykey = 'id';
    protected $table = 'loaisanphams'; 
}
