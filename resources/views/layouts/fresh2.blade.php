<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
function slideSwitch() {
   var $active = $('#slideshow img.active');

   if ( $active.length == 0 ) $active = $('#slideshow img:last');

   var $next =  $active.next().length ? $active.next()
      : $('#slideshow img:first');

   $active.addClass('last-active');

   $next.css({opacity: 0.0})
      .addClass('active')
      .animate({opacity: 1.0}, 1000, function() {
           $active.removeClass('active last-active');
      });
}

$(function() {
   setInterval( "slideSwitch()", 3000 );
});
</script>
   <title>@yield('title')</title>
   <style>
   #slideshow {
   position: relative;
   width:  640px; /* 画像の横幅に合わせて記述 */
   height: 270px; /* 画像の高さに合わせて記述 */
}
#slideshow img {
   position: absolute;
   top: 0;
   left:0;
   z-index: 8;
   opacity: 0.0;
}
#slideshow img.active {
   z-index: 10;
   opacity: 1.0;
}
#slideshow img.last-active {
   z-index: 9;
}
*,
*:before,
*:after {
  -webkit-box-sizing: inherit;
  box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 62.5%;/*rem算出をしやすくするために*/
}

.btn,
a.btn,
button.btn {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}
a.btn-flat {
  overflow: hidden;
  padding: 1.5rem 6rem;
  color: #fff;
  border-radius: 0;
  background: #000;
}

a.btn-flat span {
  position: relative;
}

a.btn-flat:before {
  position: absolute;
  top: 0;
  left: 30px;
  width: 150%;
  height: 500%;
  content: '';
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-70%) rotate(135deg);
  transform: translateX(-98%) translateY(-70%) rotate(135deg);
  background: #FF3399;
}

a.btn-flat:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(135deg);
  transform: translateX(-9%) translateY(-25%) rotate(135deg);
}
.btn1,
a.btn1,
button.btn1 {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}
a.btn1-flat {
  overflow: hidden;
  padding: 1.5rem 6rem;
  color: #fff;
  border-radius: 0;
  background: #000;
}

a.btn1-flat span {
  position: relative;
}

a.btn1-flat:before {
  position: absolute;
  top: 0;
  left: 30px;
  width: 150%;
  height: 500%;
  content: '';
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-70%) rotate(135deg);
  transform: translateX(-98%) translateY(-70%) rotate(135deg);
  background: #FF9900;
}

a.btn1-flat:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(135deg);
  transform: translateX(-9%) translateY(-25%) rotate(135deg);
}
.btn2,
a.btn2,
button.btn2 {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}
a.btn2-flat {
  overflow: hidden;
  padding: 1.5rem 5rem;
  color: #fff;
  border-radius: 0;
  background: #000;
}

a.btn2-flat span {
  position: relative;
}

a.btn2-flat:before {
  position: absolute;
  top: 0;
  left: 30px;
  width: 150%;
  height: 500%;
  content: '';
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-70%) rotate(135deg);
  transform: translateX(-98%) translateY(-70%) rotate(135deg);
  background: #FF0000;
}

a.btn2-flat:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(135deg);
  transform: translateX(-9%) translateY(-25%) rotate(135deg);
}
.btn3,
a.btn3,
button.btn3 {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}
a.btn3-flat {
  overflow: hidden;
  padding: 1.5rem 4.1rem;
  color: #fff;
  border-radius: 0;
  background: #000;
}

a.btn3-flat span {
  position: relative;
}

a.btn3-flat:before {
  position: absolute;
  top: 0;
  left: 30px;
  width: 150%;
  height: 500%;
  content: '';
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-70%) rotate(135deg);
  transform: translateX(-98%) translateY(-70%) rotate(135deg);
  background: #33CC33;
}

a.btn3-flat:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(135deg);
  transform: translateX(-9%) translateY(-25%) rotate(135deg);
}
.btn4,
a.btn4,
button.btn4 {
  font-size: 1.6rem;
  font-weight: 700;
  line-height: 1.5;
  position: relative;
  display: inline-block;
  padding: 1rem 4rem;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  text-align: center;
  vertical-align: middle;
  text-decoration: none;
  letter-spacing: 0.1em;
  color: #212529;
  border-radius: 0.5rem;
}
a.btn4-flat {
  overflow: hidden;
  padding: 1.5rem 4.1rem;
  color: #fff;
  border-radius: 0;
  background: #000;
}

a.btn4-flat span {
  position: relative;
}

a.btn4-flat:before {
  position: absolute;
  top: 0;
  left: 30px;
  width: 150%;
  height: 500%;
  content: '';
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -webkit-transform: translateX(-98%) translateY(-70%) rotate(135deg);
  transform: translateX(-98%) translateY(-70%) rotate(135deg);
  background: #3399FF;
}

a.btn4-flat:hover:before {
  -webkit-transform: translateX(-9%) translateY(-25%) rotate(135deg);
  transform: translateX(-9%) translateY(-25%) rotate(135deg);
}


   body {
      
      background-color: transparent;
	background-image: url(https://d3ls91xgksobn.cloudfront.net/1600x/etuovimedia/images/hca/import/401/694401/4f806c6603a1baca2049e4afd2320831/65e6cf86f7bbefc82327234cd1f206f8/ORIGINAL.jpeg);
   background-size: cover;
   
       }
   .menutitle {color:#ffffff;margin:50px 0 40px 0; line-height:0; text-align: 
   center; }
   .content {font-size:15pt;color:#ffffff;margin:0px 0 0px 0; line-height:0; text-align: 
   center;  }
   .content1 {color:#ffffff;margin:100px -500px 0px 0px; line-height:0;text-align:center; }
   .content2 {color:#ffffff;margin:30px -500px 0px 0px; line-height:0;text-align:center; }
   .content3 {color:#ffffff;margin:30px -500px 0px 0px; line-height:0;text-align:center; }
   .content4 {color:#ffffff;margin:30px -500px 0px 0px; line-height:0;text-align:center; }
   .content5 {color:#ffffff;margin:30px -500px 0px 0px; line-height:0;text-align:center; }
   .content6 {color:#ffffff;margin:-450px 150px 0px 0px; line-height:0;text-align:center; }
   .content7 {font-size:10pt;color:#ffffff;margin:50px -500px 0px 0px; line-height:0;text-align:center; }
   .content8{color:#ffffff;margin:-25px 450px 0px 0px; line-height:0;text-align:center; }

   </style>
   <style type="text/css">
#slideshow {
   position: relative;
   width:  640px; /* 画像の横幅に合わせて記述 */
   height: 270px; /* 画像の高さに合わせて記述 */
}
#slideshow img {
   position: absolute;
   top: 0;
   left:0;
   z-index: 8;
   opacity: 0.0;
}
#slideshow img.active {
   z-index: 10;
   opacity: 1.0;
}
#slideshow img.last-active {
   z-index: 9;
}
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
   <div class="content7">
   @yield('content7')
   </div>
   <div class="content8">
   @yield('content8')
   </div>
   <div class="footer">
   @yield ('footer')
   </div>
</body>
</html>
