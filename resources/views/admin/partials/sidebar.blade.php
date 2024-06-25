 <!-- Sidebar -->
 <ul class="navbar-nav sidebar sidebar-dark bg-dark text-light sidebar-custom" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{asset('/assets/logo_cw.png')}}" alt="CW">
        </div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="/dashboard">
            <i>
                <img src="{{asset('assets/chart icon.png')}}" alt="">
            </i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <!-- Nav Item - All Unit -->
    <li class="nav-item {{Request::is('dashboard-units') ? 'active' : ''}}">
        <a class="nav-link" href="/dashboard-units">
            <i> 
                <img src="{{asset('assets/car icon.png')}}" alt=""> 
            </i>
            <span>All Unit</span>
        </a>
    </li>

    <!-- Nav Item - Transaction -->
    <li class="nav-item {{Request::is('transaction') ? 'active' : ''}}">
        <a class="nav-link" href="/transaction" >
            <i>
                <img src="{{asset('assets/icon_transaction.png')}}" alt="">
            </i>
            <span>Transaction</span>
        </a>
    </li>

    <!-- Nav Item - Feedback -->
    <li class="nav-item {{Request::is('feedback') ? 'active' : ''}}">
        <a class="nav-link " href="/feedback">
            <i>
                <img src="{{asset('assets/feedback icon.png')}}" alt="">
            </i>
            <span>Feedback</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    
    <div class="sidebar-heading">
        OTHERS
    </div>

    <!-- Nav Item - Add Unit -->
    <li class="nav-item {{Request::is('dashboard-units/create') ? 'active' : ''}}">
        <a class="nav-link" href="/dashboard-units/create">
            <i>
                <img src="{{asset('assets/add unit icon.png')}}" alt="">
            </i>
            <span>Add Unit</span>
        </a>
    </li>

    <!-- Nav Item - Promo -->
    <li class="nav-item {{Request::is('add-promo') ? 'active' : ''}}">
        <a class="nav-link" href="/add-promo">
            <i>
                <img src="{{asset('assets/promo icon.png')}}" alt="">
            </i>
            <span>Promo</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    
</ul>
<!-- End of Sidebar -->