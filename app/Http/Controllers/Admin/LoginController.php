<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
        return view('admin.pages.login');
    }

    public function index()
    {
         return view('admin.pages.home');
    }
}
