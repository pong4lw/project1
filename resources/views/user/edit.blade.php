@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
      <li><a href="/home">トップ</a></li>
      <li><a href="{{ route('home.users.index') }}">Users</a></li>
      <li class="active">編集</li>
    </ol>

    <div class="panel">
        <div class="panel-heading">
            <h3>編集</h3>
        </div>
        <div class="panel-body">
            {!! Form::model($user, ['route' => ['home.users.update', $user->id], 'method' => 'patch', 'files' => true, 'id' => 'user-form']) !!}    
        
                @include('home.users.fields')

                <div class="form-group col-xs-12 col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                </div>

            {!! Form::close() !!}  
        </div>
    </div>

</div>
@endsection