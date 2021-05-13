@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('tools.update', $tool->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group">
							<label for="name">Название</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Название" value="{{ $tool->name }}" required="">
						</div>
						<div class="form-group">
							<label for="description">Описание</label>
							<input type="text" class="form-control" id="description" name="description" placeholder="Описание" value="{{ $tool->description }}" required="">
						</div>
						<div class="form-group">
							<label for="text">Текст</label>
							<textarea class="form-control" name="text" id="text" placeholder="Текст" cols="30" rows="10" required="">{{ $tool->text }}</textarea>
						</div>
						<div class="form-group">
							<label for="car_id">Автомобиль</label>
							<select class="form-control" name="car_id" id="car_id">
								@foreach($cars as $car)
									@if($car->id == $tool->car_id)
										<option selected="" value="{{ $car->id }}">{{ $car->name }}</option>
									@else
										<option value="{{ $car->id }}">{{ $car->name }}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="img">Новое изображение</label>
							<input type="file" class="form-control-file" id="img" name="img">
						</div>
						<div class="form-group">
							<img src="{{ asset('storage/'.$tool->img) }}" width="150" alt="">
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