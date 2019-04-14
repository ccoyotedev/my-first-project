@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='mapid'></div>
</div>
@endsection

@section('content')
<div class="col-sm-1"></div>
<div class="col-sm-9" id='event-list'>
	<div class='row venue-modal-header'>
		<div class='col-sm-7'>
			<h1 style='text-align: center; padding-bottom:2vh;'> {{$venue->name}}</h1>
		</div>
		<div class='col-sm-4'>
			<h5> {{$venue->venue_type}} </h5>
		</div>
		<div class='col-sm-1 venue-event-favourite'>
    		<a href="#" class="favourite-button favourite{{ $venue->id }}"  data-url="{{ route('venue.favourite', ['venue' => $venue])}}">
    			<i class="far fa-heart favourite-icon @if($venue->userFavourited) fa favourite-glow @endif" style="margin-left: -5px"></i>
    		</a>
    	</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-9">
			<p> {{$venue->description}} </p>
			<hr>		
		</div>
	</div>
	
	@foreach ($events as $event)
		<div class="row event-container">
			<div class="col-sm-1"></div>
			<div class="col-sm-7">
				<div class="row event-header">
					<div class="col-sm-4">
						{{ date('D', strtotime($event->date))}} {{ date('d F y', strtotime($event->date)) }}
					</div>
					<div class="col-sm-8">
						{{date('H:i', strtotime($event->start_time)) }}-{{date('H:i', strtotime($event->end_time))}} |
						£{{$event->ticket_price }} |
						{{$event->age_restriction}}			
					</div>
				</div>
				<div class='row'>
					<h3> {{ $event->title }} </h3>
				</div>
				<div class="row">
					<p>
						<div class="col-sm-10">
							{{ $event->genre }}
						</div>
					</p>
				</div>
				<div class='row event-buttons'>
					<div class="col-sm-4">
						<button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample{{$event->id}}" aria-expanded="false" aria-controls="collapseExample">More info</button>
					</div>
					<div class="col-sm-4">
						<a href="{{ $event->ticket_link }}" target="_blank" class="btn btn-outline-warning">Buy Tickets</a>
					</div>
					<div class="col-sm-4">
						<a href="#" class="btn btn-outline-warning interested-button @if($event->userInterested) glow @endif" data-url="{{ route('event.interest', ['venue' => $venue, 'event' => $event])}}">Interested</a>
					</div>
					<div class="collapse" id="collapseExample{{ $event->id }}">
  						<div class="card card-body">
							{{ $event->description }}
						</div>
					</div>					 
				</div>
			</div>

			<div class="col-sm-4">
				<img src= "{{ $event->image }}" width="130" height="130">
			</div>
			<div class="col-sm-1"></div>
		</div>
		<hr>
	@endforeach
</div>
@endsection

@section('script')

	<script type="text/javascript">

		$(function(){

			$('.interested-button').on('click', function(){
				var thisButton = $(this);
				var url = thisButton.data('url');

				$.ajax({
					url: url,
					complete: function(jqXHR, textStatus) {
						if (thisButton.hasClass('glow')) {
							thisButton.removeClass('glow');
						} else {
							thisButton.addClass('glow');
						}
					}
				})

				return false;
			});
		



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