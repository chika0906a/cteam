@extends('layouts.jissyu')

@section('title', '企 業 ユ ー ザ ー 一 覧')

@section('menu_title')

@endsection

@section('content')
    <form action="fresh/management/company/find" method="post">
    @csrf
    
    </form>
   <a href="fresh/management/company/add">追加</a>
   <table>
   <tr><th>Company_id</th><th>Password</th><th>Company_name</th>
   <th>Company_mail</th><th>Area_id</th>
   <th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->company_id}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->company_name}}</td>
           <td>{{$item->company_mail}}</td>
           <td>{{$item->area_id}}</td>

           <td><a href="fresh/management/company/show?company_id={{$item->company_id}}">詳細</a></td>
           <td><a href="fresh/management/company/edit?company_id={{$item->company_id}}">変更</a></td>
           <td><a href="fresh/management/company/del?company_id={{$item->company_id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<td><button type="button" onclick="history.back()">戻る</button></td>!-->
   <a href="http://localhost:8000/fresh/management/hello/top" class="btn btn-warning">戻る</a>未確定
@endsection


