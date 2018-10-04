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

					
					<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".form-modal-lg{{$venue->id}}">Events</button>
					<div class="modal fade form-modal-lg{{$venue->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  		<div class="modal-dialog modal-lg">
				    		<div class="modal-content event-modal" style='color:black'>
				    	<!--------------- Venue event modal -------------------------->
				    	      <!---- Modal Header ------------->
				    	      	<div class="row">
									<div class="col-sm-1"></div>
									<div class="col-sm-10">
										<div class='row'>
											<div class="col-sm-1"></div>
											<div class='col-sm-6'>
												<h1 style='text-align: center; padding-bottom:2vh;'> {{$venue->name}}</h1>
											</div>
											<div class='col-sm-4'>
												<h5> {{$venue->venue_type}} </h5>
											</div>
											<div class='col-sm-1'>
									    		<a href="#" class="favourite-button" id="favourite-anchor" data-url="{{ route('venue.favourite', ['venue' => $venue])}}">
									    			<i class="far fa-heart favourite-icon @if($venue->userFavourited) fa favourite-glow @endif"></i>
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
									<!-- Modal events --->
						    		<?php
						    			$today = date('Y-m-d');
	               						$events = App\Event::where('venue_id', $venue->id )->where('date', '>=' , $today)->orderBy('date')->get();
	 									foreach ($events as $event) {
	 										?>
	 										<div class="row">
												<div class="col-sm-1"></div>
												<div class="col-sm-7">
													<div class="row">
														<div class="col-sm-5">
															{{ date('d F Y', strtotime($event->date)) }}
														</div>
														<div class="col-sm-5">
															{{date('H:i', strtotime($event->start_time)) }}-{{date('H:i', strtotime($event->end_time))}}
														</div>
														<div class="col-sm-2">
															{{$event->age_restriction}}
														</div>
														</p>
													</div>
													<div class='row'>
														<h3> {{ $event->title }} </h3>
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

											<?php
	 									}
						    		 ?>
						    		</div>
						    		<div class="col-sm-1"></div>
						    	</div>
					    	</div>
					    </div>
					</div>

				    <!-- <a href="{{ route('events.show', $venue) }}" class="btn btn-outline-warning">Events</a> -->
				    
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