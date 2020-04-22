@extends('layouts.layout')
@section('content')
<!-- Breadcrumbs-->
<style>
    .title{
     min-width:160px;
     max-width:180px;
     display:inline-block;
     position:relative;
     text-align: left;
 }
 input{
    margin-right: 15px;
    margin-top: 5px;
    margin-botto,: 5px;
}
select{
    margin-right: 15px;
    margin-top: 5px;
    margin-botto,: 5px;
}
</style>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{url('/client/search')}}">顧客検索</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{url('/client/create')}}">新規登録</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{url('/client/search')}}">配車</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{url('/client/search')}}">完了報告</a>
    </li>
</ol>
<!-- Example DataTables Card-->

<div class="card mb-3">
    <div class="card-header">顧客登録</div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <div class="table-responsive">
            <div width="100%" cellspacing="0">

                <span class="title">受付日時</span>
                <input name="create_at" type="date" value="<?php echo date('Y-m-d');?>">
                <input name="create_time" type="time" value="<?php echo date('H:i:s');?>"> 

                <span class="title">受付者</span>
                <input name="admin_name" type="text" value="{{$client->name ?? ''}}"> 
                <input name="admin_id" type="hidden" value=""> <BR>

                <span class="title">識別番号</span>
                <input name="code_id" type="text" value="{{$client->post_code ?? ''}}">
                
                <span class="title">割引 </span> 
                <input type="text" name="tax" value="自動選択">

                <div>
                    <span class="title">作業員</span>
                    <select name="staff">
                        <option>選択しない</option>
                        <option value="" {{$client->staff_id ?? ''}} >作業員1</option>
                        <option value="" {{$client->staff_id ?? ''}} >作業員2</option>
                    </select>

                    <span class="title">LINE送信</span>
                    <input type="text" name="post_line" value="">
                </div>
                
                <div>
                    <span class="title">作業日</span><input name="plan_date" type="date" value="<?php echo date('Y-m-d');?>"> 
                    
                    <span class="title">到着時刻</span> 
                    <input type="time" name="starttime1">
                    ～
                    <input type="time" name="starttime2">

                    <span class="title">指定</span>
                    <select name="starttime">
                        <option></option>
                        <option>ひ指  (日付指定)</option>
                        <option>じ指  (時間指定)</option>
                        <option>ひじ指  (日時指定)</option>
                    </select>
                </div>

                <div>
                    <span class="title">顧客名</span><input name="name" type="text" value="{{$client->name ?? ''}}"><br>

                    <div style="width:100%;">
                        <span class="title">住所</span><input name="address" type="text" value="{{$client->address ?? ''}}" style="width:65%;"><br>
                    </div>

                    <span class="title">性別</span>        
                    <select name="sex">
                        <option></option>
                        <option value="1" @if ($client->sex ?? '' == 1) selected=selected @endif>男性</option>
                        <option value="2" @if ($client->sex ?? '' == 2) selected=selected @endif>女性</option>
                    </select>

                    <span class="title">年齢</span>     
                    <select name="age">
                        <option>10代</option>
                        <option>20代</option>
                        <option>30代</option>
                        <option>40代</option>
                        <option>50代</option>
                        <option>60代</option>
                        <option>70代</option>
                        <option>80代</option>
                        <option>90代以上</option>
                    </select>

                </div>


                <div>

                    <span class="title">電話番号(依頼者) </span><input name="tel" type="text" value="">


                    <span class="title">電話番号(作業先)</span>
                    <input name="tel" type="text" value="">
                </div><br>
                <span class="title">請求書送付先</span><input name="address" type="text" value="">
            </div>

            <div>
                <span class="title">顧客名</span><input name="name" type="text" value="">
            </div>
            <div>
                <span class="title">住所</span><input name="address" type="text" value="" style="width:65%;"><br>
            </div>

            <div><span class="title">請求書送付先</span><input name="address" type="text" value="" style="width:65%;"></div>

            <span class="title">性別</span>
            <select name="age">
                <option></option>
                <option>男性</option>
                <option>女性</option>
            </select>

            <span class="title">年齢</span>     
            <select name="age">
                <option>10代</option>
                <option>20代</option>
                <option>30代</option>
                <option>40代</option>
                <option>50代</option>
                <option>60代</option>
                <option>70代</option>
                <option>80代</option>
                <option>90代以上</option>
            </select>

        </div>

        <div>
            <span class="title">電話番号（管理会社）</span><input name="tel" type="text" value=""><br>


            <span class="title">電話番号（担当）</span><input name="tel" type="text" value=""><br>
            <span class="title">電話番号（入居者）</span><input name="tel" type="text" value=""><br>
        </div>

        <div>
            <span class="title">作業内容/備考</span> <textarea name="discription" style="width:90%;height:80px;"></textarea>
        </div>

        <div>
            <span class="title">連絡事項/備考</span> <textarea name="contacts" style="width:90%;height:80px;"></textarea>
        </div>

        <div>
            新規<input type="radio">
            保留<input type="radio">
        </div>

<!--
サンキュー   <select name="massage"><option ></option><option>◎</option></select>
</div>
終了時刻      <input type="time" name="endtime">
終了報告      <input type="text" name="">
後日予定日     <input type="date" name="next_plan_date">
-->
<div>
    <a href="{{ url('/customers/create') }}" class="btn btn-success" role="button">登録する</a>
</div>

</div>
</div>
</div>
</div>
@endsection
