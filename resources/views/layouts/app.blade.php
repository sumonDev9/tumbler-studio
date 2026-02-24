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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
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
document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ajax-contact-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Form reload howa theke atkay
                
                let submitBtn = this.querySelector('.submit-btn');
                let btnText = this.querySelector('.btn-text');
                let spinner = this.querySelector('.loading-spinner');
                
                // Button Loading State
                submitBtn.disabled = true;
                btnText.innerText = "SENDING...";
                if(spinner) spinner.classList.remove('hidden');

                let formData = new FormData(this);

                // Apnar dewa AJAX Fetch Code
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json' // Laravel validation er jonno important
                    }
                })
                .then(response => response.json().then(data => ({ status: response.status, body: data })))
                .then(({ status, body }) => {
                    // Restore button
                    submitBtn.disabled = false;
                    btnText.innerText = "SEND MESSAGE";
                    if(spinner) spinner.classList.add('hidden');

                    if (status === 200 && body.success) {
                        this.reset(); // Form clear korbe
                        
                        // Toast Alert Success
                        Swal.fire({ toast: true, position: 'top-end', icon: 'success', title: body.message, showConfirmButton: false, timer: 3000 });

                        // Confetti Animation (Rongin Kagoj)
                        confetti({ particleCount: 150, spread: 70, origin: { y: 0.6 } });
                        
                        // 2 second por page reload hobe jate notun math ashe
                        setTimeout(() => location.reload(), 2000); 
                    } else {
                        // Validation Error ba Math Vul hole
                        let errorMsg = body.message || 'Validation failed!';
                        
                        // Jodi Laravel validation error dey (jemon: phone number vul)
                        if(body.errors) {
                            errorMsg = Object.values(body.errors)[0][0]; // Prothom error message ta nibe
                        }

                        Swal.fire({ toast: true, position: 'top-end', icon: 'error', title: errorMsg, showConfirmButton: false, timer: 4000 });
                    }
                })
                .catch(error => {
                    // Network error ba onno kono jhamela hole
                    submitBtn.disabled = false;
                    btnText.innerText = "SEND MESSAGE";
                    if(spinner) spinner.classList.add('hidden');
                    
                    Swal.fire({ toast: true, position: 'top-end', icon: 'error', title: 'Something went wrong!', showConfirmButton: false, timer: 3000 });
                });
            });
        });
    });
    </script>

</body>
</html>

