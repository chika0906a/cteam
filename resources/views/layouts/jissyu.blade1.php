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
      align:left;
      object-fit:cover;
      margin:0px 0px 20px 0px;
   }
   .menutitle {font-size:100pt; font-weight:bold;  margin:50px 0 40px 400;}
   .content {font-size:50pt;color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center; }
   
   .content1 {font-size:12pt; color:#ffffff;margin:50px 0 40px 400; line-height:0; display: flex; }
   
   .content2 {font-size:12pt; color:#ffffff;margin:50px 0 40px 2000px; line-height:0; display: flex;  }
   .content3 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0; line-height:0; display:inline-block;  }
   .content4 {font-size:12pt; color:#ffffff;margin:50px 0 40px 400; line-height:0;text-align: left;  }
   .content5 {color:#ffffff; margin:-190px 50px 50px 600px; line-height:0; }
   .content3 {color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center;}
   .content6 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0; line-height:0; text-align: center;}
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
