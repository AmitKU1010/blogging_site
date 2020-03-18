
	<!-- errors -->
	@if(count($errors))
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.

			<br/>

			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<!-- errors -->

	<!-- succces -->
	@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}

			@php
				Session::forget('success');
			@endphp
		</div>
	@endif
	<!-- success -->

	   