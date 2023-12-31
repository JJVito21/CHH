@yield('content')

<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container">
      <div class="row align-items-center">
          <div class="col">
              <img src="{{ URL('images/CHH - logo - gray border.png') }}" alt="logo" style="width: 4rem">
          </div>
          <div class="col">
              <a class="navbar-brand h2" href="#">Community Helping Hand</a>
          </div>
          <div class="col-auto">
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" class="d-flex justify-content-end">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Community Helping Hand</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Announcements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>