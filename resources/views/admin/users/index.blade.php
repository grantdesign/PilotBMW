@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Добавить пользователя</a>
				@if(!$users->isEmpty())
					<table class="table table-bordered">
						<thead>                  
							<tr>
								<th style="width: 10px">#</th>
								<th>Имя</th>
								<th>Email</th>
								<th>Роль</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{$user->name }}</td>
									<td>{{$user->email }}</td>
									<td>{{ ($user->is_admin) ? 'Администратор' : 'Пользователь' }}</td>
									<td>
										<a class="btn btn-info btn-sm float-left mr-1" href="{{ route('users.edit', $user->id) }}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										<form action="{{ route('users.destroy', $user->id) }}" method="post">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')">
												<i class="fas fa-trash-alt"></i>
											</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table><br>
					{{ $users->links() }}
				@else
					<p>Пользователей пока нет...</p>
				@endif
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection