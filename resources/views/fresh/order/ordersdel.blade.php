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
  <h2>買い物リスト削除画面</h2>
    <table>
    <form action="/fresh/ordersdel" method="post">
    @csrf
      @foreach($items as $item)
          <tr>
          <td><input type="checkbox" name="itemsarray[]" value="{{$item->ingredients_id}}"><label>{{$item->ingredients_name}}</label></td>
          <td><input type="number" name="quantity[{{$item->ingredients_id}}]" value="{{$item->quantity}}"></td>
      </tr>
      @endforeach
    </table>
    <input type="submit" value="削除">
@endsection