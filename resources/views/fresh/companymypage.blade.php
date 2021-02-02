@extends('layouts.fresh')
@section('title', '▲マイページ')

@section('menubar')
   @parent
   新規作成ページ
@endsection
@section('content')
@endsection

@section('content2')
<div class="disp_img">
 <a href='./areachoice'>
  <img src='../images/範囲選択.png'/>
 <a href='./info'>
  <img src='../images/お知らせフォーム.png'/>
 <a href='./companysupport'>
  <img src='../images/問い合わせ.png'/>
 <a href='./infohistory'>お知らせ送信履歴を表示</a>
</div>
<a href="/fresh/reset" >ID、パスワードを再設定したい方はこちら</a>
<button type="button" name="logout" value="logout">Logout</button>
@endsection