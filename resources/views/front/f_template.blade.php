<!DOCTYPE html>
<html lang="en">
<head>
<title>Mas Faj Profile</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Career Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ asset('template\front') }}/css/lightbox.css"><!-- for gallery css -->

<!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template\front') }}/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('template\front') }}/css/style3.css" />
<!-- banner text effect css files -->

<!-- Navigation-CSS --> <link rel="stylesheet" href="{{ asset('template\front') }}/css/menu_sideslide.css"	type="text/css" media="all">

<link rel="stylesheet" href="{{ asset('template\front') }}/css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

<link href="{{ asset('template\front') }}/css/bars.css" rel="stylesheet" type="text/css"><!-- for skills -->

<!-- custom-theme files -->
<link href="{{ asset('template\front') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('template\front') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //custom-theme files -->

<!-- font-awesome-icons -->
<link href="{{ asset('template\front') }}/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<!-- googlefonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!-- //googlefonts -->

</head>
<body>
<!-- Header -->
	<div class="aitsheaderw3ls" id="agilehome">

		<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
					<nav class="menu">
						<div class="icon-list">
							<a class="scroll active" href="#agilehome"><i class="fa fa-home"></i><span>Home</span></a>
							<a class="scroll" href="#about"><i class="fa fa-info"></i><span>About</span></a>
							<a class="scroll" href="#skills"><i class="fa fa-bar-chart"></i><span>Skills</span></a>
							<a class="scroll" href="#gallery"><i class="fa fa-picture-o"></i><span>Portfolio</span></a>
							<a class="scroll" href="#education"><i class="fa fa-book"></i><span>Education</span></a>
							<a class="scroll" href="#experience"><i class="fa fa-university"></i><span>Experience</span></a>
							<a class="scroll" href="#stats"><i class="fa fa-laptop"></i><span>Technical Skills</span></a>
							<a class="scroll" href="#contact"><i class="fa fa-phone"></i><span>Contact Me</span></a>
						</div>
					</nav>
					<button class="close-button" id="close-button">Close Menu</button>
				</div>
				<button class="menu-button" id="open-button">Open Menu</button>
			</div>
			<div class="agileinfomenu">
				<p>MENU</p>
			</div>
			<div class="aitslogow3ls">
					<a href="/"><img src="{{ asset('template\front') }}/images/f1.png" style="width:120px;"/></a>
			</div>
			<div class="wthreecontact">
				<p><a class="scroll" href="#contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> CONTACT ME</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
	</div>
<!-- //Header -->

<!-- Banner -->
<div class="banner">
	<div class="container">
			<div class="w3_banner_info">
				<div class="w3_banner_info_grid">
					<h1>Fajar Listiyanto</h1>
                    <h5>Saya sedang mengarungi samudera pendidikan nan luas untuk mencapai segala nafsu dunia agar menjadi orang kaya </h5>
					<h2 class="rw-sentence">
					<span>Software Engineer and</span>
					<div class="rw-words rw-words-1">
						<span>UI/UX Designer.</span>
						<span>Web Developer</span>
						<span>Team Leader</span>
						<span>Programmer</span>
					</div>
					</h2>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<li><a href="https://web.facebook.com/fajar.listiyanto.9/" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
						</li>
						<li><a href="https://www.instagram.com/fajarlist09/" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a>
						</li>
					</ul>
				</div>
			</div>
	</div>
</div>
<!-- //Banner -->

@yield('content')


{{-- <!-- About -->
@include('layout.front.f_profil')
@yield('content')
<!-- About -->

<!-- Skills -->
@include('layout.front.f_keahlian')
@yield('content')
<!-- //Skills -->

<!-- gallery -->
@include('layout.front.f_portofolio')
@yield('content')
<!-- //gallery -->

<!-- Education -->
@include('layout.front.f_pendidikan')
@yield('content')
<!-- //Education -->

<!-- Work experience -->
@include('layout.front.f_pengalaman')
@yield('content')
<!-- //Work experience -->

<!-- Technical Skills -->
@include('layout.front.f_tek')
@yield('content')
<!-- Technical Skills -->

<!-- contact -->
@include('layout.front.f_contact')
@yield('content')
<!-- //contact --> --}}

<!-- footer -->
<div class="footer">
	<div class="container">
		<p>© 2017 My Career. All rights reserved | Design by @MasFaj</p>
	</div>
</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="{{ asset('template\front') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<script type="text/javascript" src="{{ asset('template\front') }}/js/numscroller-1.0.js"></script><!-- numscroller js file -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- //here starts scrolling icon -->
<script src="{{ asset('template\front') }}/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="{{ asset('template\front') }}/js/move-top.js"></script>
	<script type="text/javascript" src="{{ asset('template\front') }}/js/easing.js"></script>
	<!-- here stars scrolling script -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling script -->
<!-- //here ends scrolling icon -->

<!-- Navigation-JavaScript -->
	<script src="{{ asset('template\front') }}/js/classie.js"></script>
	<script src="{{ asset('template\front') }}/js/main.js"></script>
<!-- //Navigation-JavaScript -->
		
<!-- FlexSlider-JavaScript -->
	<script defer src="{{ asset('template\front') }}/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->

<!-- bars js files -->
	<script src="{{ asset('template\front') }}/js/bars.js"></script>
<!-- //bars js files -->

<!-- banner text effect js file -->
	<script src="{{ asset('template\front') }}/js/modernizr.custom.72111.js"></script>
<!-- banner text effect js file -->

<!-- for bootstrap working -->
	<script src="{{ asset('template\front') }}/js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>