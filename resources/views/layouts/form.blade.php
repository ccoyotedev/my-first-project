

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	
	<link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
	<!-- Boostrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"  type="text/css" href= "{{ asset('css/form.css') }}">


	
	<title>Chord</title>
</head>
<body>
	<div class='container-fluid'>
		<div class='row'>
			<div class = 'col-lg-12' id='title'>
				<h1>Chord</h1>
				<h2>Connect with the Crowd</h2>
			</div>
		</div>
		<div class='row'>
			<div class = 'col-lg-12 form'>

				@section('form')
					THIS IS WHERE THE FORM GOES
				@show
			</div>
		</div>	
	</div>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>