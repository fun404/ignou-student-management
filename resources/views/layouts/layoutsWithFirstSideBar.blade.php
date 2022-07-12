<!DOCTYPE html>
<html>
<head>
	<title>IGNOU STUDENT PORTAL</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     @include('includes.head')
</head>
<body>

	 @include('includes.header')

	<!-- <div class="container mt-5 "> -->
	  <div class=" main-content row pt-5 m-5" id="main-content">
	  	<div class="row">
	  		 @yield('left_sidebar')
	  		 @yield('content')
	  </div>
  	</div>
	 @include('includes.footer')


</body>
</html>	