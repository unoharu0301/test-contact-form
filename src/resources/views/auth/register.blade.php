@extends('layouts.log')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('command')
<div class="command__button">
    <a class="header__login" href="/login">Login</a>
</div>
@endsection

@section('content')
<div class="register__content">
    <div class="register__heading">
        <h2>Register</h2>
    </div>
    <form action="/register" class="form-register" method="post">
        @csrf
        <div class="register__group">
            <div class="register__group-title">お名前</div>
            <div class="register__input">
                <input type="text" name="name" placeholder="例:山田太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error"></div>
        </div>
        <div class="register__group">
            <div class="register__group-title">メールアドレス</div>
            <div class="register__input">
                <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error"></div>
        </div>
        <div class="register__group">
            <div class="register__group-title">パスワード</div>
            <div class="register__input">
                <input type="password" name="pass" placeholder="例:coachtech1106" />
            </div>
            <div class="form__error"></div>
        </div>
        <div class="register__button">
            <button class="register__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection