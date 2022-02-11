<?php

namespace App\Http\Controllers;

use App\Models\giohang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class giohangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $giohang = giohang::all();
        
        if(empty($giohang)){
          return view('user.pages.checkout',['giohang'=>null]);
        }
        return view('user.pages.checkout',['giohang'=>$giohang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /* HI */
    public function show()
    {
        $giohang = DB::table('giohangs')->join('chitietsanphams','chitietsanphams.id','=','giohangs.MACHITIETSANPHAM')
        ->join('sanphams','sanphams.id','=','chitietsanphams.MASANPHAM')
        ->where('giohangs.MAKHACHHANG','=',1)
        ->get(); 

        if(empty($giohang)){
          return view('user.pages.checkout',['giohang'=>null]);
        }
        return view('user.pages.checkout',['giohang'=>$giohang]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
