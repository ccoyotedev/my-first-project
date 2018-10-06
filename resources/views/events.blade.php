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
			<div class="col-sm-7">
				<h1 id="events-title"> Events </h1>
			</div>
			<div class="col-sm-2 city-selector">
				<h4  id='city'> {{ $city or "Cardiff" }}</h4>
			</div>
			<div class="col-sm-3 city-selector">
				<div class="dropdown">
					<button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='float:left'>
					    Change City
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

					<a data-toggle="modal" data-target=".form-modal-lg{{$event->id}}" href=".form-modal-lg{{ $event->id }}">{{ $event->venue->name }}</a>
					<div class="modal fade form-modal-lg{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  		<div class="modal-dialog modal-lg">
				    		<div class="modal-content event-modal" style='color:black'>
				    	<!--------------- Venue event modal -------------------------->
				    	      <!---- Modal Header ------------->
				    	      	<div class="row">
									<div class="col-sm-1"></div>
									<div class="col-sm-10">
										<div class='row venue-modal-header'>
											<div class='col-sm-7'>
												<h1 style='text-align: center; padding-bottom:2vh;'> {{$event->venue->name}}</h1>
											</div>
											<div class='col-sm-4'>
												<h5> {{$event->venue->venue_type}} </h5>
											</div>
											<div class='col-sm-1'>
									    		<a href="#" class="favourite-button favourite{{ $event->venue->id }}"  data-url="{{ route('venue.favourite', ['venue' => $event->venue])}}">
									    			<i class="far fa-heart favourite-icon @if($event->venue->userFavourited) fa favourite-glow @endif"></i>
									    		</a>
									    	</div>
										</div>
										<div class="row">
											<div class="col-sm-1"></div>
											<div class="col-sm-9">
												<p> {{$event->venue->description}} </p>
												<hr>		
											</div>
										</div>
									<!-- Modal events --->
						    		<?php
						    			$today = date('Y-m-d');
	               						$venueEvents = App\Event::where('venue_id', $event->venue->id )->where('date', '>=' , $today)->orderBy('date')->get();
	 									foreach ($venueEvents as $venueEvent) {
	 										?>
	 										<div class="row">
												<div class="col-sm-1"></div>
												<div class="col-sm-7">
													<div class="row">
														<div class="col-sm-5">
															{{ date('d F Y', strtotime($venueEvent->date)) }}
														</div>
														<div class="col-sm-5">
															{{date('H:i', strtotime($venueEvent->start_time)) }}-{{date('H:i', strtotime($venueEvent->end_time))}}
														</div>
														<div class="col-sm-2">
															{{$venueEvent->age_restriction}}
														</div>
														</p>
													</div>
													<div class='row'>
														<h3> {{ $venueEvent->title }} </h3>
													</div>
													<div class="row">
														<p>
															<div class="col-sm-10">
																{{ $venueEvent->genre }}
															</div>
															<div class="col-sm-2">
																£{{$venueEvent->ticket_price }}
															</div>
														</p>
													</div>
													<div class='row event-buttons'>
														<div class="col-sm-4">
															<button class="btn" type="button" data-toggle="collapse" data-target="#collapseExample{{$venueEvent->id}}" aria-expanded="false" aria-controls="collapseExample">More info</button>
														</div>
														<div class="col-sm-4">
															<a href="{{ $venueEvent->ticket_link }}" target="_blank" class="btn btn-outline-warning">Buy Tickets</a>
														</div>
														<div class="col-sm-4">
															<a href="#" class="btn btn-outline-warning interested-button @if($venueEvent->userInterested) glow @endif" data-url="{{ route('event.interest', ['venue' => $venueEvent->venue, 'event' => $event])}}">Interested</a>
														</div>
														<div class="collapse" id="collapseExample{{ $venueEvent->id }}">
									  						<div class="card card-body">
																{{ $venueEvent->description }}
															</div>
														</div>					 
													</div>
												</div>

												<div class="col-sm-4">
													<img src= "{{ $venueEvent->image }}" width="130" height="130">
												</div>
												<div class="col-sm-1"></div>
											</div>
											<hr>

											<?php
	 									}
						    		 ?>
						    		</div>
						    		<div class="col-sm-1"></div>
						    	</div>
					    	</div>
					    </div>
					</div>

					<!-- <a href="{{ route('events.show', $event->venue ) }}"><h5> {{ $event->venue->name }}</h5></a> -->
					
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
