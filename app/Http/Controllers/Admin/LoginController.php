<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
/**
* Where to redirect admins after login.
*
*   @var string
*/
    protected $redirectTo = '/admin';

/**
* Create a new controller instance.
*
*   @return void
*/
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function showLoginForm()
    {
        return view('admin.pages.sign-in');
    }

    public function index()
    {
         return view('admin.pages.home');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
        ]);
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get('remember'))) {
        return redirect()->intended(route('admin.index'));
        }
    return back()->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
}
