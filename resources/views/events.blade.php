@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='mapid'></div>
</div>
@endsection

@section('content')
<div class="col-sm-1"></div>
	<div class="col-sm-9" id='events'>
		<div class="row" id='events-header'>
			<div class="col-sm-4">
				<h1 style='text-align: center; padding-bottom:2vh;'> Events </h1>
			</div>
			<div class="col-sm-4">{{ $city or "Cardiff"}}</div>
			<div class="col-sm-4">

				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    City
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						@foreach ($cities as $city)
						    <a class="dropdown-item" href="{{ route('events.view', $city->city) }}">{{ $city->city }}</a>
						@endforeach
					</div>
				</div>
		
			</div>
		</div>
		@foreach ($events as $event)
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-4">
							{{ date('d F Y', strtotime($event->date)) }}
						</div>
						<div class="col-sm-6">
							{{date('H:i', strtotime($event->start_time)) }}-{{date('H:i', strtotime($event->end_time))}}
						</div>
						<div class="col-sm-2">
							{{$event->age_restriction}}
						</div>
						</p>
					</div>
					
					<h2> {{ $event->title }} </h2>
					
					
					<a href="{{ route('events.show', $event->venue ) }}"><h5> {{ $event->venue->name }}</h5></a>
					
					<div class="row">
						<p>
							<div class="col-sm-10">
								{{ $event->genre }}
							</div>
							<div class="col-sm-2">
								£{{$event->ticket_price }}
							</div>
						</p>
					</div>
					<div class='row event-buttons'>
						<div class="col-sm-4">
							<button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample{{$event->id}}" aria-expanded="false" aria-controls="collapseExample">More info</button>
						</div>
						<div class="col-sm-4">
							<a href="#" class="btn btn-outline-warning interested-button @if($event->userInterested) glow @endif" data-url="{{ route('event.interest', ['event' => $event])}}">Interested</a>
						</div>
						<div class="col-sm-4">
							<a href="{{ $event->ticket_link }}" target="_blank" class="purchase btn btn-outline-warning">Buy Tickets</a>
						</div>
						
						<div class="collapse" id="collapseExample{{ $event->id }}">
	  						<div class="card card-body">
								{{ $event->description }}
							</div>
						</div>					 
					</div>
				</div>

				<div class="col-sm-4">
					<img src= "{{ $event->image }}" width="175" height="150">
				</div>
				<div class="col-sm-1"></div>
			</div>
			<hr>
		@endforeach
		<div class="pagination-bar">{{ $events->links() }}</div>
		
		
	</div>

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
		});
	</script>

@endsection
