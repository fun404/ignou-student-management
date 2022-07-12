<!DOCTYPE html>
<html>
<head>
	<title>Javascript</title>
	<script type="text/javascript">
		let n = parseInt(prompt("Please enter Number"));

		function factorial(n){
		    //base case
		    if(n == 0 || n == 1){
		        return 1;
		    //recursive case
		    }else{
		        return n * factorial(n-1);
		    }
		}
		answer = factorial(n)
		console.log("The factorial of " + n + " is " + answer);
		document.write("The factorial of " + n + " is " + answer);
	</script>
</head>
<body>
	<h1><a href="index.html">Back</a></h1>

</body>
</html>