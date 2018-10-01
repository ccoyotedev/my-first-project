<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Chord</title>

    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no'/>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet'/>

    <!-- fun icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/index.css') }}">

    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>

    <?php
    use App\User;
    use App\Admin;
    ?>
</head>
<body>
<div class='container-fluid'>
    @section('map')

    @show
    <div class='row'>
        <div class='col-sm-1'>
            <div class="wrapper">
                <!-- Sidebar -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Chord</h3>
                    </div>

                    <ul class="list-unstyled components">
                        <a href=" {{ route('index') }}"><p>Menu</p></a>
                        <li>
                            <a href="{{ route('user.interests') }}">Interested</a>
                        </li>
                        <li>
                            <a href="{{ route('user.favourites') }}">Favourites</a>
                        </li>
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Filter</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="#">Filter 1</a>
                                </li>
                                <li>
                                    <a href="#">Filter 2</a>
                                </li>
                                <li>
                                    <a href="#">Filter 3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('venues.view') }}">Venues</a>
                        </li>
                        <?php
                        function adminView() {
                        $user_id = Auth::id();
                        $admins = Admin::all();
                        foreach ($admins as $admin) {
                        if ($admin->user_id == $user_id) {
                        ?>
                        <li>
                            <a href="{{ route('admin-venues.view') }}">Add Events</a>
                        </li>
                        <?php
                        }
                        }
                        }

                        AdminView();
                        ?>
                        <li>
                            <br><br><br><br>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}">LOGOUT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        @section('content')
        @show
    </div>
</div>
<!-- map -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiY2djYnJvd24iLCJhIjoiY2ptOHZieHduMHNoeTNwbnR0d2NudGQ5biJ9.Q4Sn0qdYeMUt4BhYUf9X6A';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/cgcbrown/cjm91831xez7d2rnic3loq6sh',
        center: [-3.178, 51.48],
        zoom: 13
    });


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


        let venues = $.ajax({
            url: "{{ url('venue-data')}}",
            dataType: 'json',
            complete: function () {
                var venue_array = venues.responseJSON;

                var features = [];
                for(var i=0; i<venue_array.length; i++) {

                    const venue = venue_array[i];
                    feature.properties.description = venue.description;
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


</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

@section('script')
@show
</body>
</html>