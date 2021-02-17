@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
管理ユーザー情報削除画面
@endsection

@section('content')
   <form action="/jissyu14/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">

      <tr><th>id: </th><td>{{$item->id}}</td></tr>
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>email: </th><td>{{$item->email}}</td></tr>
      <tr><th>password: </th><td>{{$item->password}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   <td><button type="button" onclick="history.back()">戻る</button></td>
   </form>
@endsection

@section('footer')

@endsection
