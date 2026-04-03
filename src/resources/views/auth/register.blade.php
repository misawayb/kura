@extends('layouts.app')

@section('title')
新規登録
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css' )}}">
@endsection

@section('header')
<a href="/login" class="header-button">ログイン</a>
@endsection

@section('content')
<h1 class="page-title">新規登録</h1>
<form class="auth-form" action="/register" method="post">
    @csrf
    <div class="auth-field">
        <label class="auth-label">ユーザーネーム
            <input class="auth-input" type="text" name="name" placeholder="">
        </label>
        <p class="error-message"></p>
    </div>
    <div class="auth-field">
        <label class="auth-label">メールアドレス
            <input class="auth-input" type="email" name="email" placeholder="">
        </label>
        <p class="error-message"></p>
    </div>
    <div class="auth-field">
        <label class="auth-label">パスワード
            <input class="auth-input" type="password" name="password">
        </label>
    </div>
    <div class="auth-field">
        <label class="auth-label">確認用パスワード
            <input class="auth-input" type="password" name="password_confirmation">
        </label>
    </div>
    <button class="auth-button" type="submit">登録</button>
</form>
<a class="auth-guide" href="/login">ログインはこちらから</a>
@endsection