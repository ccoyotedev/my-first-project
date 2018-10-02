@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12' id='map'></div>
</div>
@endsection

@section('content')
<div class='col-sm-8'>
	
</div>

<div class='col-sm-3'>
 	<form name="myform">
	    <input type="date" class="form-control" name="date" id="map-date" value= <?= date('Y-m-d') ?>>
	</form>
</div>
@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script  type="text/javascript">


	$(document).ready(function() {

	let feature = {
        "type": "Feature",
        "properties": {
            "description": null,
            "icon": "marker"
        },
        "geometry": {
            "type": "Point",
            "coordinates": [null, null]
        }
    };


    map.on('load', function () {
        // Add a layer showing the places.

        $( "#map-date").change(function() {

        	var date = $(this).val();
        	var url = "{{ url('venue-data') }}?date=" + date;

	        let venues = $.ajax({
	            url: url,
	            dataType: 'json',
	            complete: function () {
	                var venue_array = venues.responseJSON;

	                var features = [];
	                for(var i=0; i<venue_array.length; i++) {

	                    const venue = venue_array[i];
	                    feature.properties.description = "<strong><a href='venue/" + venue.id + "/events' class='popup'>" + venue.name + "</a></strong><br>" + venue.venue_type;
	                    feature.geometry.coordinates = [venue.longitude, venue.latitude];
	                    features[i] = jQuery.extend(true, {}, feature)
	                }

	                map.addLayer({

	                    "id": "places",
	                    "type": "symbol",
	                    "source": {
	                        "type": "geojson",
	                        "data": {
	                            "type": "FeatureCollection",
	                            "features": features,
	                        }
	                    },
	                    "layout": {
	                        "icon-image": "{icon}-15",
	                        "icon-allow-overlap": true
	                    }
	                });
	            }
	        });
	    });
    });


    // When a click event occurs on a feature in the places layer, open a popup at the
    // location of the feature, with description HTML from its properties.
    map.on('click', 'places', function (e) {
        var coordinates = e.features[0].geometry.coordinates.slice();
        var description = e.features[0].properties.description;

        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        }

        new mapboxgl.Popup()
            .setLngLat(coordinates)
            .setHTML(description)
            .addTo(map);
    });

    // Change the cursor to a pointer when the mouse is over the places layer.
    map.on('mouseenter', 'places', function () {
        map.getCanvas().style.cursor = 'pointer';
    });

    // Change it back to a pointer when it leaves.
    map.on('mouseleave', 'places', function () {
        map.getCanvas().style.cursor = '';
    });
		
	});

</script>

@show
