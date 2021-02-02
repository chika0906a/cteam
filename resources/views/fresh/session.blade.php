@extends('layouts.helloapp')

@section('title','Session')

@section('menubar')
  @parent
@endsection

@section('content')
  <P>{{$session_data}}</p>
  <form action="/hello/session" method="post">
  @csrf
  <input type="text" name="input">
  <input type="submit" value="send">
  </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection