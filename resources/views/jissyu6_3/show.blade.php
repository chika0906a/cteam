@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
管理ユーザー情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th>
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')

@endsection
