@extends('layouts.jissyu')

@section('title', 'ユ ー ザ ー 一 覧')

@section('menu_title')

@endsection

@section('content')
    <form action="/jissyu14/find" method="post">
    @csrf
    
    </form>
   <a href="/jissyu14/add">追加</a>
   <table>
   <tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th>
   <th>Gender</th><th>Date</th><th>Area_id</th><th>Station_id</th><th>People_ind</th>
   <th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
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

           <td><a href="/jissyu14/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/jissyu14/edit?id={{$item->id}}">変更</a></td>
           <td><a href="/jissyu14/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <td><button type="button" onclick="history.back()">戻る</button></td>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
