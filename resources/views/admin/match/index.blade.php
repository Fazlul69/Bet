@extends('layouts.fixed')
@section('title','All Matches')
@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">all matches</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">matches</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="ml-4">
		<div class="row">
		<div class="col">
			<div class="card card-outline card-primary">
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
				<table class="table table-bordered col-sm">
					<thead>
						<tr>
							<td>#</td>
							<td>teams</td>
							<td>match time</td>
							<td>Tournament</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($matches as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->team1 }} vs {{ $item->team2 }}</td>
							<td>{{ $item->match_time }}</td>
							<td>{{ $item->tournament->name }}</td>
							<td>
								<a class="btn btn-sm btn-primary" href="{{ route('match.show',$item->id) }}">
									<i class="fa fa-eye"></i>
								</a>
								<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
								<button class="btn btn-sm btn-danger"><i"><i class="fa fa-trash"></i></button>

							</td>
						</tr>
						@endforeach
						{{-- @foreach($tournaments as $item)
							<tr>
								<td>{{ $item->id }}</td>
								<td>{{ $item->name }}</td>
								<td>{{ $item->description }}</td>
								<td>{{ $item->type }}</td>
								<td>
									<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
									<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
						@endforeach --}}
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<div class="row">
					<div class="col">
						Matches: {{ $matches->total() }}
					</div>
					<div class="col text-right">
						{{ $matches->links() }}
					</div>
				</div>
			</div>
			<!-- /.card-footer -->
		</div>

		</div>
	</div>
	</div>
@endsection