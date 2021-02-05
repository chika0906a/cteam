@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
一般ユーザー更新画面
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
   <form action="fresh/management/generaluser/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="company_id" value="{{$item->company_id}}">
    <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>email: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
    <tr><th>password: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
    <tr><th>gender: </th><td><input type="text" name="gender" value="{{old('gender')}}"></td></tr>
    <tr><th>birthday: </th><td><input type="date" name="birthday" value="{{old('birthday')}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{old('area_id')}}"></td></tr>
    <tr><th>station_id: </th><td><input type="text" name="station_id" value="{{old('station_id')}}"></td></tr>
    <tr><th>people_ind: </th><td><input type="number" name="people_ind" value="{{old('people_ind')}}"></td></tr>

    <tr><th></th><td><input type="submit" value="更新"></td></tr>
    <td><button type="button" onclick="history.back()">戻る</button></td>
   </table>
   </form>
@endsection

