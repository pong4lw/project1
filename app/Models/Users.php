<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Products;

/**
 * Class Users
 * Created by H.H
 * Created at 2/22/2020
 **/

class Users extends Eloquent
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';

/*    public function writeEaData(Request $request, $user = new Users()){
        $request;
        $validate = array(
            'id', //id
            'no', //マジックナンバー
            'price', //決済額
        );
        $user->id;
        //Products::save();
    }
*/
    static public function ranking($number, $order = 'ASC')
    {
        $user = new Users();
        $user = $user->limit($number)->orderBy('ranking',$order);
        return $user;
    }
}
