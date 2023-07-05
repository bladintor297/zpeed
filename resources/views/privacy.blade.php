@extends('layouts.app')
@section('content')

<main class="page-wrapper">
    <!-- Background image parallax -->
    <div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></span>
        <div class="jarallax-img" style="background-color: gray" ></div>
        <div class="position-relative text-center zindex-5 py-sm-5" style="height:200px">
            <div class="py-lg-0 px-3">
                <h2 class="display-2 my-5 text-warning text-shadow ">Privacy Policy</h2>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
        </ol>
    </nav>

  
    <!-- Use cases (Tabs) -->
    <section class="container pb-2 mt-3 mt-sm-4 mt-xl-5">
        <h4 class="mb-2 pb-1">Privacy Policy</h4>
        <p class="mx-auto" align="justify">
            Zpeed Solutions Sdn Bhd operates h<a class="text-warning" href="https://www.zpeed.com.my/">https://www.zpeed.com.my/</a>. This page informs you of our policies regarding the collection, 
            use and disclosure of  Personal Information we receive from users of the Site.</b>
        </p>
        <p class="mx-auto" align="justify">
            We don’t share any personally identifying information publicly or with third-parties, except when required to by law. We only retain collected information for as long as necessary to 
            provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorised access, disclosure, copying, use or modification.
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Information Collection And Use</h4>
        <p class="mx-auto" align="justify">
            While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited 
            to your name (“Personal Information”).
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Log Data</h4>
        <p class="mx-auto" align="justify">
            Like many site operators, we collect information that your browser sends whenever you visit our Site (“Log Data”).
        </p>
        <p class="mx-auto" align="justify">
            This Log Data may include information such as your computer’s Internet Protocol (“IP”) address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Cookies</h4>
        <p class="mx-auto" align="justify">
            Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer’s hard drive.
        </p>
        <p class="mx-auto" align="justify">
            Like many sites, we use “cookies” to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Site.
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Security</h4>
        <p class="mx-auto" align="justify">
            The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.
        </p>

        <h4 class="mb-2 pb-1 mt-lg-5">Contact Us</h4>
        <p class="mx-auto" align="justify">
            We reserve the right to update or change our Privacy Policy at any time and you should check this Privacy Policy periodically. If you have any questions about this Privacy Policy, please contact us.
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