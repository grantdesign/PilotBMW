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
				<li><a href="{{ route('models') }}">Модели</a></li>
				<li><a href="{{ route('category', $car->category->id) }}">{{ $car->category->name }}</a></li>
				<li class="active">{{ $title }}</li>
			</ol>
		</div>
		<div class="about-grids">
			<div class="col-md-4 about-pic">
				<img src="{{ asset('storage/'.$car->img) }}" class="img-responsive" alt="" />
			</div>
			<div class="col-md-8 about-info">
				<h3>{{ $car->description }}</h3>
				<p>{{ $car->text }}</p>
				<a class="more hvr-bounce-to-bottom" href="{{ route('contact') }}">Узнать о наличии</a>
			</div>
		</div>
		<div class="clear"> </div>
	</div>
</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection