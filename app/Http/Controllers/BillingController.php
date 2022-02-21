<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hoadon;
class BillingController extends Controller
{
    function index()
    {
        $hoadon = hoadon::all();
        return view('admin.pages.billing',['hoadon'=>$hoadon]);
    }
    function detail($id)
    {
        $hoadon = hoadon::find($id);
        if(empty($hoadon)){
                return view('admin.pages.home');
        }
        return view('admin.pages.billing.detail',['hoadon'=>$hoadon]);
    }
    function billcreate()
    {
        return view('admin.pages.billing.create');
    }
    function create(Request $request)
    {
        $hoadon = new  hoadon();
        $hoadon->MAKHACHHANG=$request->MAKHACHHANG;
        $hoadon->SDT=$request->SDT;
        $hoadon->DIACHI=$request->DIACHI;
        $hoadon->GHICHU=$request->GHICHU;
        $hoadon->NGAYLAP=$request->NGAYLAP;
        $hoadon->NGAYGIAO=$request->NGAYGIAO;
        $hoadon->TONGTIEN=$request->TONGTIEN;
        $hoadon->TRANGTHAI=$request->TRANGTHAI;
        $hoadon->save();
        if(empty($hoadon)){
            return view('admin.pages.home');
        }
        return view('admin.pages.billing',['hoadon'=>hoadon::all()]);
    }
    function edit($id)
    {
        $hoadon = hoadon::find($id);  
        return view('admin.pages.billing.edit',['hoadon'=>$hoadon]);
    }
    function update(Request $request,$id)
    {
        $hoadon = hoadon::find($id);
        $hoadon->MAKHACHHANG=$request->MAKHACHHANG;
        $hoadon->SDT=$request->SDT;
        $hoadon->DIACHI=$request->DIACHI;
        $hoadon->GHICHU=$request->GHICHU;
        $hoadon->NGAYLAP=$request->NGAYLAP;
        $hoadon->NGAYGIAO=$request->NGAYGIAO;
        $hoadon->TONGTIEN=$request->TONGTIEN;
        $hoadon->TRANGTHAI=$request->TRANGTHAI;
        $hoadon->save();
        return view('admin.pages.billing',['hoadon'=>hoadon::all()]);
    }
    function delete($id)
    {
        $hoadon =  hoadon::findOrFail($id);
        $hoadon ->delete();
        if(empty($hoadon)){
            return view('admin.pages.home');
        }
        return view('admin.pages.billing',['hoadon'=>hoadon::all()]);
    }
}
