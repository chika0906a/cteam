@extends('layouts.fresh')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">レシピ確認画面</FONT>';
?><p></p>
<form action="/save" method="post">
   <table border = "1">
   @csrf
      <tr><th>日付</th><th>レシピ</th></tr>
      @for($i=0;$i<($count);$i++)
      <tr>
         <th>{{$date[$i]}}</th>
         <td>{{$recipe[$i]}}</td>
         <input type="hidden" name="date[]" value="{{$date[$i]}}">
         <input type="hidden" name="recipe[{{$date[$i]}}]" value="{{$recipe[$i]}}">
      </tr>
      @endfor
   </table>
   <input type="submit" value="追加">
</form>
@endsection