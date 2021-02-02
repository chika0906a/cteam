@extends('layouts.fresh')

@section('title', 'fresh')

@section('menu_title')
メール送付完了画面
@endsection

@section('content')
  <p>メールを送信しました。</p>
  <p>メールに記載のIDとパスワードでログインしてください。</p>
  <a href="/fresh/login">ログイン画面はこちら</a>
@endsection

@section('footer')
copyright 2020 teamc.
@endsection