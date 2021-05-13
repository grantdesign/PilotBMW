@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('teams.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label for="name">Имя</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Имя" required="">
						</div>
						<div class="form-group">
							<label for="position">Позиция</label>
							<input type="text" class="form-control" id="position" name="position" placeholder="Позиция" required="">
						</div>
						<div class="form-group">
							<label for="description">Описание</label>
							<textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Описание" required=""></textarea>
						</div>
						<div class="form-group">
							<label for="img">Изображение</label>
							<input type="file" class="form-control-file" id="img" name="img" required="">
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