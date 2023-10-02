       <!-- Menu -->

       <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bold ms-2">SIM Klinik</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.6" />
                <path
                  d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
                  fill="currentColor"
                  fill-opacity="0.38" />
              </svg>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <!-- Forms & Tables -->
            <!-- <li class="menu-header fw-light mt-4">
              <span class="menu-header-text">Forms &amp; Tables</span>
            </li> -->
            <!-- Tables -->
            <li class="menu-item">
              <a href="/" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div data-i18n="Home">Home</div>
              </a>
            </li>

            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-grid"></i>
                Master
              </a>
              <ul class="menu-sub">
                <li class="menu-item <?= ($title === 'Status Keluarga') ? 'active' : '' ?>">
                  <a href="StatusKeluarga" class="menu-link">
                    Status Keluarga
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Kelompok Pasien') ? 'active' : '' ?>">
                  <a href="KelompokPasien" class="menu-link">
                    Kelompok Pasien
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Sub Kelompok Pasien') ? 'active' : '' ?>">
                  <a href="SubKelompokPasien" class="menu-link">
                    Sub Kelompok Pasien
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Penanggung Biaya') ? 'active' : '' ?>">
                  <a href="PenanggungBiaya" class="menu-link">
                    Penanggung Biaya
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Asuransi') ? 'active' : '' ?>">
                  <a href="Asuransi" class="menu-link">
                    Asuransi
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Status Pendidikan') ? 'active' : '' ?>">
                  <a href="StatusPendidikan" class="menu-link">
                    Status Pendidikan
                  </a>
                </li>

                <li class="menu-item <?= ($title === 'Provinsi') ? 'active' : '' ?>">
                  <a href="Provinsi" class="menu-link">
                    Provinsi
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Kabupaten') ? 'active' : '' ?>">
                  <a href="Kabupaten" class="menu-link">
                    Kabupaten
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Kecamatan') ? 'active' : '' ?>">
                  <a href="Kecamatan" class="menu-link">
                    Kecamatan
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Kelurahan') ? 'active' : '' ?>">
                  <a href="Kelurahan" class="menu-link">
                    Kelurahan
                  </a>
                </li>

                <li class="menu-item <?= ($title === 'Status Pekerjaan') ? 'active' : '' ?>">
                  <a href="StatusPekerjaan" class="menu-link">
                    Status Pekerjaan
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Agama') ? 'active' : '' ?>">
                  <a href="Agama" class="menu-link">
                    Agama
                  </a>
                </li>
                <li class="menu-item <?= ($title === 'Status Pernikahan') ? 'active' : '' ?>">
                  <a href="StatusPernikahan" class="menu-link">
                    Status Pernikahan
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="tables-datatables-advanced.html" class="menu-link">
                    <div data-i18n="Advanced">Advanced</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="tables-datatables-extensions.html" class="menu-link">
                    <div data-i18n="Extensions">Extensions</div>
                  </a>
                </li> -->
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- Style Switcher -->
                <li class="nav-item me-1 me-xl-0">
                  <a
                    class="nav-link btn btn-text-secondary rounded-pill btn-icon style-switcher-toggle hide-arrow"
                    href="javascript:void(0);">
                    <i class="mdi mdi-24px"></i>
                  </a>
                </li>
                <!--/ Style Switcher -->


                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url() ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url() ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                        <i class="mdi mdi-logout me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="mdi mdi-close search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->