<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\chitietsanpham;
use App\Models\giohang;
use App\Models\taikhoan;
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
     * thêm giỏ hàng
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $taikhoan_id =  session() -> get('id');/* lấy id của tài khoản từ sesstion với name id_taikhoan */
        $chitietsanpham_id = $request -> id_chitietsanpham; /* lấy id chi tiết sản phẩm từ request */
        $soluong = $request -> soluong; /* lấy  số lượng từ request */
        $sanpham_info = chitietsanpham::where('id',$chitietsanpham_id)->first(); /* lấy chi tiết sản phẩm để lọc thông tin*/
        if($taikhoan_id) {
            $data['MAKHACHHANG'] = $taikhoan_id;
            $data['MACHITETSANPHAM'] = $sanpham_info->MACHITIETSANPHAM;
            $data['SOLUONG'] = $soluong;
            $data['TRANGTHAI'] = 1;
        } else {
            return \redirect() -> route('account');
        }
        giohang::add($data);
        return \redirect() -> route('client.cart');
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
    {   $taikhoan_id =  session() -> get('id',1);
        $giohang = DB::table('giohangs')->join('chitietsanphams','chitietsanphams.id','=','giohangs.MACHITIETSANPHAM')
        ->join('sanphams','sanphams.id','=','chitietsanphams.MASANPHAM')
        ->where('giohangs.MAKHACHHANG','=',$taikhoan_id)
        ->get(); 
        if(empty($giohang)){
          return view('user.pages.checkout',['giohang'=>null]);
        }
        return view('user.pages.checkout',['giohang'=>$giohang]);
    }
    /**
     * thay đổi số lượng 
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
     * xóa toàn bộ giỏ hàng
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $taikhoan_id =  session() -> get('id_taikhoan');/* lấy id của tài khoản từ sesstion với name id_taikhoan */
        giohang::destroy($taikhoan_id);
    }
     /**
     * xóa sản phẩm trong giỏ hàng
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($chitietsanpham_id)
    {
        $taikhoan_id =  session() ->get('id_taikhoan');
        giohang::deleted($chitietsanpham_id ,$taikhoan_id);
    }
    /**
     * thanh toán
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function thanhtoan($id)
    {
        //
    }
     

}
