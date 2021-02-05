@extends('layouts.jissyu10')

@section('title', 'Jissyu10')

@section('menu_title')
ユーザ情報確認画面
@endsection

@section('content')
   <ol>
    <p>入力の確認をお願い致します。</p>
    {{--データを取り出す--}}
    <p>メールアドレス:{{$data['login_id']}}</p>
    <p>パスワード:{{$data['password']}}</p>

    <p>入力にお間違えはないでしょうか。</p>

@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
