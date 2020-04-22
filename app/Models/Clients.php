<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Models\Products;

/**
 * Class Clients
 * Created by H.H
 * Created at 4/20/2020
 **/

class Clients extends Eloquent
{
    use Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'id';

    static public function ranking($number, $order = 'ASC')
    {
        $user = new Users();
        $user = $user->limit($number)->orderBy('ranking',$order);
        return $user;
    }
}
