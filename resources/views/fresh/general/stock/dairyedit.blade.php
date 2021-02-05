@extends('layouts.freshgeneral')

@section('title', '')
@section('menu_title')
@endsection

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">数量変更画面 </FONT>';
?><p>
@endsection


@section('content1')
<div class="disp_img">
<div style="position: relative; display:inline-block;">
<img src="../../images/base.png" width="350" height="310"> 
<div style="position: absolute; top: 0; left: 0; max-width: 100%; max-height: 100%; padding: 30px; text-align: left;">


<br><br><br><br><br><br><br><br>

<div class="disp_img">

<table>
  <h2>乳製品</h2>
    <form action="/fresh/general/stockedit" method="post">
    @csrf
      @foreach($items as $item)
          <input type="hidden" name="mail" value="{{$item->mail}}">
          <tr>
          <td><input type="checkbox" name="itemsarray[]" value="{{$item->ingredients_id}}"><label>{{$item->ingredients_name}}</label></td>
          <td><input type="number" name="quantity[{{$item->ingredients_id}}]" value="{{$item->quantity}}"></td>
          </tr>
      @endforeach
    </table>
    <input type="submit" value="更新"/>

 <button type="button" onclick="history.back()">前の画面に戻る</button> 

 <a href='/fresh/general/mypage'>
 <img src='../../images/image19.png'/>

 <br><br><br>
 <div class="disp_img">
  <a href='/fresh/general/vegeedit'>
  <img src='../../images/2野菜.png' width="50" height="80">
  <a href='/fresh/general/meatedit'>
  <img src='../../images/2肉.png' width="50" height="80">
  <a href='/fresh/general/fishedit'>
  <img src='../../images/2魚.png' width="50" height="80">
  <a href='/fresh/general/dairyedit'>
  <img src='../../images/2乳製品.png' width="50" height="80">
  <a href='/fresh/general/otheredit'>
  <img src='../../images/2その他.png' width="50" height="80">
</div>
</div>
 </div>
</div>
@endsection

@section('content2')


@endsection

@section('content3')




@endsection


@section('footer')
@endsection
