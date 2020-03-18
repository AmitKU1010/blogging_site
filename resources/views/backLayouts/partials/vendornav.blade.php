	<div class="app-header1 header py-1 d-flex">
		<div class="container-fluid">
			<div class="d-flex">
				<a class="header-brand" href="/admin">
					<img src="{{ asset('assets/images/brand/#') }}" class="header-brand-img" alt="Moseva">
				</a>
				<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
				<div class="header-navicon">
					<a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
						<i class="fa fa-search"></i>
					</a>
				</div>
				<div class="header-navsearch">
					<a href="#" class=" "></a>
					<form class="form-inline mr-auto">
						<div class="nav-search">
							<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
							<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="d-flex order-lg-2 ml-auto">
					<div class="dropdown d-none d-md-flex" >
						<a  class="nav-link icon full-screen-link">
							<i class="fe fe-maximize-2"  id="fullscreen-button"></i>
						</a>
					</div>
					<div class="dropdown d-none d-md-flex">
						<a class="nav-link icon" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class=" nav-unread badge badge-danger  badge-pill">4</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
							<a href="#" class="dropdown-item text-center">You have 4 notification</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item d-flex pb-3">
								<div class="notifyimg">
									<i class="fa fa-envelope-o"></i>
								</div>
								<div>
									<strong>2 new Messages Vendor</strong>
									<div class="small text-muted">17:50 Pm</div>
								</div>
							</a>
							<a href="#" class="dropdown-item d-flex pb-3">
								<div class="notifyimg">
									<i class="fa fa-calendar"></i>
								</div>
								<div>
									<strong> 1 Event Soon</strong>
									<div class="small text-muted">19-10-2019</div>
								</div>
							</a>
							<a href="#" class="dropdown-item d-flex pb-3">
								<div class="notifyimg">
									<i class="fa fa-comment-o"></i>
								</div>
								<div>
									<strong> 3 new Comments</strong>
									<div class="small text-muted">05:34 Am</div>
								</div>
							</a>
							<a href="#" class="dropdown-item d-flex pb-3">
								<div class="notifyimg">
									<i class="fa fa-exclamation-triangle"></i>
								</div>
								<div>
									<strong> Application Error</strong>
									<div class="small text-muted">13:45 Pm</div>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item text-center">See all Notification</a>
						</div>
					</div>
					<div class="dropdown ">
						<a href="#" class="nav-link pr-0 leading-none user-img" data-toggle="dropdown">
							<img src="{{ asset('assets/images/faces/male/25.jpg') }}" alt="profile-img" class="avatar avatar-md brround">
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
								<i class="dropdown-icon icon icon-power"></i> Log out
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>