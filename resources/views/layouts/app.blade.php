<!DOCTYPE HTML>
<html>

<head>
	<title>{{ $title }}</title>
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
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
	<div class="welcome">
		<div class="container">
			<div class="welcome_sec">
				<div class="col-md-6 welcome_info">
					<h3>Добро пожаловать</h3>
					<span></span>
					<h4>BMW - это стиль жизни.</h4>
					<p>
						BMW начала 2006 год на правах самостоятельного конструктора после покупки в 2005 году швейцарской команды Sauber Petronas. До этого BMW поставляла свои двигатели Williams в рамках технического партнерства и это партнерство принесло десять побед за пять лет совместной работы.
					</p>
					<p>
						Вслед за BMW из Williams ушел и Ник Хайдфельд, а также команда сохранила Жака Вильнева, у которого был контракт еще со времен Sauber.
					</p>
					<a href="{{ route('about') }}" class="hvr-bounce-to-bottom">О компании</a>
				</div>
				<div class="col-md-6 welcome_pic">
					<h2>С удовольствием за рулем</h2>
					<img src="{{ asset('assets/images/wc.jpg') }}" class="img-responsive" alt="" />
					<p>
						В апреле 2004 года «чаша» музея BMW закрылась для посетителей. Здание было построено в 1973 году, и с тех пор история BMW успела многократно обогатиться.
					</p>
					<p></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->

	@yield('content')

	@yield('footer')

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