@extends('layouts.fresh')
@section('title', '▲マイページ')

@section('menubar')
   @parent
   新規作成ページ
@endsection
@section('content')
<h2>▲マイページ</h2>
<a href="/fresh/areachoice">範囲選択</a><br>
<p> 一般ユーザーへ送る情報の作成 <p>
<a href="/fresh/info">お知らせフォーム</a>
<br>
<button type="button" name="logout" value="logout">Logout</button>
<br>
<a href="/fresh/reset" >ID、パスワードを再設定したい方はこちら</a>
@endsection
