@extends('layouts.fixed')
@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">All Bet OPtions</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Bet OPtions</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="ml-2">
		<div class="row">
			<div class="col-md-8">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title">List of All Tournaments</h3>
						<div class="card-tools">
							<!-- Buttons, labels, and many other things can be placed here! -->
							<!-- Here is a label for example -->
							<a href="{{ route('match.create') }}"><i class="fa fa-plus"></i>New Match</a>
						</div>
						<!-- /.card-tools -->
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>#</td>
									<td>name</td>
									<td>description</td>
									<td>Multiple</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach($options as $item)
								<tr>
									<td>{{ $item->id }}</td>
									<td>{{ $item->name }}</td>
									<td>{{ $item->description }}</td>
									<td>{{ $item->isMultipleSupported ? "yes" : "no" }}</td>
									<td>
										<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
										<button class="btn btn-sm btn-danger"><i"><i class="fa fa-trash"></i></button>

									</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>

				</div>
			</div>
			<div class="col">
				<div class="card card-outline card-warning">
					<div class="card-header">
						<h3>New Bet Option</h3>
					</div>
					<div class="card-body">
						<form class="form" action="{{ route('bet.store') }}" method="post">
							@csrf
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label>Description</label>
								<input type="text" name="description" class="form-control">
							</div>
							<div class="form-group ml-3">
								<input type="checkbox" name="isMultipleSupported" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Multiple Bets</label>
							</div>
							<div class="form-group">
								<button class="btn btn-outline-success">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection