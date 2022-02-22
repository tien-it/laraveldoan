<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taikhoan;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuanLyTaiKhoanController extends Controller
{
    function tables()
    {
        $taikhoan = taikhoan::all();
        return view('admin.pages.tables',['taikhoan'=>$taikhoan]);
    }
    function show()
    {
        $taikhoan = taikhoan::all();
        return view('admin.pages.accounts',['taikhoan'=>$taikhoan]);
    }
    function index()
    {
        $taikhoan = DB::table('taikhoans');
        return view('admin.pages.home',['taikhoan'=>$taikhoan]);
    }
    function create(Request $request)
    {
        $taikhoan = new  taikhoan();
        $taikhoan->TENDANGNHAP=$request->TENDANGNHAP;
        $taikhoan->HOVATEN=$request->HOVATEN;
        $taikhoan->email=$request->email;
        $taikhoan->password=$request->password;
        $taikhoan->SODIENTHOAI=$request->SODIENTHOAI;
        $taikhoan->DIACHI=$request->DIACHI;
        $taikhoan->GIOITINH=$request->GIOITINH;
        $taikhoan->NGAYSINH=$request->NGAYSINH;
        $taikhoan->ISADMIN=$request->ISADMIN;
        $taikhoan->TRANGTHAI=$request->TRANGTHAI;
        $taikhoan->save();
        if(empty($taikhoan)){
            return view('admin.pages.home');
        }
        return view('admin.pages.Accounts',['taikhoan'=>taikhoan::all()]);
    }
    function edit($id){
        $sanpham = DB::table('taikhoans')->find($id);
            if(empty($taikhoan)){
                return view('admin.pages.accounts');
            }
            return view('admin.pages.Accounts.edit',['taikhoan'=>$taikhoan]);
    }
    function delete($id)
    {
        $taikhoan =  taikhoan::findOrFail($id);
        $taikhoan ->delete();
        if(empty($taikhoan)){
            return view('admin.pages.home');
        }
        return view('admin.pages.accounts',['taikhoan'=>taikhoan::all()]);
    }
}
