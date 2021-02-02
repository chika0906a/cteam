@extends('layouts.area')

@section('title', 'データ表示')

@section('menu_title')
@endsection

@section('content')
    @foreach($names as $name)
        @foreach($name as $n)
        <h2>{{$n}}の店舗別売上データ</h2>
        @endforeach
    @endforeach
    <h3>選択内容</h3>
    {{$selected['startdate']}}から{{$selected['enddate']}}<br>
    性別：{{$selected['gender']}}<br>
    居住人数：{{$selected['people']}}<br>
    地域：{{$selected['area']}}<br>
    年代：{{$selected['age']}}<br>
    <table align="center" style="color:#ffffff" >
        <tr>
            <th>店舗</th><th>数量</th>
        </tr>
        @foreach($shopquantity as $quantity)
        <tr>
            @foreach($quantity as $key => $value)
            <td text align="center">{{$value}}</td>
            @endforeach
        </tr>
        @endforeach
@endsection

@section('content1')
    <a href="/fresh/companymypage">マイページに戻る</a>
    <button type="button" onclick="history.back()">前の画面に戻る</button> 
@endsection

@section('footer')
@endsection




