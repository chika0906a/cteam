@extends('layouts.freshgeneral')

@section('title', '送信完了画面')
@section('menu_title')
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">送信完了画面 </FONT>';
?><p>
@endsection


@section('content1')
<div class="disp_img">
<div style="position: relative; display:inline-block;">
<img src="../images/base.png" width="350" height="310"> 
<div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 100%; padding: 30px; text-align: left;">
<label>送信が完了しました。<br>「マイページに戻る」ボタンを押してください。</label>

<a href=''>
  <img src='../images/image19.png'>

<div class="disp_img">
</div>
 </div>
</div>
@endsection

@section('content2')


@endsection

@section('content3')




@endsection


@section('footer')
@endsection
