@extends('layouts.jissyu')

@section('title', '企 業 ユ ー ザ ー 一 覧')

@section('menu_title')

@endsection

@section('content')
    <form action="/company2/find" method="post">
    @csrf
    
    </form>
   <a href="/company2/add">追加</a>
   <table>
   <tr><th>企業ID</th><th>企業名</th>
   <th>企業Eメール</th><th>パスワード</th><th>地域</th>
   <th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->company_id}}</td>
           <td>{{$item->company_name}}</td>
           <td>{{$item->company_mail}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->area_name}}</td>

           <td><a href="/company2/show?company_id={{$item->company_id}}">詳細</a></td>
           <td><a href="/company2/edit?company_id={{$item->company_id}}">変更</a></td>
           <td><a href="/company2/del?company_id={{$item->company_id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<td><button type="button" onclick="history.back()">戻る</button></td>!-->
   <a href="http://localhost:8000/hello2/top" class="btn btn-warning">戻る</a>
@endsection


