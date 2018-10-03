@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='mapid'></div>
</div>
@endsection

@section('content')
<div class='col-lg-11 venue-list' id='venue-list'>
	<div class='row header'>
		<div class="col-sm-7">
			<h1>Venues</h1>
		</div>
		<div class="col-sm-2">
			<h3> {{ $city or "Cardiff" }}</h3>
		</div>
		<div class="col-sm-3"> 
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='float:left'>
				    City
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					@foreach ($cities as $city)
					    <a class="dropdown-item" href="{{ route('venues.view', $city->city) }}">{{ $city->city }}</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class = 'row'>
	@foreach ($venues as $venue)
		<div class="col-md-4">
		    <div class="card venue-info">
				<div class="card-body">
					<div class='row'>
						<div class='col-sm-10'>
				    		<h5 class="card-title">{{ $venue->name }}</h5>
				    	</div>
				    	<div class='col-sm-2'>
				    		<a href="#" class="favourite-button" data-url="{{ route('venue.favourite', ['venue' => $venue])}}">
				    			<i class="far fa-heart favourite-icon @if($venue->userFavourited) fa favourite-glow @endif"></i>
				    		</a>
				    	</div>
				    </div>
				    <h6> {{$venue->venue_type}} </h6>
				    <p class="card-text">
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

@section('script')

	<script type="text/javascript">

		$(function(){

			$('.favourite-button').on('click', function(){
				var thisButton = $(this);
				var url = thisButton.data('url');

				$.ajax({
					url: url,
					complete: function(jqXHR, textStatus) {
						if (thisButton.children().hasClass('fa')) {
							thisButton.children().removeClass('fa');
							thisButton.children().removeClass('favourite-glow');
							thisButton.children().addClass('far');

						} else {
							thisButton.children().removeClass('far');
							thisButton.children().addClass('fa');
							thisButton.children().addClass('favourite-glow');
						}
					}
				})

				return false;
			});
		});

	</script>
@endsection