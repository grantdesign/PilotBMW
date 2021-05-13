@extends('admin.layouts.layout')

@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3>{{ $cars }}</h3>
						<p>Все автомобили</p>
					</div>
					<a href="{{ route('cars.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3>{{ $messages }}</h3>
						<p>Все сообщения</p>
					</div>
					<a href="{{ route('messages.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning">
					<div class="inner">
						<h3>{{ $tools }}</h3>
						<p>Все запчасти</p>
					</div>
					<a href="{{ route('tools.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3>{{ $categories }}</h3>
						<p>Все категории</p>
					</div>
					<a href="{{ route('categories.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</div>
</section>
@endsection