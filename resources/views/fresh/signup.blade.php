@extends('layouts.fresh')

@section('title', 'fresh')

@section('menu_title')
新規登録
@endsection

@section('content')
  @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="/fresh/signupconfirm" method="post">
  @csrf
  <table>
    @error('company_name')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>企業名</th><td><input type="text" name="company_name" value="{{ old('company_name') }}"></td></tr>
    @error('company_mail')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>メールアドレス</th><td><input type="mail" name="company_mail" value="{{ old('company_mail') }}"></td></tr>
    <tr><th></th><td><input type="submit" value="確認"></td></tr>
  </table>
  </form>
@endsection

@section('footer')
copyright 2020 teamc.
@endsection