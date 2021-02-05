@extends('layouts.jissyu')

@section('title', '一 般 ユ ー ザ ー 一 覧')

@section('menu_title')

@endsection

@section('content')
    <form action="fresh/management/generaluser/find" method="post">
    @csrf
    
    </form>
   <a href="fresh/management/generaluser/add">追加</a>
   <table>
   <tr><th>id</th><th>name</th><th>email</th><th>password</th>
   <th>gender</th><th>birthday</th>
   <th>area_id</th><th>station_id</th><th>people_ind</th>
   <th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
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

           <td><a href="fresh/management/generaluser/show?id={{$item->id}}">詳細</a></td>
           <td><a href="fresh/management/generaluser/edit?id={{$item->id}}">変更</a></td>
           <td><a href="fresh/management/generaluser/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<td><button type="button" onclick="history.back()">戻る</button></td>!-->
   <a href="http://localhost:8000/fresh/management/hello/top" class="btn btn-warning">戻る</a>未確定
@endsection
