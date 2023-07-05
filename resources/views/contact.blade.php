@extends('layouts.app')
@section('content')

<!-- Background image parallax -->
<div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></span>
  <div class="jarallax-img"  style="background-image: url(assets/img/about/cover.jpg);"></div>
  <div class="position-relative text-center zindex-5 py-sm-5">
    <div class="py-lg-5 px-3">
      <h2 class="display-2 my-5 text-warning text-shadow">Contact Us</h2>
    </div>
  </div>
</div>

<!-- Page content -->
<section class="bg-size-cover bg-position-bottom-center bg-repeat-0 pb-5" style="background-image: url(assets/img/contacts/bg.svg);">
  <!-- Breadcrumb -->
  <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item">
        <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
    </ol>
  </nav>  
  <div class="container pb-lg-4 pb-xl-5">      
      <div class="row pt-md-2 pt-lg-5 pb-2 pb-md-4">
        
        <div class="col-xxl-4 col-xl-5 col-lg-6 pt-3 mt-3">
          <h1 class="h3 mb-2">Want to work with us?</h1>
          <h2 class="display-1 text-warning pb-sm-2 pb-md-3 mb-3">Let's talk!</h2>
          <div class="nav d-block lead pt-lg-5">
            <a href="mailto:{{$about->email}}" class="nav-link fw-normal text-decoration-underline p-0 mb-4">{{$about->email}}</a>
            <div class="text-nav">{{$about->phone}}</div>
          </div>
        </div>
        <div class="col-lg-6 offset-xl-1 offset-xxl-2 pt-3 pt-md-4 pt-lg-3 mt-3">
          {!! Form::open(['action' => '\App\Http\Controllers\ContactController@store', 'method'=>'POST','enctype' => 'multipart/form-data', 'class'=>'needs-validation']) !!}
            <div class="row g-4">
              <div class="col-sm-6">
                <label for="fn" class="form-label fs-base">Full name</label>
                <input type="text" class="form-control form-control-lg" name="name" id="fn" required>
                <div class="invalid-feedback">Please enter your full name!</div>
              </div>
              <div class="col-sm-6">
                <label for="email" class="form-label fs-base">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12 pb-2">
                <label for="message" class="form-label fs-base">Message</label>
                <textarea class="form-control form-control-lg" id="message" name="message" rows="3" maxlength="200" required></textarea>
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-lg btn-warning w-100 w-sm-auto">Contact Us</button>
              </div>
              <p>
                @if ($notification == 1)
                <span class='text-success'><i class='bx bxs-check-circle'></i> Your message has been sent. We will reach you soon.</span>
                    
                @else
                                    
                @endif
              </p>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  
    @if (Auth::check())
    <!-- Toogle button -->
    <button class="btn btn-warning my-3 floating-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft"><i class='bx bxs-bell-ring'></i>&nbsp;&nbsp; View Inquiries</button>
    
    <!-- Offcanvas -->
    <div class="offcanvas offcanvas-start" id="offcanvasLeft" tabindex="-1">
      <div class="offcanvas-header border-bottom">
        
        <h5 class="offcanvas-title">Inquiries
          <span class="badge bg-warning rounded-pill">{{count($inquiries)}}</span>
        </h5>

        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <div class="row g-5">
          <div class="col-md-5 col-lg-12 order-md-last">
            @foreach ($inquiries as $inquiry)
              <ul class="list-group mb-3">
                <li class="list-group-item ">
                  <a href ="{{ route('contact.destroy', ['id' => $inquiry->id]) }}" class="close-button" aria-label="Close">
                    <i class='bx bxs-message-square-x' ></i>
                  </a>
                  <h6 class="my-0">{{$inquiry->name}}</h6>
                  <div class="d-flex justify-content-between" style="font-size: 0.6rem">
                    <span class="text-muted text-end">{{date("F j, Y, g:i a", strtotime($inquiry->created_at));}}</span>
                    <a href="mailto:{{$inquiry->email}}" class="badge bg-success px-3 my-auto"><i class='bx bx-reply'></i> Reply</a>
                  </div>
                  <p class="card-text fs-sm truncated pb-0 my-0">{{$inquiry->message}}</p>
                  @if (strlen($inquiry->message) > 30)
                    <a href="#" class="read-more-link text-primary" style="font-size: 0.6rem">Read More</a>
                  @endif
                </li>
              </ul>
            @endforeach
          </div>
        </div>
        
        <!-- Horizontal card-->
        
          {{-- <div class="card overflow-hidden my-3 bg-faded-warning">
            <div class="row g-0">
              <div class="col-sm-12">
                <div class="card-body">
                  <h6 class="card-title text-uppercase my-0">{{$inquiry->name}}</h6>
                  <p class="fw-semibold fst-italic my-0" style="font-size: 0.6rem">Sent on: {{$inquiry->created_at}}</p>
                  <p class="card-text fs-sm">{{$inquiry->message}}</p>
                  <a href="mailto:{{$inquiry->email}}" class="fw-medium btn btn-sm btn-success">Reply</a>
                </div>
              </div>
            </div>
          </div> --}}
      </div>
    </div>   
    @endif
    <script>
      const cardTexts = document.querySelectorAll('.truncated');
    
      cardTexts.forEach(cardText => {
        const fullText = cardText.textContent;
        const truncatedText = fullText.slice(0, 30);
        const readMoreLink = cardText.nextElementSibling;
    
        cardText.textContent = truncatedText;
    
        readMoreLink.addEventListener('click', (event) => {
          event.preventDefault();
          cardText.textContent = cardText.classList.contains('expanded') ? truncatedText : fullText;
          cardText.classList.toggle('expanded');
          readMoreLink.textContent = cardText.classList.contains('expanded') ? 'Read Less' : 'Read More';
        });
      });
    </script>
  </section>
  @include('inc.footer')

@endsection