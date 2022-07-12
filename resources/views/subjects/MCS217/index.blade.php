<!DOCTYPE html>
<html>
<head>
	<title>Software Engineering Lab Record</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="{{ URL::asset('css/pages.css')}}">
     @include('includes.head')
</head>
<body class="blog">
	<div class="container " id="page-id-217index">
		<span><a href="/"><h5>Back...</h5></a></span>
		@for ($i = 0; $i < 20; $i++)
			@includeif("subjects.MCS217.session-$i");
		@endfor

			
	</div>
</body>
</html>