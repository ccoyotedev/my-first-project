@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-sm-12' id='mapid'></div>
</div>
@endsection

@section('content')
<div class='col-sm-11 venue-list' id='favourite-venue-list'>
	<div class="row header">
		<div class="col-sm-12">
			<h1>Favourites</h1>
		</div>
	</div>
	<div class = 'row'>
	@foreach ($venues as $venue)
		<div class="col-sm-4 {{$venue->id}}">
		    <div class="card venue-info">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-10">
				    		<h5 class="card-title">{{ $venue->name }}</h5>
				    	</div>
				    	<div class="col-sm-2">
				    		<a href="#" class="remove-button" data-url="{{ route('venue.unfavourite', ['venue' => $venue])}}"'><i class="fas fa-times remove-icon"></i></a>
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

@section('script')

	<script type="text/javascript">

		$(function(){

			$('.remove-button').on('click', function(){
				var thisButton = $(this);
				var url = thisButton.data('url');

				$.ajax({
					url: url,
					complete: function(jqXHR, textStatus) {
						thisButton.parent().parent().parent().parent().parent().remove();
					}
				})

				return false;
			});
		});

	</script>
@endsection