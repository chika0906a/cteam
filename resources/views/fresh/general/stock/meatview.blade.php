@extends('layouts.freshgeneralB')
@section('title', '▲在庫一覧')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">冷蔵庫の在庫</FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection

@section('content2')
  <h2>肉</h2>
  <table>
      @foreach($items as $item)
          <tr>
          <td>{{$item->ingredients_name}}</td>
          <td>{{$item->quantity}}</td>
          </tr>
      @endforeach
    </table>
    <a href="/fresh/general/stocktop">在庫一覧に戻る</a>
    <a href="/fresh/general/mypage">マイページに戻る</a>
@endsection

@section('content3')
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
@endsection