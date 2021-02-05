@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
一般ユーザー削除画面
@endsection

@section('content')
   <form action="fresh/management/generaluser/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">

      <tr><th>id: </th><td>{{$item->id}}</td></tr>
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>email: </th><td>{{$item->email}}</td></tr>
      <tr><th>password: </th><td>{{$item->password}}</td></tr>
      <tr><th>gender: </th><td>{{$item->gender}}</td></tr>
      <tr><th>birthday: </th><td>{{$item->birthday}}</td></tr>
      <tr><th>area_id: </th><td>{{$item->area_id}}</td></tr>
      <tr><th>station_id: </th><td>{{$item->station_id}}</td></tr>
      <tr><th>people_ind: </th><td>{{$item->people_ind}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
    <td><button type="button" onclick="history.back()">戻る</button></td>
   </table>
   </form>
@endsection


