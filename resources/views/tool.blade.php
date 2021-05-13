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
				<li><a href="{{ route('tools') }}">Запчасти</a></li>
				<li><a href="{{ route('model', $tool->car->id) }}">{{ $tool->car->name }}</a></li>
				<li class="active">{{ $title }}</li>
			</ol>
		</div>
		<div class="about-grids">
			<div class="col-md-4 about-pic">
				<img src="{{ asset('storage/'.$tool->img) }}" class="img-responsive" alt="" />
			</div>
			<div class="col-md-8 about-info">
				<h3>{{ $tool->description }}</h3>
				<p>{{ $tool->text }}</p>
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