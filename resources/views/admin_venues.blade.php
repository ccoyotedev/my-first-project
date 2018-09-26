@extends('layouts/main')

@section('content')
<div class='col-lg-11' id='admin_venue_list'>
	<h1> Your Venues </h1>
	<div class = 'row'>
	@foreach ($venues as $venue)
		<div class="col-md-3">
		    <div class="card venue-info">
				<div class="card-body">
				    <h5 class="card-title">{{ $venue->name }}</h5>
				    <p class="card-text">
				    	{{ $venue->city }} <br>
				   		{{ $venue->street_address }} <br>
				   		{{ $venue->post_code }}
					</p>
				    <a href="{{ route('admin.addevent', $venue)}}" class="btn btn-outline-warning">Add Event</a>
			  	</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection