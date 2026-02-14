@extends('layouts.app')
@section('title', 'Tumbler Studio – Portfolio')
@section('page_title', 'Portfolio')
@section('breadcrumb', 'Portfolio')

@section('content')


<section class="px-4 py-10 relative overflow-hidden">
    {{-- Background Decorative Frame --}}
    <img src="{{ asset('assets/image/portfolio/Frame.png') }}" class="absolute bottom-60 right-0" alt="" data-aos="fade-left" />

    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            
            <div class="relative group w-full aspect-[4/3] flex items-center justify-center p-5 shadow-[0_4px_34px_0_#7953FF] transition-transform duration-300 hover:scale-105"
                style="background-image: url('{{ asset('assets/image/portfolio/Group 201.png') }}'); background-size: cover; background-position: center;" 
                data-aos="fade-up" data-aos-delay="100">
                
                <img src="{{ asset('assets/image/portfolio/prot1.png') }}" alt="2D Animation"
                    class="w-full h-full object-cover border border-purple-900/50 block" />

                <div class="absolute -bottom-5 px-8 py-2 bg-white/60 backdrop-blur-[12px] rounded-full shadow-lg z-10">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-black">2D Animation</span>
                </div>
            </div>

            <div class="relative group w-full aspect-[4/3] flex items-center justify-center p-5 shadow-[0_4px_34px_0_#7953FF] transition-transform duration-300 hover:scale-105"
                style="background-image: url('{{ asset('assets/image/portfolio/Group 201.png') }}'); background-size: cover; background-position: center;" 
                data-aos="fade-up" data-aos-delay="200">
                
                <img src="{{ asset('assets/image/portfolio/prot2.png') }}" alt="Character Modelling"
                    class="w-full h-full object-cover border border-purple-900/50 block" />

                <div class="absolute -bottom-5 px-8 py-2 bg-white/60 backdrop-blur-[12px] rounded-full shadow-lg z-10">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-black">Character Modelling</span>
                </div>
            </div>

            <div class="relative group w-full aspect-[4/3] flex items-center justify-center p-5 shadow-[0_4px_34px_0_#7953FF] transition-transform duration-300 hover:scale-105"
                style="background-image: url('{{ asset('assets/image/portfolio/Group 201.png') }}'); background-size: cover; background-position: center;" 
                data-aos="fade-up" data-aos-delay="300">
                
                <img src="{{ asset('assets/image/portfolio/prot3.png') }}" alt="Prop Modelling"
                    class="w-full h-full object-cover border border-purple-900/50 block" />

                <div class="absolute -bottom-5 px-8 py-2 bg-white/60 backdrop-blur-[12px] rounded-full shadow-lg z-10">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-black">Prop Modelling</span>
                </div>
            </div>

            <div class="relative group w-full aspect-[4/3] flex items-center justify-center p-5 shadow-[0_4px_34px_0_#7953FF] transition-transform duration-300 hover:scale-105"
                style="background-image: url('{{ asset('assets/image/portfolio/Group 201.png') }}'); background-size: cover; background-position: center;" 
                data-aos="fade-up" data-aos-delay="100">
                
                <img src="{{ asset('assets/image/portfolio/prot4.png') }}" alt="Environment Design"
                    class="w-full h-full object-cover border border-purple-900/50 block" />

                <div class="absolute -bottom-5 px-8 py-2 bg-white/60 backdrop-blur-[12px] rounded-full shadow-lg z-10">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-black">Environment Design</span>
                </div>
            </div>

            <div class="relative group w-full aspect-[4/3] flex items-center justify-center p-5 shadow-[0_4px_34px_0_#7953FF] transition-transform duration-300 hover:scale-105"
                style="background-image: url('{{ asset('assets/image/portfolio/Group 201.png') }}'); background-size: cover; background-position: center;" 
                data-aos="fade-up" data-aos-delay="200">
                
                <img src="{{ asset('assets/image/portfolio/prot5.png') }}" alt="VFX"
                    class="w-full h-full object-cover border border-purple-900/50 block" />

                <div class="absolute -bottom-5 px-8 py-2 bg-white/60 backdrop-blur-[12px] rounded-full shadow-lg z-10">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-black">VFX</span>
                </div>
            </div>

            <div class="relative group w-full aspect-[4/3] flex items-center justify-center p-5 shadow-[0_4px_34px_0_#7953FF] transition-transform duration-300 hover:scale-105"
                style="background-image: url('{{ asset('assets/image/portfolio/Group 201.png') }}'); background-size: cover; background-position: center;" 
                data-aos="fade-up" data-aos-delay="300">
                
                <img src="{{ asset('assets/image/portfolio/prot6.png') }}" alt="Rendering"
                    class="w-full h-full object-cover border border-purple-900/50 block" />

                <div class="absolute -bottom-5 px-8 py-2 bg-white/60 backdrop-blur-[12px] rounded-full shadow-lg z-10">
                    <span class="text-xs font-extrabold uppercase tracking-wider text-black">Rendering</span>
                </div>
            </div>

        </div>

        {{-- Load More Button --}}
        <div class="mt-20 flex justify-center items-center" data-aos="zoom-in">
            <a href="#"
                class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full text-white shadow-lg font-bold hover:scale-105 transition transform">
                <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                    <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="icon" />
                </div>
                Load more
            </a>
        </div>
    </div>
</section>



@endsection