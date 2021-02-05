<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

@extends('layouts.fresh')

@section('title', '')

@section('menu_title')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white"> お知らせフォーム送信完了画面 </FONT>';
?>
<img src="ict/documents/冷蔵.jpg">
@endsection


@section('content')
   <form action="/company/infofinish" method="post">
       @csrf
       <select name="example"style="width:700px; height:30px">
　　　　　<option value="情報を送る範囲を選択" 
           selected>🔍　　　　　　情報を送る範囲を選択</option>
         <option value="反町駅">反町駅</option>
         <option value="神奈川駅">神奈川駅</option>
         <option value="横浜駅" >横浜駅</option>
         <option value="東神奈川駅">東神奈川駅</option>
         <option value="武蔵小山駅">武蔵小山駅</option>
         </select>
       @if ($errors->has('area'))
       <font color="red">{{$errors->first('area')}}</font>
       @endif
@endsection
@section('content1')
       
       <input type="text" name="stitle"style="width:300px; height:20px";  value=""placeholder="タイトル">
       @if ($errors->has('stitle'))
       <tr><th></th><td><font color="red">{{$errors->first('stitle')}}</font></td></tr>
       @endif
       
   </form>

   
@endsection

@section('content2')
   <form action="/company/infofinish" method="post">
      
      <input type="text" style="width:300px; height:300px";  value=""placeholder="内容"></td></tr>
   </form>
@endsection
@section('content3')
<p>上記の内容で送信が完了しました。</p><br>
<p>「マイページに戻る」ボタンを押してください。</p>
   <br>
   <?PHP
ECHO '<FONT COLOR="aqua">マイページに戻る</FONT>';
?>
@endsection
@section('footer')

@endsection
</body>
</html>