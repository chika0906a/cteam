<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

@extends('layouts.jissyu10')

@section('title', '')

@section('menu_title')

@endsection


@section('content')
<form action="/post/info" method="post">
       @csrf
       <h1><?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';



?>サービス情報作成画面</h1>
       
@endsection

@section('content5')
   



@endsection

@section('content1')

@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="element_wrap">
<form action="/post/info" method="post">
       @csrf
        <select name="station_id">
            <option value="S0001">横浜駅</option>
            <option value="S0002">東神奈川駅</option>
            <option value="S0003">新宿駅</option>
            <option value="S0004">渋谷駅</option>
        </select>

<input type="text" name="mail"style="width:500px; height:20px";  value=""placeholder="登録メールアドレス">
<input type="date" name="day"style="width:500px; height:20px";  value=""placeholder="日付">
       
       <input type="text" name="info_title"style="width:500px; height:20px";  value=""placeholder="タイトル">
       @if ($errors->has('stitle'))
       <tr><th></th><td><font color="red">{{$errors->first('stitle')}}</font></td></tr>
       @endif
       
       </div>

   
@endsection

@section('content2')
    <div class="element_wrap">
      <input type="text" name="info_text" style="width:500px; height:300px";  value=""placeholder="内容"></td></tr>
      </div>

      <input type="submit" value="送信">
</form>
@endsection
@section('content3')
<p>上記の内容でよろしければ、「送信」を押してください。</p><br>
<p>内容を変更したい場合は、「戻る」ボタンを押してください。</p>
   <br>

  <br>
  
 </a><br><a>
 <a href='info'>
 <a href="/fresh/company/mypage" class="circle_spread_btn"style=font-size:15pt;>🏠<i class="fas fa-home fa-fw"></i></a>

 </a>
</div>

@endsection
@section('footer')

@endsection
</body>
</html>