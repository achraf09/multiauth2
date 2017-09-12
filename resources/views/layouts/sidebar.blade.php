<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
      <li><a href="{{ url('employee-management') }}"><i class="fa fa-group"></i> <span>Mitarbeiterverwaltung</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-cogs"></i> <span>Systemverwaltung</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('system-management/department') }}"><i class="fa fa-angle-double-right"></i>Abteilungen</a></li>
          <li><a href="{{ url('system-management/division') }}"><i class="fa fa-angle-double-right"></i>Aufteilungen</a></li>
          <li><a href="{{ url('system-management/country') }}"><i class="fa fa-angle-double-right"></i>Länder</a></li>
          <li><a href="{{ url('system-management/state') }}"><i class="fa fa-angle-double-right"></i>Bundesländer</a></li>
          <li><a href="{{ url('system-management/city') }}"><i class="fa fa-angle-double-right"></i>Städte</a></li>
          <li><a href="{{ url('system-management/report') }}"><i class="fa fa-angle-double-right"></i>Report</a></li>
        </ul>
      </li>
      <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user"></i> <span>Benutzerverwaltung</span></a></li>


      <div class="logout">
          <li>
              <a href="{{ route('admin.logout')}}">
                <i class="fa fa-power-off"></i> LOGOUT
               </a>
          </li>
       </div>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
