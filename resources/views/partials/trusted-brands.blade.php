<section class="pb-16 overflow-hidden">
    <style>
        .trusted-swiper-container {
            width: 100%;
            padding: 40px 0;
        }

        .trusted-swiper-container .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <div class="text-center mb-10" data-aos="fade-down" data-aos-duration="1000">
        <h2 class="text-4xl md:text-5xl font-extrabold text-black">
            <span class="text-rose-600">Trusted</span> By
        </h2>
        <div class="flex justify-center mt-2">
            <svg width="60" height="20" viewBox="0 0 60 20" fill="none" class="stroke-indigo-500">
                <path d="M2 10 Q10 2 18 10 T34 10 T50 10" stroke-width="3" stroke-linecap="round" />
            </svg>
        </div>
    </div>

    <div class="swiper trusted-brand-slider px-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
        <div class="swiper-wrapper">
            @foreach($brands as $brand)
            <div class="swiper-slide">
                <div class="w-full mx-2 h-56 bg-orange-50 rounded-3xl flex items-center justify-center p-8 transition-transform hover:scale-105 border border-transparent hover:border-orange-200">
                    <img src="{{ asset('storage/'.$brand->logo) }}" alt="Logo" class="max-h-full max-w-full grayscale hover:grayscale-0 transition-all">
                </div>
            </div>
        @endforeach


        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var trustedLogoSwiper = new Swiper(".trusted-brand-slider", {
                slidesPerView: 2,
                spaceBetween: 20,
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 5 },
                    1440: { slidesPerView: 6 },
                },
            });
        });
    </script>
</section>