@extends('layouts.app')
@section('content')

<main class="page-wrapper">
    <!-- Background image parallax -->
    <div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></span>
        <div class="jarallax-img" style="background-color: gray" ></div>
        <div class="position-relative text-center zindex-5 py-sm-5" style="height:200px">
            <div class="py-lg-0 px-3">
                <h2 class="display-2 my-5 text-warning text-shadow ">Terms & Conditions</h2>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
        </ol>
    </nav>

  
    <!-- Use cases (Tabs) -->
    <section class="container pb-2 mt-3 mt-sm-4 mt-xl-5">
        <h4 class="mb-2 pb-1">Terms and Conditions</h4>
        <p class="mx-auto" align="justify">
            Please read these Terms and Conditions (“Terms”, “Terms and Conditions”) carefully before using the <a class="text-warning" href="https://www.zpeed.com.my/">https://www.zpeed.com.my/</a> 
            website operated by Zpeed Solutions Sdn Bhd (“us”, “we”, or “our”).Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These terms 
            apply to all visitors, users and others who access or use the Service. <b>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the 
            terms then you may not access the Service.</b>
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Links To Other Websites</h4>
        <p class="mx-auto" align="justify">
            Our Service may contain links to third-party web sites or services that are not owned or controlled by Zpeed Solutions Sdn Bhd.
        </p>
        <p class="mx-auto" align="justify">
            Zpeed Solutions Sdn Bhd has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Zpeed Solutions Sdn Bhd shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Changes</h4>
        <p class="mx-auto" align="justify">
            We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days’ notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Contact Us</h4>
        <p class="mx-auto" align="justify">
            If you have any questions about these Terms, please contact us.
        </p>
        <div class="d-flex justify-content-center">
            <div class="pt-md-5 pt-2 pb-md-2">
                <a href="/contact" class="btn btn-lg btn-warning">Contact us for More Details</a>
            </div>
        </div>

     
    </section>
</main>
@include('inc.footer')

@endsection