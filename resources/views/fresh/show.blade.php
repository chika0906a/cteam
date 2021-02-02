@extends('layouts.helloapp')

@section('title','松澤拓巳ファンクラブ')

@section('menubar')
    @parent
   まっつー
@endsection

@section('content')
 @if ($items != null)
 @foreach($items as $item)
  <table width="400px">
  <tr><th width="50px">id:</th>
  <td width="50px">{{$item->id}}</td>
  <th width="50px">name:</th>
  <td>{{$item->name}}</td></tr> 
 </table>
 @endforeach
 @endif
@endsection

@section('footer')
©松澤カンパニー
@endsection