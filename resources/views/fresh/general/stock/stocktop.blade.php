@extends('layouts.stocktop')
<header>
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
      <img src="../../images/メモ帳.png">
  </div>
</header>
@section('title', '')
@section('menu_title')
@endsection

@section('content')

<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">冷蔵庫の中身一覧 </FONT>';
?><p>
@endsection



@section('content1')
<div class="disp_img">
<div style="position: relative; display:inline-block;">
<img src="../../images/base1.png"> 
<div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 100%; padding: 30px; text-align: center;">
@endsection

@section('content2')
  <table>
    @foreach($items as $item)
      <tr>
          <td>{{$item->ingredients_name}}</td>
          <td>{{$item->quantity}}</td>
      </tr>
      <br>
    @endforeach
    <br>
  </table>
<div class="disp_img">
 <a href="/fresh/general/stockdel">削除</a>
 <a href='/fresh/general/stockedit'>数量変更</a>
 <a href="/fresh/general/stockaddtop">追加</a><br><p>
 

 @endsection

 @section('content3')
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
<br><p><br><p><br><p>
<br><p>
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection