<!doctype html>

<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		@include('frontLayouts.partials.head')

	</head>
	<body>

		@include('frontLayouts.partials.nav')

		@yield('content')

		@include('frontLayouts.partials.footer')

		@include('frontLayouts.partials.footer-scripts')
            @yield('script')
	</body>
</html>
