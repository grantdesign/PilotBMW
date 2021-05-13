@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('users.update', $user->id) }}">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group">
							<label for="name">Имя</label>
							<input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Имя" required="">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Email" required="">
						</div>
						<div class="form-group">
							<label for="is_admin">Роль</label>
							<select class="form-control" name="is_admin" id="is_admin">
								@foreach($roles as $role)
									@if($role['value'] == $user->is_admin)
										<option selected="" value="{{ $role['value'] }}">{{ $role['title'] }}</option>
									@else
										<option value="{{ $role['value'] }}">{{ $role['title'] }}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="password">Новый пароль</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Новый пароль">
						</div>
						<div class="form-group">
							<label for="password_confirmation">Подтверждение пароля</label>
							<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Подтверждение пароля">
						</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary mt-2">Изменить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection