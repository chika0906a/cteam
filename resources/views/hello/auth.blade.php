@extends('layouts.app')

@section('title','ユーザー認証')

@section('menuber')
   @parent
   ユーザー認証ページ
  @endsection

  @section('content')
  <p>{{$message}}</p>
   <form action="/hello2/auth" method="post">
   <table>
    @csrf
    <tr><th>Eメール : </th><td><input type="text"
    name="email"></td></tr>

    <tr><th>パスワード : </th><td><input type="password"
    name="password"></td></tr>

    <tr><th></th><td><input type="submit"
    value="ログイン"></td></tr>
    </table>
    </form>
  @endsection

  @section('footer')
  copyright 2020 tuyano.
  @endsection
  
