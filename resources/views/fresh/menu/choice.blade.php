@extends('layouts.jissyu')

@section('title', '今週の献立')

@section('menu_title')

@endsection

@section('content')
  <form action="/fresh/menu" method="post">　<!-- コントローラーの呼び出し -->
  @csrf
  <p>検索したい日付を入力してください</P>
  <P>例　20190101</p>
  <input type="text" name="input" >　　　<!-- 検索フォーム　-->
  <input type="submit" value="献立表示">
  </form>
  @if (isset($items))
  @foreach($items as $item)    <!--入力された日付のレシピを代入-->
          <?PHP
        ECHO '<FONT COLOR="aqua">日付</FONT>';
        ?><p></p><br>
        <P>{{$item->day}}</p><br><p></p><br><br> 
        <?PHP
        ECHO '<FONT COLOR="aqua">レシピ名</FONT>';
        ?><p></p><br>
        <p>{{$item->recipe_name}}</p><br><p></p><br><br>
        <?PHP
        ECHO '<FONT COLOR="aqua">材料</FONT>';
        ?><p><br></p>
        @foreach($items as $item)
              <p>{{$item->ingredients_name}}</p><p><br></p>
              <!--材料を繰り返して表示-->
        @endforeach
        <br>
        <?PHP
        ECHO '<FONT COLOR="aqua">作り方</FONT>';
        ?><p></p><br>
        <p>{{$item->howto}}</p><br><p></p><br>
        <!-- 検索されたレコードを表示　-->
        @break <!--外ループを1度で抜ける-->
  @endforeach
  @endif
@endsection

@section('content1')
<input type="button" style="color:block;background-color:blue" onclick="location.href='../signup/done'" value="メニューの変更">   
<!-- ボタンで次の画面へ遷移　-->
<input type="button" style="color:block;background-color:red" onclick="location.href='/fresh/generalmypage'" value="マイページに戻る">
<!-- ボタンでマイページへ遷移　-->
@endsection