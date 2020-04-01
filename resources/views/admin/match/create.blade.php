@extends('layouts.fixed')
@section('title','Create New Match')
@section('style')
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">new match</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('match.index') }}">Matches</a></li>
					<li class="breadcrumb-item active">create</li>

				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<div class="ml-2">
	<div class="row">
		<div class="col-md-8">
			<div class="card card-outline card-primary">
				<div class="card-header">
					<div class="card-title">
						Enter New Match Details
					</div>

				</div>
				<div class="card-body">
					<form action="{{ route('match.store') }}" method="post" id="match_form">
						@csrf
						<div class="row">
							<div class="col form-group">
								<label >Team 1</label>
								<input type="text" name="team1" class="form-control" placeholder="Ban">
							</div>
							<div class="col form-group">
								<label >Team 2</label>
								<input name="team2" type="text" class="form-control" placeholder="Ind">
							</div>	
						</div>
						<div class="row">
							<div class="col form-group">
								<label>Tournament</label>
								<select name="tournament_id" class="form-control" id="exampleFormControlSelect1">
									@foreach($tournaments as $item)
									<option value="{{ $item->id }}">{{ $item->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="col form-group">
								<label>Unique id</label>
								<input type="text" name="unique_id" id="unique_id" class="form-control">
								<small aria-describy="unique_id" class="text-muted">Get unique id by clicking get current matches button</small>
							</div>
						</div>
						<div class="row">
							<div class="col form-group">
								<label >Match Time</label>
								<input type="datetime-local" name="match_time" class="date time form-control ">
							</div>
							<div class="col form-group">
								<label >Name</label>
								<input name="name" type="text" class="form-control">
							</div>

						</div>
						<div class="row">
							<div class="col ml-4 pl-1">
								<label class="form-check-label">
									<input name="status" class="form-check-input" type="checkbox" value="1">
									publish
								</label>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col text-right">
								<button type="button" onclick="document.getElementById('match_form').reset()" class="btn btn-default">Clear</button>
								<button type="submit" class="btn btn-outline-success">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card card-outline card-danger">
				<div class="card-header">
					<div class="card-title">
						<button class="btn btn-outline-success" id="getMatches">Get Current Matches</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>id</th>
								<th>team1</th>
								<th>team2</th>
								<th>datetime</th>
							</tr>
						</thead>
						<tbody id="table-body">
							<tr>
								<td class="text-muted text-center" colspan="4">Click get current matches to get list of all current matches.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">

	$(document).on("click","#getMatches",function (e){
		$.ajax({
				url: 'https://cricapi.com/api/matches?apikey=kWUGccXKmdaIHE4wlHIk30lZolv1', // add "k" as the very first word in key
				method: 'get',
				success: function(data) {
					var tableData = "";
					if (data.matches != null){
						// success toast
							toastr.success("data fetched successfully.")
						// end of success toast
						$.each(data.matches,function(key,value){
							tableData += "<tr>"
							tableData += "<td>"+value["unique_id"]+"</td>"
							tableData += "<td>"+value["team-1"]+"</td>"
							tableData += "<td>"+value["team-2"]+"</td>"
							tableData += "<td>"+value["dateTimeGMT"]+"</td>"
							tableData += "</tr>"
						});
					}else{
						tableData += "<tr>"
						tableData += "<td colspan="+4+" class='text-center text-danger'>Error Fetching Data. Contact Admin</td>"
						tableData += "</tr>"
					}
					$("#table-body").html(tableData);
					console.log(tableData)
				},
				error: function(data){
					console.log(data)
				}
			});
	});
</script>
@endsection