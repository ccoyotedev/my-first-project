@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='map'></div>
</div>
@endsection

@section('content')
<div class='col-lg-11 venue-list' id='admin_venue_list'>
	<div class='row header'>
		<div class="col-sm-12">
			<h1> Your Venues </h1>
		</div>
	</div>
	<div class = 'row'>
	@foreach ($venues as $venue)
		<div class="col-md-4">
		    <div class="card venue-info">
				<div class="card-body">
				    <h5 class="card-title">{{ $venue->name }}</h5>
				    <h6> {{$venue->venue_type}} </h6>
				    <p class="card-text">
				    	{{ $venue->city }} <br>
				   		{{ $venue->street_address }} <br>
				   		{{ $venue->post_code }}
					</p>

					<!-- The Modal -->
					<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target=".form-modal-lg{{$venue->id}}">Add Event</button>
					<div class="modal fade form-modal-lg{{$venue->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-md">
					    <div class="modal-content">
					      
					    	<div class="col-sm-1"></div>
								<div class='col-lg-9 add-event-form' style='color:black; max-width: 100%; padding:30px'>
									<h1>{{$venue->name}}</h1>
									<form method="POST" id='add-event' action= "{{ route('event.store', $venue) }}">
										{{ csrf_field() }}
										<div class="form-group">
										    <label for="title">Event Title</label>
										    <input type="text" class="form-control" name="title" id="title">
										</div>
										<div class="form-group">
										    <label for="date">Date</label>
										    <input type="date" class="form-control" name="date" id="date">
										</div>
										<div class="form-group">
										    <label for="start-time">Start Time</label>
										    <input type="Time" class="form-control" name="start-time" id="start-time">
										</div>
										<div class="form-group">
										    <label for="end-time">End Time</label>
										    <input type="time" class="form-control" name="end-time" id="end-time">
										</div>
										<fieldset class="form-group">
										    <div class="row">
											    <legend class="col-form-label col-sm-5 pt-0">Age Restriction</legend>
											    <div class="col-sm-7">
											        <div class="form-check">
											            <input class="form-check-input" type="radio" name="age-restriction" id="age-restriction1" value="0" checked>
											            <label class="form-check-label" for="age-restriction1">
											            	No age restriction
											            </label>
											        </div>
											        <div class="form-check">
											            <input class="form-check-input" type="radio" name="age-restriction" id="age-restriction2" value="16+">
											            <label class="form-check-label" for="age-restriction2">
											                16+
											            </label>
											        </div>
											        <div class="form-check disabled">
												        <input class="form-check-input" type="radio" name="age-restriction" id="age-restriction3" value="18+">
												        <label class="form-check-label" for="age-restriction3">
												            18+
												        </label>
											        </div>
											    </div>
										    </div>
									 	</fieldset>
									 	<div class="form-group">
										    <label for="genre">Genre</label>
										    <input type="text" class="form-control" name="genre" id="genre">
										</div>
										<div class="form-group">
										    <label for="description">Description</label>
										    <input type="text" class="form-control" name="description" id="description" maxlength="500">
										</div>
										<div class="form-group">
									        <label for="image">Event Image:</label>
									        <input type="file"
									               id="image" name="image"
									               accept="image/png, image/jpeg" />
									    </div>
										<div class="form-group">
										    <label for="ticket-price">Ticket Price</label>
										    <input type="number" class="form-control" name="ticket-price" id="ticket-price">
										</div>
										<div class="form-group">
										    <label for="ticket-link">Ticket link</label>
										    <input type="url" class="form-control" name="ticket-link" id="ticket-link">
										</div>
										<button type="submit" class="btn btn-outline-warning">
								            Add Event
									</form>
								</div>
								<div class="col-sm-1"></div>
						    </div>
						</div>
					</div>
			  	</div>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection