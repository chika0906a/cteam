@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
企業ユーザー詳細画面

@endsection
@section('content')
   <table>
   <tr><th>Company_id</th><th>Password</th><th>Company_name</th>
   <th>Company_mail</th><th>Area_id</th>
       <tr>
       　　<td>{{$item->company_id}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->company_name}}</td>
           <td>{{$item->company_mail}}</td>
           <td>{{$item->area_id}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection
