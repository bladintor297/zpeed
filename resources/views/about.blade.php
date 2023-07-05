@extends('layouts.app')
@section('content')

<!-- Page wrapper for sticky footer -->
<!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
<main class="page-wrapper mt-5">

        <!-- Background image parallax -->
        <div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></span>
          <div class="jarallax-img"  style="background-image: url(assets/img/about/cover.jpg);"></div>
          <div class="position-relative text-center zindex-5 py-sm-5">
            <div class="py-lg-5 px-3">
              <h2 class="display-2 my-5 text-warning text-shadow">About Us</h2>
            </div>
          </div>
        </div>
  
        <!-- Breadcrumb -->
        <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
  
  
        <!-- About company -->
        <section class="container pb-5 mb-md-2 mb-lg-4">
          <h1 class="border-bottom pb-4">Who We Are
            @if (Auth::check())
              <button id="li-btn" class="btn btn-link text-decoration-none text-dark"  data-bs-toggle="modal" data-bs-target="#editDetails">
                <i class='bx bx-cog text-warning' style="font-size: 30px"></i>
              </button>
              <!-- Edit Company Details -->
              <div class="modal fade" id="editDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addClient" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {!! Form::open(['action' => ['\App\Http\Controllers\AboutController@update', '1'], 'method'=>'PUT','enctype' => 'multipart/form-data']) !!}
                            @csrf
                            <div class="modal-header text-center">
                                <h5 class="modal-title" id="staticBackdropLabel">Edit Company Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <div class="row">
                                        <h5 class="fs-lg pe-lg-4  mb-2 pb-1">Company Details</h5>
                                        <div class="col-6">
                                            <input type="text" class="form-control" name="name" placeholder="Company's Name" value="{{$about->name}}" required>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$about->email}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row">
                                      <div class="col-6">
                                          <input type="text" class="form-control" name="phone" placeholder="Phone No." value="{{$about->phone}}" required>
                                      </div>
                                      <div class="col-6">
                                          <input type="text" class="form-control" name="fax" placeholder="Fax No." value="{{$about->fax}}" required>
                                      </div>
                                  </div>
                                </div>
                                <div class="mb-3 mt-5">
                                  <div class="row">
                                      <h5 class="fs-lg pe-lg-4  mb-2 pb-1">Address</h5>
                                      <div class="col-6">
                                          <input type="text" class="form-control" name="address1" placeholder="Address Line 1" value="{{$about->address1}}" required>
                                      </div>
                                      <div class="col-6">
                                          <input type="text" class="form-control" name="address2" placeholder="Address Line 2" value="{{$about->address2}}" required>
                                      </div>
                                  </div>
                                </div>
                                <div class="mb-3">
                                  <div class="row">
                                      <div class="col-6">
                                        <input type="text" class="form-control" name="address3" placeholder="Address Line 3" value="{{$about->address3}}" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3 mt-5">
                                  <div class="row">
                                    <h5 class="fs-lg pe-lg-4 mb-2 pb-1">Social Media</h5>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{$about->facebook}}" required>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" value="{{$about->linkedin}}" required>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning btn-sm">Update</button>
                            </div>
                            <input type="hidden" name="type" value="c">

                        {!! Form::close() !!}

                    </div>
                </div>
              </div> 
            @endif
          </h1>
          <div class="row pt-2 pt-md-3">
            <div class="col-md-6">
              <h4 class="fs-lg pe-lg-4  mb-2 pb-1">Our Vision</h4>
              <p class="fs-lg pe-lg-4 mb-1 mb-lg-4">
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Provide latest cutting edge technology in ICT
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Provide comprehensive services and IT outsourcing
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    Reduce complexities when deploying new services.
                  </li>
                </ul>
              </p>
            </div>
            <div class="col-md-6">
              <h4 class="fs-lg ps-lg-4 mb-2 pb-1">Our Mission</h4>
              <p class="fs-lg ps-lg-4 mb-1 mb-lg-4">
                <ul class="list-unstyled mb-0">
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    To be the country’s leading IT & communication solution provider of choice
                  </li>
                  <li class="d-flex mb-2">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    To offer end-to-end information technology and telecommunication solution services
                  </li>
                  <li class="d-flex">
                    <i class="bx bx-check text-primary lead me-2"></i>
                    To continuously enhance our products and services to fulfill the market segment requirements
                  </li>
                </ul>
              </p>
            </div>
          </div>
        </section>
  
        <!-- Brands (Carousel) -->
        <section class="container pb-3 pb-lg-5 mb-3 mb-xl-4">
          <h2 class="text-center pb-md-2">Trusted by Leading Companies</h2>
          <div class="swiper mx-n2" data-swiper-options='{
            "slidesPerView": 2,
            "pagination": {
              "el": ".swiper-pagination",
              "clickable": true
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 3,
                "spaceBetween": 8
              },
              "650": {
                "slidesPerView": 4,
                "spaceBetween": 8
              },
              "900": {
                "slidesPerView": 5,
                "spaceBetween": 8
              },
              "1100": {
                "slidesPerView": 6,
                "spaceBetween": 8
              }
            }
          }'>
            <div class="swiper-wrapper">
              
              @foreach ($clients as $client)
                  @if ($client->type == 'c')
                    <!-- Item -->
                    <div class="swiper-slide py-3">
                      <a href="#" class="card card-body card-hover px-2 mx-2">
                        <img src="assets/img/clients/{{$client->image}}" class="d-block mx-auto my-2" width="154" alt="Brand">
                      </a>
                    </div>
                  @endif
              @endforeach
  
            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
        </div>
        </section>
  
        <!-- Contact form -->
        <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
          <div class="position-relative bg-faded-warning rounded-3 py-5 mb-2">
            <div class="row pb-2 py-md-3 py-lg-5 px-4 px-lg-0 position-relative zindex-3">
              <div class="col-xl-3 col-lg-4 col-md-5 offset-lg-1">
                <p class="lead mb-2 mb-md-3">Ready to get started?</p>
                <h2 class="h1 pb-3">Don’t Hesitate to Contact Us</h2>
              </div>
              {!! Form::open(['action' => '\App\Http\Controllers\ContactController@store', 'method'=>'POST','enctype' => 'multipart/form-data', 'class'=>'col-lg-6 col-md-7 offset-xl-1 needs-validation']) !!}
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <label for="name" class="form-label fs-base">Full name</label>
                    <input type="text" id="name" class="form-control form-control-lg" name="name" required>
                    <div class="invalid-feedback">Please enter your name!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="email" class="form-label fs-base">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email" required>
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                  </div>
                  <div class="col-12 pb-2 mb-4">
                    <label for="message" class="form-label fs-base">Message</label>
                    <textarea id="message" class="form-control form-control-lg" rows="4" name="message"  required></textarea>
                    <div class="invalid-feedback">Please enter your message!</div>
                  </div>
                </div>
                <button type="submit" class="btn btn-warning shadow-warning btn-lg">Send request</button>
              {!! Form::close() !!}

            </div>
  
            <!-- Pattern -->
            <div class="position-absolute end-0 bottom-0 text-primary">
              <svg width="416" height="444" viewBox="0 0 416 444" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M240.875 615.746C389.471 695.311 562.783 640.474 631.69 504.818C700.597 369.163 645.201 191.864 496.604 112.299C348.007 32.7335 174.696 87.5709 105.789 223.227C36.8815 358.882 92.278 536.18 240.875 615.746ZM208.043 680.381C388.035 776.757 605.894 713.247 694.644 538.527C783.394 363.807 709.428 144.04 529.436 47.6636C349.443 -48.7125 131.584 14.7978 42.8343 189.518C-45.916 364.238 28.0504 584.005 208.043 680.381Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M262.68 572.818C382.909 637.194 526.686 594.13 584.805 479.713C642.924 365.295 595.028 219.601 474.799 155.224C354.57 90.8479 210.793 133.912 152.674 248.33C94.5545 362.747 142.45 508.442 262.68 572.818ZM253.924 590.054C382.526 658.913 538.182 613.536 601.593 488.702C665.004 363.867 612.156 206.847 483.554 137.988C354.953 69.129 199.296 114.506 135.886 239.341C72.4752 364.175 125.323 521.195 253.924 590.054Z" fill="currentColor"/></svg>
            </div>
          </div>
        </section>
      </main>
      @include('inc.footer')

@endsection