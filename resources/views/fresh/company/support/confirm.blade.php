@extends('layouts.fresh')

@section('title', '')

@section('menu_title')
確認画面
@endsection

@section('content')
  <form action="/fresh/company/supportfinish" method="post">
  @csrf
  <table>
  <tr><th>登録メールアドレス</th><td>{{$data['company_mail']}}
  <input type="hidden" name="company_mail" value="{{ $data['company_mail']}}"></td></tr>
  <tr><th>連絡用メールアドレス</th><td>{{$data['support_mail']}}
  <input type="hidden" name="support_mail" value="{{ $data['support_mail']}}"></td></tr>
  <tr><th>お問い合わせ内容</th><td>{{$data['support_text']}}
  <input type="hidden" name="support_text" value="{{ $data['support_text']}}"></td></tr>
  上記の内容でよろしければ「送信」ボタンを押してください。
  <tr><th></th><td>
  </td><td><button type="submit" id="submit">送信</button></td>
  </table>
  </form>
@endsection

@section('content1')
<a href="/fresh/company/mypage" class="circle_spread_btn"style=font-size:15pt;>🏠<i class="fas fa-home fa-fw"></i></a>
<a href="javascript:history.back()" class="pochitto_btn_blue" style=font-size:10pt;>戻る</a>


  
@endsection

@section('footer')
copyright 2020 teamc.
@endsection