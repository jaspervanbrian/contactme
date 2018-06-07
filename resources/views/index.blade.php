<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	@include('favicon')

	<title>Jasper Martin</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
</head>
<body id="page-top">
	<div id="app">
		<navbar></navbar>
		<header-section></header-section>
		<about-section></about-section>
		<footer-section></footer-section>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/jquery-easing.js') }}"></script>
	<script src="{{ asset('js/grayscale.js') }}"></script>
</body>
</html>