  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
                 <h5>  Welcome   {{ Auth::user()->name }}  </h5>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('dash') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('myprofile') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p> My-Profile </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Categories.index') }}" class="nav-link">
              <i class="fas fa-building"></i>
              <p> Categories </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Prodcuts.index') }}" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <p> Prodcuts </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Types.index') }}" class="nav-link">
              <i class="fas fa-sitemap"></i>
              <p> Types </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Admins.index') }}" class="nav-link">
              <i class="fas fa-user-lock"></i>
              <p> Admins </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Users.index') }}" class="nav-link">
              <i class="fas fa-users"></i>
              <p> Users </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Reviews.index') }}" class="nav-link">
              <i class="fas fa-comments"></i>
              <p> Reviews </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('Orders.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p> Orders </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
