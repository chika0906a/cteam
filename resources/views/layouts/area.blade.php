<html>
<head>
   <title>@yield('title')</title>
   <style>
   body {
       color:#999; 
      background: linear-gradient(to right top, #888, #000000);
       }
      }.circle_spread_btn {
	display: inline-block;
	position: relative;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	text-decoration: none;
	color: #fff;
	background: #40C659;
	border-radius: 50%;
}
.circle_spread_btn:hover {
	 cursor: pointer;
	 text-decoration: none;
	text-align: center;
	 transition: transform .3s;
	transform-origin: center;
	transform: scale(0.9, 0.9);
	opacity: 0.7;
}
.circle_spread_btn::after {
    display: inline-block;
    content: "";
    width: 49px;
    height: 49px;
    position: absolute;
	 border-radius: 50%;
	color:#fff;
	 top: -0.5px;
	 left: -0.5px;
    border: 1px solid #40C659;
	 transition: transform .5s ease;
	visibility: hidden;
}
.circle_spread_btn:hover::after {
	 cursor: pointer;
	 text-decoration: none;
	 transition: transform .5s ease;
	transform-origin: center;
	transform: scale(1.4, 1.4);
	opacity: 0.7;
	visibility: visible;
  
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
  left: 0px; /* 左から-300px */
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
   .disp_img{
      background-repeat:no-repeat;
      width:auto;
      height:65px;
      align:left;
      object-fit:cover;
      margin:0px 0px 20px 0px;
   }
   .menutitle {font-size:20pt; font-weight:bold;  margin:50px 0 40px 0;}
   .content {color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center; }
   .content5 {color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center; }
   .content1 {font-size:12pt; color:#ffffff;margin:50px 0 40px 0; line-height:0; text-align: center; }
   .content2 {color:#ffffff;margin; line-height:0; text-align: center; }
   .content3 {color:#ffffff; margin:50px 0 40px 0; line-height:0; text-align: center;}
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
