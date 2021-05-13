@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<a href="{{ route('cars.create') }}" class="btn btn-primary mb-3">Добавить автомобиль</a>
				@if(!$cars->isEmpty())
					<table class="table table-bordered">
						<thead>                  
							<tr>
								<th style="width: 10px">#</th>
								<th>Наименование</th>
								<th>Описание</th>
								<th>Категория</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							@foreach($cars as $car)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{$car->name }}</td>
									<td>{{$car->description }}</td>
									<td>{{ $car->category->name }}</td>
									<td>
										<a class="btn btn-info btn-sm float-left mr-1" href="{{ route('cars.edit', $car->id) }}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										<form action="{{ route('cars.destroy', $car->id) }}" method="post">
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
					{{ $cars->links() }}
				@else
					<p>Автомобилей пока нет...</p>
				@endif
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection