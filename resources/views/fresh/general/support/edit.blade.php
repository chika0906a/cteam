@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報更新画面
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
   <form action="/jissyu14/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      
      <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
    <tr><th>password: </th><td><input type="number" name="password" value="{{old('password')}}"></td></tr>
    <tr><th>gender: </th><td><input type="text" name="gender" value="{{old('gender')}}"></td></tr>
    <tr><th>date: </th><td><input type="number" name="date" value="{{old('date')}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{old('area_id')}}"></td></tr>
    <tr><th>station_id: </th><td><input type="text" name="station_id" value="{{old('station_id')}}"></td></tr>
    <tr><th>people_ind: </th><td><input type="number" name="people_ind" value="{{old('people_ind')}}"></td></tr>
    <tr><th>nickname: </th><td><input type="text" name="nickname" value="{{old('nickname')}}"></td></tr>

    <tr><th></th><td><input type="submit" value="更新"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
