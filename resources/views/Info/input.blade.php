<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

@extends('layouts.jissyu10')

@section('title', '')

@section('menu_title')

@endsection


@section('content')
   <form action="infoconfirm" method="post">
       @csrf
       <h1><?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
?>お知らせ送信確認画面</h1>
       
@endsection
@section('content5')
   
@endsection
@section('content1')
<li>タイトルを入力してください。</li><p>
       
       <input type="text" name="stitle"style="width:1000px; height:20px";  value=""placeholder="タイトル">
       @if ($errors->has('stitle'))
       <tr><th></th><td><font color="red">{{$errors->first('stitle')}}</font></td></tr>
       @endif
       
   </form>

   
@endsection

@section('content2')
<li>内容を入力してください。</li><p>
   <form action="infoconfirm" method="post">
      
      <input type="text" style="width:1000px; height:300px";  value=""placeholder="内容"></td></tr>
   </form>
@endsection
@section('content3')
<p>上記の内容でよろしければ、「次へ」を押してください。</p><br>
<p>内容を変更したい場合は、「戻る」ボタンを押してください。</p>
   <br>
<div class="disp_img">
  <a href='infoconfirm'>
  <img  src='../images/次へ2.png'/>
  <br>
  
 </a><br><a>
 <a href='info'>
 <img src='../images/戻る.png'/>
 </a>
</div>

@endsection
@section('footer')

@endsection
</body>
</html>