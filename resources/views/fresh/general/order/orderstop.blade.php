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

@section('content7')
  
 <button type="button" onclick="history.back()">前の画面に戻る</button> 

<a href='/fresh/general/mypage'>
<img src='../../images/image19.png'/>

<br><br><br>
<div class="disp_img">
 <a href='/fresh/general/vegeview2'>
 <img src='../../images/2野菜.png' width="50" height="80">
 </a>
 <a href='/fresh/general/meatview2'>
 <img src='../../images/2肉.png' width="50" height="80">
 </a>
 <a href='/fresh/general/fishview2'>
 <img src='../../images/2魚.png' width="50" height="80">
 </a>
 <a href='/fresh/general/dairyview2'>
 <img src='../../images/2乳製品.png' width="50" height="80">
 </a>
 <a href='/fresh/general/otherview2'>
 <img src='../../images/2その他.png' width="50" height="80">
 </a>
</div>
</div>
</div>
</div>
@endsection