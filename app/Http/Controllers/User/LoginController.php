<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\giohang;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  /**
* Where to redirect admins after login.
*
*   @var string
*/
protected $redirectTo = '/user';

/**
* Create a new controller instance.
*
*   @return void
*/
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function showLoginForm()
    {
        return view('user.pages.account');
    }

    public function index()
    {
    
         return view('user.pages.home');
    }

    public function login(Request $request)
    {
        
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'       
        ]);
        
        if (Auth::guard('user')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get('remember'))) {
            //lưu id tài khoản để định danh tài khoản đăng nhập
            session()->set('id_taikhoan',);
            return redirect()->intended(route('user.index'));
        }
         return back()->withInput($request->only('email','remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        return redirect()->route('user.login');
    }
}
