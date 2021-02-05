@extends('layouts.fresh3')

@section('title', '')

@section('menu_title')

@endsection
@section('content')
<h1><?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white"> 新規登録 </FONT>';
?></h1>
@endsection
@section('content1')

  @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
  @endif
  <form action="/fresh/signupconfirm" method="post">
  @csrf
  
    @error('company_name')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr><br>
    @enderror
    <tr><th><?PHP

ECHO '<FONT COLOR="black">      企業名 </FONT>';
?></th><td><input type="text" name="company_name" value="{{ old('company_name') }}"></td></tr><br>
    @error('company_mail')
      <tr><th>ERROR</th>
      <td>{{$message}}</td></tr>
    @enderror
    <tr><th>          <?PHP

ECHO '<FONT COLOR="black"> メール </FONT>';
?>        </th><td><input  type="mail" name="company_mail" value="{{ old('company_mail') }}"></td></tr><br>
    <tr><th>*****</th><td><input style=background-color:aqua;border-color:white;color:white;width:165px;height:50px;font-size:15pt; type="submit" value="確認"></td></tr>
  </table>
  </form>
@endsection

@section('footer')
copyright 2021   teamc.
@endsection