<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<div class="container bg-light my-5 p-5">
		<form name="foodchart">
			<select name="foods">
				<option value="momo">momo</option>	
				<option value="pizza">pizza</option>	
				<option value="salad">salad</option>	
				<option value="panipuri">panipuri</option>	
			</select>
			<input type="text" name="favfoods">
		</form>
	</div>
	<script type="text/javascript">
		document.foodchart.foods.value.onchange(){
			console.log(this);
		}
	</script>

	<?php include("footer.php") ?>
</body>
</html>