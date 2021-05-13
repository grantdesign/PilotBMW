@extends('layouts.other')

@section('banner')
	@include('layouts.header-other')
@endsection

@section('content')
<div class="about">
	<div class="container">
		<h2>{{ $title }}</h2>
		<ol class="breadcrumb">
			<li><a href="/">Главная</a></li>
			<li class="active">{{ $title }}</li>
		</ol>
		<div class="about-grids">
			<div class="col-md-4 about-pic">
				<img src="{{ asset('assets/images/pic3.jpg') }}" class="img-responsive" alt="" />
			</div>
			<div class="col-md-8 about-info">
				<h3>При любой погоде. В любом месте. На любой скорости.</h3>
				<p>В 1913 на северной окраине Мюнхена Карл Рапп и Густав Отто, сын изобретателя двигателя внутреннего сгорания Николауса Августа Отто, создают две маленькие авиамоторные фирмы. Начавшаяся Первая мировая война сразу принесла многочисленные заказы на двигатели для самолетов. Рапп и Отто решают объединиться в один авиамоторный завод. Так в Мюнхене возникает завод авиационных двигателей, который в июле 1917 регистрируется под именем Bayerische Motoren Werke ( «Баварские моторные заводы») — BMW. Эту дату и принято считать годом основания BMW, а Карла Раппа и Густава Отто ее создателями.</p>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="works">
			<h3>Наша команда</h3>
			@foreach($teams as $team)
				<div class="grid_4">
					<div class="text1">
						<img src="{{ asset('storage/'.$team->img) }}" alt="">
						<h5 class="text-center">{{ $team->name }}</h5>
						<h4 class="text-center">{{ $team->position }}</h4>
						<p>{{ $team->description }}</p>
					</div>
				</div>
			@endforeach
		</div>
		<div class="clearfix"></div>
	</div>

</div>
</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection