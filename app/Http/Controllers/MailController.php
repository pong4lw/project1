<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Models\Shops;

class MailController extends Controller
{
  static public function staffregister(){
    $email = $_REQUEST['email'];
    $name = '';
    $text = '登録しました。';
    $to = 'hiroki.hon@gmail.com';

    Mail::to($to)->send(new RegisterMail($name, $text));
  }


  static public function staffmessage(){
    $name = '';
    $text = '登録しました。';
    $to = 'hiroki.hon@gmail.com';

    Mail::to($to)->send(new RegisterMail($name, $text));
  }

  static public function usermessage(){
    $text = $_REQUEST['text'];
    $to = $_REQUEST['email'];

    $name = '';

    Mail::to($to)->send(new RegisterMail($name, $text));
  }


}
