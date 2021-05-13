@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<a href="{{ route('tools.create') }}" class="btn btn-primary mb-3">Добавить запчасть</a>
				@if(!$tools->isEmpty())
					<table class="table table-bordered">
						<thead>                  
							<tr>
								<th style="width: 10px">#</th>
								<th>Наименование</th>
								<th>Описание</th>
								<th>Автомобиль</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tools as $tool)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{$tool->name }}</td>
									<td>{{$tool->description }}</td>
									<td>{{ $tool->car->name }}</td>
									<td>
										<a class="btn btn-info btn-sm float-left mr-1" href="{{ route('tools.edit', $tool->id) }}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										<form action="{{ route('tools.destroy', $tool->id) }}" method="post">
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
					{{ $tools->links() }}
				@else
					<p>Запчастей пока нет...</p>
				@endif
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection