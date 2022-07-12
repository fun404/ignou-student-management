<!DOCTYPE html>
<html>
<head>
	<title>IGNOU STUDENT PORTAL</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ URL::asset('css/home.css')}}">
     @include('includes.head')
</head>
<body>
	<!-- @includeIf('includes.header', ['some' => 'data']) -->

	<!-- <div class="container mt-5 "> -->
	  <div class=" main-content row pt-5 m-5" id="main-content">
	  	<div class="row">
	  		 @includeif('includes.left_sidebar')
	  		 @yield('content')
	  		 @includeif('includes.right_sidebar')
	  	</div>
  	</div>
	 @include('includes.footer')


</body>
</html>	