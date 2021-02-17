<html>
<head>
  <title>Hello/Index</title>
  </head>
<body>
  @extends('layouts.helloapp')
  <style>
    .pagination { font-size:10pt; }
    .pagination li { display:inline-block }
    tr th a:link { color: white; }
    tr th a:visited { color: white; }
    tr th a:hover { color: white; }
    tr th a:active { color: white; }
  </style>
  @section('title','Index')

  @section('menuber')
   @parent
   インデックスページ
  @endsection


  @section('content')
  @if (Auth::check())
  <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
  @else
  <p>※ログインしていません。(<a href="/login">ログイン</a>
  <a href="/register">登録</a>)</p>
  @endif
   <table>
    <tr>
       <th><a href="/hello?sort=mail">mail</a></th>
       <th><a href="/hello?sort=password">password</a></th>
       <th><a href="/hello?sort=gender">gender</a></th>
       <th><a href="/hello?sort=date">date</a></th>
       <th><a href="/hello?sort=area_id">area_id</a></th>
       <th><a href="/hello?sort=station_id">station_id</a></th>
       <th><a href="/hello?sort=people_ind">people_ind</a></th>
       <th><a href="/hello?sort=nickname">nickname</a></th>
    </tr>
    @foreach ($items as $item)
     <tr>
      <td>{{$item->mail}}</td>
      <td>{{$item->password}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->area_id}}</td>
      <td>{{$item->station_id}}</td>
      <td>{{$item->people_ind}}</td>
      <td>{{$item->nickname}}</td>

      </tr>
      @endforeach
    </table>
    {{ $items->appends(['sort' => $sort])->links() }}
  @endsection

  @section('footer')
  copyright 2020 tuyano.
  @endsection
</body>
</html>