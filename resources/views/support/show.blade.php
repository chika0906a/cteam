@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
お問い合わせ詳細画面（一般ユーザー）

@endsection
@section('content')
   <table>
   <tr><th>お問い合わせ番号</th><th>Eメール</th><th>連絡用Eメール</th><th>日付</th>
   <th>お問い合わせ内容</th>
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


