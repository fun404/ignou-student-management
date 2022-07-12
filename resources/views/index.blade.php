<!DOCTYPE html>
<html>
<head>
	<title>Use of DIV as Container</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('head_links')
</head>
<body>

	@yield('header')

	<!-- <div class="container mt-5 "> -->
	  <div class=" main-content row m-5" id="main-content">
	  	<?php //include("left-sidebar.php") ?>
	    <div class=" col-sm-8">
	    	<div class="row">
	    		<div class="col subcontent">
			      <h2>Factorial</h2>
			      <h6>Factorial Calculator, 29 May 2022</h6>
			      <!-- <div class="fakeimg">Fake Image</div> --->
		    	      <p>Calculate factorial of a numbers using Javascript for loop</p>
			    	<a class="btn px-5 btn-block" href="factorial.php">Run</a>
			      <!-- <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
	    		</div>
	    		<div class="col subcontent">
			      <h2 >Calculator</h2>
			      <h6>Basic JS Calculator, 05 June 2020</h6>
			      <!-- <div class="fakeimg">Fake Image</div> -->
			      <p>Get 2 numbers from user. Create calculator using functions to do the following:</p>
			      <p>Add, Multiply, Subtract, Divide Use Tables and Javascript</p>
		    	  <a class="btn px-5 btn-block" href="basic-js-calculator.php">Run</a>
	    		</div>
	    		<div class="col subcontent">
			      <h2 >Change background </h2>
			      <h6>Change background color, 05 June 2020</h6>
			      
			      <button class="red"onclick='var a = document.getElementsByClassName("col-sm-8")[0].style.background = "tomato";'>Red</button>
			      <button class="red"onclick='var a = document.getElementsByClassName("col-sm-8")[0].style.background = "DodgerBlue";'>Blue</button>
			      <button class="red"onclick='var a = document.getElementsByClassName("col-sm-8")[0].style.background = "Violet";'>Violet</button>
			      <button class="red"onclick='var a = document.getElementsByClassName("col-sm-8")[0].style.background = "white";'>White</button>
		    	  <a class="btn px-5 btn-block" href="basic-js-calculator.php">Run</a>
	    		</div>
	    	</div>

	    	<div class="row">
	    		<div class="col subcontent">
			      <h2>JS Events</h2>
			      <h6>Try All JavaScript Events, 12 June 2022</h6>
	    	      <p>Click on buttons to trigger events</p>
	    	      <div>
					<a class="btn px-5 btn-block" href="events.php">Run</a>
	    		</div>
	    	</div>

	    </div>
	  </div>
	<?php //include("footer.php") ?>


</body>
</html>