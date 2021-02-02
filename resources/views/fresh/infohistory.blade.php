@extends('layouts.jissyu')
@section('title', '')
@section('menu_title')
<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
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
ECHO '<FONT COLOR="white">お知らせ送信履歴 </FONT>';
?><p>

<table>
  <tr><th>一般ユーザー</th><th>タイトル</th><th>テキスト</th><th>日付</th></tr>
    @foreach($items as $item)
      <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->info_title}}</td>
          <td>{{$item->info_text}}</td>
          <td>{{$item->day}}</td>

      </tr>
    @endforeach
  </table>
</div>
@endsection




 
