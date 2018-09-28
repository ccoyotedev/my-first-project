@extends('layouts/main')

@section('content')
<div class="col-sm-10">
	<h1 style='text-align: center; padding-bottom:2vh;'> Interests </h1>
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
					<a href="{{ route('events.show', $event->venue ) }}"><h5> {{ $event->venue->name }}</h5></a>
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