@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				@if(!$messages->isEmpty())
					<table class="table table-bordered">
						<thead>                  
							<tr>
								<th style="width: 10px">#</th>
								<th>Имя</th>
								<th>Email</th>
								<th>Телефон</th>
								<th>Сообщение</th>
								<th>Действие</th>
							</tr>
						</thead>
						<tbody>
							@foreach($messages as $message)
								<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{$message->name }}</td>
									<td>{{$message->email }}</td>
									<td>{{$message->phone }}</td>
									<td>{{$message->text }}</td>
									<td>
										<form action="{{ route('messages.destroy', $message->id) }}" method="post">
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
					{{ $messages->links() }}
				@else
					<p>Сообщений пока нет...</p>
				@endif
			</div>
		</div>
		<!-- /.card -->

	</section>
@endsection