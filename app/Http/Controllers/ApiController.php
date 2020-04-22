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
use App\Models\Ea_logs;
use App\Models\Ea;

class ApiController extends Controller
{
	public function __construct()
	{
//		$this->middleware('web');
	}

	public function index(){
		echo "index";
	}

	public function bestTrader(Request $r){
		$limit = $_REQUEST['limit'] ?? '10';
		$order = $_REQUEST['order'] ?? 'ASC';

		$users = Users::where('is_delete',0)->orderBy('profit',$order)->limit($limit)->get();
		
		if(isset($_REQUEST['json'])){		
			return json_encode($users);
		}

		return $this->rankingsHtml($users);
	}

	private function rankingsHtml($obj = 0){
		$t = '<table>
		<tr>
		<td>名前</td>
		<td>PIPS</td>
		</tr>';
		foreach ($obj as $k => $v) {
			$t .= '<tr>';
			$t .= '<td>'.$v->name.'</td>';
			$t .= '<td>'.$v->profit.'</td>';
			$t .= '</tr>';
		}
		$t .= '</table>'; 
		$t .= '<style>td{border:solid 1px #ddd;}</style>';
		return $t;
	}



	public function setprofit(Request $r,$userId){
		$user = Users::where('id',$userId);
	}


	public function rankings(Request $r){
		$limit = $_REQUEST['limit'] ?? '10';
		$order = $_REQUEST['order'] ?? 'ASC';

		Ranking::where();

		if(isset($_REQUEST['json'])){		
			return json_encode($_REQUEST);
		}

		return $this->rankingsHtml();
	}


	public function bestPipsRanking(Request $r){
		$limit = $_REQUEST['limit'] ?? '10';
		$order = $_REQUEST['order'] ?? 'DESC';

		$eas = Products::join('ea_logs','ea_logs.ea_id','=','products.id')->where('is_delete',0)->where('is_display',1)->orderBy('profit',$order)->limit($limit)->get();
		
		if(isset($_REQUEST['json'])){
			return json_encode($eas);
		}

		return $this->rankingsPipsHtml($eas);
	}

	private function rankingsPipsHtml($obj = 0){
		$t = '<div class="rankingsPips">';
		foreach ($obj as $k => $v) {
			$t .= '<div style="width:30%;min-height:150px;min-width:240px;display:inline-block;border:solid 1px #ddd;maigin:5px;">';
			$t .= '<span class="ea_title">'.$v->name.'</span>';
			$t .= '<div class="ea_profit">獲得PIPS:'.$v->order_profit.'</div>';
			$t .= '<div>'.$v->order_symbol.'</div>';

			$t .= '<div>エントリー日：'.$v->created_at.'</div>';
			$t .= '</div>';
		}
			$t .= '</div>';

		$t .= '<style>.rankingsPips{　display : inline-flex;
			　　padding:5px;margin:5px;}.ea_title{text-align:left;padding:5px;margin:5px;display:block;} .ea_profit{ text-align:left;margin:5px;} </style>';
			return $t;
		}

		public function latestTrade(Request $r){
			$limit = $_REQUEST['limit'] ?? '10';
			$order = $_REQUEST['order'] ?? 'DESC';

			$eas = Products::join('ea_logs','ea_logs.ea_id','=','products.id')->where('is_delete',0)->where('is_display',1)->orderBy('str_open_time',$order)->limit($limit)->get();

			if(isset($_REQUEST['json'])){
				return json_encode($eas);
			}

			return $this->latestTradeHtml($eas);
		}
		private function latestTradeHtml($obj = 0){
		$t = '<div class="latestTrade">';
		foreach ($obj as $k => $v) {
			$t .= '<div style="width:30%;min-width:240px;border:solid 1px #ddd;">';
			$t .= '<span class="latestTrade_title">'.$v->name.'</span>';
			$t .= '<div class="latestTrade_profit">損益:'.$v->order_profit.'</div>';
			$t .= '<div>通貨ペア:'.$v->order_symbol.' ';
			$t .= $v->type.'</div>';

			$t .= '<div>エントリー日：'.$v->str_open_time.'</div>';
			$t .= '</div>';
			$t .= '</div>';
		}
			return $t;
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

		public function post(Request $r){
			$list = array();

			$post_code = $r->postCode;
			$ea = Ea::where('post_code',$post_code)->first();

			if(empty($ea)){
				echo "error";
				return ;
			}

			$ea_log = new Ea_logs();

			if(!empty($r->id)){
				if(Ea_logs::where('ticket_id',$r->id)->count()){
					return;
				}

				$ea_log->ea_id = $ea->id;
				$ea_log->user_id = $ea->user_id;
				$ea_log->post_code = $ea->post_code;
				$ea_log->ticket_id = $r->id;

		$ea_log->str_open_time = $r->opentime ?? '' ;// エントリタイム
		$ea_log->order_open_price = $r->price ?? '' ;// エントリ価格
		$ea_log->order_symbol = $r->symbol ?? '';//シンボル
		$ea_log->type = $r->type ?? ''; //タイプ
		$ea_log->order_close_price = $r->closeprice ?? '';// //決済価格
		$ea_log->order_lots = $r->lots ?? '';//		ロット数
		$ea_log->order_swap = $r->swap ?? '';//　スワップ数
		$ea_log->order_commission = $r->commission ?? '';//手数料
		$ea_log->order_profit = $r->orderprofit ?? '';//
		$ea_log->order_comment = $r->comment ?? '';//コメント
//	$ea_log['update_at'] = date('Y-m-d H:i:s');
		$ea_log->save();
	//	$list['IsDemo'] = $r->IsDemo;//デモ口座かの判定//デモ

	//	$list['AccountCompany'] = $r->AccountCompany;// 証券会社
	//	$list['strOpenTime'] = $r->v;// レバレッジ
	}

	return ;
}

}
