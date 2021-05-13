@extends('layouts.other')

@section('banner')
	@include('layouts.header-other')
@endsection

@section('content')
<div class="contact">
	<div class="container">
		<div class="contact-top">
			<h2>{{ $title }}</h2>
			<ol class="breadcrumb">
				<li><a href="/">Главная</a></li>
				<li class="active">{{ $title }}</li>
			</ol>
		</div>
		<div class="grids">
			<h4>Все модели</h4>
			<div class="section group">
				@foreach($cars as $car)
					<div class="col images_1_of_3">
						<a href="{{ route('model', $car->id) }}"><img src="{{ asset('storage/'.$car->img) }}"></a><br>
						<h2>{{ $car->name }}</h2>
						<p>{{ $car->description }}</p>
						<a class="more hvr-bounce-to-bottom" href="{{ route('model', $car->id) }}">Подробнее</a>
					</div>
				@endforeach
			</div>
			{{ $cars->links() }}
		</div>
		<div class="slidebar">
			<h4>Категории</h4>
			@foreach($categories as $category)
				<div class="col images_1_of_2">
					<div class="text list_2_of_1">
						<a href="{{ route('category', $category->id) }}"><h2>{{ $category->name }}</h2></a>
					</div>
				</div>
			@endforeach
		</div>
		<div class="clear"> </div>
	</div>
</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection