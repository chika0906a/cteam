@extends('layouts.freshgeneral')
@section('title', '')
@section('menu_title')
<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>マイページ</title>
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
ECHO '<FONT COLOR="white">マイページ </FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base.png'/>
</div>
@endsection

@section('content2')
<div class="disp_img">
 <a href='/fresh/general/stocktop'>
  <img src='../../images/冷蔵庫の中身一覧.png'/>
</div>
@endsection

@section('content3')
<div class="disp_img">
  <a href='/fresh/general/support'>
  <img src='../../images/問い合わせ.png'/>
</div>
@endsection

@section('content4')
<div class="disp_img">
  <img src='../../images/お知らせ.png'/>
</div>
@endsection

@section('content5')
  @isset($items)
  <!--マイページにお知らせを表示!-->
  <table align="center">
  <tr><th>店舗名</th><th>タイトル</th><th>テキスト</th><th>日付</th></tr>
    @foreach($items as $item)
      <tr>
          <td>{{$item->company_name}}</td>
          <td>{{$item->info_title}}</td>
          <td>{{$item->info_text}}</td>
          <td>{{$item->day}}</td>
      </tr>
    @endforeach
  </table>
  @endisset
@endsection


@section('content7')
<div class="disp_img">
  <a href='/fresh/general/stockaddtop'>
  <img src='../../images/食材登録.png'/>
  <a href='/fresh/general/date'>
  <img src='../../images/レシピ.png'/>
  <a href='/fresh/general/menu'>
  <img src='../../images/献立確認.png'/>
  <a href='/fresh/general/orders'>
  <img src='../../images/買い物.png'/>
 </a>
</div>
@endsection


 
