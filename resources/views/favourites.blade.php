@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-sm-12 map' id='map'></div>
</div>
@endsection

@section('content')
<div class='col-sm-11 venue-list' id='venue_list'>
	<h1>Favourites</h1>
	<div class = 'row'>
	@foreach ($venues as $venue)
		<div class="col-md-4">
		    <div class="card venue-info">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-10">
				    		<h5 class="card-title">{{ $venue->name }}</h5>
				    	</div>
				    	<div class="col-sm-2">
				    		<i class="fas fa-times"></i>
				    	</div>
				    </div>
				    <h6> {{$venue->venue_type}} </h6>
				    <p class="card-text">
				    	{{ $venue->city }} <br>
				   		{{ $venue->street_address }} <br>
				   		{{ $venue->post_code }}
					</p>

				    <a href="{{ route('events.show', $venue) }}" class="btn btn-outline-warning">Events</a>
			  	</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection