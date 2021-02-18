
@extends('layouts.freshgeneralC')
@section('title', '')

@section('menu_title')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>メニュー選択</title>
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
ECHO '<FONT COLOR="white">レシピ登録完了</FONT>';
?><p>
@endsection


@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection


@section('content2')
<p>レシピの登録が完了しました。</p>
@endsection



@section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection
