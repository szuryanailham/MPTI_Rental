
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark text-light navbar-nav ml-auto"">
  <div class="container-fluid">
      <img src="{{asset('assets/logo_cw.png')}}" alt="CW">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent" >
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item me-5">
            <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link {{Request::is('dashboard-units') ? 'active' : ''}}" href="/dashboard-units">All Unit</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link {{Request::is('transaction') ? 'active' : ''}}" href="/transactions">Transaction</a>
          </li>
          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow me-5">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Bayu Waskitha</span>
                <img class="img-profile rounded-circle" width="30px"
                    src="{{asset('img/undraw_profile.svg')}}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/profile">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
          {{-- <li class="nav-item">
            <img src="{{asset('assets/Vector.png')}}" alt="">
          </li> --}}
        </ul>
      </div>
  </div>
</nav>