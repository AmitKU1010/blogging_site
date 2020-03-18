@extends('backLayouts.adminlayout')

    @section('title')
        Admin Dashboard | Moseva
    @endsection

    @section('content')
 
		<div class="app-content  my-3 my-md-5">
			<div class="side-app">
				<div class="page-header">
					<h4 class="page-title">Admin Dashboard</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="{{route('admin.dashboard')}}">Dashboard</a>
						</li>

						<li class="breadcrumb-item active" aria-current="page">Admin</li>
					</ol>
				</div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @php
					$auth_id=Auth::user()->role_id;

					if($auth_id=='2')
					{ @endphp
						<div class="row row-cards">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center feature">
										<div class="fa-stack fa-lg fa-1x icons shadow-default bg-primary-transparent">
											<i class="icon icon-people text-primary"></i>
										</div>

										<p class="card-text mt-3 mb-3">Total Users</p>

										<p class="h2 text-center text-primary counter">3,456</p>
									</div>
								</div>
							</div><!-- COL END -->

							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center feature">
										<div class="fa-stack fa-lg fa-1x icons shadow-default bg-secondary-transparent">
											<i class="icon icon-refresh text-secondary"></i>
										</div>

										<p class="card-text mt-3 mb-3">Total Vendor</p>

										<p class="h2 text-center text-secondary counter">2,635</p>
									</div>
								</div>
							</div><!-- COL END -->

							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center feature ">
										<div class="fa-stack fa-lg fa-1x icons shadow-default bg-info-transparent">
											<i class="icon icon-speech text-info"></i>
										</div>

										<p class="card-text mt-3 mb-3">Total Manager</p>

										<p class="h2 text-center text-success-1 counter">245</p>
									</div>
								</div>
							</div><!-- COL END -->

							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body text-center feature">
										<div class="fa-stack fa-lg icons shadow-default bg-warning-transparent">
											<i class="icon icon-rocket text-warning"></i>
										</div>

										<p class="card-text mt-3 mb-3">Total Revenue</p>

										<p class="h2 text-center text-secondary-1 counter">₹ 5,459</p>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
				  	@php }

					$auth_id=Auth::user()->role_id;

					if($auth_id=='3')
					{ @endphp
                   	<div class="row row-cards">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature">
									<div class="fa-stack fa-lg fa-1x icons shadow-default bg-primary-transparent">
										<i class="icon icon-people text-primary"></i>
									</div>
									<p class="card-text mt-3 mb-3">Total Bookings</p>
									<p class="h2 text-center text-primary">3,456</p>
								</div>
							</div>
						</div><!-- COL END -->

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature">
									<div class="fa-stack fa-lg fa-1x icons shadow-default bg-secondary-transparent">
										<i class="icon icon-refresh text-secondary"></i>
									</div>
									<p class="card-text mt-3 mb-3">Requested Bookings</p>
									<p class="h2 text-center text-secondary">2,635</p>
								</div>
							</div>
						</div><!-- COL END -->

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature ">
									<div class="fa-stack fa-lg fa-1x icons shadow-default bg-info-transparent">
										<i class="icon icon-speech text-info"></i>
									</div>
									<p class="card-text mt-3 mb-3">Pending Bookings</p>
									<p class="h2 text-center text-success-1">245</p>
								</div>
							</div>
						</div><!-- COL END -->

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature">
									<div class="fa-stack fa-lg icons shadow-default bg-warning-transparent">
										<i class="icon icon-rocket text-warning"></i>
									</div>
									<p class="card-text mt-3 mb-3">Job Status</p>
									<p class="h2 text-center text-secondary-1">₹ 5,459</p>
								</div>
							</div>
						</div><!-- COL END -->
					</div>
					@php }
            	@endphp

              	@php     
              		$auth_id=Auth::user()->role_id;

              		if($auth_id=='4')
                   	{ @endphp
                   	<div class="row row-cards">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature">
									<div class="fa-stack fa-lg fa-1x icons shadow-default bg-primary-transparent">
										<i class="icon icon-people text-primary"></i>
									</div>
									<p class="card-text mt-3 mb-3">Bookings</p>
									<p class="h2 text-center text-primary">3,456</p>
								</div>
							</div>
						</div><!-- COL END -->

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature">
									<div class="fa-stack fa-lg fa-1x icons shadow-default bg-secondary-transparent">
										<i class="icon icon-refresh text-secondary"></i>
									</div>
									<p class="card-text mt-3 mb-3">Assigned Bookings</p>
									<p class="h2 text-center text-secondary">2,635</p>
								</div>
							</div>
						</div><!-- COL END -->

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature ">
									<div class="fa-stack fa-lg fa-1x icons shadow-default bg-info-transparent">
										<i class="icon icon-speech text-info"></i>
									</div>
									<p class="card-text mt-3 mb-3">Complted Bookings</p>
									<p class="h2 text-center text-success-1">245</p>
								</div>
							</div>
						</div><!-- COL END -->

						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card">
								<div class="card-body text-center feature">
									<div class="fa-stack fa-lg icons shadow-default bg-warning-transparent">
										<i class="icon icon-rocket text-warning"></i>
									</div>
									<p class="card-text mt-3 mb-3">Job Status</p>
									<p class="h2 text-center text-secondary-1">₹ 5,459</p>
								</div>
							</div>
						</div><!-- COL END -->
					</div>
					@php }
            	@endphp
			</div>
		</div>
		
	@endsection