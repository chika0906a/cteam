@extends('layouts.freshgeneral')

@section('title','ユーザー認証')

@section('menubar')
  @parent
  ログイン認証
@endsection

@section('content11')
<?PHP
ECHO '<FONT COLOR="aqua"> ▲</FONT>';
ECHO '<FONT COLOR="white">ログイン画面 </FONT>';
?><p>
@endsection

@section('content1')
<div class="disp_img">
  <img src='../images/冷蔵庫.png'/>
</div>
<br><br><br><br><br><br><br>
<div class="disp_img">
  <img src='../images/背景1.png'/>
</div>
@endsection

@section('content')
<p>{{$message}}</p>
  <form action="/fresh/general/login" method="post">
  <table>
  @csrf
  <tr><th>メールアドレス</th><td><input type="text"
    name="email"></td></tr>
    <tr><th>パスワード</th><td><input type="password"
    name="password"></td></tr>
    <tr><th></th><td><input type="submit"
    name="send"></td></tr>
  </form>
@endsection

@section('content2')
<div id="app">          
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent"text-align: center ;>
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              @if (Route::has('login'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif
              
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
  </div>
           

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
   <h2>@yield('menu_title')</h2>
<div class="menu_content">
   @yield('menu_content')
   </div>

@endsection

@section('content3')
<body>

<br><br><br><br><br><br><br><br>
<div class="disp_img">
  <a href='../signup/add'>
  <img src='../images/まだ登録.png'/>
</div>
<br><br><br><br><br><br><br><br>
<div class="disp_img">
  <a href='./jissyu8'>
  <img src='../images/忘れた.png'/>
 </a>
</div>
@endsection

@section('content4')

@endsection
@section('content5')

@endsection
