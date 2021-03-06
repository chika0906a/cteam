@extends('layouts.jissyu')

@section('title', '')

@section('menu_title')
企業ユーザー更新画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="fresh/management/company/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="company_id" value="{{$item->company_id}}">
      
      <tr><th>company_id: </th><td><input type="text" name="company_id" value="{{old('company_id')}}"></td></tr>
    <tr><th>password: </th><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
    <tr><th>company_name: </th><td><input type="text" name="company_name" value="{{old('company_name')}}"></td></tr>
    <tr><th>company_mail: </th><td><input type="text" name="company_mail" value="{{old('company_mail')}}"></td></tr>
    <tr><th>area_id: </th><td><input type="text" name="area_id" value="{{old('area_id')}}"></td></tr>

    <tr><th></th><td><input type="submit" value="更新"></td></tr>
   </table>
   <button type="button" onclick="history.back()">戻る</button>
   </form>
@endsection


