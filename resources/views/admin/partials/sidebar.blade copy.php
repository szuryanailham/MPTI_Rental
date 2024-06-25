
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark text-light">
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
                  <a class="nav-link {{Request::is('dashboard-units') ? 'active' : ''}}" href="/dashboard-unit">All Unit</a>
                </li>
                <li class="nav-item me-5">
                  <a class="nav-link {{Request::is('transaction') ? 'active' : ''}}" href="/transaction">Transaction</a>
                </li>
                {{-- <li class="nav-item">
                  <img src="{{asset('assets/Vector.png')}}" alt="">
                </li> --}}
              </ul>
            </div>
        </div>
    </nav>