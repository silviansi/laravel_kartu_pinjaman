<!-- Begin page -->
<div id="layout-wrapper">
      
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="#" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm-cb.png" alt="" height="25">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-cb.png" alt="" height="38">
                        </span>
                    </a>

                    <a href="#" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm-cb.png" alt="" height="25">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-cb.png" alt="" height="38">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>

            <div class="d-flex">
                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown">
                        <img class="rounded-circle header-profile-user" src="assets/images/avatar-admin.jpg"
                            alt="Header Avatar"> {{ Auth::user()->username }}
                    </button>
                </div>

                <div class="d-none d-lg-inline-block">
                    <button type="button" class="btn header-item waves-effect">
                        <i class="mdi mdi-export"> <a class="text-danger" href="logout">Keluar</i></a>
                    </button>
                </div>


                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-cog-outline"></i>
                    </button>
                </div>
    
            </div>
        </div>
    </header>
    
    
<!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="dashboard" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                  <a href="anggota" class=" waves-effect">
                      <i class="ti-user"></i>
                      <span>Data Mitra</span>
                  </a>
              </li>

              <li>
                  <a href="pinjaman" class=" waves-effect">
                      <i class="ti-write"></i>
                      <span>Data Pinjaman</span>
                  </a>
              </li>

              <li>
                <a href="pabrikasi" class=" waves-effect">
                    <i class="ti-clipboard"></i>
                    <span>Data Laporan Harian</span>
                </a>
              </li>

              <li>
                <a href="tutupan" class="waves-effect">
                    <i class="ti-notepad"></i>
                    <span>Data Tutupan</span>
                </a>
              </li>

              <li>
                <a href="landingpage" class=" waves-effect">
                    <i class="ti-new-window"></i>
                    <span>Website</span>
                </a>
            </li>

              <li>
                  <a href="help" class=" waves-effect">
                      <i class="ti-help-alt"></i>
                      <span>Bantuan</span>
                  </a>
              </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
            <h5 class="m-0">Pengaturan</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center">Pilih Tema</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Terang</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                    data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Gelap</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">Mode RTL</label>
            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>