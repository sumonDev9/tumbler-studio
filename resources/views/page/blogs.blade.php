@extends('layouts.app')
@section('title', 'Tumbler Studio – Career')
@section('styled_title')
    <span class="bg-gradient-to-r from-[#FF3668] to-[#CF0037] bg-clip-text text-transparent font-bold">
    Latest 
    </span>
    Blogs
@endsection
@section('breadcrumb', 'Blogs')

@section('content')

<section class="relative w-full py-16 overflow-hidden">
    <div class="absolute top-0 left-20 w-[250px] hidden lg:block" data-aos="fade-right" data-aos-duration="1000">
        <img src="{{ asset('assets/image/home/triangle.png') }}" alt="" />
    </div>

    <div class="absolute -top-10 right-10 w-[250px] hidden lg:block" data-aos="fade-left" data-aos-duration="1000">
        <img src="{{ asset('assets/image/home/yellowtri.png') }}" alt="" />
    </div>

    <div class="mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
        <h3 class="font-bold text-lg md:text-3xl lg:text-6xl py-2 lg:py-5 text-[#CF0037]">
            Blogs
        </h3>
        <p class="font-semibold text-gray-800">
            We thrive on creative challenges, and your project could be our next
            masterpiece.<br />Let's work together to bring your vision to life
            through the magic of animation.
        </p>
    </div>

    <div class="container px-4 2x:px-0 mt-10 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-8">
        
        <div class="relative w-full group" data-aos="fade-up" data-aos-delay="100">
            <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
                <img src="{{ asset('assets/image/home/div1.png') }}" alt="2D Animation"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
                    2D Animation
                </div>
            </div>

            <div class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
                <i class="fa-regular fa-clock mr-2"></i> 23 January 2026
            </div>

            <div class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                <div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                        Animation isn’t just movement—it’s storytelling in motion.
                    </h3>
                    <p class="text-black text-sm leading-relaxed mb-6">
                        Every frame matters. Every transition speaks. We turn ideas into
                        visuals that move people.
                    </p>
                </div>
                <a href="#" class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
                    <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                        <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                    </div>
                    Read More
                </a>
            </div>
        </div>

        <div class="relative w-full group" data-aos="fade-up" data-aos-delay="200">
            <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
                <img src="{{ asset('assets/image/home/div2.png') }}" alt="Scroll Animation"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
                    Scroll-Based Animation
                </div>
            </div>

            <div class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
                <i class="fa-regular fa-clock mr-2"></i> 23 January 2026
            </div>
            <div class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                <div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                        Top Animation Trends Shaping Modern Websites in 2026
                    </h3>
                    <p class="text-black text-sm leading-relaxed mb-6">
                        In 2026, web animation is no longer just a visual enhancement—it
                        has become a core necessity.
                    </p>
                </div>
                <a href="#" class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
                    <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                        <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                    </div>
                    Read More
                </a>
            </div>
        </div>

        <div class="relative w-full group" data-aos="fade-up" data-aos-delay="300">
            <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
                <img src="{{ asset('assets/image/home/div3.png') }}" alt="Product Animation"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
                    Product Animation
                </div>
            </div>

            <div class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
                <i class="fa-regular fa-clock mr-2"></i> 23 January 2026
            </div>

            <div class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                <div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                        Why Motion Design Is the Secret to Better User Experience
                    </h3>
                    <p class="text-black text-sm leading-relaxed mb-6">
                        As technology evolves, animation trends are shifting toward
                        smoother, smarter, and more intuitive UI.
                    </p>
                </div>
                <a href="#" class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
                    <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                        <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                    </div>
                    Read More
                </a>
            </div>
        </div>

        <div class="relative w-full group" data-aos="fade-up" data-aos-delay="100">
            <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
                <img src="{{ asset('assets/image/home/div4.png') }}" alt="Product Animation"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
                    2D Animation
                </div>
            </div>

            <div class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
                <i class="fa-regular fa-clock mr-2"></i> 23 January 2026
            </div>

            <div class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                <div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                        Why Animation Services Are Essential for Modern Brands
                    </h3>
                    <p class="text-black text-sm leading-relaxed mb-6">
                        Every frame matters. Every transition speaks.We turn ideas into
                        visuals that move people.
                    </p>
                </div>
                <a href="#" class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
                    <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                        <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                    </div>
                    Read More
                </a>
            </div>
        </div>

        <div class="relative w-full group" data-aos="fade-up" data-aos-delay="200">
            <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
                <img src="{{ asset('assets/image/home/div5.png') }}" alt="Character Animation"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
                    Character Animation
                </div>
            </div>

            <div class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
                <i class="fa-regular fa-clock mr-2"></i> 23 January 2026
            </div>

            <div class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                <div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                        From Static to Interactive: The Power of Animation Services
                    </h3>
                    <p class="text-black text-sm leading-relaxed mb-6">
                        In 2026, web animation is no longer just a visual enhancement—it
                        has become a core.
                    </p>
                </div>
                <a href="#" class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
                    <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                        <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                    </div>
                    Read More
                </a>
            </div>
        </div>

        <div class="relative w-full group" data-aos="fade-up" data-aos-delay="300">
            <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
                <img src="{{ asset('assets/image/home/div6.png') }}" alt="Motion Graphics"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
                    Motion Graphics
                </div>
            </div>

            <div class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
                <i class="fa-regular fa-clock mr-2"></i> 23 January 2026
            </div>

            <div class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
                <div>
                    <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                        How Motion Graphics Elevate Digital Marketing Campaigns
                    </h3>
                    <p class="text-black text-sm leading-relaxed mb-6">
                        As technology evolves, animation trends are shifting toward
                        smoother, smarter, and more.
                    </p>
                </div>
                <a href="#" class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
                    <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                        <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                    </div>
                    Read More
                </a>
            </div>
        </div>
        
    </div>
</section>




@endsection