@extends('layouts.app')
@section('content')
    
<!-- Page wrapper for sticky footer -->
<!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
<main class="page-wrapper">
    
  
    <!-- Hero + animations -->
    <section class="position-relative d-flex align-items-center min-vh-100 py-5 bg-dark overflow-hidden">
    <span class="position-absolute top-0 start-0 d-dark-mode-block d-none w-100 h-100 bg-secondary opacity-75"></span>
    <div class="container position-relative dark-mode mt-5 mb-lg-5 mb-md-4 mb-3 pt-3 pb-xl-3">
        <div class="row gy-5">
        <div class="col-xl-5 col-lg-6">
            <div class="position-relative zindex-5 text-lg-start text-center mt-4">
            <h1 class="display-4 mb-1 pb-lg-3 pb-md-2 mt-5 text-warning">Malaysian IT Solution Provider </h1>
            <h3 class="mb-2 pb-lg-3 pb-md-2 fst-italic"> IT Solutions to suit every needs</h3>
            <p class="mb-4 pb-lg-3 pb-md-2">
                <span class="me-2 text-light">We provide a seamless, more innovative communication experience delivered with passion, quality, and commitment.</span>
            </p>
            <a href="/contact" class="btn btn-lg btn-warning">Start your project</a>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-1">
            <div class="position-relative ms-xl-0 ms-lg-4">
            <div class="position-absolute top-50 start-50 translate-middle ratio ratio-1x1" style="width: 125%; max-width: 49.75rem;">
                <div class="p-md-0 p-5">
                <img src="assets/img/landing/software-agency-3/hero-bg.png" alt="Shape" class="hero-animation-spin p-md-0 p-5">
                </div>
            </div>
            <div class="position-relative row row-cols-sm-2 row-cols-1 gx-xl-4 gx-lg-3 gx-md-4 gx-3">
                <div class="col">
                <div class="d-sm-grid d-flex gap-xl-4 gap-lg-3 gap-md-4 gap-sm-3 gap-2">
                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                    <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                        <span class="hero-animation-fade text-white">I need a new network infrastructure for my company</span>
                    </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                    <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                        <span class="hero-animation-fade hero-animation-delay-2 text-white">We are looking for 1000 unit of high-specs laptop</span>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col mt-sm-5 mt-2 pt-sm-5">
                <div class="d-sm-grid d-flex gap-xl-4 gap-lg-3 gap-md-4 gap-sm-3 gap-2">
                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                    <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                        <span class="hero-animation-fade hero-animation-delay-1 text-white">I need MVP for startup</span>
                    </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center bg-secondary rounded-3" style="min-height: 176px; backdrop-filter: blur(6px);">
                    <div class="p-xl-4 p-sm-3 p-2 fs-xl fw-semibold text-center">
                        <span class="hero-animation-fade hero-animation-delay-3 text-white">I need web development</span>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
  
    <!-- Benefits (features) -->
    <section class="container mb-5 pt-lg-5" id="benefits">
    <div class="swiper pt-3" data-swiper-options='{
        "slidesPerView": 1,
        "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
        },
        "breakpoints": {
        
        "500": {
            "slidesPerView": 1
        },
        "991": {
            "slidesPerView": 3
        }
        }
    }'>
        <div class="swiper-wrapper">

        <!-- Item -->
        <div class="swiper-slide border-end-lg px-2">
            <div class="text-center">
            <img src="assets/img/landing/digital-agency/icons/idea.svg" width="48" alt="Bulb icon" class="d-block mb-4 mx-auto">
            <h4 class="mb-2 pb-1">IT Business Solutions</h4>
            <p class="mx-auto" style="max-width: 336px;">
                Our experts will work in concert with you to address business challenges and provide successful technology solutions that improve efficiency, cost effectiveness and availabilities.
            </p>
            </div>
        </div>

        <!-- Item -->
        <div class="swiper-slide border-end-lg px-2">
            <div class="text-center">
            <img src="assets/img/landing/digital-agency/icons/team.svg" width="48" alt="Team icon" class="d-block mb-4 mx-auto">
            <h4 class="mb-2 pb-1">Reliable & Trusted</h4>
            <p class="mx-auto" style="max-width: 336px;">
                We can help you identify and overcome all of your business challenges while providing suitable best solutions and technical expertise for you to fully focus on arising matters on hand. 
            </p>
            </div>
        </div>

        
        <!-- Item -->
        <div class="swiper-slide  px-2">
            <div class="text-center">
                <img src="assets/img/landing/digital-agency/icons/award.svg" width="48" alt="Award icon" class="d-block mb-4 mx-auto">
                <h4 class="mb-2 pb-1">Years of IT Experience</h4>
                <p class="mx-auto" style="max-width: 336px;">
                    Our experienced specialists are able to advise the best enterprise business solutions, policies and procedures that will boost your productivity with highest ROI as possible.
                </p>
            </div>
        </div>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
    </div>
    </section>


    <!-- About -->
    <section class="container my-5 py-lg-5 py-md-4 py-3 border-top">
    <div class="row gy-4 py-xl-3">
        <div class="col-md-6">
        <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/The_Top_35_IoT_Terms.jpg" alt="Image" class="rounded-3">
        </div>
        <div class="col-lg-5 col-md-6 offset-lg-1 d-flex">
        <div class="align-self-center ps-lg-0 ps-md-4">
            <h2 class="h1 mb-lg-4 mb-3">Zpeed Solutions Sdn. Bhd</h2>
            <p class="mb-4 pb-lg-3 fs-lg" align="justify">
                Zpeed Solutions Sdn Bhd was built around the idea to offer scalable and flexible infrastructure related solutions so that our customers can get on with their core businesses without worrying about day-to-day operations.
            </p>
            
            <a href="/about" class="btn btn-lg btn-outline-warning">More about us</a>
        </div>
        </div>
    </div>
    </section>

    <!-- Services -->
    <section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    <div class="card border-0 bg-faded-warning p-md-5 px-sm-2 pt-4 pb-3" >
        <div class="card-body mx-auto" style="max-width: 860px;">
        <h2 class="h1 mb-4 text-center">Our Competencies</h2>
        <p class="mb-4 pb-3 fs-lg text-center text-muted">We fully understand your business. If you need to update something, we are more than happy to help you with the services we are providing.</p>
        </div>
        <div class="swiper swiper-nav-onhover mt-n3 mx-n2" data-swiper-options='{
            "slidesPerView": 1,
            "spaceBetween": 8,
            "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
            },
            "breakpoints": {
                "600": {
                "slidesPerView": 2
                },
                "1000": {
                "slidesPerView": 3
                }
            }
            }'>
            <div class="swiper-wrapper">
    
                <!-- Item -->
                <a class="swiper-slide h-auto py-3 text-decoration-none text-dark" href="/services">
                    <div class="card card-hover h-100 mx-2">
                        <div class="card-body">
                        <div class="d-table position-relative p-3 mb-4 mx-auto">
                            <img src="assets/img/landing/online-courses/icons/01.svg" class="position-relative zindex-2" width="32" alt="Icon">
                            <span class="bg-danger position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
                        </div>
                        <h3 class="h5 pb-1 mb-2 text-center">IT SPECILIZATION</h3>
                        <p class="mb-0" align="justify">
                            We offer wide range of IT specializations to all of our customers with end to end solutions for large enterprises and business units.
                        </p>
                        </div>
                    </div>
                </a>
                
                <!-- Item -->
                <a class="swiper-slide h-auto py-3 text-decoration-none text-dark" href="/services">
                    <div class="card card-hover h-100 mx-2">
                        <div class="card-body">
                            <div class="d-table position-relative p-3 mb-4 mx-auto">
                                <img src="assets/img/landing/online-courses/icons/01.svg" class="position-relative zindex-2" width="32" alt="Icon">
                                <span class="bg-warning position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
                            </div>
                            <h3 class="h5 pb-1 mb-2 text-center">APP DEVELOPMENT</h3>
                            <p class="mb-0" align="justify">
                                Fully customized cross platform, responsive, native and hybrid apps using the latest technologies available in application development.
                            </p>
                        </div>
                    </div>
                </a>

                <!-- Item -->
                <a class="swiper-slide h-auto py-3 text-decoration-none text-dark" href="/services">
                    <div class="card card-hover h-100 mx-2">
                        <div class="card-body">
                        <div class="d-table position-relative p-3 mb-4 mx-auto">
                            <img src="assets/img/landing/online-courses/icons/01.svg" class="position-relative zindex-2" width="32" alt="Icon">
                            <span class="bg-warning position-absolute top-0 start-0 w-100 h-100 rounded-circle opacity-8"></span>
                        </div>
                        <h3 class="h5 pb-1 mb-2 text-center">PROFESSIONAL SERVICES</h3>
                        <p class="mb-0" align="justify">
                            Our in house Managed Services team are able to provide your needs in installation, configuration and optimization of your infrastructures.
                        </p>
                        </div>
                    </div>
                </a>

            </div>
    
            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
            </div>
        
    </div>
    </section>


    <!-- Brands (Carousel) -->
    <section class="container pb-4 pb-lg-5 mb-3">
        <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3">
        <h2 class="mb-0">Trusted by Awesome Clients</h2>

        <!-- Slider prev/next buttons + Quotation mark -->
        <div class="d-md-flex d-none ms-4">
            <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2">
            <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2">
            <i class="bx bx-chevron-right"></i>
            </button>
        </div>
        </div>
        <div class="swiper mx-n2" data-swiper-options='{
        "slidesPerView": 2,
        "navigation": {
            "prevEl": "#prev-brand",
            "nextEl": "#next-brand"
        },
        "loop": true,
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
            
  
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
        </div>
    </section>


    <!-- Blog + Contact cta -->
    <div class="bg-secondary mb-5 pt-5">

        <!-- Contact CTA -->
        <section class="container pt-3 pb-4 pb-md-5" style="margin-top: -156px; margin-bottom: 120px; transform: translateY(156px);">
            <div class="card border-0 bg-dark">
            <div class="card-body p-md-5 p-4 bg-size-cover" style="background-image: url(assets/img/landing/digital-agency/contact-bg.png);">
                <div class="py-md-5 py-4 text-center">
                <h3 class="h4 fw-normal text-light opacity-75">Want to work with us? Let’s talk</h3>
                <p class="display-6 text-warning">
                    Schedule a FREE CONSULTATION
                </p>
                <div class="pt-md-5 pt-2 pb-md-2">
                    <a href="/contact" class="btn btn-lg btn-warning">Contact us</a>
                </div>
                </div>
            </div>
            </div>
        </section>
    </div>

</main>
@include('inc.footer')

@endsection