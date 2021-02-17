@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
一般ユーザー追加画面
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
   <form action="/generaluser2/create" method="post">
   <table>
      @csrf
    <tr><th>ユーザーID: </th><td><input type="text" name="id" value="{{old('id')}}"></td></tr>
    <tr><th>名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>Eメール: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
    <tr><th>パスワード: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
    <tr><th>性別: </th><td><input type="text" name="gender" value="{{old('gender')}}"></td></tr>
    <tr><th>生年月日: </th><td><input type="date" name="birthday" value="{{old('birthday')}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{old('area_id')}}"></td></tr>
    <tr><th>station_id: </th><td><input type="text" name="station_id" value="{{old('station_id')}}"></td></tr>
    <tr><th>people_ind: </th><td><input type="number" name="people_ind" value="{{old('people_ind')}}"></td></tr>
    


    <tr><th></th><td><input type="submit" value="追加"></td></tr>
    <td><button type="button" onclick="history.back()">戻る</button></td>
   </table>
   </form>
@endsection
