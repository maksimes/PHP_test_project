<!DOCTYPE html>
<html lang="en">
<head>
	<title>Баннер</title>

	@include('layouts.styles')


<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

	<div id="wrapper">

		@include('layouts.header')
		
		@yield('content')
		

	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	@include('layouts.scripts')

</body>
</html>
