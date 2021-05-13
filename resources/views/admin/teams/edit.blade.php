@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group">
							<label for="name">Имя</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Имя" value="{{ $team->name }}" required="">
						</div>
						<div class="form-group">
							<label for="position">Позиция</label>
							<input type="text" class="form-control" id="position" name="position" placeholder="Позиция" value="{{ $team->position }}" required="">
						</div>
						<div class="form-group">
							<label for="description">Описание</label>
							<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Описание" required="">{{ $team->description }}</textarea>
						</div>
						<div class="form-group">
							<label for="img">Новое изображение</label>
							<input type="file" class="form-control-file" id="img" name="img">
						</div>
						<div class="form-group">
							<img src="{{ asset('storage/'.$team->img) }}" width="150" alt="">
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