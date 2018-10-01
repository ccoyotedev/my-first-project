<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p id="to_fill">Hello</p>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    	
    </script>



<script type="text/javascript">
    let venues = $.ajax({
        url: "{{ url('venue-data')}}",
        dataType: 'json',
        complete: function() {
            var venue_array = venues.responseJSON;

            for (var i=0; i < venue_array.length; i++) {
                document.getElementById('to_fill').innerHTML += venue_array[i].name;
            }
        }
    });

</script>

</body>
</html>