@extends('layouts.log')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('command')
<div class="command__button">
    <button class="header__register" href="register">register</button>
</div>
@endsection

@section('content')
<div class="login-page__content">
    <div class="login-page__heading">
        <h2>Login</h2>
    </div>
    <form action="/login" class="form-login" method="post">
        @csrf
        <div class="login__group">
            <div class="login__group-title">メールアドレス</div>
            <div class="login__input">
                <input type="text" name="email" placeholder="例:test@example.com">
            </div>
        </div>
        <div class="login__group">
            <div class="login__group-title">パスワード</div>
            <div class="login__input">
                <input type="text" name="pass" placeholder="例:coachtech1106">
            </div>
        </div>
        <div class="login__button">
            <button class="login__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection