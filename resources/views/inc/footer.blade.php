<!-- Footer -->
<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
      <div class="row pb-5">
        <div class="col-lg-3 col-md-6">
          <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
            <img src="assets/img/zpeed-logo-black.png" width="150" alt="Silicon">
          </div>
          <p class="fs-sm pb-lg-3 mb-4">
            {{$about->address1}} <br>
            {{$about->address2}} <br>
            {{$about->address3}}
          </p>
          
        </div>
        <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
          <div id="footer-links" class="row">
            <div class="col-lg-4">
              <h6 class="mb-2">
                <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Useful Links</a>
              </h6>
              <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                <ul class="nav flex-column pb-lg-1 mb-lg-3">
                  <li class="nav-item"><a href="/" class="nav-link d-inline-block px-0 pt-1 pb-2">Home</a></li>
                  <li class="nav-item"><a href="/about" class="nav-link d-inline-block px-0 pt-1 pb-2">About Us</a></li>
                  <li class="nav-item"><a href="/services" class="nav-link d-inline-block px-0 pt-1 pb-2">Services</a></li>
                  <li class="nav-item"><a href="/client" class="nav-link d-inline-block px-0 pt-1 pb-2">Partners & Clients</a></li>
                </ul>
                <ul class="nav flex-column mb-2 mb-lg-0">
                  <li class="nav-item"><a href="/terms" class="nav-link d-inline-block px-0 pt-1 pb-2">Terms &amp; Conditions</a></li>
                  <li class="nav-item"><a href="/privacy" class="nav-link d-inline-block px-0 pt-1 pb-2">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-3">
              <h6 class="mb-2">
                <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2" data-bs-toggle="collapse">Socials</a>
              </h6>
              <div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
                <ul class="nav flex-column mb-2 mb-lg-0">
                  <li class="nav-item"><a href="{{$about->facebook}}" class="nav-link d-inline-block px-0 pt-1 pb-2">Facebook</a></li>
                  <li class="nav-item"><a href="{{$about->linkedin}}" class="nav-link d-inline-block px-0 pt-1 pb-2">LinkedIn</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 pt-2 pt-lg-0">
              <h6 class="mb-2">Contact Us</h6>
              <a href="mailto:info@zpeed.com.my" class="fw-medium text-warning">{{$about->email}}</a>
              <p class="fs-sm pb-lg-3 mb-4">
                Phone: {{$about->phone}} <br>
                Fax: {{$about->fax}}
              </p>

            </div>
          </div>
        </div>
      </div>
      <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
        &copy; All rights reserved. 
      </p>
    </div>
  </footer>

  <!-- Back to top button -->
  <a href="#top" class="btn-scroll-top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
  </a>