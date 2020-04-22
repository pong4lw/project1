<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Models\Users;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
  //      $this->middleware('auth');
    }
    public function showRegisterForm()
    {
        return view('auth.register');  // 管理者用テンプレート
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    	$return = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['name'],
            'type' => 'client',
            'password' => Hash::make($data['password']),
            'password_str' => $data['password'],
        ]);
        $user = Users::where('email',$data['email'])->first();
        if($return)
		    Mail::to($data['email'],'Fx-Supporter')->send(new RegisterMail($data['name'],$data['email'],$user->id));

        return $return;
    }
    public function loginCheck($email,$id){   	
    	$user = Users::where('id',$id)->first();
    	if(Hash::check($user->email,$email)){

    		if($user->is_login_check){
    			echo "確認後のメールアドレスです";
    			exit;
    		}

    		$user->is_login_check = 1;
    		$user->save();
    		return view('welcome');
     	}else{
     		echo '認証に失敗しました';
     	}
    }

    function register_mail($email,$id){
    	$user = Users::where('id',$id)->first();
    	if(is_null($user)){
    		echo '登録情報が見つかりませんでした。<br>';
    		echo '登録をやりなおすか<br>メール再送の手続きをしてください';

    		exit;
    	}
    	if(Hash::check($user->email,$email)){
		    Mail::to($user->email,'Fx-Supporter')->send(new RegisterMail($user->name,$user->email,$id));
    	}
    }


    protected function guard()
    {
        return \Auth::guard('web');
    }
}
