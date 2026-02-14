  <section
    class="relative w-full min-h-[50vh] md:min-h-[80vh] lg:min-h-screen 2xl:min-h-[70vh] overflow-hidden text-white"
    style="
        background-image: url(&quot;./assets/image/home/Group 186.png&quot;);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      ">
    <nav id="main-nav"
      class="fixed top-0 left-0 w-full px-6 py-4 flex justify-between items-center z-50 transition-all duration-300">
      <div class="container mx-auto flex justify-between items-center w-full">
        <div class="flex items-center gap-2">
          <div class="w-12 h-12 rounded-full flex items-center justify-center overflow-hidden">
            <img src="./assets/image/home/logo.png" alt="" />
          </div>
        </div>

        <div class="hidden lg:flex items-center gap-8 text-sm font-semibold tracking-wide uppercase">
          <a href="/index.html" class="hover:text-yellow-300 transition">Home</a>
          <a href="/aboutUs.html" class="hover:text-yellow-300 transition">About Us</a>
          <a href="/services.html" class="hover:text-yellow-300 transition">Services</a>
          <a href="/portfolio.html" class="hover:text-yellow-300 transition relative">
            Portfolio
            <svg class="absolute -bottom-2 left-0 w-full" height="6" viewBox="0 0 40 6" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M1 3C5 3 5 5 9 5C13 5 13 1 17 1C21 1 21 5 25 5C29 5 29 1 33 1C37 1 37 3 39 3" stroke="#F43F5E"
                stroke-width="2" stroke-linecap="round" />
            </svg>
          </a>
          <a href="/career.html" class="hover:text-yellow-300 transition">Careers</a>
          <a href="/blog.html" class="hover:text-yellow-300 transition">Blog</a>
          <a href="/contact-us.html" class="hover:text-yellow-300 transition">Contact Us</a>
        </div>

        <a href="#"
          class="hidden relative md:flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] pl-10 pr-6 py-3 rounded-full shadow-lg font-bold hover:scale-105 transition transform">
          <div
            class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
            <img src="/assets/image/home/Group 1.png" alt="" />
          </div>
          GET IN TOUCH
        </a>

        <button id="menu-toggle" class="lg:hidden text-2xl focus:outline-none">
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
            {{-- সাধারণ টাইটেল --}}
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
        <div class="relative z-10 mt-24 2xl:mt-20">
          <img src="./assets/image/home/co.png" alt="3D Character"
            class="object-cover h-[350px] drop-shadow-2xl ml-auto mask-image-bottom" />
        </div>
      </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full leading-none z-0">
      <img src="./assets/image/home/Vector__1_-removebg-preview.png" class="w-full" alt="" />
    </div>

    <div class="absolute bottom-0 lg:bottom-14 left-24 z-10">
      <img src="./assets/image/home/Frame (2).png" class="w-24" alt="" />
    </div>

    <div id="mobile-drawer"
      class="fixed inset-0 bg-black/95 z-[100] flex flex-col items-center justify-center space-y-6 text-xl font-bold transition-transform duration-300 translate-x-full lg:hidden">
      <button id="close-drawer" class="absolute top-8 right-8 text-3xl">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <a href="/index.html" class="hover:text-yellow-400">Home</a>
      <a href="/aboutUs.html" class="hover:text-yellow-400">About Us</a>
      <a href="/services.html" class="hover:text-yellow-400">Services</a>
      <a href="/portfolio.html" class="hover:text-yellow-400">Portfolio</a>
      <a href="/career.html" class="hover:text-yellow-400">Careers</a>
      <a href="/blog.html" class="hover:text-yellow-400">Blog</a>
      <a href="/career.html" class="hover:text-yellow-400">Contact Us</a>
    </div>
  </section>