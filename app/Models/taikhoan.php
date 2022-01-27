<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class taikhoan extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'TENDANGNHAP',
        'HOVATEN',
        'password',
        'SODIENTHOAI',
        'email',
        'DIACHI',
        'GIOITINH',
        'NGAYSINH',             
        'ISADMIN',
        'TRANGTHAI',       
    ];
    protected $primarykey = 'id';
    protected $table = 'taikhoans';

}
