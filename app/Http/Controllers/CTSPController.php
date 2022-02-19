<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chitietsanpham;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CTSPController extends Controller
{
    function index($id)
        {
            $sanpham = DB::table('chitietsanphams')->where('MASANPHAM',$id)->first();
            return view('admin.pages.Products.detail',['sanpham'=>$sanpham]);
        }
}
