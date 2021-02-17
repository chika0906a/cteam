<html>
<head>
<title>@yield('title')</title>
   <style>
   body {
      background-color: transparent;
	background-image: url(https://congnghenhat.cdn.vccloud.vn/wp-content/uploads/2020/04/tu-lanh.jpg);
   background-size: cover;
   
	
  
       }
   .menutitle {color:#ffffff;margin:50px 0 40px 0; line-height:0; text-align: 
   center; }
   .content {color:#ffffff;margin:0px 0 0px 0; line-height:0; text-align: 
   center;  }
   .content1 {color:#ffffff;margin:500px 440px 40px 0; line-height:0;text-align:center;}
   .content2 {color:#ffffff;margin:-370px -520px 0px 0px; line-height:0;text-align:center; }
   .content3 {font-size:30pt;color:#ffffff;margin:500px -520px 0px 0px; line-height:0;text-align:center; }
   .content4 {color:#ffffff;margin:100px 0px 0px 0px; line-height:0;text-align:center; }
   </style>
   

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
   <div class="footer">
   @yield ('footer')
   </div>
</body>
</html>
