  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link text-center" style="text-decoration: none;">
      {{-- <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <i class="fa fa-paw"></i>
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @php
            $profile = \Modules\Setting\Entities\CompanyProfile::first();
          @endphp
          <img src="{{ asset('upload/images/settings/'.$profile->logo) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('home') }}" class="d-block" style="text-decoration: none;">{{ $profile->company_name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 mb-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item {{ request()->routeIs('home') ? 'menu-open' : '' }}">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          @can('access_user_management')
          <li class="nav-item {{ request()->routeIs('users.*','roles.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('users.*','roles.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link {{ request()->routeIs('roles.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('users.create') }}" class="nav-link {{ request()->routeIs('users.create') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Create Users</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          
          @can('access_sliders')
          <li class="nav-item {{ request()->routeIs('sliders.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('sliders.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-image"></i>
              <p>
                Sliders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sliders.index') }}" class="nav-link {{ request()->routeIs('sliders.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sliders.create') }}" class="nav-link {{ request()->routeIs('sliders.create') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Create Sliders</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('access_tournaments')
          <li class="nav-item {{ request()->routeIs('tournaments.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('tournaments.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Tournaments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('tournaments.index') }}" class="nav-link {{ request()->routeIs('tournaments.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Tournaments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tournaments.create') }}" class="nav-link {{ request()->routeIs('tournaments.create') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Create Tournament</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('access_blogs')
          <li class="nav-item {{ request()->routeIs('blogs.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('blogs.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('blogs.index') }}" class="nav-link {{ request()->routeIs('blogs.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('blogs.create') }}" class="nav-link {{ request()->routeIs('blogs.create') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Create Blogs</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('access_events')
          <li class="nav-item {{ request()->routeIs('events.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('events.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('events.index') }}" class="nav-link {{ request()->routeIs('events.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('events.create') }}" class="nav-link {{ request()->routeIs('events.create') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Create Events</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('access_match')
          <li class="nav-item {{ request()->routeIs('match.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('match.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-gamepad"></i>
              <p>
                Match
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('match.index') }}" class="nav-link {{ request()->routeIs('match.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Match</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('match.create') }}" class="nav-link {{ request()->routeIs('match.create') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Create Match</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan

          @can('access_settings')
          <li class="nav-item {{ request()->routeIs('company.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('company.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('company.index') }}" class="nav-link {{ request()->routeIs('company.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Company Profile</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan

          @can('access_gallery')
          <li class="nav-item {{ request()->routeIs('gallery.*') ? 'menu-is-opening menu-open' : '' }}">
            <a href="#" class="nav-link" {{ request()->routeIs('gallery.*') ? 'active' : '' }}>
              <i class="nav-icon fas fa-images"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('gallery.index') }}" class="nav-link {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('gallery.video.index') }}" class="nav-link {{ request()->routeIs('gallery.video.index') ? 'active' : '' }}">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Videos</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>