@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('cars.update', $car->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group">
							<label for="name">Название</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Название" value="{{ $car->name }}" required="">
						</div>
						<div class="form-group">
							<label for="description">Описание</label>
							<input type="text" class="form-control" id="description" name="description" placeholder="Описание" value="{{ $car->description }}" required="">
						</div>
						<div class="form-group">
							<label for="text">Текст</label>
							<textarea class="form-control" name="text" id="text" placeholder="Текст" cols="30" rows="10" required="">{{ $car->text }}</textarea>
						</div>
						<div class="form-group">
							<label for="category_id">Категория</label>
							<select class="form-control" name="category_id" id="category_id">
								@foreach($categories as $category)
									@if($category->id == $car->category_id)
										<option selected="" value="{{ $category->id }}">{{ $category->name }}</option>
									@else
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="img">Новое изображение</label>
							<input type="file" class="form-control-file" id="img" name="img">
						</div>
						<div class="form-group">
							<img src="{{ asset('storage/'.$car->img) }}" width="150" alt="">
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