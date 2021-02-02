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
  <img src='../images/base1.png'/>
</div>
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
 <a href='/fresh/vegeadd2'>
 <img src='../images/2野菜.png' width="50" height="80">
 <a href='/fresh/meatadd2'>
 <img src='../images/2肉.png' width="50" height="80">
 <a href='/fresh/fishadd2'>
 <img src='../images/2魚.png' width="50" height="80">
 <a href='/fresh/dairyadd2'>
 <img src='../images/2乳製品.png' width="50" height="80">
 <a href='/fresh/otheradd2'>
 <img src='../images/2その他.png' width="50" height="80">
</div>
</div>
</div>
</div>
@endsection