@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
お問い合わせ削除画面（企業ユーザー）
@endsection

@section('content')
   <form action="/companysupport2/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="support_num" value="{{$item->support_num}}">

      <tr><th>お問い合わせ番号: </th><td>{{$item->support_num}}</td></tr>
      <tr><th>Eメール: </th><td>{{$item->mail}}</td></tr>
      <tr><th>連絡用Eメール: </th><td>{{$item->support_mail}}</td></tr>
      <tr><th>日付: </th><td>{{$item->day}}</td></tr>
      <tr><th>お問い合わせ内容: </th><td>{{$item->support_text}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection

