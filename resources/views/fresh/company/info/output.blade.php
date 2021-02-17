@extends('layouts.jissyu10')

@section('title', 'Jissyu10')

@section('menu_title')
ユーザ情報確認画面
@endsection

@section('content')
<form action="/fresh/company/infofinish" method="post">
  @csrf
  <table>
    <tr><th>送信するユーザーの登録駅</th><td>{{$items2['station_name']}}
    <input type="hidden" name="station_id" value="{{ $items2['station_id']}}"></td></tr>
    <tr><th>日付</th><td>{{$items2['day1']}}
    <input type="hidden" name="day1" value="{{ $items2['day1']}}"></td></tr>
    <tr><th>お知らせタイトル</th><td>{{$items2['info_title']}}
    <input type="hidden" name="info_title" value="{{ $items2['info_title']}}"></td></tr>
    <tr><th>お知らせ内容</th><td>{{$items2['info_text']}}
    <input type="hidden" name="info_text" value="{{ $items2['info_text']}}"></td></tr>
    上記の内容でよろしければ「送信」ボタンを押してください。
    <tr><th></th><td>
</td><td><button type="submit" id="submit">送信</button></td>
    </table>
    <a href="/fresh/company/mypage" class="circle_spread_btn"style=font-size:15pt;>🏠<i class="fas fa-home fa-fw"></i></a>
    <a href="javascript:history.back()" class="pochitto_btn_blue" style=font-size:10pt;>戻る</a>

  </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection
