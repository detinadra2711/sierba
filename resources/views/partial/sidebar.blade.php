{{-- <style>
.sidebar {
  background-image: linear-gradient(rgb(84, 93, 95), rgb(244, 244, 244));
  /* background-image: url("{{ asset('template/dist/img/bg.png') }}");
  background-size: cover; */
   opacity: 0.8;
 }
</style> --}}
 
<div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('template/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          @auth
            <a href="#" class="d-block">Welcome {{ Auth::user()->name }}!</a>
          @endauth

          @guest
            <a href="#" class="d-block">Belum Login</a>
          @endguest
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/arsip" class="nav-link">
              <i class="nav-icon fas fa-mask"></i>
              <p>
                Arsip IT
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="/inventaris" class="nav-link">
              <i class="nav-icon fas fa-spider"></i>
              <p>
                Inventaris IT
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-toilet-paper"></i>
              <p>
                Inventaris IT
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/aplikasi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aplikasi / Software</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/inventaris" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aset Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/lap_mutu" class="nav-link">
              <i class="nav-icon fas fa-crow"></i>
              <p>
                Laporan Mutu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/helpdesk" class="nav-link">
              <i class="nav-icon 	fas fa-cat"></i>
              <p>
                IT Help Desk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/password" class="nav-link">
              <i class="nav-icon fas fa-book-dead"></i>
              <p>
                Authorization Access (Passwords)
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/cctv" class="nav-link">
              <i class="nav-icon fas fa-ghost"></i>
              <p>
                CCTV
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/telepon" class="nav-link">
              <i class="nav-icon fas fa-ghost"></i>
              <p>
                Telephone Number
              </p>
            </a>
          </li>
          @guest
              <li class="nav-item bg-info">
            <a href="/login" class="nav-link">
              <p>
                Login
              </p>
            </a>
          </li>
          @endguest
          @auth
              <li class="nav-item bg-danger">
              <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
          </li>
          @endauth
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>