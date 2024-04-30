  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://127.0.0.1:8000/" class="brand-link">
      <img src="{{ url('em/img/gimslogo.png') }}" alt="gimslogo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Multi National</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('em/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <p>{{ Auth::guard('admin')->user()->name }}</p>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              @if(Session::get('page')=="Dashboard")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif
              <li class="nav-item">
                <a href="{{url('/Dashboard')}}" class="nav-link {{$active}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>









          <li class="nav-item menu-open">
            
            <ul class="nav nav-treeview">
              @if(Session::get('page')=="Employees")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif
              <li class="nav-item">
                <a href="{{url('/Employees')}}" class="nav-link {{$active}}">
                    <i class="far fa-user nav-icon"></i>
                  <p>Employees</p>
                </a>
              </li>
            </ul>
          </li>


          @if(Session::get('page')=="Company")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif

          <li class="nav-item">
            <a href="{{ url('/Company') }}" class="nav-link {{$active}}">
              <i class="far fa-building nav-icon"></i>
              <p>
                Companies
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>




          @if(Session::get('page')=="ALL-jobs")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif

          <li class="nav-item">
            <a href="{{ url('/All-job') }}" class="nav-link {{$active}}">
              <i class="far fa-clock nav-icon"></i>
              <p>
                ALL Jobs
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          @if(Session::get('page')=="Create-jobs")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif

          <li class="nav-item">
            <a href="{{ url('/Create-job') }}" class="nav-link {{$active}}">
              <i class="fas fa-pen nav-icon"></i>
              <p>
                Create Jobs
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          @if(Session::get('page')=="Candidates")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif

          <li class="nav-item">
            <a href="{{ url('/Candidates') }}" class="nav-link {{$active}}">
                <i class="far fa-user nav-icon"></i>
              <p>
               Pending Candidatess
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


          @if(Session::get('page')=="Approved-Candidates")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif

          <li class="nav-item">
            <a href="{{ url('/Approved-Candidates') }}" class="nav-link {{$active}}">
                <i class="far fa-check-circle nav-icon"></i>
              <p>
               Aproved Candidatess
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          @if(Session::get('page')=="Rejected-Candidates")
              @php $active="active" @endphp
              @else
              @php $active="" @endphp
              @endif

          <li class="nav-item">
            <a href="{{ url('/Rejected-Candidates') }}" class="nav-link {{$active}}">
              <i class="far fa-times-circle nav-icon"></i>
              <p>
               Rejected Candidatess
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>








         



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
