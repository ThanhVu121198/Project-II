<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/tempalet/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/front/images/avatar/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><span>Admin </span>{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="fas fa-list"></i>
              <p>
                Categories Controll
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/menu/add" class="nav-link">
                  <i class="fas fa-calendar-plus"></i>
                  <p>Add Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/menu/list" class="nav-link">
                  <i class="fas fa-list-ol"></i>
                  <p>Categories List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="fab fa-product-hunt"></i>
              <p>
                Product Controll
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/product/add" class="nav-link">
                  <i class="fas fa-calendar-plus"></i>
                  <p>Add  Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/product/list" class="nav-link">
                  <i class="fas fa-list-ol"></i>
                  <p> Product List</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item menu">
            <a href="#" class="nav-link">
            <i class="fas fa-blog"></i>
              <p>
                Blog Controll
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/blog/add" class="nav-link">
                  <i class="fas fa-calendar-plus"></i>
                  <p>Add Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/blog/list" class="nav-link">
                  <i class="fas fa-list-ol"></i>
                  <p>Blog list</p>
                </a>
              </li>
            </ul>
          </li>
            
          <li class="nav-item">
            <a href="/admin/register" class="nav-link">
              <i class="fas fa-registered"></i>
              <p>
                Register admin
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/logout" class="nav-link">
          <i class="fas fa-sign-out-alt"></i>
              <p>
               Logout
              </p>
            </a>
          </li>
        </ul>
     
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>