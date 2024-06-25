<!-- sidebar.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark text-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/logo_cw.png')}}" alt="CW" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-5">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ Request::is('dashboard-units') ? 'active' : '' }}" href="/dashboard-unit">All Unit</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link {{ Request::is('transaction') ? 'active' : '' }}" href="/transaction">Transaction</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wcUp8xFqEcrWs/EnHrLdtfMSkA5A7q1l6thqEq+H+9yA/IhrK1DZDIH/Xk3sFWVn" crossorigin="anonymous"></script>
