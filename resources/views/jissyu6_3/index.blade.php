@extends('layouts.jissyu')

@section('title', '管 理 ユ ー ザ ー 一 覧')

@section('menu_title')

@endsection

@section('content')
    <form action="/jissyu14/find" method="post">
    @csrf
    </form>
   <table>
   <tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th>
   <th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>

           <td><a href="/jissyu14/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/jissyu14/edit?id={{$item->id}}">変更</a></td>
           <td><a href="/jissyu14/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<td><button type="button" onclick="history.back()">戻る</button></td>!-->
   <a href="http://localhost:8000/hello2/top" class="btn btn-warning">戻る</a>
@endsection

@section('footer')

@endsection
