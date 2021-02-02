@extends('layouts.fresh')

@section('title', 'fresh')

@section('menu_title')
確認画面
@endsection

@section('content')
  <form action="/fresh/companysupportfinish" method="post">
  @csrf
  <table>
  <tr><th>登録メールアドレス</th><td>{{$data['company_mail']}}
  <input type="hidden" name="company_mail" value="{{ $data['company_mail']}}"></td></tr>
  <tr><th>連絡用メールアドレス</th><td>{{$data['support_mail']}}
  <input type="hidden" name="support_mail" value="{{ $data['support_mail']}}"></td></tr>
  <tr><th>お問い合わせ内容</th><td>{{$data['support_text']}}
  <input type="hidden" name="support_text" value="{{ $data['support_text']}}"></td></tr>
  上記の内容でよろしければ「送信」ボタンを押してください。
  <tr><th></th><td><button type="button" onclick="history.back()">戻る</button> </td><td><button type="submit" id="submit">送信</button></td>
  </table>
  </form>
@endsection

@section('content1')
  <a href="companymypage">マイページに戻る</a>
@endsection

@section('footer')
copyright 2020 teamc.
@endsection