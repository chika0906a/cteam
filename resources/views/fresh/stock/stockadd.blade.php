@extends('layouts.freshgeneral')
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

@section('content1')
<div class="disp_img">
  <img src='../images/base1.png'/>
</div>
  <h2>在庫登録</h2>
    登録する食材の種類を選んでください
@endsection

@section('content7')
  <button type="button" onclick="history.back()">前の画面に戻る</button> 
  <a href='/fresh/generalmypage'>
  <img src='../images/image19.png'/>

  <br><br><br>
  <div class="disp_img">
  <a href='/fresh/vegeadd'>
  <img src='../images/2野菜.png' width="50" height="80">
  <a href='/fresh/meatadd'>
  <img src='../images/2肉.png' width="50" height="80">
  <a href='/fresh/fishadd'>
  <img src='../images/2魚.png' width="50" height="80">
  <a href='/fresh/dairyadd'>
  <img src='../images/2乳製品.png' width="50" height="80">
  <a href='/fresh/otheradd'>
  <img src='../images/2その他.png' width="50" height="80">
  </div>
@endsection