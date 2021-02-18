@extends('layouts.freshgeneralB')

@section('title', '')

@section('menu_title')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>買い物リストに追加</title>
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
ECHO '<FONT COLOR="white">買い物リストに追加</FONT>';
?><p>

@endsection

@section('content1')

<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
  <h2><?PHP
ECHO '<FONT COLOR="aqua"> 追加</FONT>';

?><p></h2>
    登録する食材の種類を選んでください
@endsection

@section('content2')
<br><br><br><br><br>
@endsection

@section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection

@section('content7')

<div class="disp_img">
  <a href='/fresh/general/vegeadd2'>
  <img src='../../images/2野菜.png' width="80" height="180">
  </a>
  <a href='/fresh/general/meatadd2'>
  <img src='../../images/2肉.png' width="80" height="180">
  </a>
  <a href='/fresh/general/fishadd2'>
  <img src='../../images/2魚.png' width="80" height="180">
  </a>
  <a href='/fresh/general/dairyadd2'>
  <img src='../../images/2乳製品.png' width="80" height="180">
  </a>
  <a href='/fresh/general/otheradd2'>
  <img src='../../images/2その他.png' width="80" height="180">
  </a>
</div>
@endsection