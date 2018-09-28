<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style='text-align: center; font-family: arial;'>
	<h1 id="main-heading">Primes Calculator</h1>

	<form action="#">
		<input type="number" id='number' name="candidate">
		<button>Go!</button>
	</form>

	<h3>The number <span id='result'>RESULT</span> prime</h3>

	<script>

		
				
		var Primes = {

			isPrime: function(number) {
				
				for (i=2; i<= number/2 ; i++) {
					if (number % i == 0) {
						return false;
					}
				}
				return true;
			},

			primesBetween: function(min, max) {
				var primes = [];

			    for (var min; min <= max; min++) {

			        if (this.isPrime(min) == true) {
			        	primes.push(min);
			        }  			           
			    } 
			    return primes;
			}

		}

		function enter() {
			var input = document.getElementById('number');
			if (Primes.isPrime(input.value) == false) {
				document.querySelector('#result').innerText = 'is not';
			} else {
				document.querySelector('#result').innerText = 'is a bloody';
			}
		}

		//bind to for submit button
		document.querySelector('form').onsubmit = function(e) {
			e.preventDefault();
			enter();
		}


    
    


		
	</script>
</body>
</html>