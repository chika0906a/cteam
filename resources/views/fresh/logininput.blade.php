<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">

@extends('layouts.fresh')

@section('title', '')

@section('menu_title')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white"> ログイン画面 </FONT>';
?>
<img src="ict/documents/冷蔵.jpg">
@endsection


@section('content')
   <p>{{$msg}}</p>
   @if (count($errors) > 0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
   <form action="/companymypage" method="post">
       @csrf
       <tr><th>メールアドレス: </th><td><input type="text" name="login_id" value="{{old('login_id')}}"></td></tr>
       @if ($errors->has('login_id'))
       <tr><th></th><td><font color="red">{{$errors->first('login_id')}}</font></td></tr>
       @endif
       <tr><th>パスワード: </th><td><input type="password" name="password" value=""></td></tr>
       @if ($errors->has('password'))
       <tr><th></th><td><font color="red">{{$errors->first('password')}}</font></td></tr>
       @endif
       
   </table>
   </form>

   
@endsection


@section('content')
   <p>{{$msg}}</p>
   @if (count($errors) > 0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
   <form action="/fresh/login" method="post">
       @csrf
       <tr><th>メールアドレス: </th><td><input type="text" name="login_id" value="{{old('login_id')}}"></td></tr>
       @if ($errors->has('login_id'))
       <tr><th></th><td><font color="red">{{$errors->first('login_id')}}</font></td></tr>
       @endif
       <tr><th>パスワード: </th><td><input type="password" name="password" value=""></td></tr>
       @if ($errors->has('password'))
       <tr><th></th><td><font color="red">{{$errors->first('password')}}</font></td></tr>
       @endif
   </table>
   </form>

   
@endsection
@section('footer')
@section('content1')
   <p>{{$msg}}</p>
   @if (count($errors) > 0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
   <form action="/fresh/companymypage" method="post">
       
       <tr><th></th><td><button type="submit"  value="send">ログイン</td></tr>
       
   </table>
   </form>

   
@endsection
@section('footer')
@section('content2')
   <p>{{$msg}}</p>
   @if (count($errors) > 0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
       <tr><th>まだ登録されていない方は </th><td><button onclick="location.href='signup'" type="submit" value="send">こちら</td></tr>
       <tr><th>パスワードを忘れた方は </th><td><button onclick="location.href='../password/reset'" type="submit" value="send">こちら</td></tr>
   </table>
   </form>

   
@endsection
@section('footer')

@endsection
</body>
</html>