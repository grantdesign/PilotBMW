@extends('layouts.app')

@section('banner')
	@include('layouts.header-home')
@endsection

@section('content')
<div class="feature_sec">
	<div class="container">
		<div class="feature_head">
			<h3>Последние модели</h3>
			<span></span>
		</div>
		<ul id="flexiselDemo3">
			@foreach($cars as $car)
				<li>
					<div class="biseller-column">
						<a href="{{ route('model', $car->id) }}"><img src="{{ asset('storage/'.$car->img) }}" alt=""/></a>
						<h4>{{ $car->name }}</h4>
						<p>{{ $car->description }}</p>
						<a class="more hvr-bounce-to-bottom" href="{{ route('model', $car->id) }}">Подробнее</a>
					</div>
				</li>
			@endforeach
		</ul>
		<div class="clearfix"></div>
	</div>
</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection