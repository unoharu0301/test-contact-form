@extends('layouts.log')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('command')
<form class="form" action="/logout" method="post">
    @csrf
    <button class="header__logout">ログアウト</button>
@endsection