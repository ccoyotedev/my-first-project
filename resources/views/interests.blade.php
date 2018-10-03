@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='mapid'></div>
</div>
@endsection

@section('content')
<div class="col-sm-1"></div>
<div class="col-sm-9" id='interests'>
	<h1 style='text-align: center; padding-bottom:2vh;'> Interests </h1>
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
				<div class='row'>
					<h2> {{ $event->title }} </h2>
				</div>
				<div class='row'>
					<a href="{{ route('events.show', $event->venue ) }}"><h5> {{ $event->venue->name }}</h5></a>
				</div>
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
					<div class="col-sm-6">
						<button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample{{$event->id}}" aria-expanded="false" aria-controls="collapseExample">More info</button>
					</div>
					<div class="col-sm-6">
						<a href="{{ $event->ticket_link }}" target="_blank" class="btn btn-outline-warning">Buy Tickets</a>
					</div>
					
					<div class="collapse" id="collapseExample{{ $event->id }}">
  						<div class="card card-body">
							{{ $event->description }}
						</div>
					</div>					 
				</div>
			</div>

			<div class="col-sm-3">
				<img src= "{{ $event->image }}" width="150" height="150">
			</div>
			<div class="col-sm-1">
				<a href="#" class="remove-button" data-url="{{ route('event.uninterest', ['event' => $event])}}"><i class="fas fa-times remove-icon"></i></a>
			</div>
		</div>
		<hr>
	@endforeach
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
						thisButton.parent().parent().remove();
					}
				})

				return false;
			});
		});

	</script>
@endsection