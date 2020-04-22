<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

//use App\Http\Controllehors\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\Users;
use App\Models\log_buy;
use App\Models\log_sell;
use App\Models\Shops;
use App\Models\Spaces;
use App\Models\Plans;
use App\Models\Products;

class UserController extends Controller
{
	protected $redirectTo = '/';

	public function index(){
		$list = array();
		$list['users'] = Users::where('id', Auth::user('id'))->first();

		return view('user.index', $list);
	}

	public function home(){
		$list = array();
		if(empty(Auth::user())){
			return redirect('/');
		}

		$user = Auth::user();
		$list['users'] = $user;
		$list['eaList'] = Products::where('user_id',$user->id)->where('is_delete',0)->get();

		return view('user.home', $list);
	}

	public function detail(){
		$list = array();
		if(empty(Auth::user())){
			return redirect('/');
		}

		$id = Auth::user('id');
		$list['users'] = Users::where('id', $id)->first();

		return view('user.detail', $list);
	}

	public function list(){
		$list = array();
//		$id = Auth::user('id');
		$list['users'] = Users::all();

		return view('user.list', $list);
	}

	public function user_ea(Request $request, $email = null , $password = ''){
		ini_set('max_input_vars', '300000');

		if(empty(Auth::user())){
			return redirect('/');
		}

		if (Auth::guard($guard)->guest() && Auth::user('email') == $email) {
			//EAデータ保存
			//::ea_post($request);
		}

		if(empty($email)){
			echo 'user name empty';
			exit;
		}

		if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            // EAデータ保存
			//::ea_post($request);
		}
		echo 'login error';
		exit;
	}

	function ranking_best_month($number = '5', $order = 'ASC'){

		$Products = Products::ranking_best_product($number,'31', 'ASC');

		foreach ($Products as $p){
			echo $p->name;
			echo $p->value;
			echo $p->updated_at;
		}
	}

	function ranking_product(Request $request,$order = 'ASC'){
		$users = Scores::ranking_product($request->number,'1','ASC');
	}

	function update(Request $request,$userId){
		$list['users'] = Auth::user();

		$list['users']->password_str = $request->password;

		$list['users']->password =  Hash::make($request->password);

		$list['users']->save();

		return redirect('user/index');
	}

}
