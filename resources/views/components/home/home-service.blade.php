<section class="relative mt-10 md:mt-32 pb-12 overflow-hidden">

    <div>
        <img src="{{ asset('assets/image/home/Vector 1.png') }}"
            class="absolute z-10 hidden lg:block top-0 left-0 w-full h-[750px]" alt="" data-aos="fade-in">
    </div>

    <div>
        <img src="{{ asset('assets/image/home/image 1.webp') }}" class="absolute hidden lg:block top-0 z-0 right-0" alt="" data-aos="fade-left">
    </div>

    <div class="container mx-auto px-4 2xl:px-0">
        <div class="text-center mb-10" data-aos="fade-down">
            <h2 class="text-4xl font-bold">Our <span class="text-pink-500">Service</span></h2>
            <div class="flex justify-center mt-2">
                <svg width="40" height="10" viewBox="0 0 40 10" class="text-purple-500 fill-current">
                    <path d="M0 5 Q5 0 10 5 T20 5 T30 5 T40 5" fill="none" stroke="currentColor" stroke-width="2" />
                </svg>
            </div>
        </div>

        <!-- <div class="flex relative z-20 overflow-x-auto pb-4 mb-8 no-scrollbar gap-4 justify-start md:justify-center" data-aos="fade-up" data-aos-delay="200">
            <button class="flex-shrink-0 bg-indigo-500 text-white px-6 py-2 rounded-full font-semibold shadow-md">Pre-production</button>
            <button class="flex-shrink-0 bg-indigo-500 text-white px-6 py-2 rounded-full font-semibold shadow-md">Production</button>
            <button class="flex-shrink-0 bg-rose-500 text-white px-6 py-2 rounded-full font-semibold shadow-md">Post-production</button>
            <button class="flex-shrink-0 bg-rose-500 text-white px-6 py-2 rounded-full font-semibold shadow-md">Co-production</button>
        </div> -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:mt-36 lg:grid-cols-4 relative z-20 gap-6">

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-indigo-400" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('assets/image/home/servicee1.webp') }}" alt="Scripting" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-indigo-500 text-white text-center py-2 rounded-xl font-bold">Scripting</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-indigo-400" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('assets/image/service/ser01.png') }}" alt="Storyboarding" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-indigo-500 text-white text-center py-2 rounded-xl font-bold">Storyboarding</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-indigo-400" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('assets/image/service/ser02.png') }}" alt="Character" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-indigo-500 text-white text-center py-2 rounded-xl font-bold">Character Creation</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-indigo-400" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('assets/image/service/img02.webp') }}" alt="Concept" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-indigo-500 text-white text-center py-2 rounded-xl font-bold">Concept Design</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-white bg-white" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('assets/image/service/ser04.png') }}" alt="2D" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-rose-600 text-white text-center py-2 rounded-xl font-bold">2D Animation</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-white bg-white" data-aos="zoom-in" data-aos-delay="600">
                <img src="{{ asset('assets/image/service/ser05.png') }}" alt="Char Anim" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-rose-600 text-white text-center py-2 rounded-xl font-bold">Character Animation</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-white bg-white" data-aos="zoom-in" data-aos-delay="700">
                <img src="{{ asset('assets/image/service/ser06.png') }}" alt="3D" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-rose-600 text-white text-center py-2 rounded-xl font-bold">3D Animation</div>
                </div>
            </div>

            <div class="relative group rounded-3xl h-80 overflow-hidden shadow-xl border-4 border-white bg-white" data-aos="zoom-in" data-aos-delay="800">
                <img src="{{ asset('assets/image/service/ser07.png') }}" alt="Asset" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 w-[85%]">
                    <div class="bg-rose-600 text-white text-center py-2 rounded-xl font-bold">Asset Creation</div>
                </div>
            </div>

        </div>

            <div class="mt-12 flex flex-col md:flex-row items-center justify-center gap-8" data-aos="fade-up">
        <a href="{{ url('/portfolio') }}"
            class="relative text-white uppercase flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] pl-10 pr-6 py-3 rounded-full shadow-lg font-bold hover:scale-105 transition transform">
            <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                <img src="{{ asset('assets/image/home/icons8-service-50.png') }}" class="w-6 h-6" alt="" />
            </div>
            View Service
        </a>
    </div>
    </div>
</section>