   	@php
         $auth_id=Auth::user()->role_id;

         if($auth_id=='2')
         {
			@endphp
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
								<h2>{{Auth::user()->name}}</h2>
								<span>ADMIN</span>
							</div>
						</div>
					</div>

					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin.dashboard')}}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Master Setup</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								

								
								<li>
									<a href="{{route('admin.categories.create')}}" class="slide-item">Add Category</a>
								</li>

								<li>
									<a href="{{route('admin.subcategories.index')}}" class="slide-item">Add Sub-category</a>
								</li>
							</ul>
						</li>

						 

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-database"></i><span class="side-menu__label">Track Users</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="{{route('admin.trackuserlist')}}" class="slide-item">User List</a>
								</li>

								
							</ul>
						</li>
 
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-clone"></i><span class="side-menu__label">Manage Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="#!" class="slide-item">Add Contents</a>
								</li>
								
								<li>
									<a href="#!" class="slide-item">Others</a>
								</li>
							</ul>
						</li>
					</ul>
				</aside>
			@php

         } else {
  
        	@endphp
  
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
								<h2>{{Auth::user()->name}}</h2>
								<span>MANAGER</span>
							</div>
						</div>
					</div>

					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin.dashboard')}}"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
					</ul>
				</aside>

            @php
         }
    @endphp





