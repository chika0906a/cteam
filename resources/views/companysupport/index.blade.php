@extends('layouts.jissyu')

@section('title', 'お問い合わせ一覧（企業ユーザー）')

@section('menu_title')

@endsection

@section('content')
    <form action="/companysupport2/find" method="post">
    @csrf
    
    </form>
   
   <table>
   <tr><th>お問い合わせ番号</th><th>Eメール</th><th>連絡用Eメール</th>
   <th>日付</th><th>お問い合わせ内容</th>
   <th>Select</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->support_num}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->support_mail}}</td>
           <td>{{$item->day}}</td>
           <td>{{$item->support_text}}</td>

           <td><a href="/companysupport2/show?support_num={{$item->support_num}}">詳細</a></td>
           <td><a href="/companysupport2/del?support_num={{$item->support_num}}">削除</a></td>
       </tr>
   @endforeach
   </table>
   <!--<button type="button" onclick="history.back()">戻る</button>!-->
   <a href="http://localhost:8000/hello2/top" class="btn btn-warning">戻る</a>
@endsection


