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
        <i class="fas fa-igloo"></i>
        Farm:
      </div>
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="fab fa-wolf-pack-battalion"></i>
          <span>Cattle</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cattle</h6>
            <a class="collapse-item" href="{{ route('inventory.index') }}">Inventory</a>
           
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>Cattle Health</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Cattle Health</h6>
            <a class="collapse-item" href="form_basics.html">History</a>
            <a class="collapse-item" href="form_advanceds.html">Vet Appointment</a>
            <a class="collapse-item" href="form_advanceds.html">Upcoming Appointment</a>
            <a class="collapse-item" href="form_advanceds.html">Vaccine List</a>
            <a class="collapse-item" href="form_advanceds.html">Schedule</a>
          </div>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-blender"></i>
          <span>Milk</span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Milk</h6>
            <a class="collapse-item" href="simple-tables.html">Production Summary</a>
            <a class="collapse-item" href="datatables.html">Collecion Schedule</a>
            <a class="collapse-item" href="datatables.html">Sales Report</a>
            <a class="collapse-item" href="datatables.html">Sales Due Collection</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Feed</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Feed</h6>
            <a class="collapse-item" href="simple-tables.html">Calculator</a>
            <a class="collapse-item" href="datatables.html">Feed Manager</a>
            <a class="collapse-item" href="datatables.html">Feed Special Treat</a>
            <a class="collapse-item" href="datatables.html">Feed Schedule/Distribution</a>
            <a class="collapse-item" href="datatables.html">Feed & Suplement Shop</a>
          </div>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm_2" aria-expanded="true"
          aria-controls="collapseForm_2">
          <i class="fab fa-staylinked"></i>
          <span>Stall/Shed</span>
        </a>
        <div id="collapseForm_2" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Stall/Shed</h6>
            <a class="collapse-item" href="form_basics.html">Manage Sheds</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable3" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-house-damage"></i>
          <span>Insurance</span>
        </a>
        <div id="collapseTable3" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Insurance</h6>
            <a class="collapse-item" href="simple-tables.html">Insurance Claim</a>
            <a class="collapse-item" href="datatables.html">Insurance Details</a>
            <a class="collapse-item" href="datatables.html">Insurance Premium Payment</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#farmProfile" aria-expanded="true"
          aria-controls="collapseForm_2">
          <i class="fas fa-id-card"></i>
          <span>Farm Profile</span>
        </a>
        <div id="farmProfile" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Reports</h6>
            <a class="collapse-item" href="form_basics.html">Update</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#report" aria-expanded="true"
          aria-controls="collapseForm_2">
          <i class="fas fa-chart-bar"></i>
          <span>Reports</span>
        </a>
        <div id="report" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Reports</h6>
            <a class="collapse-item" href="form_basics.html">Cattle Stats</a>
            <a class="collapse-item" href="form_basics.html">Vaccine Monitor</a>
            <a class="collapse-item" href="form_basics.html">Insurance Report</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#staff" aria-expanded="true"
          aria-controls="staff">
          <i class="fas fa-user-shield"></i>
          <span>Support Staff</span>
        </a>
        <div id="staff" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Support Staff</h6>
            <a class="collapse-item" href="form_basics.html">Staff List</a>
            <a class="collapse-item" href="form_basics.html">Shifts/Hours</a>
            <a class="collapse-item" href="form_basics.html">Assignments</a>
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