<!DOCTYPE HTML>
<html>

<head>
	<title>{{ $title }}</title>
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('assets/css/cars.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
</head>

<body>
	<!-- banner -->
	@yield('banner')
	<!---->
	@yield('content')
	<!---->
	@yield('footer')
	<!---->

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

	<script src="{{ asset('assets/js/responsiveslides.min.js') }}"></script>

	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo3").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 2
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.flexisel.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>