  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/index3.html" class="brand-link">
      <span class="brand-text font-weight-light" style="margin:10px;"><strong style="font-weight: 700;">Rongkrishi Admin Panel</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/user_logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin/#" class="d-block">{{ Auth::user()->name ?? 'None'}}</a>
          {{-- {{ Auth::user()->name }} use it later & create a profile section--}}  
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin_dashboard')}}" class="nav-link {{ Request::is('admin_dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin_list')}}" class="nav-link {{ Request::is('admin_list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('member_list')}}" class="nav-link {{ Request::is('member_list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('category_list')}}" class="nav-link {{ Request::is('category_list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('sub_category_list')}}" class="nav-link {{ Request::is('sub_category_list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Sub-Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('product_list')}}" class="nav-link {{ Request::is('product_list') ? 'active' : ''}}">
              <i class="nav-icon fab fa-product-hunt"></i>
              <p>
                Product
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>