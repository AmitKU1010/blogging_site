<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
	<head>

		@include('backLayouts.partials.head')

	</head>
	<body class="app sidebar-mini">
		@include('backLayouts.partials.header')
		<div class="page">
			<div class="page-main">

				@include('backLayouts.partials.nav')

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				@include('backLayouts.partials.sidebar')

				@yield('content')
			</div>

			@include('backLayouts.partials.footer')
		</div>

		@include('backLayouts.partials.footer-scripts')
		@yield('script')

	</body>
</html>