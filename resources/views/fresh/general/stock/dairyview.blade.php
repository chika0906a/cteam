@extends('layouts.freshgeneralB')
@section('title', '▲在庫一覧')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">冷蔵庫の在庫</FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../../images/base1.png'/>
</div>
@endsection

@section('content2')
  <h2>乳製品</h2>
  <table>
      @foreach($items as $item)
          <tr>
          <td>{{$item->ingredients_name}}</td>
          <td>{{$item->quantity}}</td>
          </tr>
      @endforeach
    </table>
    <button type="button" onclick="history.back()">在庫一覧に戻る</button> 
@endsection