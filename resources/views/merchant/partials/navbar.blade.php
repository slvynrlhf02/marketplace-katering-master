  <!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
      id="layout-navbar">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
          </a>
      </div>

      <div class="navbar-nav-right d-flex align-items-center text-dark" id="navbar-collapse">
          Content Management System
          <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <i class='bx bx-user bx-md'></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                          <a class="dropdown-item" href="#">
                              <div class="d-flex">
                                  <div class="flex-shrink-0 me-3">
                                      <div class="avatar">
                                          <i class='bx bx-user-circle bx-lg'></i>
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <span class="fw-semibold d-block">{{ auth()->user()->email }}</span>
                                      <small class="text-muted">{{ auth()->user()->name }}</small>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <div class="dropdown-divider"></div>
              </li>
              <li>
                  <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item" href="">
                          <i class="bx bx-power-off me-2"></i>
                          <span class="align-middle">Log Out</span>
                      </button>
                  </form>
              </li>
          </ul>
          </li>
          <!--/ User -->
          </ul>
      </div>
  </nav>

  <!-- / Navbar -->
