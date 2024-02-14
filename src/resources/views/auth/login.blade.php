@extends('layouts.log')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('command')
<div class="command__button">
    <a class="header__register" href="/register">register</a>
</div>
@endsection

@section('content')
<div class="login__content">
    <div class="login__heading">
        <h2>Login</h2>
    </div>
    <form action="/login" class="form-login" method="post">
        @csrf
        <div class="login__group">
            <div class="login__group-title">メールアドレス</div>
            <div class="login__input">
                <input type="text" name="email" class="login__input-exa" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error"></div>
        </div>

        <div class="login__group">
            <div class="login__group-title">パスワード</div>
            <div class="login__input">
                <input type="password" name="pass" placeholder="例:coachtech1106" />
            </div>
            <div class="form__error"></div>
        </div>
        <div class="login__button">
            <button class="login__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection