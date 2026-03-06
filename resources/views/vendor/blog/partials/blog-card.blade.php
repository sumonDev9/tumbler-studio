<div class="relative w-full group" data-aos="fade-up" data-aos-delay="100">
    <div class="relative h-[340px] w-full overflow-hidden rounded-tl-[50px] lg:rounded-tl-[100px] shadow-lg">
        <img src="{{ asset('assets/image/home/div1.png') }}" alt="2D Animation"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        @if($blog->category)
        <a href="{{ route('frontend.blog.category', $blog->category->slug) }}"
            class="absolute top-5 right-0 bg-[#5839C6] text-white text-sm font-bold px-6 py-2 rounded-tl-2xl z-20">
            {{ strtoupper($blog->category->name) }}
        </a>
        @endif
    </div>

    <div
        class="date-ribbon absolute top-[180px] -left-2 bg-[#FE3668] text-white text-xs font-bold px-4 py-2 rounded-r-md z-30 flex items-center shadow-md">
        <i class="fa-regular fa-clock mr-2"></i> {{ $blog->published_date->format('M d, Y') }}
    </div>

    <div
        class="relative bg-white p-6 lg:p-8 -mt-20 ml-6 rounded-br-[50px] lg:rounded-br-[100px] rounded-tl-2xl shadow-2xl z-20 min-h-[300px] flex flex-col justify-between transition-all duration-300 group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]">
        <div>
            <h3 class="text-xl lg:text-2xl font-bold text-gray-900 leading-tight mb-3">
                {{ $blog->title }}
            </h3>
            @if($blog->excerpt)
            <p class="text-black text-sm leading-relaxed mb-6">
                {{ $blog->excerpt }}
            </p>
            @endif
        </div>
        <a href="{{ route('frontend.blog.show', $blog->slug) }}"
            class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full lg:w-2/3 text-white shadow-lg font-bold hover:scale-105 transition transform">
            <div
                class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
            </div>
            Read More
        </a>
    </div>
</div>