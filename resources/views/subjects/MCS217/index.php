<!DOCTYPE html>
<html>
<head>
	<title>Software Engineering Lab Record</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- js popover -->

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/imagehover.css">
</head>
<body>
	<div class="container">
		<?php 
			for ($i=0; $i < 20 ; $i++) { 
				$question = "session-".$i.".php";
				if (file_exists("$question")) {
					include("$question");
				}
			}
		 ?>
			
	</div>
</body>
</html>