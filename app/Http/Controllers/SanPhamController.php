<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class SanPhamController extends Controller
{   
        function tables()
        {
            $sanpham = sanpham::all();
            return view('admin.pages.tables',['sanpham'=>$sanpham]);
        }   
        function show()
        {
            $sanpham = sanpham::all();
            return view('user.pages.products',['sanpham'=>$sanpham]);
        }
        function index()
        {
            $sanpham = sanpham::all();
            return view('user.pages.home',['sanpham'=>$sanpham]);
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
                return view('admin.pages.home');
            }
            return view('admin.pages.tables');
        }
    function create(Request $request)
    {
        $sanpham = new  sanpham();
        $sanpham->MALOAISP=$request->MALOAISP;
        $sanpham->TENSP=$request->TENSP;
        $sanpham->TRANGTHAI=$request->TRANGTHAI;
        $sanpham->HINHANH=$request->HINHANH;
        $sanpham->MOTA=$request->MOTA;
        $sanpham->save();
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables');
    }
    function edit(Request $request,$id)
    {
        $sanpham = sanpham::find($id);
        $sanpham->MALOAISP=$request->MALOAISP;
        $sanpham->TENSP=$request->TENSP;
        $sanpham->TRANGTHAI=$request->TRANGTHAI;
        $sanpham->HINHANH=$request->HINHANH;
        $sanpham->MOTA=$request->MOTA;
        $sanpham->save();
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables');
    }
    function delete($id)
    {
        $sanpham =  sanpham::find($id);
        $sanpham ->delete();
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables');
    }
}
