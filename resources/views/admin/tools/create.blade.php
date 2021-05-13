@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('tools.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label for="name">Название</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Название" required="">
						</div>
						<div class="form-group">
							<label for="description">Описание</label>
							<input type="text" class="form-control" id="description" name="description" placeholder="Описание" required="">
						</div>
						<div class="form-group">
							<label for="text">Текст</label>
							<textarea class="form-control" name="text" id="text" placeholder="Текст" cols="30" rows="10" required=""></textarea>
						</div>
						<div class="form-group">
							<label for="category_id">Автомобиль</label>
							<select class="form-control" name="car_id" id="category_id">
								@foreach($cars as $car)
									<option value="{{ $car->id }}">{{ $car->name }}</option>
								@endforeach
							</select>
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