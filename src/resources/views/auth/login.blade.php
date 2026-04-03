@extends('layouts.app')

@section('title')
ログイン
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css' )}}">
@endsection

@section('header')
<a href="/login" class="header-button">新規登録</a>
@endsection

@section('content')
<h1 class="page-title">ログイン</h1>
<form class="auth-form" action="" method="post">
    @csrf
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
    <button class="auth-button" type="submit">ログイン</button>
</form>
<p class="auth-guide">新規登録はこちらから</p>
@endsection