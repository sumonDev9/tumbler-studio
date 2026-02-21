<section class="relative md:pb-20">
    <img src="{{ asset('assets/image/home/XMLID_18_ (1).png') }}" class="bottom-10 hidden md:block lg:-bottom-10 2xl:-bottom-10 absolute z-10 w-full" alt="">
    <img src="{{ asset('assets/image/home/Vector 3.png') }}" class="absolute hidden md:block md:h-[1100px] lg:h-[1200px] top-80 w-full z-0" alt="">

    <div class="mx-auto container relative z-20 px-4 2xl:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="md:block hidden" data-aos="fade-right">
                <img class="h-[750px] object-contain mx-auto" src="{{ asset('assets/image/home/boy6.png') }}" alt="Vision" />
            </div>
            <div class="space-y-5" data-aos="fade-left">
                <h2 class="font-bold text-beiruti text-4xl py-3 lg:text-5xl 2xl:text-6xl">
                    Our <span class="text-[#CF0037]">Vision </span>
                </h2>
                <p class="text-xl text-black lg:text-2xl">
                    Our vision is to become a trusted creative animation partner for brands worldwide by delivering innovative, high-quality, and story-driven animations.
                </p>
            </div>
        </div>
    </div>

    <div class="relative overflow-hidden px-4">
        <div class="container mx-auto">
            <div class="text-center my-10" data-aos="zoom-in">
                <h2 class="text-4xl md:text-6xl font-extrabold md:text-white italic tracking-wider">
                    Studio <span class="text-[#D31B33]">Gallery</span>
                </h2>
            </div>

            <div class="swiper gallerySwiper relative pb-16">
                <div class="swiper-wrapper">
                    @foreach($visions as $vision)
                    <div class="swiper-slide px-2">
                        <div class="border-4 border-white/30 rounded-[2.5rem] overflow-hidden shadow-2xl">
                            <img class="w-full h-[350px] object-cover" src="{{ asset('storage/'.$vision->image) }}" alt="Gallery 1" />
                        </div>
                    </div>
                    @endforeach
              
                </div>

                <div class="flex justify-center gap-4 mt-10">
                    <button class="prev-btn w-12 h-12 rounded-full bg-white flex items-center justify-center text-gray-800 shadow-lg hover:bg-gray-200 transition-all z-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" /></svg>
                    </button>
                    <button class="next-btn w-12 h-12 rounded-full bg-white flex items-center justify-center text-gray-800 shadow-lg hover:bg-gray-200 transition-all z-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>