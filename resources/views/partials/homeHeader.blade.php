<section class="relative z-50 w-full min-h-screen md:min-h-[60vh] lg:min-h-screen overflow-hidden text-white" 
    style="
        background-image: url('{{ asset('assets/image/home/Group 179.webp') }}');
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

    <div data-aos="fade-up" data-aos-duration="1000"
        class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between mt-20 md:mt-16 relative z-10 pb-32">

        <div class="w-full md:w-1/2 text-center md:text-left space-y-6">
            <h1 data-aos="fade-right" data-aos-delay="200"
                class="text-4xl lg:text-5xl 2xl:text-6xl font-bold leading-tight text-barlow">
                The <span class="text-rose-500">Tumbler studios</span> <br>
                Behind Exceptional <br>
                Design Products
            </h1>

            <div class="flex flex-col md:flex-row items-center gap-4 mt-8 justify-center md:justify-start">
                <div data-aos="zoom-in" data-aos-delay="400" class="relative group cursor-pointer">
                    <div class="absolute inset-0 w-16 h-16 bg-rose-500 rounded-full animate-ping opacity-20 group-hover:duration-300"></div>
                    <div class="w-16 h-16 bg-rose-500 rounded-full flex items-center justify-center shadow-lg shadow-rose-500/50 relative z-10 transition-transform duration-300 group-hover:scale-110 active:scale-95">
                        <i class="fa-solid fa-play text-white text-xl ml-1 group-hover:translate-x-0.5 transition-transform"></i>
                    </div>
                    <div class="absolute -top-2 -left-2 w-20 h-20 border-2 border-dashed border-rose-400/50 rounded-full animate-spin-slow group-hover:border-rose-500 transition-colors duration-500"></div>
                </div>

                <p data-aos="fade-left" data-aos-delay="600" class="text-xl md:text-2xl font-semibold italic">
                    Turning Ideas into Living Stories. <i class="fa-solid fa-quote-right text-4xl lg:-mt-4 align-top"></i>
                </p>
            </div>
        </div>

        <div data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300"
            class="w-full md:w-1/2 flex justify-center md:justify-end mt-12 md:mt-14 2xl:mt-20 relative">
            <img src="{{ asset('assets/image/home/Group 178.png') }}" alt="Banner Image">
        </div>
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