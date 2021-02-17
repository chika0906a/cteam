@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
一般ユーザー更新画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/generaluser2/update" method="post">
   <table>
      @csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <tr><th>名前: </th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>
    <tr><th>Eメール: </th><td><input type="text" name="email" value="{{$item->email}}"></td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password" value="{{$item->password}}"></td></tr>
    <tr><th>性別: </th><td><input type="text" name="gender" value="{{$item->gender}}"></td></tr>
    <tr><th>生年月日: </th><td><input type="date" name="birthday" value="{{$item->birthday}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{$item->area_id}}"></td></tr>
    <tr><th>station_id: </th><td><input type="text" name="station_id" value="{{$item->station_id}}"></td></tr>
    <tr><th>people_ind: </th><td><input type="number" name="people_ind" value="{{$item->people_ind}}"></td></tr>
    <tr><th></th><td><input type="submit" value="更新"></td></tr>
    <td><button type="button" onclick="history.back()">戻る</button></td>
   </table>
   </form>
@endsection


