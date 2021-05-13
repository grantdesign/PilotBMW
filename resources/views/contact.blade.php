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
		<div class="contact-bottom">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d660.7957093753469!2d40.37892722113985!3d56.14598690328934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414c7bfaf2b41cc1%3A0xf2c02b141e408a07!2z0JrQvtC70LvQtdC00LYg0LjQvdC90L7QstCw0YbQuNC-0L3QvdGL0YUg0YLQtdGF0L3QvtC70L7Qs9C40Lkg0Lgg0L_RgNC10LTQv9GA0LjQvdC40LzQsNGC0LXQu9GM0YHRgtCy0LAsINCS0LvQk9Cj!5e0!3m2!1sru!2sru!4v1614889464699!5m2!1sru!2sru" frameborder="0" style="border:0"></iframe>
			<div class="contact-text">
				<div class="col-md-3 contact-right">
					<div class="address">
						<h5>Адрес</h5>
						<p><strong>Владимир</strong>
							<span>ул. Горького, 87</span></p>
						</div>
					</div>
					<div class="col-md-9 contact-left">

						@if(session()->has('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
						@endif

						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									{{ $error }} <br>
								@endforeach
							</ul>
						</div>
						@endif

						<form action="{{ route('contact') }}" method="post">
							<input type="text" name="name" placeholder="Имя" required="" value="{{ old('name') }}">
							<input type="text" name="email" placeholder="Email" required="" value="{{ old('email') }}">
							<input type="text" name="phone" placeholder="Телефон" required="" value="{{ old('phone') }}">
							<textarea name="text" placeholder="Сообщение">{{ old('text') }}</textarea>
							@csrf
							<div class="submit-btn">
								<input type="submit" value="ОТПРАВИТЬ">
							</div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection