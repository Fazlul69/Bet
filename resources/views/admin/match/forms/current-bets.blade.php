<div class="row m-2 pt-3">
	
	<div class="col">
		<form action="{{ route('details.store') }}" method="post">
			@csrf
			<input type="text" name="match_id" value="{{ $match->id }}" hidden="">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">

						<select name="bet_option_id" class="custom-select" id="bet_option_id">

							@foreach($betOptions as $option)
							<option value="{{ $option->id }}">{{ $option->name }}</option>
							@endforeach
						</select>
						<small aria-describy="bet_option_id">select bet option</small>
					</div>
				</div>
				
				<div class="col">
					<button class="btn btn-success" type="submit">Add Option</button>

				</div>
			</div>
		</form>
	</div>
</div>

<div class="row">
	
	@foreach($betOptionsSelected as $item)
	
	<div class="col">
		<div class="card elevation-2">
			<div class="card-body">
				<h3>{{ $item->betOption->name }}</h3>

				@if($item->betOption->isMultipleSupported)
				<div class="text-right">
					<button class="btn btn-sm btn-success" id="append" data-id="{{ $item->id }}"><i class="fa fa-plus"></i></button>
				</div>
				@endif

				<form class="form" action="{{ route('match.bets') }}" method="post">
					@csrf
					<input type="number" name="bets_for_matches_id" value="{{ $item->id }}" hidden>
					<div id="form-{{$item->id}}">
						@if(count($item->betDetails) < 1)
<div class="row">
						<div class="col form-group">
							<label>{{ $item->betOption->isMultipleSupported ? "Name" : $match->team1}}</label>
							<input type="text" name="{{ $item->betOption->isMultipleSupported ? "name[]" : "value1"}}" class="form-control">
						</div>
						<div class="col form-group">
							<label>{{ $item->betOption->isMultipleSupported ? "Value" : $match->team2}}</label>
							<input type="text" name="{{ $item->betOption->isMultipleSupported ? "value[]" : "value2"}}" class="form-control">
						</div>
					</div>
						@else
							@foreach($item->betDetails as $details)
							<input type="text" name="details_id[]" value="{{ $details->id }}" hidden>
							<div class="row">
						<div class="col form-group">
							<label>{{ $item->betOption->isMultipleSupported ? "Name" : $match->team1}}</label>
							<input type="text" name="{{ $item->betOption->isMultipleSupported ? "name[]" : "value1"}}" class="form-control" value="{{ $details->name }}">
						</div>
						<div class="col form-group">
							<label>{{ $item->betOption->isMultipleSupported ? "Value" : $match->team2}}</label>
							<input type="text" name="{{ $item->betOption->isMultipleSupported ? "value[]" : "value2"}}" class="form-control" value="{{ $details->value }}">
						</div>
					</div>
						@endforeach
						@endif
						
					</div>
					
					<div class="row">
						<div class="col">
							<div class="text-right">
								<button class="btn btn-outline-success" type="submit">Set</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	@if($loop->iteration % 2 == 0)
		</div>
		<div class="row">
	@endif
	@endforeach
</div>

@section('script')
<script>
	// var i = 0
	$(document).on("click","#append",function(e){
		// i++;
		var id = $(this).data("id");
		var html = "<div class='row'>"
						+"<div class='col form-group'>"
							+"<label>Name</label>"
							+"<input type='text' name='name[]' class='form-control'>"
						+"</div>"
						+"<div class='col form-group'>"
							+"<label>Value</label>"
							+"<input type='text' name='value[]' class='form-control'>"
						+"</div>"
					+"</div>"
					+"<button class='btn btn-sm'><i class='text-danger fa fa-times-circle '></i></button>"
					console.log(html)
		$("#form-"+id).append(html)
	})
</script>
@endsection