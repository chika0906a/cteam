@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
企業ユーザー削除画面
@endsection

@section('content')
   <form action="fresh/management/company/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="company_id" value="{{$item->company_id}}">

      <tr><th>company_id: </th><td>{{$item->company_id}}</td></tr>
      <tr><th>password: </th><td>{{$item->password}}</td></tr>
      <tr><th>company_name: </th><td>{{$item->company_name}}</td></tr>
      <tr><th>company_mail: </th><td>{{$item->company_mail}}</td></tr>
      <tr><th>area_id: </th><td>{{$item->area_id}}</td></tr>

    <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection
