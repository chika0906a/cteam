@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
企業ユーザー削除画面
@endsection

@section('content')
   <form action="/company2/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="company_id" value="{{$item->company_id}}">

      <tr><th>企業ID: </th><td>{{$item->company_id}}</td></tr>
      <tr><th>企業名: </th><td>{{$item->company_name}}</td></tr>
      <tr><th>企業Eメール: </th><td>{{$item->company_mail}}</td></tr>
      <tr><th>パスワード: </th><td>{{$item->password}}</td></tr>
      <tr><th>area_id: </th><td>{{$item->area_id}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection
