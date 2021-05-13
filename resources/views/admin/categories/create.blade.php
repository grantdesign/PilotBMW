@extends('admin.layouts.layout')

@section('content')
	<section class="content">

		<!-- Default box -->
		<div class="card">
			<div class="card-body">
				<form role="form" method="post" action="{{ route('categories.store') }}">
					@csrf
					<div class="card-body">
						<div class="form-group">
							<label for="name">Название</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Название" required="">
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