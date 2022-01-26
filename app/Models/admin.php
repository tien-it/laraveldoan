<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foudation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $fillable = [
        
        'TENDANGNHAP',
        'HOVATEN',
        'matkhau',
        'SODIENTHOAI',
        'email',
        'DIACHI',
        'GIOITINH',
        'NGAYSINH',             
        'ISADMIN',
        'TRANGTHAI',       
    ];
    protected $primarykey = 'id';
    protected $table = 'admin';
}
