<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Roshni Lithium Batteries')</title>
    <meta name="description" content="@yield('meta_description', 'High-performance lithium batteries for solar, vehicles, home backup, and industrial use.')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FAST CDN CONNECTION -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- FAVICON -->
    <link rel="icon" type="image/svg" href="{{ asset('assets/image/home/logo.png') }}">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;300;400;600;700;800;900&display=swap"
    rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @stack('styles')
</head>


<body class="bg-white text-[#000000] overflow-x-hidden">
  <!-- navbar -->
@if (Request::is('/'))
    {{-- Home page er jonno header --}}
    @include('partials.homeHeader') 
@else
    {{-- Onno shob page er jonno header --}}
    @include('partials.header')
@endif
  
    <!-- MAIN CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- footer -->
    @include('partials.footer')

    <!-- JS FILES (Loaded at bottom for FAST RENDERING) -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS -->
     <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    {{-- Flatpickr JS & Initialization --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @stack('scripts')

    <script>
     
       AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true
    });

    // document.addEventListener('DOMContentLoaded', function() {
    //     flatpickr("#appointmentDate", {
    //         minDate: "today", // Disables past dates
    //         dateFormat: "Y-m-d", // Date format
    //         disableMobile: "true" // Ensures the flatpickr UI shows up on mobile
    //     });
    // });
    </script>

</body>
</html>

