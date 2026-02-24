<section
    class="relative w-full min-h-[50vh] md:min-h-[75vh] lg:min-h-screen 2xl:min-h-[70vh] overflow-hidden text-white"
    style="
        background-image: url('{{ asset('assets/image/home/Group 186.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      ">
<nav id="main-nav"
    class="fixed top-0 left-0 w-full px-6 py-4 flex justify-between items-center z-50 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center w-full">
        <div class="flex items-center gap-2">
            <div class="w-12 h-12 rounded-full flex items-center justify-center overflow-hidden">
                <img src="{{ asset('assets/image/home/logo.png') }}" alt="" />
            </div>
        </div>

        <div class="hidden lg:flex items-center gap-8 text-sm font-semibold tracking-wide uppercase text-white">
            {{-- Home --}}
            <a href="{{ url('/') }}" class="hover:text-yellow-300 transition relative {{ request()->is('/') ? 'text-yellow-300' : '' }}">
                Home
                @if(request()->is('/'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- About Us --}}
            <a href="{{ url('/about-us') }}" class="hover:text-yellow-300 transition relative {{ request()->is('about-us') ? 'text-yellow-300' : '' }}">
                About Us
                @if(request()->is('about-us'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- Services --}}
            <a href="{{ url('/service') }}" class="hover:text-yellow-300 transition relative {{ request()->is('services') ? 'text-yellow-300' : '' }}">
                Services
                @if(request()->is('service'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- Portfolio --}}
            <a href="{{ url('/portfolio') }}" class="hover:text-yellow-300 transition relative {{ request()->is('portfolio') ? 'text-yellow-300' : '' }}">
                Portfolio
                @if(request()->is('portfolio'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- Careers --}}
            <a href="{{ url('/career') }}" class="hover:text-yellow-300 transition relative {{ request()->is('career') ? 'text-yellow-300' : '' }}">
                Careers
                @if(request()->is('career'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- Our Team --}}
            <a href="{{ url('/team') }}" class="hover:text-yellow-300 transition relative {{ request()->is('team') ? 'text-yellow-300' : '' }}">
                Our Team
                @if(request()->is('team'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- Blog --}}
            <a href="{{ url('/blogs') }}" class="hover:text-yellow-300 transition relative {{ request()->is('blog') ? 'text-yellow-300' : '' }}">
                Blog
                @if(request()->is('blogs'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>

            {{-- Contact Us --}}
            <a href="{{ url('/contact-us') }}" class="hover:text-yellow-300 transition relative {{ request()->is('contact-us') ? 'text-yellow-300' : '' }}">
                Contact Us
                @if(request()->is('contact-us'))
                <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E" stroke-width="2" stroke-linecap="round" />
                </svg>
                @endif
            </a>
        </div>

        <a href="{{ url('/contact-us') }}"
            class="hidden relative md:flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] pl-10 pr-6 py-3 rounded-full shadow-lg font-bold hover:scale-105 transition transform text-white">
            <div
                class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                <img src="{{ asset('assets/image/home/Group 1.png') }}" alt="" />
            </div>
            GET IN TOUCH
        </a>

        <button id="menu-toggle" class="lg:hidden text-2xl focus:outline-none text-white">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

    <div class="container mx-auto px-6 pt-32 pb-32 md:pb-0 flex flex-col md:flex-row items-center relative z-10 h-full">
        <div class="w-full md:w-1/2 flex flex-col items-start space-y-6 mt-10 md:mt-0">
            <h1 class="text-3xl md:text-4xl lg:text-6xl 2xl:text-7xl text-barlow font-black tracking-tight drop-shadow-md">
                @if(View::hasSection('styled_title'))
                    @yield('styled_title')
                @else
                    @yield('page_title')
                @endif
            </h1>

            <div class="flex items-center text-barlow drop-shadow-xl">
                <div
                    class="clip-arrow-start bg-white text-blue-600 px-8 py-3 font-bold pr-10 flex items-center relative z-10">
                    Home
                </div>
                <div
                    class="clip-arrow bg-gradient-to-r from-[#5599E0] to-[#4D59C9] text-white px-8 py-3 font-bold pr-10 -ml-6 relative z-0 text-lg border-l border-white/20">
                    @yield('breadcrumb')
                </div>
            </div>
        </div>

<div class="w-full md:w-1/2 hidden relative lg:flex justify-center md:justify-end mt-12 md:mt-0">
    <div class="relative z-0 mt-24 2xl:mt-8">
        <img src="@yield('hero_image', asset('assets/image/home/co.png'))" 
             alt="Page Character"
             class="object-cover h-[350px]  ml-auto" />
    </div>
</div>
    </div>

    <div class="absolute bottom-0 left-0 w-full leading-none z-10">
        <img src="{{ asset('assets/image/home/Vector__1_-removebg-preview.png') }}" class="w-full" alt="" />
    </div>

    <div class="absolute bottom-0 lg:bottom-14 left-24 z-10">
        <img src="{{ asset('assets/image/home/Frame (2).png') }}" class="w-24" alt="" />
    </div>

<div id="mobile-drawer"
    class="fixed inset-0 bg-black/60 backdrop-blur-sm z-[100] transition-all duration-500 opacity-0 pointer-events-none lg:hidden">
    
    <div id="drawer-content" 
        class="absolute top-0 right-0 w-[280px] h-full bg-gradient-to-b from-[#1a1a1a] to-black p-8 flex flex-col space-y-6 text-white shadow-2xl transform translate-x-full transition-transform duration-500 border-l border-white/10">
        
        <button id="close-drawer" class="self-end text-3xl text-white/70 hover:text-red-500 transition-colors">
            <i class="fa-solid fa-xmark"></i>
        </button>

        <nav class="flex flex-col space-y-4 pt-4">
            <a href="{{ url('/') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Home</a>
            <a href="{{ url('/about-us') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">About Us</a>
            <a href="{{ url('/services') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Services</a>
            <a href="{{ url('/portfolio') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Portfolio</a>
            <a href="{{ url('/career') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Careers</a>
            <a href="{{ url('/team') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Our Team</a>
            <a href="{{ url('/blog') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Blog</a>
            <a href="{{ url('/contact-us') }}" class="text-lg font-medium border-b border-white/5 pb-2 hover:text-[#FE3668] transition">Contact Us</a>
        </nav>

        <div class="pt-8">
            <a href="#" class="block text-center bg-gradient-to-r from-[#FE3668] to-[#CF0037] py-3 rounded-full font-bold shadow-lg">
                GET IN TOUCH
            </a>
        </div>
    </div>
</div>
</section>