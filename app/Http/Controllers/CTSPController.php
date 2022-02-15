<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class CTSPController extends Controller
{
    public function index($id) 
    {
        $sanpham = sanpham::find($id);
        return view('user.pages.single',['sanpham'=>$sanpham]);
    }
}
