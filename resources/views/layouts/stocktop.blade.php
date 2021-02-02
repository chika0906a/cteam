<html>
<head>
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
      align:center;
      object-fit:cover;
      margin:0px 0px 20px 0px;
   }
   .menutitle {font-size:40pt; font-weight:bold;  margin:50px 0 40px 0;}
   .content {font-size:40pt;color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center; }
   .content5 {color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center; }
   .content1 {font-size:20pt; color:#ffffff;margin:50px 0 40px 0; line-height:0; text-align: center; }
   .content2 {color:#ffffff;margin:-450px 0 40px 0;  line-height:0; text-align: center; }
   .content3 {color:#ffffff; margin:-20px 0 40px 0; line-height:0; text-align: center;}
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
   <div class="content3">
   @yield('content3')
   </div>
   <div class="footer">
   @yield ('footer')
   </div>
</body>
</html>
