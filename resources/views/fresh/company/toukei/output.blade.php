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
    {{$selected['startdate']}}から{{$selected['enddate']}}<br><p>
    性別：{{$selected['gender']}}<br><p>
    居住人数：{{$selected['people']}}<br><p>
    地域：{{$selected['area']}}<br><p>
    年代：{{$selected['age']}}<br>
    <table align="center" style="color:#ffffff" >
        <tr>
            <th>店舗</th><th>数量</th>
        </tr>
        @foreach($shopquantity as $quantity)
        <tr>
            @foreach($quantity as $key => $value)
                @empty($value)
                <td text align="center">未回答</td>
                @else
                <td text align="center">{{$value}}</td>
                @endempty
            @endforeach
        </tr>
        @endforeach
@endsection

@section('content1')

    <a href="/fresh/company/mypage" class="circle_spread_btn"style=font-size:15pt;>🏠<i class="fas fa-home fa-fw"></i></a>
    <a href="javascript:history.back()" class="pochitto_btn_blue" style=font-size:10pt;>戻る</a>

@endsection

@section('footer')
@endsection




