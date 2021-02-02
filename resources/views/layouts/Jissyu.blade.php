<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
      margin:0px 0px 100px 0px;
      text-align: center; 
   }
    

   h1 { font-size:40pt; text-align:center; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   ul { font-size:12pt; }
   
   .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }

   .content {font-size:20pt; text-align:center;　margin:10px; }


   .content1 {font-size:12pt; color:#ffffff;margin:0px 0px 0px 0px;text-align: center;   }

   .content2 {font-size:12pt; color:#ffffff;margin:0px　0　0　0; line-height:0;text-align: center; }

   .content3 {font-size:12pt; color:#ffffff;margin:0px　50px　0　0; line-height:0; text-align:right;  }

   


   
   
   .footer { text-align:right; font-size:10pt; margin:10px;
       border-bottom:solid 1px #ccc; color:#ccc; }
       th {background-color:#999; color:fff; padding:5px 10px; }
       td {border: solid 1px #aaa; color:#999; padding:5px 10px; }
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
   @yield('footer')
   </div>
</body>
</html>
