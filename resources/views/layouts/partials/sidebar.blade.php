
<div class="user-panel mt-3 pb-3 mb-3 d-flex">

    <div class="image">
        @if (Auth::user()->profile_image)
        <img src="{{ asset('images/profile/'. Auth::user()->profile_image ) }}" class="img-circle elevation-2" alt="User Image">
        @else
        <img src="{{ asset('../images/depolt3.png') }}" class="img-circle elevation-2" alt="User Image">
            @endif

      </div>


      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('events.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Events
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('churchs.index') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Church's
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('churchsinfo.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Church's Info
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Website
              </p>
            </a>
          </li>
        </ul>
      </nav>

