@extends('layouts.freshgeneralC')
@section('title', '')

@section('menu_title')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>買い物リスト</title>
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
ECHO '<FONT COLOR="white">買い物リスト</FONT>';
?><p>

@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection

@section('content2')
  <h2>リストから削除</h2>
    <table align="center">
    <form action="/fresh/general/ordersdel" method="post">
    @csrf
      @foreach($items as $item)
          <tr>
          <td><input type="checkbox" name="itemsarray[]" value="{{$item->ingredients_id}}"><label>{{$item->ingredients_name}}</label></td>
          <td><input type="number" name="quantity[{{$item->ingredients_id}}]" value="{{$item->quantity}}"></td>
      </tr>
      @endforeach
    </table>
    <input type="submit" value="削除">
    <p>
    <a href="/fresh/general/orders">買い物リストトップに戻る</a>  
@endsection


@section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection
