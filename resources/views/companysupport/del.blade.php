@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
お問い合わせ削除画面（企業ユーザー）
@endsection

@section('content')
   <form action="/companysupport/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="support_num" value="{{$item->support_num}}">

      <tr><th>support_num: </th><td>{{$item->support_num}}</td></tr>
      <tr><th>mail: </th><td>{{$item->mail}}</td></tr>
      <tr><th>support_mail: </th><td>{{$item->support_mail}}</td></tr>
      <tr><th>day: </th><td>{{$item->day}}</td></tr>
      <tr><th>support_text: </th><td>{{$item->support_text}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection

