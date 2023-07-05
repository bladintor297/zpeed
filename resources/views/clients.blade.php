@extends('layouts.app')

@section('content')

<!-- Background image parallax -->
<div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></span>
  <div class="jarallax-img"  style="background-image: url(assets/img/about/cover.jpg);"></div>
  <div class="position-relative text-center zindex-5 py-sm-5">
    <div class="py-lg-5 px-3">
      <h2 class="display-2 my-5 text-warning text-shadow">Partners & Clients</h2>
    </div>
  </div>
</div>
<!-- Breadcrumb -->
<nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item">
      <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Clients & Partners</li>
  </ol>
</nav>


<!-- Speakers -->
<section id="speakers" class="container py-5 my-2 my-md-4 my-lg-5">
  <h2 class="h1 text-center pb-3 pb-lg-4">Our Partners & Clients</h2>
    
    <div class="d-md-flex align-items-center justify-content-between text-center text-md-start pt-md-1 pt-lg-3">
      <h2 class="h2 mb-4 mb-md-0 me-md-3">Our Clients
        @if (Auth::check())
          <button id="li-btn" class="btn btn-link text-decoration-none text-dark"  data-bs-toggle="modal" data-bs-target="#addClient">
            <i class='bx bxs-plus-circle text-warning' style="font-size: 30px"></i>
          </button>
        @endif
      </h2>
      
    </div>

    <!-- Adding New Client -->
    <div class="modal fade" id="addClient" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addClient" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              {!! Form::open(['action' => '\App\Http\Controllers\ClientController@store', 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
                  @csrf
                  <div class="modal-header text-center">
                      <h5 class="modal-title" id="staticBackdropLabel">Add Client</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <div class="row">
                              <div class="col-8">
                                  <input type="text" class="form-control" name="name" placeholder="Client's Name" required>
                              </div>
                              <div class="col-4">
                                  <input type="text" class="form-control" name="acronym" placeholder="Acronym" required>
                              </div>
                          </div>
                      </div>
                      <div class="mb-3">
                          <input input class="form-control" name="image" type="file" id="formFile" required>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning btn-sm">Add Client</button>
                  </div>
                  <input type="hidden" name="type" value="c">

              {!! Form::close() !!}

          </div>
      </div>
    </div> 

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-2 mt-lg-4">
      @foreach ($clients as $client)
        @if ($client->type === 'c')
          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/clients/{{$client->image}}" class="rounded-3" alt="{{$client->name}}">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-warning opacity-35 rounded-3"></span>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-sm fw-semibold pt-1 mb-2 text-uppercase">{{$client->name}}</h3>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>


    <div class="d-md-flex align-items-center justify-content-between text-center text-md-start pt-md-1 pt-lg-3">
      <h2 class="h2 mb-4 mb-md-0 me-md-3 mt-5">Our Partners
        @if (Auth::check())
          <button id="li-btn" class="btn btn-link text-decoration-none text-dark"  data-bs-toggle="modal" data-bs-target="#addPartner">
            <i class='bx bxs-plus-circle text-warning' style="font-size: 30px"></i>
          </button>
        @endif
      </h2>
    </div>
    <!-- Adding New Partner -->
    <div class="modal fade" id="addPartner" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addClient" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              {!! Form::open(['action' => '\App\Http\Controllers\ClientController@store', 'method'=>'POST','enctype' => 'multipart/form-data']) !!}
                  @csrf
                  <div class="modal-header text-center">
                      <h5 class="modal-title" id="staticBackdropLabel">Add Partner</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                          <div class="row">
                              <div class="col-8">
                                  <input type="text" class="form-control" name="name" placeholder="Partner's Name" required>
                              </div>
                              <div class="col-4">
                                  <input type="text" class="form-control" name="acronym" placeholder="Acronym" required>
                              </div>
                          </div>
                      </div>
                      <div class="mb-3">
                          <input input class="form-control" name="image" type="file" id="formFile" required>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning btn-sm">Add Partner</button>
                  </div>
                  <input type="hidden" name="type" value="c">

              {!! Form::close() !!}

          </div>
      </div>
    </div> 
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-2 mt-lg-4">
      @foreach ($clients as $client)
        @if ($client->type === 'p')
          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/clients/{{$client->image}}" class="rounded-3" alt="{{$client->name}}">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-warning opacity-35 rounded-3"></span>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-sm fw-semibold pt-1 mb-2 text-uppercase">{{$client->name}}</h3>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
    
  </section>
  <!-- Contact form -->
  <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
    <div class="position-relative bg-faded-dark rounded-3 py-5 mb-2">
      <div class="row pb-2 py-md-3 py-lg-5 px-4 px-lg-0 position-relative zindex-3">
        <div class="col-xl-3 col-lg-4 col-md-5 offset-lg-1">
          <p class="lead mb-2 mb-md-3">Ready to get started?</p>
          <h2 class="h1 pb-3 text-warning">Don’t Hesitate to Contact Us</h2>
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
  @include('inc.footer')

@endsection