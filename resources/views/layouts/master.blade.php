<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">

	    <title>@yield('site-title')</title>

	    <!-- Styles -->
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	    @section('include_head')
	    	
	    @show
	</head>
	<body>
		<!-- HEADER -->
	    @include('includes.header')
		
		<!-- MAIN -->
		@include('includes.main')
		
		<!-- FOOTER -->
		@include('includes.footer')

	    <!-- Scripts -->
	    <script src="{{ asset('js/app.js') }}"></script>
	    @section('include_script')
	    	
	    @show
	</body>
</html>
