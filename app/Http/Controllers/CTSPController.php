<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chitietsanpham;
use App\Http\Controllers\Controller;
use App\Models\sanpham;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class CTSPController extends Controller
{
    function detail($id)
    {
        $chitietsanpham = chitietsanpham::find($id);
        if(empty($chitietsanpham)){
                return view('admin.pages.home');
        }
        return view('admin.pages.ProductDetail.detail',['chitietsanpham'=>$chitietsanpham]);
    }
    function prddcreate()
        {
            return view('admin.pages.ProductDetail.create');
        }
    function create(Request $request)
    {
        $sanpham = new  chitietsanpham();
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
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
    }
    function edit($id){
        $sanpham = DB::table('chitietsanphams')->find($id);
            if(empty($sanpham)){
                return view('admin.pages.table');
            }
            return view('admin.pages.ProductDetail.edit',['sanpham'=>$sanpham]);
    }
    function update(Request $request,$id)
    {
        $sanpham = chitietsanpham::find($id);
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
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
    }
    function delete($id)
    {
        $sanpham =  chitietsanpham::findOrFail($id);
        $sanpham ->delete();
        if(empty($sanpham)){
            return view('admin.pages.home');
        }
        return view('admin.pages.tables',['sanpham'=>sanpham::all(),'chitietsanpham'=>chitietsanpham::all()]);
    }
}
