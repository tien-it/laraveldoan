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
        function detail($id,Request $request)
        {
            $sanpham = DB::table('chitietsanphams')->where('MASANPHAM',$id)->first();
            $sanpham->MASANPHAM=$request->MASANPHAM;
            $sanpham->THUONGHIEU=$request->THUONGHIEU;
            $sanpham->NOISANXUAT=$request->NOISANXUAT;
            $sanpham->CHATLIEU=$request->CHATLIEU;
            $sanpham->PHONGCACH=$request->PHONGCACH;
            $sanpham->MAUSAC=$request->MAUSAC;
            $sanpham->CHIEUDAI=$request->CHIEUDAI;
            $sanpham->CHIEURONG=$request->CHIEURONG;
            $sanpham->BAOHANH=$request->BAOHANH;
            $sanpham->save();
            if(empty($loaisanpham)){
                return view('admin.pages.home');
            }
            return view('admin.pages.producttype',['sanpham'=>chitietsanpham::all()]);
        }
}
