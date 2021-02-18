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
ECHO '<FONT COLOR="white">メニュー選択</FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection



@section('content2')
<div class="parent">
    <form action="/fresh/general/search" method="post">
    <div text-align:center>
    <table align ="center">
      @csrf
      <tr><th>日数: </th><td><input type="number" name="count"></td></tr>
      <tr><th>開始日: </th><td><input type="date" name="theDate" ></td></tr>
      <tr><th></th><td><input type="submit" value="表示"></td></tr>
   </table>
   </div>
   </form>
</div>
@endsection


@section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection
