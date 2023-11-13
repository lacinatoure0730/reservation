<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href={{url('admin')}} class="brand-link">
      <img src="{{ asset('dist/img/upb.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UPB - Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class=" text-light">
            <i class="fa-solid fa-user"></i>
        </div>
    <div class="info text-light" x-data="{ name: 'Bonjour ' + ' {{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div></div>

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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link {{ request()->is('admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('users')}}" class="nav-link {{ request()->is('users') ? 'active' : ''}}">
                <i class="fa-solid fa-user"></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('etudiants')}}" class="nav-link {{ request()->is('etudiants') ? 'active' : ''}}">
                <i class="fa-solid fa-graduation-cap"></i>
              <p>
                Etudiants
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('chambre')}}" class="nav-link {{ request()->is('chambre') ? 'active' : ''}}">
                <i class="fa-solid fa-house"></i>
              <p>
                Chambres
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('etudiants')}}" class="nav-link {{ request()->is('reservations') ? 'active' : ''}}">
                <i class="fa-solid fa-clipboard"></i>
              <p>
                Reservations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <p>
                <a href="{{url('profile')}}" class="nav-link {{ request()->is('profile') ? 'active' : ''}}" wire:navigate>
                    <i class="fa-solid fa-id-card "></i> Profile
                </a>
              </p>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link ">
                <i class="fa-solid fa-gear"></i>
              <p>
                Parametres
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
