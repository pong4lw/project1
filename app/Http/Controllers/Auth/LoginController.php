<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Users;

class LoginController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.w
     *
     * @var string
     */
    protected $redirectTo = '/user/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//      $this->middleware('auth')->except('logout');
    }


   public function logout(Request $request)
    {
        Auth::logout();
        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('login');
    }

    protected function credentials(Request $request)
    {
        $temporary = $request->only($this->username(), 'password');
//        $temporary['shop_id'] = $request->shop_id;
        return $temporary;
    }
}
