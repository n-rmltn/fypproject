    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom py-0 fixed-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand d-flex justify-content-start align-items-center border-end"
          href="{{ route('admin') }}">
          <div class="d-flex align-items-center">
              <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
              <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">KBDmy</span>
          </div>    </a>
        <div class="d-flex justify-content-between align-items-center flex-grow-1 navbar-actions">

          <!-- Search Bar and Menu Toggle-->
          <div class="d-flex align-items-center">
            <!-- Menu Toggle-->
            <div class="menu-toggle cursor-pointer me-4 text-primary-hover transition-color disable-child-pointer">
              <i class="ri-skip-back-mini-line ri-lg fold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Close menu"></i>
              <i class="ri-skip-forward-mini-line ri-lg unfold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Open Menu"></i>
            </div>
            <!-- / Menu Toggle-->
          </div>
          <!-- / Search Bar and Menu Toggle-->

          <!-- Right Side Widgets-->
          <div class="d-flex align-items-center">

            <!-- Notifications-->
            <div class="d-none d-sm-flex dropdown mx-1">
              <button class="btn-action text-muted" type="button" id="notificationsDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="f-w-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="w-100">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg>
                </span>
                <span
                class="position-absolute top-0 start-50 p-1 bg-success border border-3 border-white rounded-circle mt-n1">
                <span class="visually-hidden">New alerts</span>
              </span>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg" aria-labelledby="notificationsDropdown">
                <div class="dropdown-header d-flex justify-content-between align-items-center">
                  <p class="fw-bolder m-0 text-body">Notifications</p>
                  <span class="badge bg-success-faded text-success rounded-pill">4 new</span>
                </div>
                <div class="simplebar-wrapper">
                  <div data-pixr-simplebar>
                    <ul class="list-unstyled m-0 pb-4">
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">O</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Order #123-5567</p>
                              <p class="text-muted lh-1 mb-2 small">Placed by John Doe at 11:23 AM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">2min</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">M</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Mike Johnston</p>
                              <p class="text-muted lh-1 mb-2 small">Hi Jack, can we setup a meeting...</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">1 hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">D</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Daily Backup</p>
                              <p class="text-muted lh-1 mb-2 small">Backup completed at 11:59 PM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">3hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">E</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Event: Staff Review</p>
                              <p class="text-muted lh-1 mb-2 small">Monthly staff review starts in...</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">4hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">O</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Order #123-3322</p>
                              <p class="text-muted lh-1 mb-2 small">Placed by Sally Smith at 10:07 AM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">1d</small>
                          </div>
                        </li>
                    </ul>
                  </div>
                </div>
                <div><a class="dropdown-item text-primary fw-bolder text-center border-top pt-3" href="#">See more &rarr;</a></div>
              </div>
            </div>        <!-- / Notifications-->

            <!-- Profile Menu-->
            <div class="dropdown ms-1">
                <button class="btn btn-link btn-icon p-0 position-relative bg-primary-faded text-primary fw-bolder me-3" type="button" id="profileDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <span
                    class="position-absolute bottom-0 start-75 p-1 bg-success border border-3 border-white rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>{{ ucfirst(substr(auth()->user()->name,0,1)) }}
                </button>
                <ul class="dropdown-menu dropdown-md dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li class="d-flex py-2 align-items-start">
                    <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">{{ ucfirst(substr(auth()->user()->name,0,1)) }}</button>
                    <div class="d-flex align-items-start justify-content-between flex-grow-1">
                      <div>
                        <p class="lh-1 mb-2 fw-semibold text-body">{{ auth()->user()->name }}</p>
                        <p class="text-muted lh-1 mb-2 small">{{ auth()->user()->email }}</p>
                      </div>
                      <small class="badge bg-success-faded text-success rounded-pill">Admin</small>
                    </div>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">Logout</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="{{ route('welcome') }}">Return to site</a></li>
                </ul>
              </div>        <!-- / Profile Menu-->

          </div>
        </div>
      </div>
    </nav>
    <!-- / Navbar-->
