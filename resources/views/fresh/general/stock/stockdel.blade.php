@extends('layouts.stockdel')
<header>
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content"><img src="../../images/メモ帳.png"></div>
  </div>
</header>
@section('title', '')
@section('menu_title')
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">食材削除画面 </FONT>';
?><p>
@endsection


@section('content1')

<img src="../../images/base1.png"> 

@endsection

@section('content2')
<div class="disp_img">

<table>
    <form action="/fresh/general/stockdel" method="post">
    @csrf
      @foreach($items as $item)
          <input type="hidden" name="mail" value="{{$item->mail}}">
          <tr>
          <td><input type="checkbox" name="itemsarray[]" value="{{$item->ingredients_id}}"><label>{{$item->ingredients_name}}</label></td>
          <td>{{$item->quantity}}</td>
      </tr>
      @endforeach
    </table>
    <input type="submit" value="削除"/>

    <button type="button" onclick="history.back()">前の画面に戻る</button> 
    </div>
 </div>
</div>

@endsection

@section('content3')

<div class="disp_img">
  <a href='/fresh/general/vegedel'>
  <img src='../../images/2野菜.png' width="80" height="180">
  </a>
  <a href='/fresh/general/meatdel'>
  <img src='../../images/2肉.png' width="80" height="180">
  </a>
  <a href='/fresh/general/fishdel'>
  <img src='../../images/2魚.png' width="80" height="180">
  </a>
  <a href='/fresh/general/dairydel'>
  <img src='../../images/2乳製品.png' width="80" height="180">
  </a>
  <a href='/fresh/general/otherdel'>
  <img src='../../images/2その他.png' width="80" height="180">
  </a>
</div>
<br><p><br><p><br><p>
<br><p><br><p><br><p>
<button type="button" onclick="history.back()"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection

