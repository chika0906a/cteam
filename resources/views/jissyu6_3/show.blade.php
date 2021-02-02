@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報詳細画面

@endsection
@section('content')
   <table>
   <tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th>
   <th>Gender</th><th>Date</th><th>Area_id</th><th>Station_id</th><th>People_ind</th>
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->gender}}</td>
           <td>{{$item->date}}</td>
           <td>{{$item->area_id}}</td>
           <td>{{$item->station_id}}</td>
           <td>{{$item->people_ind}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
