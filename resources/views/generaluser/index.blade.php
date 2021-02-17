@extends('layouts.jissyu')

@section('title', '一 般 ユ ー ザ ー 一 覧')

@section('menu_title')

@endsection

@section('content')
    <form action="/generaluser2/find" method="post">
    @csrf
    
    </form>
   <a href="/generaluser2/add">追加</a>
   <table>
   <tr><th>ユーザーID</th><th>名前</th><th>Eメール</th><th>パスワード</th>
   <th>性別</th><th>生年月日</th>
   <th>地域</th><th>最寄り駅</th><th>世帯構成</th>
   <th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->gender}}</td>
           <td>{{$item->birthday}}</td>
           <td>{{$item->area_name}}</td>
           <td>{{$item->station_name}}</td>
           <td>{{$item->people_num}}</td>

           <td><a href="/generaluser2/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/generaluser2/edit?id={{$item->id}}">変更</a></td>
           <td><a href="/generaluser2/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<td><button type="button" onclick="history.back()">戻る</button></td>!-->
   <a href="http://localhost:8000/hello2/top" class="btn btn-warning">戻る</a>
@endsection
