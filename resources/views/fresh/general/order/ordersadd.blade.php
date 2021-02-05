@extends('layouts.freshgeneralB')
@section('title', '')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">買い物リスト </FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
  <h2>在庫登録</h2>
    登録する食材の種類を選んでください
@endsection

@section('content7')
  
 <button type="button" onclick="history.back()">前の画面に戻る</button> 

<a href='/fresh/general/mypage'>
<img src='../../images/image19.png'/>

<br><br><br>
<div class="disp_img">
 <a href='/fresh/general/vegeadd2'>
 <img src='../../images/2野菜.png' width="50" height="80">
 <a href='/fresh/general/meatadd2'>
 <img src='../../images/2肉.png' width="50" height="80">
 <a href='/fresh/general/fishadd2'>
 <img src='../../images/2魚.png' width="50" height="80">
 <a href='/fresh/general/dairyadd2'>
 <img src='../../images/2乳製品.png' width="50" height="80">
 <a href='/fresh/general/otheradd2'>
 <img src='../../images/2その他.png' width="50" height="80">
</div>
</div>
</div>
</div>
@endsection