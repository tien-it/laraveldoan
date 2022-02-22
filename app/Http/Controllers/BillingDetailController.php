<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chitiethoadon;
class BillingDetailController extends Controller
{
    
    function index()
    {
        $chitiethoadon = chitiethoadon::all();
        return view('admin.pages.BillingDetail',['chitiethoadon'=>$chitiethoadon]);
    }
    function detail($id)
    {
        $chitiethoadon = chitiethoadon::find($id);
        if(empty($chitiethoadon)){
                return view('admin.pages.home');
        }
        return view('admin.pages.BillingDetail.detail',['chitiethoadon'=>$chitiethoadon]);
    }
    function billdcreate()
    {
        return view('admin.pages.BillingDetail.create');
    }
    function create(Request $request)
    {
        $chitiethoadon = new  chitiethoadon();
        $chitiethoadon->MAHOADON=$request->MAHOADON;
        $chitiethoadon->MACHITIETSANPHAM=$request->MACHITIETSANPHAM;
        $chitiethoadon->SOLUONG=$request->SOLUONG;
        $chitiethoadon->DONGIA=$request->DONGIA;
        $chitiethoadon->THANHTIEN=$request->THANHTIEN;
        $chitiethoadon->TRANGTHAI=$request->TRANGTHAI;
        $chitiethoadon->save();
        if(empty($chitiethoadon)){
            return view('admin.pages.home');
        }
        return view('admin.pages.BillingDetail',['chitiethoadon'=>chitiethoadon::all()]);
    }
    function edit($id)
    {
        $chitiethoadon = chitiethoadon::find($id);  
        return view('admin.pages.BillingDetail.edit',['chitiethoadon'=>$chitiethoadon]);
    }
    function update(Request $request,$id)
    {
        $chitiethoadon = chitiethoadon::find($id);
        $chitiethoadon->MAHOADON=$request->MAHOADON;
        $chitiethoadon->MACHITIETHOADON=$request->MACHITIETHOADON;
        $chitiethoadon->SOLUONG=$request->SOLUONG;
        $chitiethoadon->DONGIA=$request->DONGIA;
        $chitiethoadon->THANHTIEN=$request->THANHTIEN;
        $chitiethoadon->TRANGTHAI=$request->TRANGTHAI;
        $chitiethoadon->save();
        return view('admin.pages.BillingDetail',['chitiethoadon'=>chitiethoadon::all()]);
    }
    function delete($id)
    {
        $chitiethoadon =  chitiethoadon::findOrFail($id);
        $chitiethoadon ->delete();
        if(empty($chitiethoadon)){
            return view('admin.pages.home');
        }
        return view('admin.pages.BillingDetail',['chitiethoadon'=>chitiethoadon::all()]);
    }
}
