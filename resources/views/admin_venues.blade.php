@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='map'></div>
</div>
@endsection

@section('content')
<div class='col-lg-11 venue-list' id='admin_venue_list'>
	<div class='row header'>
		<div class="col-sm-12">
			<h1> Your Venues </h1>
		</div>
	</div>
	<div class = 'row'>
	@foreach ($venues as $venue)
		<div class="col-md-4">
		    <div class="card venue-info">
				<div class="card-body">
				    <h5 class="card-title">{{ $venue->name }}</h5>
				    <h6> {{$venue->venue_type}} </h6>
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