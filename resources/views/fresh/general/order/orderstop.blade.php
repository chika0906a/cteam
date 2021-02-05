@extends('layouts.freshgeneralB')
@section('title', '')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">買い物リスト </FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
<img src="../../images/base1.png">
</div>
@endsection


@section('content2')
  <table>
    @foreach($items as $item)
      <tr>
          <td>{{$item->ingredients_name}}</td>
          <td>{{$item->quantity}}</td>
      </tr>
    @endforeach
  </table>
  <a href="/fresh/general/ordersadd">リストに追加</a>
  <a href="/fresh/general/ordersbuy">購入チェック</a>
  <a href="/fresh/general/ordersdel">リストから削除</a>
@endsection

@section('content3')
<a href='/fresh/general/mypage'>
<img src='../../images/image19.png'/>
@endsection
