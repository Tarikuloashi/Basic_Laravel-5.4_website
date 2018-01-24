<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Laravel Website</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('includes.navbar')
	
	<div class="container">
		@if(Request::is('/'))
			@include('includes.showcase')
		@endif
		
		
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('includes.messages')
				@yield('content')
			</div>	

			<div class="col-md-4 col-lg-4">
				@include('includes.sidebar')
			</div>
		</div>
	</div>
	<footer id="footer" class="text-center">
		<p>Copyright 2018 &copy;Basic Laravel Website</p>
		
	</footer>
	

	

</body>
</html>