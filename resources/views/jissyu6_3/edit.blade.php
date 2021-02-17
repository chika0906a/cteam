@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
管理ユーザー情報更新画面
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
      
      <tr><th>id: </th><td><input type="number" name="id" value="{{$item->id}}"></td></tr>
    <tr><th>name: </th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>
    <tr><th>email: </th><td><input type="text" name="email" value="{{$item->email}}"></td></tr>
    <tr><th>password: </th><td><input type="text" name="password" value="{{$item->password}}"></td></tr>


    <tr><th></th><td><input type="submit" value="更新"></td></tr>
   </table>
   <td><button type="button" onclick="history.back()">戻る</button></td>
   </form>
@endsection

@section('footer')

@endsection
