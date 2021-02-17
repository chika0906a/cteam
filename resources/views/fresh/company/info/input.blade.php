<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

@extends('layouts.jissyu10')

@section('title', '')

@section('menu_title')

@endsection


@section('content')
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
<form action="/fresh/company/infoconfirm" method="post">
       @csrf
        <select name="station_id">
            <option value="" selected>駅を選択してください</option>
            <?php
            foreach($stations as $item){
                print('<option value="' . $item->station_id . '">' . $item->station_name . '</option>');
            }
            ?>
        </select>

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

      <input type="submit" value="確認">
</form>
@endsection
@section('content3')
   <br>

  <br>
  
 </a><br>

 <a href="javascript:history.back()" class="pochitto_btn_blue" style=font-size:10pt;>戻る</a>


 </a>
</div>

@endsection
</body>
</html>