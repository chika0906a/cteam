<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
   <title>@yield('title')</title>
   <style>
   body {
       color:#999; 
      background: linear-gradient(to right top, #888, #000000);
       }
   .disp_img{
      background-repeat:no-repeat;
      width:auto;
      height:65px;
      align:left;
      object-fit:cover;
      margin:0px 0px 20px 0px;
   }
   .menutitle {font-size:100pt; font-weight:bold;  margin:50px 0 40px 0;line-height:0;  text-align: center;}
   .menu-drawer .btn {font-size: 27px; background: #fff; width: 40px;padding: 4px 0; cursor: pointer; text-align: center; top: 0; right: 0;}
      .menu-drawer .btn::before, .menu-drawer .btn::after {font-family: "Font Awesome 5 Free"; font-weight: 900;}
      .menu-drawer .btn::before {content: "\f0c9";}
      .menu-drawer .btn::after {content: "\f00d";}
      .menu-drawer .other {background: rgba(0, 0, 0, 0.2); top: 0; left: 0;width: 100%; height: 100vh;}
      .menu-drawer .content {display: table; border: 1px solid #ebebeb;border-radius: 4px; background: #fff; width: 90vw; top: 34px; right: 0;text-align: center;}
      @media screen and (min-width: 415px) {
        .menu-drawer .content {width: 350px;}
      }
      .menu-drawer .content h2 {font-size: 16px; font-weight: 700; color: #fff;background: #383838; margin: 0; padding: .7em; border-radius: 4px 4px 0 0;}
      .menu-drawer .content h2 i {color: #383838; background: #fff;border-radius: 50%; padding: .4em; margin-right: .5em;}
      .menu-drawer .content .menu {height: 210px; overflow-y: auto;}
      .menu-drawer .content a {border-bottom: 1px solid #ebebeb; padding: 1rem 0 0 0; text-decoration: none; color: #858585; display: block; width: 100%;display: flex; flex-flow: column;}
      .menu-drawer .content a i {font-size: 27px;}
      .menu-drawer .content p {color: #858585;}
      .menu-drawer .btn,
      .menu-drawer .content,
      .menu-drawer .other {position: fixed;}
      .menu-drawer .btn,
      .menu-drawer .content {z-index: 1001;}
      .menu-drawer .other {z-index: 1000;}
 
      .menu-drawer #chk {display: none;}
      .menu-drawer #chk ~ .btn::before {display: block;}
      .menu-drawer #chk ~ .btn::after {display: none;}
      .menu-drawer #chk ~ .other {display: none;}
      .menu-drawer #chk:checked ~ .btn::before {display: none;}
      .menu-drawer #chk:checked ~ .btn::after {display: block;}
      .menu-drawer #chk:checked ~ .other {display: block;}
 
      .menu-drawer #chk ~ .content {transform: translate(350%, 0); transition: transform 0.3s ease-in-out;}
      .menu-drawer #chk:checked ~ .content {transform: none;}
   .content8 {font-size:12pt; color:#ffffff;line-height:0; text-align: right ; }
   .content {font-size:30pt;color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center; }
   
   
   .content1 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0px; line-height:0; text-align: center ;}
   
   .content2 {font-size:12pt; color:#ffffff;margin:-50px -500 40px 0px; line-height:0; text-align: center ;}

   .content3 {font-size:12pt; color:#ffffff;margin:-105px -270 40px 0px; line-height:0; text-align: center ;}

   .content4 {font-size:12pt; color:#ffffff;margin:80px -490 40px 0px; line-height:0; text-align: center ;}

   .content5 {font-size:12pt; color:#ffffff;margin:-80px -580 40px 0px; line-height:0; text-align: center ;}

   .content6 {font-size:12pt; color:#ffffff;margin:170px 80 40px 0px; line-height:0; text-align: center ;}

   .content7 {font-size:12pt; color:#ffffff;margin:-20px 0 40px 0px; line-height:0; text-align: center ; }

   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 10px #ccc; color:#ccc; }
   </style>
</head>
<body>
<div class="content8">
   @yield('content8')
   </div>
   <h1>@yield('title')</h1>
   <h2>@yield('menu_title')</h2>
<div class="menu_content">
   @yield('menu_content')
   </div>
   <hr size="1">
   <div class="content">
   @yield('content')
   </div>

   <div class="content1">
   @yield('content1')
   </div>

   <div class="content2">
   @yield('content2')
   </div>
   
   <div class="content3">
   @yield('content3')
   </div>

   <div class="content4">
   @yield('content4')
   </div>

   <div class="content5">
   @yield('content5')
   </div>

   <div class="content6">
   @yield('content6')
   </div>

   <div class="content7">
   @yield('content7')
   </div>
</div>
</body>
</html>
