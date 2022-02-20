<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaisanpham;
class LoaiSanPhamController extends Controller
{
    function index()
    {
        $loaisanpham = loaisanpham::all();
        return view('admin.pages.producttype',['loaisanpham'=>$loaisanpham]);
    }
    function detail($id)
    {
        $loaisanpham = loaisanpham::find($id);
        if(empty($loaisanpham)){
                return view('admin.pages.home');
        }
        return view('admin.pages.producttypes.detail',['loaisanpham'=>$loaisanpham]);
    }
    function prdtcreate()
    {
        return view('admin.pages.producttypes.create');
    }
    function create(Request $request)
    {
        $loaisanpham = new  loaisanpham();
        $loaisanpham->id=$request->id;
        $loaisanpham->TENLOAISP=$request->TENLOAISP;
        $loaisanpham->TRANGTHAI=$request->TRANGTHAI;
        $loaisanpham->save();
        if(empty($loaisanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.producttype',['loaisanpham'=>loaisanpham::all()]);
    }
    function edit($id)
    {
        $loaisanpham = loaisanpham::find($id);  
        return view('admin.pages.producttypes.edit',['loaisanpham'=>$loaisanpham]);
    }
    function update(Request $request,$id)
    {
        $ProductTypes = loaisanpham::find($id);
        $ProductTypes->TENLOAISP=$request->TENLOAISP;
        $ProductTypes->TRANGTHAI=$request->TRANGTHAI;
        $ProductTypes->save();
        return view('admin.pages.producttype',['loaisanpham'=>loaisanpham::all()]);
    }
    function delete($id)
    {
        $loaisanpham =  loaisanpham::findOrFail($id);
        $loaisanpham ->delete();
        if(empty($loaisanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.producttype',['loaisanpham'=>loaisanpham::all()]);
    }
}
