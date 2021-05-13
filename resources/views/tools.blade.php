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
			<h4>Все запчасти</h4>
			<div class="section group">
				@foreach($tools as $tool)
					<div class="col images_1_of_3">
						<a href="{{ route('tool', $tool->id) }}"><img src="{{ asset('storage/'.$tool->img) }}"></a><br>
						<h2 class="text-center">{{ $tool->name }} <br> {{ $tool->car->name }}</h2>
						<p>{{ $tool->description }}</p>
						<a class="more hvr-bounce-to-bottom" href="{{ route('tool', $tool->id) }}">Подробнее</a>
					</div>
				@endforeach
			</div>
			{{ $tools->links() }}
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