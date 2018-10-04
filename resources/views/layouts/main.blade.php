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

    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>


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
                        <a href=" {{ route('index') }}"><h3>Chord</h3><br><br></a>
                    </div>

                    <ul class="list-unstyled components">
                        <li>
                            <a href="{{ route('events.view', ['city' => 'Cardiff']) }}">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('venues.view', ['city' => 'Cardiff']) }}">Venues</a>
                        </li>
                        <li>
                            <a href="{{ route('user.interests') }}">Interested</a>
                        </li>
                        <li>
                            <a href="{{ route('user.favourites') }}">Favourites</a>
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

    var mymap = L.map('mapid').setView([51.48, -3.178], 14);
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.dark',
        accessToken: 'pk.eyJ1IjoiY2djYnJvd24iLCJhIjoiY2ptOHZieHduMHNoeTNwbnR0d2NudGQ5biJ9.Q4Sn0qdYeMUt4BhYUf9X6A'
    }).addTo(mymap);


</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@section('script')
@show

</body>
</html>