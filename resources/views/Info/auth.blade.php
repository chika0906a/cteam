@extends('layouts.app')

@section('title','ユーザー認証')

@section('menubar')
  @parent
  ユーザー認証ページ
@endsection

@section('content')
<p>{{$message}}</p>
  <form action="/hello/auth" method="post">
  <table>
  @csrf
  <tr><th>mail:</th><td><input type="text"
    name="email"></td></tr>
    <tr><th>pass:</th><td><input type="password"
    name="password"></td></tr>
    <tr><th></th><td><input type="submit"
    name="send"></td></tr>
  </form>
@endsection

