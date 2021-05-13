<div class="footer2">
	<div class="container">
		<div class="ftr2-grids">
			<div class="col-md-4 ftr2-grid1">
				<h3>Разделы сайта</h3>
				<ul>
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
			<div class="col-md-4 ftr6-grid3">
				<h3>Контактная информация</h3>
				<p>Наш сайт посвящен автомобилям BMW и охватывает многие регионы России.</p>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/"><i class="facebook"></i></a></li>
						<li><a href="https://twitter.com/"><i class="twitter"></i></a></li>
						<li><a href="https://dribbble.com/"><i class="dribble"></i></a></li>
						<li><a href="https://www.google.com/"><i class="google"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-8 ftr2-bottom">
		<p>Copyright &copy; <?=date('Y')?> <span>BMW Pilot</span></p>
	</div>
</div>