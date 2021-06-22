 <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('/') }}assets/admin/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        <i class="fas fa-clipboard"></i>
       Insurance:
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#insurance" aria-expanded="true"
          aria-controls="insurance">
          <i class="fas fa-fw fa-columns"></i>
          <span>Insurance</span>
        </a>
        <div id="insurance" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Insurance</h6>
            <a class="collapse-item" href="login.html">Insured List</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#claims" aria-expanded="true"
          aria-controls="claims">
          <i class="fas fa-align-right"></i>
          <span>Claims</span>
        </a>
        <div id="claims" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Claims</h6>
            <a class="collapse-item" href="login.html">Summary</a>
            <a class="collapse-item" href="login.html">Requested Claims</a>
            <a class="collapse-item" href="login.html">Assessment Report</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        <i class="fas fa-cogs"></i>
       Settings:
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#control" aria-expanded="true"
          aria-controls="control">
          <i class="fas fa-gamepad"></i>
          <span>Control Panel</span>
        </a>
        <div id="control" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Control Panel</h6>
            <a class="collapse-item" href="login.html">User Role Management</a>
          </div>
        </div>
      </li>
      
      <hr class="sidebar-divider">
      <div class="version"></div>
    </ul>