@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザー追加画面
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
   <form action="/jissyu14/create" method="post">
   <table>
      @csrf
    <tr><th>id: </th><td><input type="number" name="id" value="{{old('id')}}"></td></tr>
    <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>email: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
    <tr><th>password: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
    <tr><th>gender: </th><td><input type="text" name="gender" value="{{old('gender')}}"></td></tr>
    <tr><th>date: </th><td><input type="number" name="date" value="{{old('date')}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{old('area_id')}}"></td></tr>
    <tr><th>station_id: </th><td><input type="text" name="station_id" value="{{old('station_id')}}"></td></tr>
    <tr><th>people_ind: </th><td><input type="number" name="people_ind" value="{{old('people_ind')}}"></td></tr>


    <tr><th></th><td><input type="submit" value="追加"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
