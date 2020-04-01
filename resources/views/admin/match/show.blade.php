@extends('layouts.fixed')
@section('title',strtoupper($match->team1)." V ".strtoupper($match->team2)." | Match Details")

@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">{{ strtoupper($match->team1)." V ".strtoupper($match->team2) }}</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="{{ route('match.index') }}">Matches</a></li>
						<li class="breadcrumb-item active">{{ strtoupper($match->team1)." V ".strtoupper($match->team2) }} Details</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<div class="ml-2">
		<div class="card card-outline card-primary">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h3>{{ $match->unique_id }}</h3>
					</div>
					<div class="col">
						<h5>Match time</h5>
					</div>

				</div>
				<div class="row m-5 p-5">
					<h5>Scores</h5>
				</div>
				<div class="row">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="false">Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" id="current-bet-tab" data-toggle="tab" href="#current-bet" role="tab" aria-controls="current-bet" aria-selected="true">current-bet</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="action-tab" data-toggle="tab" href="#action" role="tab" aria-controls="action" aria-selected="false">Bet action</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="bids-tab" data-toggle="tab" href="#bids" role="tab" aria-controls="bids" aria-selected="false">Bids</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="action-tab" data-toggle="tab" href="#all-bets" role="tab" aria-controls="all-bets" aria-selected="false">all bets</a>
						</li>
					</ul>

				</div>
				<div class="row">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">Details</div>
						<div class="tab-pane fade show active" id="current-bet" role="tabpanel" aria-labelledby="current-bet-tab">
							@include('admin.match.forms.current-bets')
						</div>
						<div class="tab-pane fade" id="action" role="tabpanel" aria-labelledby="action-tab">bet action</div>
						<div class="tab-pane fade" id="bids" role="tabpanel" aria-labelledby="bids-tab">bids</div>
						<div class="tab-pane fade" id="all-bets" role="tabpanel" aria-labelledby="all-bets-tab">All bets</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

@endsection