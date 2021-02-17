@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
企業ユーザー詳細画面

@endsection
@section('content')
   <table>
   <tr><th>企業ID</th><th>企業名</th>
   <th>企業Eメール</th><th>パスワード</th><th>area_id</th>
       <tr>
       　　<td>{{$item->company_id}}</td>
           <td>{{$item->company_name}}</td>
           <td>{{$item->company_mail}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->area_id}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection
