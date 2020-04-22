@extends('user.layout')
@section('content')
<style>
     .menu-btn{
        text-align:center;      
        font-weight: 150%;
        padding: 25px;
        margin:auto;
    }

    .title-area{
        text-align:center;      
          position: relative;
          display: inline-block;
          padding: 0.25em 0.5em;
          text-decoration: none;
          color: #888;
          background: #fff;/*色*/
          border-radius: 8px;/*角の丸み*/
          box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), inset 0 -2px 0 rgba(0, 0, 0, 0.05);
          font-weight: bold;
          border: solid 1px #ffffff;/*線色*/
          margin: 8 px;
          margin-top: 8 px; 



    }

    .title-area:active {
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.30);
    }    
</style>

<!-- Breadcrumbs-->
<div style="text-align: center;">


<div class="col-xl-3 col-sm-6 mb-3 title-area">
<div class="card text-white o-hidden h-100">
<div class="card-body">

<div class="card-body-icon"></div>

<div class="mr-5"><h3><a href="{{ url('/client/search') }}">顧客検索</a></h3></div>
</div>
</div>
</div>
<br>

<div class="col-xl-3 col-sm-6 mb-3 title-area">
<div class="card text-white o-hidden h-100">
<div class="card-body">
<div class="card-body-icon"></div>
<div class="mr-5"><a href="{{ url('/client/reservation') }}"><h3>新規予約</h3></a></div>
</div>
</div>
</div>
<br>


<div class="col-xl-3 col-sm-6 mb-3 title-area"><div class="card text-white o-hidden h-100"><div class="card-body">
<div class="card-body-icon"></div>
<div class="mr-5"><h3><a href="{{ url('/client/product') }}">配車</a></h3></div>
</div>
</div>
</div>
<br>

<div class="col-xl-3 col-sm-6 mb-3 title-area">
<div class="card text-white o-hidden h-100">
  <div class="card-body">
    <div class="card-body-icon">
    </div>
    <div class="mr-5"><h3><a href="{{ url('/client/complate') }}">完了報告</a></h3></div>
  </div>
</div>
</div>
<br>

</div>

@endsection
@section('footer_js')
@endsection