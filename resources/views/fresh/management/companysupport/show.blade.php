@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
お問い合わせ詳細画面(企業ユーザー）

@endsection
@section('content')
   <table>
   <tr><th>Support_num</th><th>Company_mail</th><th>Support_mail</th>
   <th>Day</th><th>Support_text</th>
       <tr>
           <td>{{$item->support_num}}</td>
           <td>{{$item->mail}}</td>
           <td>{{$item->support_mail}}</td>
           <td>{{$item->day}}</td>
           <td>{{$item->support_text}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection


