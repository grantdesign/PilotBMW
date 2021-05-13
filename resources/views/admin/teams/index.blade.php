@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<a href="{{ route('teams.create') }}" class="btn btn-primary mb-3">Добавить участника</a>
				@if(!$teams->isEmpty())
					<table class="table table-bordered">
						<thead>                  
							<tr>
								<th style="width: 10px">#</th>
								<th>Имя</th>
								<th>Позиция</th>
								<th>Описание</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							@foreach($teams as $team)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{$team->name }}</td>
									<td>{{$team->position }}</td>
									<td>{{$team->description }}</td>
									<td>
										<a class="btn btn-info btn-sm float-left mr-1" href="{{ route('teams.edit', $team->id) }}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										<form action="{{ route('teams.destroy', $team->id) }}" method="post">
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
					{{ $teams->links() }}
				@else
					<p>Участников пока нет...</p>
				@endif
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection