@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
一般ユーザー削除画面
@endsection

@section('content')
   <form action="/generaluser2/remove" method="post">
   <table>
      @csrf

      <input type="hidden" name="id" value="{{$item->id}}">

      <tr><th>ユーザーID: </th><td>{{$item->id}}</td></tr>
      <tr><th>名前: </th><td>{{$item->name}}</td></tr>
      <tr><th>Eメール: </th><td>{{$item->email}}</td></tr>
      <tr><th>パスワード: </th><td>{{$item->password}}</td></tr>
      <tr><th>性別: </th><td>{{$item->gender}}</td></tr>
      <tr><th>生年月日: </th><td>{{$item->birthday}}</td></tr>
      <tr><th>地域ID: </th><td>{{$item->area_id}}</td></tr>
      <tr><th>駅ID: </th><td>{{$item->station_id}}</td></tr>
      <tr><th>世帯構成番号: </th><td>{{$item->people_ind}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
    <td><button type="button" onclick="history.back()">戻る</button></td>
   </table>
   </form>
@endsection


