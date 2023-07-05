<!-- Navbar -->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page -->
<header class="header navbar navbar-expand-lg navbar-dark position-absolute navbar-sticky bg-dark">
  <div class="container px-3">
    <a href="/home" class="navbar-brand pe-3">
      <img src="assets/img/zpeed-logo.png" width="150" alt="Silicon">
    </a>
    <div id="navbarNav" class="offcanvas offcanvas-end bg-dark">
      <div class="offcanvas-header border-bottom border-light">
        <h5 class="offcanvas-title text-white">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{ Request::is('/') ? '/home' : '/home' }}" class="nav-link {{ Request::is('/') || Request::is('home') ? 'active' : '' }}">Home</a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a href="/services" class="nav-link dropdown-toggle {{ Request::is('services*') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a>

            {{-- <a href="/services" class="nav-link dropdown-toggle {{ Request::is('services') ? 'active' : '' }}" data-bs-toggle="dropdown">Services</a> --}}
            <div class="dropdown-menu dropdown-menu-dark">
              <div class="d-lg-flex pt-lg-3">
                <div class="mega-dropdown-column">
                  <h6 class="text-light px-3 mb-2">IT SPECIALIZATION</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="/services" class="dropdown-item py-1">Lan & Wireless</a></li>
                    <li><a href="/services" class="dropdown-item py-1">Network and Security</a></li>
                    <li><a href="/services" class="dropdown-item py-1">Cloud and Virtualization</a></li>
                    <li><a href="/services" class="dropdown-item py-1">Server and Storage</a></li>
                    <li><a href="/services" class="dropdown-item py-1">End User Computing</a></li>
                  </ul>
                </div>
                <div class="mega-dropdown-column">
                  <h6 class="text-light px-3 mb-2">APPLICATION DEVELOPMENT</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="/services" class="dropdown-item py-1">Web Apps</a></li>
                    <li><a href="/services" class="dropdown-item py-1">Mobile Apps</a></li>
                    <li><a href="/services" class="dropdown-item py-1">Integration & Custom Apps</a></li>
                  </ul>
                </div>
                <div class="mega-dropdown-column">
                  <h6 class="text-light px-3 mb-2">PROFESSIONAL SERVICES</h6>
                  <ul class="list-unstyled mb-3">
                    <li><a href="/services" class="dropdown-item py-1">Managed Services</a></li>
                    <li><a href="/services" class="dropdown-item py-1">Project Management</a></li>
                  </ul>
                </div>
                
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="/client" class="nav-link {{ Request::is('client') ? 'active' : '' }}">Partners & Clients</a>
          </li>
          <li class="nav-item">
            <a href="/contact" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact Us</a>
          </li>
        </ul> 
      </div>
          
    </div>
    
    @if (Auth::check())
    <a href="{{ route('signout') }}" class="btn btn-warning btn-sm fs-sm rounded d-none d-lg-inline-flex" target="_blank" rel="noopener">
      <i class="bx bx-log-out fs-5 lh-1 me-1"></i>
      &nbsp;Log Out
    </a>
    @endif
    
  </div>
</header>
