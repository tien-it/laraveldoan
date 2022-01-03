<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function LayDanhSach()
    {
        $Pricing = Pricing::all();
        return json_encode([
            'Success'=>true,
            'Data' =>$Pricing,
        ]);
    }
    public function find($id)
    {
        $Pricing = Pricing::find($id);
        if(empty($Pricing)){
            return json_encode([
                'Success'=>false,
                'Message' =>'Không Tìm Thấy Tài Khoản Có id Là : '.$id,
            ]);
        }
        return json_encode([
            'Success'=>true,
            'Data' =>$Pricing,
        ]);
    }
    public function create(Request $request)
    {
        $Pricing = new Pricing();
        $Pricing->PRODUCT_ID=$request->PRODUCT_ID;
        $Pricing->TOTAL_INCOME=$request->TOTAL_INCOME;
        $Pricing->REMAIN=$request->REMAIN;
        $Pricing->CHANGE_COUNT=$request->CHANGE_COUNT;
        $Pricing->NEW_CHANGE_COUNT=$request->NEW_CHANGE_COUNT;
        $Pricing->CURRENT_PRICE=$request->CURRENT_PRICE;
        $Pricing->NEW_PRICE=$request->NEW_PRICE;
        $Pricing->INCOME_INVOICE_DETAIL_ID=$request->INCOME_INVOICE_DETAIL_ID;
        $Pricing->NEW_INCOME_INVOICE_DETAIL_ID=$request->NEW_INCOME_INVOICE_DETAIL_ID;
        $Pricing->save();
        if(empty($Pricing)){
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
    public function edit(Request $request,$id)
    {
        $Pricing = $request::find($id);
        $Pricing->PRODUCT_ID=$request->PRODUCT_ID;
        $Pricing->TOTAL_INCOME=$request->TOTAL_INCOME;
        $Pricing->REMAIN=$request->REMAIN;
        $Pricing->CHANGE_COUNT=$request->CHANGE_COUNT;
        $Pricing->NEW_CHANGE_COUNT=$request->NEW_CHANGE_COUNT;
        $Pricing->CURRENT_PRICE=$request->CURRENT_PRICE;
        $Pricing->NEW_PRICE=$request->NEW_PRICE;
        $Pricing->INCOME_INVOICE_DETAIL_ID=$request->INCOME_INVOICE_DETAIL_ID;
        $Pricing->NEW_INCOME_INVOICE_DETAIL_ID=$request->NEW_INCOME_INVOICE_DETAIL_ID;
        $Pricing->save();
        if(empty($Pricing)){
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
    public function delete($id)
    {
        $Pricing = Pricing::find($id);
        $Pricing ->delete();
        if(empty($Pricing)){
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
