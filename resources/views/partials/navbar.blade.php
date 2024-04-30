<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark text-light">
        <div class="container-fluid">
            <img src="assets/logo_cw.png" alt="CW">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent" >
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-5">
<<<<<<< HEAD
                  <a class="nav-link {{Request::is('home') ? 'active' : ''}}" aria-current="page" href="j">Home</a>
=======
                  <a class="nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="j">Home</a>
>>>>>>> 7d6d9ac582a6dbc418c14802caa08cabbb92cb94
                </li>
                <li class="nav-item me-5">
                  <a class="nav-link {{Request::is('profile') ? 'active' : ''}}" href="/profile">Profile</a>
                </li>
                <li class="nav-item me-5">
<<<<<<< HEAD
                  <a class="nav-link {{Request::is('testimony') ? 'active' : ''}}" href="testimony.html">Testimony</a>
=======
                  <a class="nav-link {{Request::is('testimony') ? 'active' : ''}}" href="/testimony">Testimony</a>
>>>>>>> 7d6d9ac582a6dbc418c14802caa08cabbb92cb94
                </li>
                <li class="nav-item">
                  <img src="assets/Vector.png" alt="">
                </li>
              </ul>
            </div>
        </div>
    </nav>