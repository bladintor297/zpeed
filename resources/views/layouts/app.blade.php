<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <meta name="msapplication-TileColor" content="#080032">
        <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <title>Zpeed Solutions</title>

        {{-- Fav Icon --}}
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Vendor Styles-->
        <link rel="stylesheet" media="screen" href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}"/>
        <link rel="stylesheet" media="screen" href="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.css')}}"/>
        <link rel="stylesheet" media="screen" href="{{URL::asset('assets/vendor/lightgallery/css/lightgallery-bundle.min.css')}}"/>

        <!-- Main Theme Styles + Bootstrap-->
        <link rel="stylesheet" media="screen" href="{{URL::asset('assets/css/theme.min.css')}}"/>

        <!-- Page loading styles -->
        <style>
          .list-group-item p {
              white-space: pre-wrap;
              word-break: break-word;
            }

            .list-group-item .close-button {
              position: absolute;
              top: 0;
              right: 0;
              padding: 0.5rem;
              background-color: transparent;
              border: none;
              color: red;
              font-size: 1rem;
              line-height: 1;
            }

          .breadcrumb-item.active {
            /* Change the color to your desired color */
            color: #ffba08 !important;
          }
          .navbar-dark .navbar-nav .nav-link.active,
          .navbar-dark .navbar-nav .nav-link:hover,
          .navbar-dark .navbar-nav .dropdown-item.active,
          .navbar-dark .navbar-nav .dropdown-item:hover,
          .navbar-dark .navbar-nav .nav-item.dropdown-open .nav-link,
          .navbar-dark .navbar-nav .nav-item.dropdown:hover > .nav-link {
            color: #ffba08 !important;
            font-weight: bold; /* Replace with your desired text color */
          }
          

          .navbar-dark .navbar-nav .nav-item:hover {
            transition: transform 0.1s ease-in-out;
          }
          .navbar-dark .navbar-nav .nav-item:hover {
            transform: scale(1.05);
          }

          footer .nav-link:hover,
          footer .nav-link:focus {
            color: #ffba08 !important;
          }
          
          footer .nav-item.active .nav-link {
            color: #ffba08 !important;
          }
          
          .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
          }
          .dark-mode .page-loading {
            background-color: #0b0f19;
          }
          .page-loading.active {
            opacity: 1;
            visibility: visible;
          }
          .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
          }
          .page-loading.active > .page-loading-inner {
            opacity: 1;
          }
          .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #9397ad;
          }
          .dark-mode .page-loading-inner > span {
            color: #fff;
            opacity: .6;
          }
          .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #b4b7c9;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
          }
          .dark-mode .page-spinner {
            border-color: rgba(255,255,255,.4);
            border-right-color: transparent;
          }
          @-webkit-keyframes spinner {
            100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
            }
          }
          @keyframes spinner {
            100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
            }
          }

          .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
          }
        </style>
        
        <!-- Page custom styles -->
        <style>

          /* Spin animation */
          @-webkit-keyframes hero-spin {
            100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
            }
          }
          @keyframes hero-spin {
            100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
            }
          }
          .hero-animation-spin {
            -webkit-animation: hero-spin 35s linear infinite;
            animation: hero-spin 35s linear infinite;
          }

          /* Fade animation */
          @-webkit-keyframes hero-fade {
            0%, 100% { opacity: 0 }
            50% { opacity: 1 }
          }
          @keyframes hero-fade {
            0%, 100% { opacity: 0 }
            50% { opacity: 1 }
          }
          .hero-animation-fade {
            -webkit-animation: hero-fade 4s ease-in infinite;
            animation: hero-fade 4s ease-in infinite;
          }
          .hero-animation-delay-1,
          .hero-animation-delay-2,
          .hero-animation-delay-3 {
            opacity: 0;
          }
          .hero-animation-delay-1 { animation-delay: .75s; }
          .hero-animation-delay-2 { animation-delay: 1.5s; }
          .hero-animation-delay-3 { animation-delay: 2s; }
        </style>

        <!-- Theme mode -->
        <script>
          let mode = window.localStorage.getItem('mode'),
              root = document.getElementsByTagName('html')[0];
          if (mode !== null && mode === 'dark') {
            root.classList.add('dark-mode');
          } else {
            root.classList.remove('dark-mode');
          }
        </script>

        <!-- Page loading scripts -->
        <script>
          (function () {
            window.onload = function () {
              const preloader = document.querySelector('.page-loading');
              preloader.classList.remove('active');
              setTimeout(function () {
                preloader.remove();
              }, 1000);
            };
          })();
        </script>

    </head>
    <body>
        
        @include('inc.spinner')

        @include('inc.navbar')
        
        @yield('content')

    
        <!-- Vendor Scripts -->
        <script src="{{URL::asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/@lottiefiles/lottie-player/dist/lottie-player.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/lightgallery/lightgallery.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/lightgallery/plugins/video/lg-video.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/shufflejs/dist/shuffle.min.js')}}"></script>
    
        <!-- Main Theme Script -->
        <script src="{{URL::asset('assets/js/theme.min.js')}}"></script>

        
      </body>
</html>
