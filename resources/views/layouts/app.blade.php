<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
   .menutitle {font-size:100pt; font-weight:bold;  margin:50px 0 40px 400;}

   .content{font-size:50pt;color:#ffffff;  line-height:0; text-align: center; }

   .content11 {font-size:50pt;color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: left; }
   
   .content1 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0px;text-align: left;   }
   
   .content2 {font-size:12pt; color:#ffffff;margin:500　0　10　0; line-height:0;text-align: center;  }

   .content3 {font-size:12pt; color:#ffffff;margin:500px 500 400px 500px; line-height:0;   }

   .content4 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0px; line-height:0; text-align: center ; }

   .content5 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0px; line-height:0; text-align: center ;  }

   .content6 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0px; line-height:0; text-align: center ; }

   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 1px #ccc; color:#ccc; }
   </style>
</head>
<body>

    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
    <h1>@yield('title')</h1>
   <h2>@yield('menu_title')</h2>
<div class="menu_content">
   @yield('menu_content')
   </div>
   <hr size="1">
   <div class="content11">
   @yield('content11')
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
   <div class="footer">
   @yield ('footer')
   </div>
</body>
</html>

