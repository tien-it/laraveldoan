<?php

namespace App\Http\Controllers;

use App\Models\chitiethoadon;
use App\Models\chitietsanpham;
use App\Models\giohang;
use App\Models\sanpham;
use App\Models\taikhoan;
use App\Models\User;
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
        $sanpham = sanpham::all();
        
        if(empty($giohang)){
          return view('user.pages.checkout',['giohang'=>null]);
        }
        return view('user.pages.checkout',['giohang'=>$giohang ,'sanpham'=>$sanpham]);
    }

    /**
     * thêm giỏ hàng
     *
     * @return \Illuminate\Http\Response
     */
    //thêm giỏ hàng
    public function create( int $id)
    {
        if(empty(session() -> get('id_taikhoan'))){
            return \redirect() -> route('user.login');
        }
        if(!empty(giohang::where('MAKHACHHANG', '=', session() -> get('id_taikhoan'))
        ->where('MACHITIETSANPHAM', '=', $id)
         ->first()))
         {

            $giohang1 = giohang::where('MAKHACHHANG', '=', session() -> get('id_taikhoan'))
            ->where('MACHITIETSANPHAM', '=', $id)
            ->first();
                $giohang1->SOLUONG = 2 ;
                $giohang1->save();
            return \redirect() -> route('gio-hang');
        }
        $giohang = new giohang();
        $giohang->MAKHACHHANG = session() -> get('id_taikhoan');
        $giohang->MACHITIETSANPHAM = $id ;
        $giohang->SOLUONG = 1 ;
        $giohang->TRANGTHAI= 1 ;
        $giohang->save();

        if(empty($giohang) ) {
            return \redirect() -> route('home');
        }

        return \redirect() -> route('gio-hang');
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
    // hiển thị giỏ hàng ở phí người dùng theo id của người dùng đó
    public function show()
     {  
         if( empty(session() -> get('id_taikhoan'))){
            return redirect()->route('user.login');
         }
          $taikhoan_id =session() -> get('id_taikhoan');
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
        return \redirect() -> route('gio-hang');
    }
     /**
     * xóa sản phẩm trong giỏ hàng
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
       // $taikhoan_id =  session() ->get('id_taikhoan');
        giohang::remove($id);
        return \redirect() -> route('gio-hang');
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
