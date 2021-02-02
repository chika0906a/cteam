@extends('layouts.jissyu')

@section('title', 'fresh')

@section('menu_title')
新規登録
@endsection

@section('content')
  @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="post/create2" method="post">
  @csrf
  <table>
    @error('name')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror

    <!-- それぞれのカラムの入力フォーム　-->
    <tr><th>企業名</th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>
    @error('company_mail')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>メールアドレス</th><td><input type="mail" name="email" value="{{ old('email') }}"></td></tr>
    @error('password')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>パスワード</th><td><input type="text" name="password" value="{{ old('password') }}"></td></tr>
    <tr><th></th><td><input type="submit" value="確認"></td></tr>
  </table>
  </form>
@endsection

@section('footer')
copyright 2020 teamc.
@endsection