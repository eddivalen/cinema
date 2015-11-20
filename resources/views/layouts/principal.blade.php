<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cinema</title>
{!!Html::style('css/bootstrap.css')!!}
{!!Html::style('css/style.css')!!}
{!!Html::script('js/jquery.min.js')!!}
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a class="active" href="{!!URL::to('/')!!}"><i class="home"></i></a></li>
					<li><a href="{!!URL::to('/reviews')!!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="{!!URL::to('/contacto')!!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
		
			
		@yield('content')

		<div class="footer">
		<a href="eddyvalencia8@gmail.com">eddyvalencia8@gmail.com</a>
		<div class="copyright">
			
		</div>
	</div>	

		</div>
	</div>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		{!!Html::script('js/jquery.flexisel.js')!!}
		{!!Html::script('js/bootstrap.min.js')!!}
	
	<div class="clearfix"></div>
</body>
</html>