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
  <img src='../images/base1.png'/>
</div>
@endsection

@section('content2')
  <h2>野菜</h2>
  <table>
    <form action="/fresh/ordercreate" method="post">
    @csrf
      @foreach($items as $item)
          <tr>
          <!--選択した食材のIDをitemsarray配列に格納・その数量をIDをキーとしてquantity配列に格納-->
          <td><input type="checkbox" name="itemsarray[]" value="{{$item->ingredients_id}}"><label>{{$item->ingredients_name}}</label></td>
          <td><input type="number" name="quantity[{{$item->ingredients_id}}]"></td>
          </tr>
      @endforeach
    </table>
    <input type="submit" value="追加">
    <button type="button" onclick="history.back()">種類選択に戻る</button> 
@endsection