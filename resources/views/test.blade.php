<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>

	<?php include("header.php") ?>

	<div class="container mt-5 ">
	  <div class="row ">
	  	<?php include("left-sidebar.php") ?>
	    <div class=" main-content col-sm-8">
	    	

	    	<!-- JS Calculator -->
	    	<div class="row js-calculator ">
				<div class="row mb-5">
					<span><a href="index.php"><h5>Back...</h5></a></span>
				<h1 class="text-center">Change color</h1>
				<h5 class="text-center">click </h5>
					
				</div>
	    		<form class="row subcontent" action=""  name="doublevalue">
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
					  <label class="form-check-label" for="flexRadioDefault1">
					    Default radio
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
					  <label class="form-check-label" for="flexRadioDefault2">
					    Default checked radio
					  </label>
					</div>				</form>
	    		<script type="text/javascript">
	    			
	    		</script>
		    </div>
		</div>
	  </div>
	</div>
	<?php include("footer.php") ?>
</body>
</html>