<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taikhoan;
class AccountController extends Controller
{
    function index()
    {
        $taikhoan = taikhoan::all();
        return view('admin.pages.Account',['taikhoan'=>$taikhoan]);
    }
    function detail($id)
    {
        $taikhoan = taikhoan::find($id);
        if(empty($taikhoan)){
                return view('admin.pages.home');
        }
        return view('admin.pages.Account.detail',['taikhoan'=>$taikhoan]);
    }
    function acccreate()
    {
        return view('admin.pages.Account.create');
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
        return view('admin.pages.Account',['taikhoan'=>taikhoan::all()]);
    }
    function edit($id)
    {
        $taikhoan = taikhoan::find($id);  
        return view('admin.pages.Account.edit',['taikhoan'=>$taikhoan]);
    }
    function update(Request $request,$id)
    {
        $taikhoan = taikhoan::find($id);
        $taikhoan->TENDANGNHAP=$request->TENDANGNHAP;
        $taikhoan->HOVATEN=$request->HOVATEN;
        $taikhoan->email=$request->email;
        $taikhoan->password=$request->password;
        $taikhoan->SODIENTHOAI=$request->SODIENTHOAI;
        $taikhoan->DIACHI=$request->DIACHI;
        $taikhoan->GIOITINH=$request->GIOITINH;
        if($request->NGAYSINH==null)
        {
            $taikhoan->NGAYSINH=$taikhoan->NGAYSINH;
        }
        else
        {
            $taikhoan->NGAYSINH=$request->NGAYSINH;
        }
        $taikhoan->ISADMIN=$request->ISADMIN;
        $taikhoan->TRANGTHAI=$request->TRANGTHAI;
        $taikhoan->save();
        return view('admin.pages.Account',['taikhoan'=>taikhoan::all()]);
    }
    function delete($id)
    {
        $taikhoan =  taikhoan::findOrFail($id);
        $taikhoan ->delete();
        if(empty($taikhoan)){
            return view('admin.pages.home');
        }
        return view('admin.pages.Account',['taikhoan'=>taikhoan::all()]);
    }
}
