<html>
<head>
   <title>@yield('title')</title>
   <style>
   body {
      font-size:30pt; color:#999; 
      background: linear-gradient(to right top, #888, #000000);
       }
   .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
   .content {color:#ffffff;margin:10px; }
   .content1 {color:#ffffff;margin:50px 0 40px 0; line-height:0; text-align: 
   center; }
   .content2 {color:#00FFFF;margin:10px; }
   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 1px #ccc; color:#ccc; }
   </style>
</head>
<body>
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
   <div class="footer">
   @yield ('footer')
   </div>
</body>
</html>
