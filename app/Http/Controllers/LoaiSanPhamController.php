<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
class LoaiSanPhamController extends Controller
{
    function LayDanhSach()
    {
        $loaisanpham = loaisanpham::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$loaisanpham,
        ]);
    }
    function find($id)
    {
        $loaisanpham = loaisanpham::find($id);
        if(empty($loaisanpham)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Loại Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$loaisanpham,
        ]);
    }
    function create(Request $request)
    {
        $ProductTypes = new  loaisanpham();
        $ProductTypes->TENLOAISP=$request->PRODUCT_TYPE_ID;
        $ProductTypes->TRANGTHAI=$request->PRODUCT_TYPE_NAME;
        $ProductTypes->save();
        if(empty($ProductTypes)){
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
        $ProductTypes = loaisanpham::find($id);
        $ProductTypes->TENLOAISP=$request->PRODUCT_TYPE_ID;
        $ProductTypes->TRANGTHAI=$request->PRODUCT_TYPE_NAME;
        $ProductTypes->save();
        if(empty($ProductTypes)){
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
        $ProductTypes =  loaisanpham::find($id);
        $ProductTypes ->delete();
        if(empty($ProductTypes)){
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
