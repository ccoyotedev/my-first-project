@extends('layouts/main')
@section('map')
<div class = 'row'>
    <div class = 'col-lg-12 map' id='map'></div>
</div>
@endsection

@section('content')
<div class="col-sm-1"></div>
<div class='col-lg-9 add-event-form'>
	<h1>{{$venue->name}}</h1>
	<form method="POST" action= "{{ route('event.store', $venue) }}">
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
			    <legend class="col-form-label col-sm-2 pt-0">Age Restriction</legend>
			    <div class="col-sm-10">
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
		    <input type="text" class="form-control" name="description" id="description">
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
@endsection