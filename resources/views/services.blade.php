@extends('layouts.app')
@section('content')

<main class="page-wrapper">
    <!-- Background image parallax -->
    <div class="jarallax bg-dark py-5" data-jarallax data-speed="0.5">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></span>
        <div class="jarallax-img"  style="background-image: url(assets/img/about/cover.jpg);"></div>
        <div class="position-relative text-center zindex-5 py-sm-5">
            <div class="py-lg-5 px-3">
                <h2 class="display-2 my-5 text-warning text-shadow">Services</h2>
            </div>
        </div>
    </div>
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-2 my-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
    </nav>

  
    <!-- Use cases (Tabs) -->
    <section class="container pb-2 mt-3 mt-sm-4 mt-xl-5">
        <h2 class="h1 text-center pb-3 pb-lg-4">Our Services</h2>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs flex-nowrap justify-content-lg-center overflow-auto pb-2 mb-3 mb-lg-4" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link text-nowrap active" id="it-specilization-tab" data-bs-toggle="tab" data-bs-target="#it-specilization" type="button" role="tab" aria-controls="it-specilization" aria-selected="false">
                <i class="bx bx-briefcase-alt-2 fs-lg opacity-60 me-2"></i>
                IT Specialization
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-nowrap" id="app-development-tab" data-bs-toggle="tab" data-bs-target="#app-development" type="button" role="tab" aria-controls="app-development" aria-selected="false">
                <i class="bx bx-bar-chart-alt-2 fs-lg opacity-60 me-2"></i>
                Application Development
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-nowrap " id="project-management-tab" data-bs-toggle="tab" data-bs-target="#project-management" type="button" role="tab" aria-controls="project-management" aria-selected="true">
                <i class="bx bx-star fs-lg opacity-60 me-2"></i>
                Project Management
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content bg-faded-warning rounded-3 py-4">
            <!-- IT Specilization -->
            <div class="tab-pane fade show active" id="it-specilization" role="tabpanel" aria-labelledby="it-specilization-tab">
                
                <h2 class="h1 text-center mt-4">IT SPECILIZATION</h2>
                <div class="col-lg-8 col-md-5 offset-lg-1 text-center text-md-start mx-auto">
                    <p class="text-center pb-1 pb-sm-0 mb-4 mb-sm-5">
                        Our solutions build new business capabilities for you. We make sure to identify and design the best solutions for your case. We utilize various solution services and always determine the best setup to save cost and time.
                    </p>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">LAN & Wireless</h3>
                        <p>This network infrastructure brings software programmability and virtualization to the underlying physical hardware. We have the capability to design, install and maintain any networking requirements. It can help you: </p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              Simplify existing networks, make them more agile
                            </li>
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              Make money faster, cut costs
                            </li>
                            <li class="d-flex">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              Reduce complexities when deploying new services.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-7 mt-md-4">
                        <img src="https://it.telkomuniversity.ac.id/bemucil/2022/12/wireless-LAN.jpg" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://www.globalsign.com/application/files/1216/2130/8053/ManagedPKI_Banner_Authentication_Blog_3_APAC_.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Network Security</h3>
                        <p>
                            Simulated cyber attack against your computer system to check for exploitable vulnerabilities. In the context of web application security, penetration testing is commonly used to augment a web application firewall (WAF). Our deliverables are clear and concise, adding genuine value in reduced exposure to viruses, targeted and random attacks on your network and the associated risks and costs of downtime, compromise and recovery of key business systems.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Server & Storage</h3>
                        <p>
                            As more amounts of data pour in from increasingly diverse sources, leveraging that data is both critical and transformational. We delivers the best-fits solutions to optimize your data and on-premise infrastructure, simplifies storage administration, and maximizes virtualization savings.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://kit8.net/wp-content/uploads/2020/12/data_centre@2x.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://mobile-jon.com/wp-content/uploads/2021/03/modern.jpg" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">End User Computing</h3>
                        <p>
                            As for this, machine from our OEM partner that have latest CPU from Intel and AMD partner with workstation that have latest GPU from NVIDIA or AMD is essential in order to make sure work flow is not disturbed plus it can be equip with protection security (fingerprint/palm vein/IR camera) needed for everyday working force. Building strong relationship with our technology partners such as HP, Dell, Lenovo, Samsung, Acer and Asus, we are able to provide and support you with an assortment of computing devices.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Cloud & Virtualization</h3>
                        <p>
                            The Virtualization & Cloud allows businesses to run multiple operating systems. We ensure that organization can use a cloud management platform exclusively for a private or public cloud deployment, these tool sets commonly target hybrid and multi-cloud models to help centralize control of various cloud-based infrastructures.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://startupsmagazine.co.uk/sites/default/files/2020-01/cloudc.png" class="d-block my-lg-2 mx-auto me-md-0 bg-white p-5" width="502" alt="Image">
                    </div>
                </div>
            </div>

            <!-- Application Development -->
            <div class="tab-pane fade" id="app-development" role="tabpanel" aria-labelledby="app-development-tab">
                <h2 class="h1 text-center mt-4">APPLICATION DEVELOPMENT</h2>
                <div class="col-lg-8 col-md-5 offset-lg-1 text-center text-md-start mx-auto">
                    <p class="text-center pb-1 pb-sm-0 mb-4 mb-sm-5">
                        Cross platform, responsive, native and hybrid apps using the latest technologies in app development. We mastered in several programming languages and capable to give the best end result for public use.
                    </p>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://usersnap.com/blog/wp-content/uploads/2017/05/web-application-testing.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Web Application</h3>
                        <p>
                            We support web application that requires a web server to manage requests from the client, an application server to perform the tasks requested, a database to store the information. Application server technology ranges from
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              ASP.NET
                            </li>
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              ASP and ColdFusion
                            </li>
                            <li class="d-flex">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              PHP
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Mobile Application</h3>
                        <p>
                            We develop and build user-friendly mobile apps that function as a centralized communication toll between the principal and multiple independent service provider.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                                Native Mobile Applications
                            </li>
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                                Cross-Platform Native Mobile Applications
                            </li>
                            <li class="d-flex">
                              <i class="bx bx-check text-primary lead me-2"></i>
                                Hybrid Mobile Applications
                            </li>
                            <li class="d-flex">
                                <i class="bx bx-check text-primary lead me-2"></i>
                                Progressive Web Applications
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://www.netsolutions.com/insights/wp-content/uploads/2022/01/15-mobile-app-development.webp" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    <div class="col-lg-6 col-md-7 mt-md-4 ">
                        <img src="https://www.nicepng.com/png/detail/361-3615518_web-applications-desktop-mobile-png.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Integrations & Custom Apps</h3>
                        <p>
                            We develop both backend and frontend solutions with well-thought user experience and produce applications based on public demand. Our services will help to define client requirements, write specifications and design, develop, test and integrate secure software across multiple platforms with quality and speed, at scale, using traditional to next-gen technology innovation to enrich customer experience, accelerate business outcomes and drive customer loyalty.
                        </p>
                    </div>
                </div>
            </div>

             <!-- Project Management -->
             <div class="tab-pane fade" id="project-management" role="tabpanel" aria-labelledby="project-management-tab">
                <h2 class="h1 text-center mt-4">PROFESSIONAL SERVICES</h2>
                <div class="col-lg-8 col-md-5 offset-lg-1 text-center text-md-start mx-auto">
                    <p class="text-center pb-1 pb-sm-0 mb-4 mb-sm-5">
                        We maintain high standards technical maintenance for the supplied solutions. In this way we systematically and successively create strategic values of partner relations with our customers.
                    </p>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    <div class="col-lg-6 col-md-7 mt-md-4">
                        <img src="https://images.squarespace-cdn.com/content/v1/5a05e672fe54ef1b4ad127a0/1606576483485-M3ELTUXPJQJ8ET3SHVZJ/soc-as-a-service.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Managed Services</h3>
                        <p>
                            Onsite : Our Onsite IT Support Team assists with hardware onsite installation, equipment relocation, equipment maintenance, design, configuration, stability checks of your system. The support team consists of the:
                        </p>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              Project Leader, who will keep you updated about the scheduling, available resources, and billing
                            </li>
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                              Technical Support, who will oversee the quality of performance at all levels
                            </li>
                            <li class="d-flex mb-2">
                              <i class="bx bx-check text-primary lead me-2"></i>
                                24/7/365 global support
                            </li>
                            <li class="d-flex">
                                <i class="bx bx-check text-primary lead me-2"></i>
                                Our IT call center consultancy services troubleshoot, monitor and resolve your issues wherever you are, whenever you need it.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center pt-3 pb-2 pb-sm-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0 mt-2">
                    
                    <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                        <h3 class="mb-lg-4">Project Management</h3>
                        <p>
                            We’ll assign a dedicated expert who will work with you in order to understand your business needs and create a detailed plan of action, tailoring the plan to your specific business requirements. Keep your project on track as we monitor the progress of your project and report it to you. Our team is with you from project inception to completion and every step in between.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-7 mt-md-4">
                        <img src="https://www.pngkey.com/png/detail/602-6028762_we-are-a-blockchain-consultancy-and-implementation-team.png" class="d-block my-lg-2 mx-auto me-md-0" width="502" alt="Image">
                    </div>
                </div>
                
            </div> 
        </div>
        <script>
            $(document).ready(function () {
            // get the tab ID from the URL hash
            var hash = window.location.hash;
            
            // if the hash is not empty
            if (hash !== '') {
                // activate the tab with the corresponding ID
                $('.nav-tabs a[href="' + hash + '"]').tab('show');
            }
            
            // add a click event listener to the tab links
            $('#myTab').on('shown.bs.tab', function (e) {
                    history.replaceState(null, null, e.target.hash);
                });
            });
        </script>
    </section>
</main>
@include('inc.footer')

@endsection