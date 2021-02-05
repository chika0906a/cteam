@extends('layouts.freshgeneral')

@section('content')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">日付選択 </FONT>';
?><p></p>

<div class="parent">
    <form action="/fresh/general/search" method="post">
    <div text-align:center>
    <table border ="1">
      @csrf
      <tr><th>Count: </th><td><input type="number" name="count"></td></tr>
      <tr><th>日付: </th><td><input type="date" name="theDate" ></td></tr>
      <tr><th></th><td><input type="submit" value="登録"></td></tr>
   </table>
   </div>
   </form>
</div>
@endsection