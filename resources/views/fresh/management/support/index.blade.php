@extends('layouts.jissyu')

@section('title', 'お問い合わせ一覧（一般ユーザー）')

@section('menu_title')

@endsection

@section('content')
    <form action="fresh/management/support/find" method="post">
    @csrf
    
    </form>
   
   <table>
   <tr><th>Support_num</th><th>Mail</th><th>Support_mail</th><th>Day</th>
   <th>Support_text</th>
   <th>Select</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->support_num}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->support_mail}}</td>
           <td>{{$item->day}}</td>
           <td>{{$item->support_text}}</td>

           <td><a href="fresh/management/support/show?support_num={{$item->support_num}}">詳細</a></td>
           <td><a href="fresh/management/support/del?support_num={{$item->support_num}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<button type="button" onclick="history.back()">戻る</button>!-->
   <a href="http://localhost:8000/fresh/management/hello/top" class="btn btn-warning">戻る</a>未確定
@endsection
