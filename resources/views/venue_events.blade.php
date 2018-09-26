@extends('layouts/main')

@section('content')
<div class="col-lg-10">
	<h1 style='text-align: center; padding-bottom:2vh;'> {{$venue->name}}</h1>
	@foreach ($events as $event)
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-7">
				<div class="row">
					<div class="col-lg-4">
						{{ $event->date }}
					</div>
					<div class="col-lg-6">
						{{$event->start_time}}-{{$event->end_time}}
					</div>
					<div class="col-lg-2">
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
						<div class="col-lg-10">
							{{ $event->genre }}
						</div>
						<div class="col-lg-2">
							£{{$event->ticket_price }}
						</div>
					</p>
				</div>
				<div class='row'>
					<div class="col-lg-8">
						<a href="" class="btn btn-outline-warning">Buy Tickets</a>
					</div>
					<div class="col-lg-4">
						<a href="" class="btn btn-outline-warning">Interested</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<img src= "/css/img/placeholder.jpg" width="200" height="200">
			</div>
			<div class="col-lg-1"></div>
		</div>
		<hr>
	@endforeach
</div>
@endsection