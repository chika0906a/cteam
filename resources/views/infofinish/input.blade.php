<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

@extends('layouts.jissyu9')

@section('title', '')

@section('menu_title')
@endsection


@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white"> お知らせフォーム送信完了画面 </FONT>';
?><p><p>
<div class="disp_img">
  
  <img  src='../images/背景5.png'/>
  <br>
</div>
@endsection
@section('content1')
       
      
       @if ($errors->has('stitle'))
       <tr><th></th><td><font color="red">{{$errors->first('stitle')}}</font></td></tr>
       @endif
       
   </form>

   
@endsection

@section('content2')
   
@endsection
@section('content3')
<p>お知らせフォームの送信が完了しました。</p><br>
<p>「マイページに戻る」</p><br>
<p>ボタンを押してください。</p><p><br><p><p><br><p><p><br><p><p><br><p><p><p><p><p>
   <br>
   <div class="disp_img">
   <a href='../fresh/companymypage'>
  <img  src='../images/マイページに戻る2.png'/>
  <br>
</div>
@endsection
@section('footer')

@endsection
</body>
</html>