<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethoadon extends Model
{
    use HasFactory;
    protected $fillable = [       
        'MAHOADON',
        'MACHITIETSANPHAM',
        'SOLUONG',
        'DONGIA',
        'THANHTIEN',
        'TRANGTHAI',          
    ];
    protected $primarykey = 'id';
    protected $table = 'chitiethoadons';

}
