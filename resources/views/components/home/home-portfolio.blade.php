<section class="relative py-16 overflow-hidden">
    <img src="{{ asset('assets/image/home/chele1.webp') }}" class="absolute bottom-0 object-contain h-60 right-40 2xl:right-60 hidden lg:block" alt="">
    <div class="absolute inset-0 -z-10 hidden pointer-events-none md:flex items-center justify-center">
        <div class="w-full aspect-[16/9]">
            <img src="{{ asset('assets/image/home/XMLID_18_.png') }}" alt="Background Shape" class="w-full h-full opacity-90">
        </div>
    </div>

    <div class="absolute bottom-0 left-20 2xl:left-52 z-0 w-80 h-80 hidden lg:block rounded-full bg-[#572BC6]" data-aos="fade-right">
    </div>
    <div class="absolute bottom-72 right-20 2xl:right-80 z-0 w-40 h-40 hidden lg:block rounded-full bg-[#572BC6]" data-aos="fade-left">
    </div>

    <div class="text-center mb-12 relative" data-aos="fade-down">
        <h2 class="text-5xl font-extrabold text-black">
            Our <span class="text-rose-600">Portfolio</span>
        </h2>
        <div class="flex justify-center mt-3">
            <svg width="60" height="15" viewBox="0 0 60 15" class="text-purple-600 stroke-current fill-none">
                <path d="M0 7.5 Q7.5 0 15 7.5 T30 7.5 T45 7.5 T60 7.5" stroke-width="3" />
            </svg>
        </div>
    </div>

    <div class="grid max-w-6xl px-4 mx-auto grid-cols-1 md:grid-cols-12 gap-6 items-start">

        <div class="md:col-span-4 lg:col-span-3 h-60 relative group" data-aos="zoom-in" data-aos-delay="100">
            <div class="w-full h-full rounded-[2.5rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port1.webp') }}" class="w-full h-full object-cover" alt="Character Creation">
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-2 rounded-full text-center font-bold text-xs uppercase tracking-wider">
                    Character Creation</div>
            </div>
        </div>

        <div class="md:col-span-4 lg:col-span-3 h-60 relative group" data-aos="zoom-in" data-aos-delay="200">
            <div class="w-full h-full rounded-[2.5rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port2.webp') }}" class="w-full h-full object-cover" alt="2D Animation">
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-2 rounded-full text-center font-bold text-xs uppercase tracking-wider">
                    2D Animation</div>
            </div>
        </div>

        <div class="md:col-span-4 lg:col-span-6 h-60 relative group" data-aos="zoom-in" data-aos-delay="300">
            <div class="w-full h-full rounded-[2.5rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port3.webp') }}" class="w-full h-full object-cover" alt="Character Animation">
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-2 rounded-full text-center font-bold text-xs uppercase tracking-wider">
                    Character Animation</div>
            </div>
        </div>

        <div class="md:col-span-4 lg:col-span-3 h-60 relative group" data-aos="zoom-in" data-aos-delay="100">
            <div class="w-full h-full rounded-[2.5rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port4.webp') }}" class="w-full h-full object-cover" alt="3D Animation">
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-2 rounded-full text-center font-bold text-xs uppercase tracking-wider">
                    3D Animation</div>
            </div>
        </div>

        <div class="md:col-span-4 lg:col-span-6 h-[400px] relative group" data-aos="zoom-in" data-aos-delay="200">
            <div class="w-full h-full rounded-[3rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port5.webp') }}" class="w-full h-full object-cover" alt="Visual Development">
                <div class="absolute bottom-8 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-3 rounded-full text-center font-bold text-lg">
                    VISUAL DEVELOPMENT</div>
            </div>
        </div>

        <div class="md:col-span-4 lg:col-span-3 h-60 relative group" data-aos="zoom-in" data-aos-delay="300">
            <div class="w-full h-full rounded-[2.5rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port6.webp') }}" class="w-full h-full object-cover" alt="Sound Design">
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-2 rounded-full text-center font-bold text-xs uppercase tracking-wider">
                    Sound Design</div>
            </div>
        </div>

        <div class="md:col-span-4 lg:col-span-3 h-60 relative group md:-mt-20 lg:-mt-40" data-aos="zoom-in" data-aos-delay="400">
            <div class="w-full h-full rounded-[2.5rem] border-4 border-white overflow-hidden card-shadow">
                <img src="{{ asset('assets/image/home/port7.webp') }}" class="w-full h-full object-cover" alt="Website Content">
                <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-4/5 bg-white/80 backdrop-blur-sm text-black py-2 rounded-full text-center font-bold text-xs uppercase tracking-wider">
                    Website Content</div>
            </div>
        </div>

    </div>

    <div class="mt-12 lg:mt-0 flex flex-col md:flex-row items-center justify-center gap-8" data-aos="fade-up">
        <a href="{{ url('/portfolio') }}"
            class="relative text-white uppercase flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] pl-10 pr-6 py-3 rounded-full shadow-lg font-bold hover:scale-105 transition transform">
            <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                <img src="{{ asset('assets/image/home/Group 11.png') }}" alt="" />
            </div>
            View PORTFOLIO
        </a>
    </div>

</section>