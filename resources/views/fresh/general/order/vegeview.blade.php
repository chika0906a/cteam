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
<h2>野菜</h2>
  <table align="center">
      @foreach($items as $item)
          <tr>
          <td>{{$item->ingredients_name}}</td>
          <td>{{$item->quantity}}</td>
          </tr>
      @endforeach
    </table>
    
  <a href="/fresh/general/ordersadd">リストに追加</a>
  <a href="/fresh/general/ordersbuy">購入チェック</a>
  <a href="/fresh/general/ordersdel">リストから削除</a>
@endsection

@section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection

@section('content7')
<div class="disp_img">
  <a href='/fresh/general/vegeview2'>
  <img src='../../images/2野菜.png' width="80" height="180">
  </a>
  <a href='/fresh/general/meatview2'>
  <img src='../../images/2肉.png' width="80" height="180">
  </a>
  <a href='/fresh/general/fishview2'>
  <img src='../../images/2魚.png' width="80" height="180">
  </a>
  <a href='/fresh/general/dairyview2'>
  <img src='../../images/2乳製品.png' width="80" height="180">
  </a>
  <a href='/fresh/general/otherview2'>
  <img src='../../images/2その他.png' width="80" height="180">
  </a>
</div>
@endsection