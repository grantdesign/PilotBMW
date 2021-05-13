@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('users.store') }}">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label for="name">Имя</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Имя" required="">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<label for="password">Пароль</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Пароль" required="">
						</div>
						<div class="form-group">
							<label for="password_confirmation">Подтверждение пароля</label>
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение пароля" required="">
						</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary mt-2">Добавить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection