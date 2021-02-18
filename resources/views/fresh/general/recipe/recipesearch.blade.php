@extends('layouts.freshgeneralC')
@section('title', '')

@section('menu_title')

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>メニュー選択</title>
  <style>
    div.button{
      text-align:center;
    }
  </style>
</head>
</html>
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">メニュー選択</FONT>';
?><p>
@endsection


@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection


@section('content2')
<form action="/save" method="post">
<table align ="center">
<tr><td></td><th>候補1</th><th>候補2</th></tr>
  <!--日付を選ぶ、countは日の数-->
  @csrf
  <input type="hidden" name="count" value="{{$count}}">
  <input type="hidden" name="theDate" value="{{$date}}">
  @for ($i=0,$j=0;$i<($count);$i++,$j=$j+2)
    <tr>
    <!--日付を表示する-->
    <th>{{$date}}</th>
    <!--DBからデータを取得して表示-->
    <td><input type="checkbox" name="recipearray[{{$date}}]" value="{{$recipearray[$j]}}"><label>{{$recipename[$j]}}</label></td>
    <td><input type="checkbox" name="recipearray[{{$date ++}}]" value="{{$recipearray[$j+1]}}"><label>{{$recipename[$j+1]}}</label></td>
    </tr>
  @endfor
</table>
<input type="submit" value="確定">
</form>
@endsection




@section('content3')
<a href="/fresh/general/mypage"><img src='../../images/マイページに戻るボタン.png'/></button>
@endsection
