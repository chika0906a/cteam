@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
企業ユーザー更新画面
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
   <form action="/company2/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="company_id" value="{{$item->company_id}}">

    <tr><th>企業名: </th><td><input type="text" name="company_name" value="{{$item->company_name}}"></td></tr>
    <tr><th>企業Eメール: </th><td><input type="text" name="company_mail" value="{{$item->company_mail}}"></td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password" value="{{$item->password}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{$item->area_id}}"></td></tr>

    <tr><th></th><td><input type="submit" value="更新"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection


