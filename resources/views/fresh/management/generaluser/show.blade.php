@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
一般ユーザー詳細画面

@endsection
@section('content')
   <table>
   <tr><th>id</th><th>name</th><th>email</th><th>password</th>
   <th>gender</th><th>birthday</th>
   <th>area_id</th><th>station_id</th><th>people_ind</th></tr>
       <tr>
       　　<td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->gender}}</td>
           <td>{{$item->birthday}}</td>
           <td>{{$item->area_id}}</td>
           <td>{{$item->station_id}}</td>
           <td>{{$item->people_ind}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection
