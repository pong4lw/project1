@extends('layouts.layout')
@section('content')
<div class="container-fluid">
    <ol class="breadcrumb">
      <li class="active">顧客情報</li>
    </ol>

    <div class="panel">
        <div class="panel-heading">
            <br>
            
            <div class="row">
                <div class="col-sm-2">
                        <a href="{{ route('client.create') }}" class="btn"> <i class="fa fa-plus"></i> 新規登録</a>
                </div>
                <div class="col-sm-10">
                    <form action="">
                        <div class="input-group">
                      <!--
                          <input type="text" id="search" name="search" class="form-control" placeholder="Search..." value="{{ $search ?? ''}}">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">検索</button>
                          </span>
                      -->
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-stripped table-hover">
                    <thead>
                        <tr>
                            <th>作業日</th>
                            <th>到着時刻</th>
                            <th>識別番号</th>
<th>受付日</th>
<th>前回作業日</th>
                            <th>名前</th>
                            <th>市街地</th>
                            <th>電話</th>
                            <th>携帯</th>
                            <th>担当者</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td class="text-right">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection
