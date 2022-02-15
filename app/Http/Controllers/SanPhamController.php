<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class SanPhamController extends Controller
{
    function show()
        {
            $sanpham = sanpham::all();
            return view('user.pages.products',['sanpham'=>$sanpham]);
        }
        function index()
        {
            return view('user.pages.products');
        }
        function find($id)
        {
            $sanpham = sanpham::find($id);
            if(empty($sanpham)){
                return view('user.pages.home');
            }
            return view('user.pages.single',['sanpham'=>$sanpham]);
        }
        function detail($id)
        {
        $sanpham = sanpham::find($id);
            if(empty($sanpham)){
                return view('user.pages.home');
            }
            return view('user.pages.single',['sanpham'=>$sanpham]);
        }
    function create(Request $request)
    {
        $Product = new  sanpham();
        $Product->MALOAISP=$request->MALOAISP;
        $Product->TENSP=$request->TENSP;
        $Product->TRANGTHAI=$request->TRANGTHAI;
        $Product->HINHANH=$request->HINHANH;
        $Product->MOTA=$request->MOTA;
        $Product->save();
        if(empty($Product)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Error',
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>'Done',
        ]);
    }
    function edit(Request $request,$id)
    {
        $Product = sanpham::find($id);
        $Product->MALOAISP=$request->MALOAISP;
        $Product->TENSP=$request->TENSP;
        $Product->TRANGTHAI=$request->TRANGTHAI;
        $Product->HINHANH=$request->HINHANH;
        $Product->MOTA=$request->MOTA;
        $Product->save();
        if(empty($Product)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Error',
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>'Done',
        ]);
    }
    function delete($id)
    {
        $Product =  sanpham::find($id);
        $Product ->delete();
        if(empty($Product)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Error',
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>'Done',
        ]);
    }
}
