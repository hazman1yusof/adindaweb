<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Moderns Template</title>
	<link rel="stylesheet" type="text/css" href="assets/Semantic_latest/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	@include('layouts.topbar')

	@yield('content')
	
	@include('layouts.footer')

	<script src="js/jquery.min.js"></script>
	<script src="assets/Semantic_latest/semantic.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/main.js"></script>
</body>