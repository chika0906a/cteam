<html>
<head>
   <title>@yield('title')</title>
   <style>
   body {
      font-size:30pt; color:#999; 
      background: linear-gradient(to right top, #888, #000000);
       }
       .pochitto_btn_blue {
	display: inline-block;
	width: 160px;
	padding: 2em;
  
	text-align: center;
	text-decoration: none;
	color: #fff;
	background:#0C88CA;
	border-bottom:4px solid #005691;
	border-radius: 4px;
	transition: .0s;
  position: relative; /* 今の位置を基準 */
  top: 0px; /* 上から0px */
  left: -300px; /* 左から-300px */
  right: 0px;
  bottom: 0px;

}
.pochitto_btn_blue:hover {
  
	 cursor: pointer;
	 text-decoration: none;
	 background:#005691;
	 transform: translate3d(0, 4px, 0);
	 transition: .0s;
	 border-bottom: none;
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
