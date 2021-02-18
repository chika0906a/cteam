@extends('layouts.freshgeneralC')
@section('title', '')

@section('menu_title')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>冷蔵庫の中身一覧</title>
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
ECHO '<FONT COLOR="white">冷蔵庫の中身</FONT>';
?><p>

@endsection


@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection


@section('content2')
  <table align="center">
    @foreach($items as $item)
      <tr>
          <td>{{$item->ingredients_name}}</td>
          <td>{{$item->quantity}}</td>
      </tr>
      <br>
    @endforeach
    <br>
  </table>
  <br>
<div class="disp_img">
 <a href="/fresh/general/stockdel">削除</a>
 <a href='/fresh/general/stockedit'>数量変更</a>
 <a href="/fresh/general/stockaddtop">追加</a><br><p>
 @endsection

 @section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection

 @section('content7')
<div class="disp_img">
  <a href='/fresh/general/vegeview'>
  <img src='../../images/2野菜.png' width="80" height="180">
  </a>
  <a href='/fresh/general/meatview'>
  <img src='../../images/2肉.png' width="80" height="180">
  </a>
  <a href='/fresh/general/fishview'>
  <img src='../../images/2魚.png' width="80" height="180">
  </a>
  <a href='/fresh/general/dairyview'>
  <img src='../../images/2乳製品.png' width="80" height="180">
  </a>
  <a href='/fresh/general/otherview'>
  <img src='../../images/2その他.png' width="80" height="180">
  </a>
</div>
@endsection