@extends('layouts.freshgeneral')

@section('content')
<table>
<tr><td></td><th>ラーメン</th><th>御飯</th><th>その他</th></tr>
  <!--日付を選ぶ、countは日の数-->
  @for ($i=0;$i<($count);$i++)
    <tr>
    <!--日付を表示する-->
      <th>{{$date ++}}</th>
    <!--DBからデータを取得して表示-->
      @foreach ($items as $item)
        <td>{{$item->recipe_name}}</td>
      @endforeach
      
    </tr>
  @endfor
</table>
<a href="/find">追加</a>
@endsection