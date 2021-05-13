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
			<div class="contact-text">
				<div class="col-md-9 contact-left">

					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							{{ $error }} <br>
							@endforeach
						</ul>
					</div>
					@endif

					<form action="{{ route('login') }}" method="post">
						<input type="text" name="email" placeholder="Email" required="">
						<input type="text" name="password" placeholder="Пароль" required="">
						@csrf
						<div class="submit-btn">
							<input type="submit" value="ВОЙТИ">
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