@extends('layouts.fresh')

@section('content')
<table>
    <form action="/fresh/general/menuscreate" method="post">
    <tr><td></td><th>ラーメン</th><th>御飯</th></tr>
    @csrf
    @for ($i=0;$i<($count);$i++){
      <tr>
      <!--日付を表示する-->
      <input type="hidden" name="{{$count}}" value="{{$count}}">
      <th><input type="number" name="{{$date ++}}" value="{{$date ++}}"><label>{{$date ++}}</label></th>
      <!--DBからデータを取得して表示-->
      <td><input type="checkbox" name="{{$recipearray[]}}" value="{{$recipearray[$i]}}"><label>{{$recipearray[$i]}}</label></td></td>
      <td><input type="checkbox" name="{{$recipearray[]}}" value="{{$recipearray[$i+1]}}"><label>{{$recipearray[$i+1]}}</label></td></td>
    }
    </tr>
    </table>
    <input type="submit" value="確定">
@endsection
