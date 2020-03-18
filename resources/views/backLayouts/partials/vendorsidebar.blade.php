	<aside class="app-sidebar doc-sidebar">
		<div class="app-sidebar__user clearfix">
			<div class="dropdown user-pro-body">
				<div>
					<img src="{{ asset('assets/images/faces/male/25.jpg') }}" alt="user-img" class="avatar avatar-lg brround">
					<a href="#!" class="profile-img">
						<span class="fa fa-pencil" aria-hidden="true"></span>
					</a>
				</div>
				<div class="user-info">
					<h2>{{ Auth::user()->name }}</h2>
					<span>Working Patner</span>
				</div>
			</div>
		</div>
		<ul class="side-menu">
			<li>
				<a class="side-menu__item" href="#!"><i class="side-menu__icon fa fa-user-circle"></i><span class="side-menu__label">Update Profile</span></a>
			</li>
			<li class="slide">
				<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-database"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
				<ul class="slide-menu">
					<li>
						<a href="#!" class="slide-item">Profile</a>
					</li>
					<li>
						<a href="#!" class="slide-item">Edit Profile</a>
					</li>
				</ul>
			</li>
			<li class="slide">
				<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-chain-broken"></i><span class="side-menu__label">Custom  Pages</span><i class="angle fa fa-angle-right"></i></a>
				<ul class="slide-menu">
					<li>
						<a href="login.html" class="slide-item">Login</a>
					</li>
					<li>
						<a href="register.html" class="slide-item">Register</a>
					</li>
					<li>
						<a href="forgot-password.html" class="slide-item">Forgot password</a>
					</li>
				</ul>
			</li>
			<li class="slide">
				<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-diamond"></i><span class="side-menu__label">Error pages</span><i class="angle fa fa-angle-right"></i></a>
				<ul class="slide-menu">
					<li>
						<a href="400.html" class="slide-item">400 Error</a>
					</li>
					<li>
						<a href="401.html" class="slide-item">401 Error</a>
					</li>
					<li>
						<a href="403.html" class="slide-item">403 Error</a>
					</li>
					<li>
						<a href="404.html" class="slide-item">404 Error</a>
					</li>
					<li>
						<a href="500.html" class="slide-item">500 Error</a>
					</li>
					<li>
						<a href="503.html" class="slide-item">503 Error</a>
					</li>
				</ul>
			</li>
		</ul>
		<div class="app-sidebar-footer">
			<a href="#!">
				<span class="fa fa-envelope" aria-hidden="true"></span>
			</a>
			<a href="#!">
				<span class="fa fa-user" aria-hidden="true"></span>
			</a>
			<a href="#!">
				<span class="fa fa-cog" aria-hidden="true"></span>
			</a>
			<a href="login.html">
				<span class="fa fa-sign-in" aria-hidden="true"></span>
				</a>
			<a href="#!">
				<span class="fa fa-comment" aria-hidden="true"></span>
			</a>
		</div>
	</aside>