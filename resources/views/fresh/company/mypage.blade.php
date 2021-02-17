@extends('layouts.fresh2')
@section('title', '')

@section('menubar')
   @parent
   新規作成ページ
@endsection

@section('content')
<h1><?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="black"> マイページ </FONT>';
?></h1>
@endsection

@section('content1')
<!--<div class="disp_img">
  <img src='../images/背景20.png'/>
</div>-->
<a href="./datachoice" class="btn btn-flat"><span>範囲選択</span></a>
@endsection

@section('content2')
<a href="./info" class="btn1 btn1-flat"><span>お知らせ</span></a>
<!--<br>
<a href="/fresh/area" >
<button  style=background-color:deeppink;border-color:white;color:white;width:300px;height:280px;font-size:35pt; type="button" name="logout" value="logout">範囲選択
-->
@endsection

@section('content3')
<a href="./infohistory" class="btn3 btn3-flat"><span>お知らせ履歴</span></a>
<!--<a href="/fresh/info"><div class="disp_img">
  <img src='../images/お知らせフォーム20.png'/>
</div></a>-->
@endsection

@section('content4')
<a href="./support" class="btn4 btn4-flat"><span>お問い合わせ</span></a>
@endsection

@section('content5')
<a href="./login" class="btn2 btn2-flat"><span>ログアウト</span></a>
<!--<a href="/fresh/info">
<button  style=background-color:orange;border-color:white;color:white;width:200px;height:150px;font-size:15pt; type="button" name="logout" value="logout">お知らせフォーム</button>
-->
@endsection

@section('content6')
<p id="slideshow" style=margin:100px;>
   <img src='../images/1.png' alt="画像1" class="active">
   <img src='../images/2.png' alt="画像2">
   <img src='../images/3.png' alt="画像3">
   <img src='../images/4.png' alt="画像4">
   <img src='../images/5.png' alt="画像5">
</p>
@endsection

@section('content7')
<h2>
<a href="../../register" ><?PHP
ECHO '<FONT COLOR="blue"> ID・パスワードを再設定したい方はこちら</FONT>';
?></a>
</h2>
@endsection

@section('content8')
<!--<button  style=background-color:border-color:white;color:white;width:100px;height:50px;font-size:15pt; type="button" name="logout" value="logout">Logout</button>-->
@endsection
