@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
      <li><a href="/home">トップ</a></li>
      <li><a href="{{ route('home.users.index') }}">顧客</a></li>
      <li class="active">顧客情報</li>
    </ol>　

    <div class="panel">
        <div class="panel-heading">
            <h3>顧客情情報</h3>
        </div>
        <div class="panel-body">
        
                @include('home.users.show_fields')

                <a href="{{ route('home.users.index') }}" class="btn btn-default">Back</a>
            {!! Form::close() !!}  
        </div>
    </div>

</div>
@endsection