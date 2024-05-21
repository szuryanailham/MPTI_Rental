   {{-- SIDEBAR SECTION  --}}
   <div class="offcanvas offcanvas-start sidebar-nav text-white bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-body p-0">
    {{-- CONTAIN SIDEBAR SECTION --}}
    <nav class="navbar-dark mt-3">
      <ul class="navbar-nav">
        <li>
          {{-- head line --}}
          <div class="small fw-bold text-uppercase px-3 ">
            <img src="/assets/logo_cw.png" alt="CW">
          </div>
        </li>
        {{-- dashboard --}}
        <li>
          <a href="/news" class="nav-link px-3 active">
            <span class="me-2"><i><img src="assets/chart icon.png" alt=""></i></span>
            <span>Dashboard</span>
          </a>
        </li>
        {{-- all unit --}}
        <li>
          <a href="/dashboard" class="nav-link px-3 active">
            <span class="me-2"><i><img src="assets/car icon.png" alt=""></i></span>
            <span> All Unit</span>
          </a>
        </li>
       
        {{-- transaction --}}
        <li>
          <a href="/dashboard/categories" class="nav-link px-3 active">
            <span class="me-2"><i><img src="assets/icon_transaction.png" alt=""></i></span>
            <span>Transaction</span>
          </a>
        </li>

        {{-- feedback --}}
        <li>
          <a href="/dashboard/categories" class="nav-link px-3 active">
            <span class="me-2"><i><img src="assets/feedback icon.png" alt=""></i></span>
            <span>Feedback</span>
          </a>
        </li>

        <li class="my-4"><hr class="dropdown-divider bg-light" /></li>

        <li>
          <div class="small fw-bold text-uppercase px-3 mb-3">
            OTHERS
          </div>
        </li>

        {{-- add unit --}}
        <li>
          <a href="/dashboard/categories" class="nav-link px-3 active">
            <span class="me-2"><i><img src="assets/add unit icon.png" alt=""></i></span>
            <span>Add Unit</span>
          </a>
        </li>

        {{-- promo --}}
        <li>
          <a href="/dashboard/categories" class="nav-link px-3 active">
            <span class="me-2"><i><img src="assets/promo icon.png" alt=""></i></span>
            <span>Promo</span>
          </a>
        </li>
      </ul>
    </nav>
    {{-- logo profile --}}
     {{-- Garis Pemisah --}}
     <hr class="dropdown-divider bg-dark my-4">

     {{-- Logo dan Nama Profil --}}
     <div style="width: 100px; bottom:0" class="profile-section d-flex justify-content-between">
      <i class="bi bi-person-circle fs-3"></i>
         <div class="profile-name mt-2 ">
             <span class="fw-bold p-1">Account</span>
         </div>
     </div>
    {{-- END CONTAIN SIDEBAR SECTION --}}
    </div>
  </div>
  {{-- END SIDEBAR SECTION --}}