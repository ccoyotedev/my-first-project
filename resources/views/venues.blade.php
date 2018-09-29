@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='map'></div>
</div>
@endsection

@section('content')
<div class='col-lg-11 venue-list' id='venue_list'>
	<div class='row header'>
		<h1>Cardiff</h1>
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
				    		<a href="#" class="favourite-button @if($venue->userFavourited) favourite-glow @endif" data-url="{{ route('venue.favourite', ['venue' => $venue])}}">
				    			<i class="fa fa-heart favourite-icon"></i>
				    		</a>
				    	</div>
				    </div>
				    <h6> {{$venue->venue_type}} </h6>
				    <p class="card-text">
				   		{{ $venue->street_address }} <br>
				   		{{ $venue->post_code }}
					</p>

				    <a href="{{ route('events.show', $venue) }}" class="btn btn-outline-warning">Events</a>
				    <!-- <a href="#" class="btn btn-outline-warning favourite-button @if($venue->userFavourited) glow @endif" data-url="{{ route('venue.favourite', ['venue' => $venue])}}">Favourite</a> -->
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
						if (thisButton.hasClass('favourite-glow')) {
							thisButton.removeClass('favourite-glow');
							thisButton.addClass('favourite-not-glow');

						} else {
							thisButton.removeClass('favourite-not-glow');
							thisButton.addClass('favourite-glow');
						}
					}
				})

				return false;
			});
		});

	</script>
@endsection