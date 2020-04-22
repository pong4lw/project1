<div class="form-group col-sm-12">
    {!! Form::label('type', '権限') !!}
    {!! Form::select('type', ['client' => 'Client - 顧客の予約確認のみ', 'provider' => 'provider - 店舗の予約確認 - ', 'secretary' => 'Secretary - View all events', 'admin' => 'Admin - 店舗情報の更新、顧客の登録'], null, ['class' => 'form-control', 'id' => 'type']) !!}
</div>

<div class="form-group col-xs-12 col-sm-6 required">
    {!! Form::label('name', '名前') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group col-xs-12 col-sm-6 required">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<div class="form-group col-xs-12 col-sm-6 {{ (empty($user)) ? 'required' : '' }}">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group col-xs-12 col-sm-6 {{ (empty($user)) ? 'required' : '' }}">
    {!! Form::label('password_confirmation', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<div class="col-sm-12">
    <div class="panel">
        <div class="panel-heading">
            <h4>住所</h4>
        </div>
        <div class="panel-body">
            <div class="form-group col-xs-12 col-sm-12">
                {!! Form::label('address', '住所') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('state', '都道府県') !!}
                {!! Form::text('state', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group col-xs-12 col-sm-6">
                {!! Form::label('city', '市区町村') !!}
                {!! Form::text('city', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group col-xs-12 col-sm-3">
                {!! Form::label('zip_code', '住所') !!}
                {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <h4>電話番号</h4>

    <book-user-phones 
        form="user-form" 
        phones="{{ isset($user) ? $user->phones : '[]' }}">
    </book-user-phones>
</div>