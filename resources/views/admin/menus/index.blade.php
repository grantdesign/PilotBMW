@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Добавить меню</a>
				@if(!$menus->isEmpty())
					<table class="table table-bordered">
						<thead>                  
							<tr>
								<th style="width: 10px">#</th>
								<th>Наименование</th>
								<th>Ссылка</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							@foreach($menus as $menu)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{$menu->name }}</td>
									<td>{{$menu->path }}</td>
									<td>
										<a class="btn btn-info btn-sm float-left mr-1" href="{{ route('menus.edit', $menu->id) }}">
											<i class="fas fa-pencil-alt"></i>
										</a>

										<form action="{{ route('menus.destroy', $menu->id) }}" method="post">
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
					{{ $menus->links() }}
				@else
					<p>Меню пока нет...</p>
				@endif
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection