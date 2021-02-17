@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
企業ユーザー追加画面
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
   <form action="/company2/create" method="post">
   <table>
      @csrf
    <tr><th>企業ID: </th><td><input type="text" name="company_id" value="{{old('company_id')}}"></td></tr>
    <tr><th>企業名: </th><td><input type="text" name="company_name" value="{{old('company_name')}}"></td></tr>
    <tr><th>企業Eメール: </th><td><input type="text" name="company_mail" value="{{old('company_mail')}}"></td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{old('area_id')}}"></td></tr>
    


    <tr><th></th><td><input type="submit" value="追加"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection
