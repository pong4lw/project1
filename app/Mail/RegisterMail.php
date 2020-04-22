<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;
use App\Models\Shops;

use Illuminate\Support\Facades\Hash;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;
    protected $username;
    protected $footer;

    public function __construct($username, $email,$id){
        $this->username = $username;
        $this->title = 'fx-supporter.com 新規登録お知らせ';
        $this->text = $username.'様

        新規登録ありがとうございます。<br>
        <br>

        本人確認のためにこのメールをお送りしております。<br>
        下記のリンクをクリックして、アクティベーションしてください<br>
        <br>
        ';
        $this->text .= url('login_mail').'/'.Hash::make($email).'_'.$id;
        $this->footer = 'このメールは自動送信のメールです。 ';
    }

    public function build()
    { 
        return $this->view('emails.addstaffs')
        ->text('emails.addstaffs_plain')
        ->subject($this->title)
        ->with([
            'username' => $this->username,
            'text' => $this->text,
        ]);

    }
}   