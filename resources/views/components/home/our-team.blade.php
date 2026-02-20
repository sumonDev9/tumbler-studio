<section class="relative lg:py-10 px-4 2xl:px-0">
    <div class="text-center mb-10" data-aos="fade-down" data-aos-duration="1000">
        <h2 class="text-4xl md:text-5xl font-extrabold text-black">
           Our <span class="text-rose-600">Team</span> 
        </h2>
        <div class="flex justify-center mt-2">
            <svg width="60" height="20" viewBox="0 0 60 20" fill="none" class="stroke-indigo-500">
                <path d="M2 10 Q10 2 18 10 T34 10 T50 10" stroke-width="3" stroke-linecap="round" />
            </svg>
        </div>
    </div>

    <div class="relative container mx-auto">
        <div class="swiper team-swiper">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide flex flex-col items-center pb-12">
                    <div class="relative">
                        <div class="relative border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                            <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                                <img src="{{ asset('assets/image/team/profile1.png') }}" alt="Atin Nandi" class="w-full h-full object-cover border-2 border-[#59D5F3]">
                            </div>
                            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-[#572BC6] text-white px-6 py-1.5 rounded-full font-bold z-10 whitespace-nowrap">
                                Atin Nandi
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full right-0">
                            <img src="{{ asset('assets/image/team/Frame.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                    <p class="mt-10 text-gray-800 text-xl text-center">Founder & Director</p>
                </div>

                <div class="swiper-slide flex flex-col items-center pb-12">
                    <div class="relative">
                        <div class="relative border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                            <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                                <img src="{{ asset('assets/image/team/profile2.png') }}" alt="Mitu mal" class="w-full h-full object-cover border-2 border-[#59D5F3]">
                            </div>
                            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-[#572BC6] text-white px-6 py-1.5 rounded-full font-bold z-10 whitespace-nowrap">
                                Mitu mal
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full right-0">
                            <img src="{{ asset('assets/image/team/Frame.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                    <p class="mt-10 text-gray-800 text-xl text-center">HR Manager</p>
                </div>

                <div class="swiper-slide flex flex-col items-center pb-12">
                    <div class="relative">
                        <div class="relative border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                            <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                                <img src="{{ asset('assets/image/team/profile3.png') }}" alt="Amit Dutta" class="w-full h-full object-cover border-2 border-[#59D5F3]">
                            </div>
                            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-[#572BC6] text-white px-6 py-1.5 rounded-full font-bold z-10 whitespace-nowrap">
                                Amit Dutta
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full right-0">
                            <img src="{{ asset('assets/image/team/Frame.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                    <p class="mt-10 text-gray-800 text-xl text-center">Technical Head</p>
                </div>

                <div class="swiper-slide flex flex-col items-center pb-12">
                    <div class="relative">
                        <div class="relative border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                            <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                                <img src="{{ asset('assets/image/team/profile4.png') }}" alt="Jit Kanjilal" class="w-full h-full object-cover border-2 border-[#59D5F3]">
                            </div>
                            <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 bg-[#572BC6] text-white px-6 py-1.5 rounded-full font-bold z-10 whitespace-nowrap">
                                Jit Kanjilal
                            </div>
                        </div>
                        <div class="absolute bottom-0 left-0 w-full right-0">
                            <img src="{{ asset('assets/image/team/Frame.png') }}" class="w-full" alt="">
                        </div>
                    </div>
                    <p class="mt-10 text-gray-800 text-xl text-center">Software Engineer</p>
                </div>

            </div>

            <div class="team-prev absolute top-1/2 left-0 -translate-y-1/2 z-20 cursor-pointer bg-white p-2 rounded-full shadow-lg text-[#4D59C9] hover:bg-[#4D59C9] hover:text-white transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </div>
            <div class="team-next absolute top-1/2 right-0 -translate-y-1/2 z-20 cursor-pointer bg-white p-2 rounded-full shadow-lg text-[#4D59C9] hover:bg-[#4D59C9] hover:text-white transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.team-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.team-next',
                prevEl: '.team-prev',
            },
            // Responsive Breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    });
</script>