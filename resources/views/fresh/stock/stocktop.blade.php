@extends('layouts.freshgeneralB')

@section('title', '')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">冷蔵庫の中身一覧 </FONT>';
?><p>
@endsection



@section('content1')
<div class="disp_img">
  <img src='../images/base1.png'/>
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
  <br>
 <a href="/fresh/stockdel">削除</a>
 <a href="/fresh/stockedit">数量変更</a>
 <a href="/fresh/stockaddtop">追加</a>
 
<a href='/fresh/generalmypage'>
<img src='../images/image19.png'/>


 @endsection

 @section('content3')
 <br><br><br>
 <div class="disp_img">
  <a href='/fresh/vegeview'>
  <img src='../images/2野菜.png' width="50" height="80">
  <a href='/fresh/meatview'>
  <img src='../images/2肉.png' width="50" height="80">
  <a href='/fresh/fishview'>
  <img src='../images/2魚.png' width="50" height="80">
  <a href='/fresh/dairyview'>
  <img src='../images/2乳製品.png' width="50" height="80">
  <a href='/fresh/otherview'>
  <img src='../images/2その他.png' width="50" height="80">
</div>
</div>
 </div>
</div>
@endsection