<div class="banner banner2">
	<div class="container">
		<div class="header">
			<div class="logo">
				<h1><a href="/"><img src="{{ asset('assets/images/car.png') }}" alt=""/> BMW <span>PILOT</span></a></h1>
			</div>
			<div class="top_details">
				<p><span></span>8 (800) 55-35-35</p>
				<div class="search">
					<form method="get" action="{{ route('search') }}">
						<input type="text" name="s" value="" placeholder="Поиск...">
						<input type="submit" value="">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
				  </button>
			</div>
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@foreach($menus as $menu)
						@if(url()->current() == $menu->path)
							<li class="active"><a href="{{ $menu->path }}">{{ $menu->name }}</a></li>
						@else
							<li><a href="{{ $menu->path }}">{{ $menu->name }}</a></li>
						@endif
					@endforeach
					<li><a href="http://bmw.loc/admin">Панель управления</a></li>
				</ul>
			</div>
		</nav>
	</div>
</div>