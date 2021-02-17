@extends('layouts.freshgeneral')
<header>
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content"><img src="../../images/メモ帳.png"></div>
  </div>
</header>

@section('title', '▲在庫登録')

@section('menu_title')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>在庫登録</title>
  <style>
    div.button{
      text-align:center;
    }
  </style>
</head>
</html>
@endsection
@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">在庫登録</FONT>';
?><p>

@endsection

@section('content1')

<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
  <h2><?PHP
ECHO '<FONT COLOR="aqua"> 在庫登録</FONT>';

?><p></h2>
    登録する食材の種類を選んでください
@endsection

@section('content7')
<br><p><br><p><br><p>
<br><p><br><p><br><p>
<div class="disp_img">
  <a href='/fresh/general/vegeadd'>
  <img src='../../images/2野菜.png' width="80" height="180">
  </a>
  <a href='/fresh/general/meatadd'>
  <img src='../../images/2肉.png' width="80" height="180">
  </a>
  <a href='/fresh/general/fishadd'>
  <img src='../../images/2魚.png' width="80" height="180">
  </a>
  <a href='/fresh/general/dairyadd'>
  <img src='../../images/2乳製品.png' width="80" height="180">
  </a>
  <a href='/fresh/general/otheradd'>
  <img src='../../images/2その他.png' width="80" height="180">
  </a>
</div>
<br><p><br><p><br><p>
<br><p><br><p><br><p>
<br><p><br><p><br><p>
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection