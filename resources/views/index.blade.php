@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12' class='map' id='mapid'></div>
</div>
@endsection

@section('content')

<div class='col-sm-8'></div>

<div class='col-sm-3'>
    <form name="myform">
        <input type="date" class="form-control" name="date" id="map-date" value= <?= date('Y-m-d') ?>>
    </form>
</div>



@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script  type="text/javascript">

var venueMarkerLayer = null;

function addVenueMarkerLayer() {
    
    var date = $(" #map-date ").val();
    var url = "{{ url('venue-data') }}?date=" + date;

    let venues = $.ajax({
        url: url,
        dataType: 'json',
        complete: function () {
            
            if (venueMarkerLayer !== null) {
                mymap.removeLayer(venueMarkerLayer);
            }
            

            var venueArray = venues.responseJSON;
            var venueMarkers = [];
            for (i=0; i<venueArray.length; i++) {

                const venue = venueArray[i];

                venueMarkers.push(
                    L.circle([ venue.latitude , venue.longitude ],{
                        color: '#FB9902',
                        fillColor: '#FB9902',
                        fillOpacity: 0.5,
                        radius: 23}).bindPopup("<strong><a href='venue/" + venue.venue_id + "/events' class='popup'>" + venue.name + "</a></strong><br>" + venue.venue_type + "<br><br><a href='/event/" + venue.id + "' class='popup'>"+ venue.title +"</a>")
                );
            }

            venueMarkerLayer = L.layerGroup(venueMarkers).addTo(mymap);      
                                  
        }



    })
       
}

$(document).ready(function() {

    var date = $(" #map-date ").val();
    var url = "{{ url('venue-data') }}?date=" + date;

    addVenueMarkerLayer();

    $( "#map-date" ).change(function() {
        
        addVenueMarkerLayer();

    })
});





	
</script>

@show
