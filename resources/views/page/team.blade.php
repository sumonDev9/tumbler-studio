@extends('layouts.app')
@section('title', 'Tumbler Studio – Team')
@section('page_title', 'Team')
@section('breadcrumb', 'Team')
@section('hero_image', asset('assets/image/team/image 26.png'))
@section('content')

<section class="pb -10 relative">
    <img src="{{ asset('assets/image/team/Frame (1).png') }}" class="absolute bottom-0 left-0 hidden lg:block" alt="">
    <img src="{{ asset('assets/image/team/Frame (2).png') }}" class="absolute bottom-0 right-0 hidden lg:block" alt="">
    <img src="{{ asset('assets/image/home/triangle.png') }}" class="absolute w-32 top-0 right-20 hidden lg:block" alt="">
    <div class="text-center px-4 2xl:px-0">
          <h2 class="text-2xl lg:text-6xl md:text-4xl text-beiruti font-extrabold text-black mb-4" 
            data-aos="fade-down" data-aos-duration="1000">
            Our <span class="text-[#CF0037]">Team</span>
        </h2>
    </div>

    <div class="container mx-auto px-4 py-16">
    <div class="flex flex-wrap justify-center gap-y-16 gap-x-8">

        <div class="flex flex-col items-center w-full sm:w-[45%] lg:w-[30%] max-w-[340px]">
            <div class="relative">
                <div class="relative  border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                    <img src="{{ asset('assets/image/team/profile1.png') }}" alt="Name" class="w-full h-full object-cover border-2 border-[#59D5F3]">
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

         <div class="flex flex-col items-center w-full sm:w-[45%] lg:w-[30%] max-w-[340px]">
            <div class="relative">
                <div class="relative  border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                    <img src="{{ asset('assets/image/team/profile2.png') }}" alt="Name" class="w-full h-full object-cover border-2 border-[#59D5F3]">
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

           <div class="flex flex-col items-center w-full sm:w-[45%] lg:w-[30%] max-w-[340px]">
            <div class="relative">
                <div class="relative  border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                    <img src="{{ asset('assets/image/team/profile3.png') }}" alt="Name" class="w-full h-full object-cover border-2 border-[#59D5F3]">
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

        <div class="flex flex-col items-center w-full sm:w-[45%] lg:w-[30%] max-w-[340px]">
            <div class="relative">
                <div class="relative  border-[10px] rounded-[37px] border-[#4D59C9] bg-white shadow-xl">
                <div class="aspect-[3/4] overflow-hidden rounded-[1.8rem]">
                    <img src="{{ asset('assets/image/team/profile4.png') }}" alt="Name" class="w-full h-full object-cover border-2 border-[#59D5F3]">
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
</div>


</section>

@endsection