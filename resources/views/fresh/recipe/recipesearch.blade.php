@extends('layouts.fresh')

@section('content')
<form action="/menus" method="post">
<table border ="1">
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
    <td><input type="checkbox" name="recipe[{{$date}}]" value="{{$recipearray[$j]}}"><label>{{$recipearray[$j]}}</label></td>
    <td><input type="checkbox" name="recipe[{{$date ++}}]" value="{{$recipearray[$j+1]}}"><label>{{$recipearray[$j+1]}}</label></td>
    </tr>
  @endfor
</table>
<input type="submit" value="確定">
</form>
@endsection


