@extends('layouts.fresh')

@section('title', '')

@section('menu_title')
お問い合わせ
@endsection

@section('content')
  @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="/fresh/company/supportconfirm" method="post">
  @csrf
  <table>
    @error('company_mail')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>登録メールアドレス</th><td><input type="text" name="company_mail" value="{{ old('company_mail') }}"></td></tr>
    @error('support_mail')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>連絡用メールアドレス</th><td><input type="mail" name="support_mail" value="{{ old('support_mail') }}"></td></tr>
    @error('support_text')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>お問い合わせ内容</th><td><textarea name="support_text"></textarea>
    <tr><th></th><td><input type="submit" value="確認"></td></tr>
  </table>
  </form>
@endsection

@section('content1')
  <!--<a href="/fresh/company/mypage">マイページに戻る</a>!-->
  <a href="javascript:history.back()" class="pochitto_btn_blue" style=font-size:10pt;>戻る</a>
@endsection

@section('footer')
copyright 2020 teamc.
@endsection