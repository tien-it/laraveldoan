<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\chitietsanpham;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class SanPhamController extends Controller
{   
        function tables()
        {
            return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
        }   
        function show()
        {
            $sanpham = sanpham::all();
            return view('user.pages.products',['sanpham'=>$sanpham]);
        }
        function index()
        {
            $sanpham = DB::table('sanphams')->where('TRANGTHAI',1)->skip(0)->take(8)->get();
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
        function prdcreate()
        {
            return view('admin.pages.Products.create');
        }
        function detail($id)
    {
        $sanpham = sanpham::find($id);
        if(empty($sanpham)){
                return view('admin.pages.home');
        }
        return view('admin.pages.Products.detail',['sanpham'=>$sanpham]);
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
        return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
    }

    function edit($id){
        $sanpham = DB::table('sanphams')->find($id);
            if(empty($sanpham)){
                return view('admin.pages.home');
            }
            return view('admin.pages.Products.edit',['sanpham'=>$sanpham]);
    }
    function update(Request $request,$id)
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
        return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
    }
    function delete($id)
    {
        $sanpham =  sanpham::findOrFail($id);
        $sanpham ->delete();
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
    }
}
