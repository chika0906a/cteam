@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
<br>
一般ユーザー詳細画面
@endsection
@section('content')
   <table>
   <tr><th>ユーザーID</th><th>名前</th><th>Eメール</th><th>パスワード</th>
   <th>性別</th><th>生年月日</th>
   <th>地域ID</th><th>駅ID</th><th>世帯構成番号</th></tr>
       <tr>
       　　<td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->password}}</td>
           <td>{{$item->gender}}</td>
           <td>{{$item->birthday}}</td>
           <td>{{$item->area_id}}</td>
           <td>{{$item->station_id}}</td>
           <td>{{$item->people_ind}}</td>
       </tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
@endsection
