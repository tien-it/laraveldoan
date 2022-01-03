<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    function LayDanhSach()
    {
        $ProductTypes = ProductTypes::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$ProductTypes,
        ]);
    }
    function find($id)
    {
        $ProductTypes = ProductTypes::find($id);
        if(empty($ProductTypes)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Sản Phẩm Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$ProductTypes,
        ]);
    }
    function create(Request $request)
    {
        $ProductTypes = new ProductTypes();
        $ProductTypes->PRODUCT_TYPE_ID=$request->PRODUCT_TYPE_ID;
        $ProductTypes->PRODUCT_TYPE_NAME=$request->PRODUCT_TYPE_NAME;
        $ProductTypes->STATUS=$request->STATUS;
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
        $ProductTypes = $request::find($id);
        $ProductTypes->PRODUCT_TYPE_ID=$request->PRODUCT_TYPE_ID;
        $ProductTypes->PRODUCT_TYPE_NAME=$request->PRODUCT_TYPE_NAME;
        $ProductTypes->STATUS=$request->STATUS;
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
        $ProductTypes = ProductTypes::find($id);
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