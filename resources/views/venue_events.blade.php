@extends('layouts/main')

@section('content')
<div class="col-sm-10">
	<h1 style='text-align: center; padding-bottom:2vh;'> {{$venue->name}}</h1>
	@foreach ($events as $event)
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-4">
						{{ $event->date }}
					</div>
					<div class="col-sm-6">
						{{$event->start_time}}-{{$event->end_time}}
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
					<p>
						{{ $event->description }}
					</p>
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
				<div class='row'>
					<div class="col-sm-8">
						<a href="{{ $event->ticket_link }}" target="_blank" class="btn btn-outline-warning">Buy Tickets</a>
					</div>
					<div class="col-sm-4">
						<a href="#" class="btn btn-outline-warning interested-button @if($event->userInterested) glow @endif" data-url="{{ route('event.interest', ['venue' => $venue, 'event' => $event])}}">Interested</a>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<img src= "/css/img/placeholder.jpg" width="200" height="200">
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
		});

	</script>
@endsection