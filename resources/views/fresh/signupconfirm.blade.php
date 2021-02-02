@extends('layouts.fresh')

@section('title', 'fresh')

@section('menu_title')
確認画面
@endsection

@section('content')
  <form action="/fresh/signupfinish" method="post">
  @csrf
  <table>
  <tr><th>企業名</th><td>{{$data['company_name']}}
  <input type="hidden" name="company_name" value="{{ $data['company_name']}}"></td></tr>
  <tr><th>メールアドレス</th><td>{{$data['company_mail']}}
  <input type="hidden" name="company_mail" value="{{ $data['company_mail']}}"></td></tr>
  上記の内容でよろしければ送信をクリックしてください。
  <tr><th></th><td><button type="button" onclick="history.back()">戻る</button> </td><td><button type="submit" id="submit">送信</button></td>
  </table>
  </form>
@endsection

@section('footer')
copyright 2020 teamc.
@endsection