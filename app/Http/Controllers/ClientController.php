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
use App\Models\Clients;
use App\Models\Staffs;

class ClientController extends Controller
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

	public function search(Request $r){
		$list = array();
//		$id = Auth::user('id');
		$list['users'] = Clients::all();

		return view('client.list', $list);
	}

	public function reservation(){
		$list = array();
//		$id = Auth::user('id');
		$list['users'] = Clients::all();

		return view('client.create', $list);
	}

	public function complate(){
		$list = array();
//		$id = Auth::user('id');
		$list['users'] = Clients::all();

		return view('client.list', $list);
	}



	public function list(){
		$list = array();
//		$id = Auth::user('id');
		$list['users'] = Users::all();

		return view('client.list', $list);
	}

	public function create(){
		$list = array();
		$list['users'] = Users::all();
		return view('client.create', $list);
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
