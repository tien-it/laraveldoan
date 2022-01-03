<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Account extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable = [
        'ACCOUNT_ID',
        'TENDANGNHAP',
        'HOTEN',
        'MATKHAU',
        'SODIENTHOAI',
        'EMAIL',
        'DIACHI',
        'GIOITINH',
        'NGAYSINH',
        'CHUCVU',
        'TRANGTHAI',
    ];
    protected $primarykey = 'ACCOUNT_ID';
    protected $table = 'ACCOUNTS';
}
