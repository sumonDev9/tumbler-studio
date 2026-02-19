@extends('layouts.app')
@section('title', 'Tumbler Studio – Login')
@section('page_title', 'Login')
@section('breadcrumb', 'Login')

@section('content')




<div class="text-center mx-auto mb-8 max-w-md" data-aos="fade-down" data-aos-duration="1000">
    <h1 class="lg:text-5xl md:text-3xl text-xl text-black font-bold text-beiruti mb-4">
        Sign in
    </h1>
    <p class="text-sm text-black leading-relaxed">
        We thrive on creative challenges, and your project could be our next
        masterpiece. Let's work together to bring your vision to life through
        the magic of animation.
    </p>
</div>

<section class="relative py-28 bg-[rgba(255,105,33,0.07)] overflow-hidden">
    {{-- Decorative Images --}}
    <img src="{{ asset('assets/image/service/Frame.png') }}" class="absolute z-0 -top-9 w-full" alt="" />
    <img src="{{ asset('assets/image/home/Frame (3).png') }}" class="absolute top-10 right-10 w-[150px] hidden lg:block" alt="" />

    <img class="absolute bottom-0 w-full z-10" src="{{ asset('assets/image/service/top.png') }}" alt=""
        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" />

    <div class="container mx-auto px-4 relative z-10 flex flex-col items-center">
        {{-- Mascot Image --}}
        <div class="relative z-30 -mb-12 md:-mb-16 mx-auto w-48 md:w-72 lg:w-80 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="300">
            <img class="w-full h-auto object-contain mx-auto" src="{{ asset('assets/image/login/owl.png') }}"
                alt="Owl" />
        </div>

        {{-- Form Box --}}
        <div class="form-bg mx-auto border-2 border-purple-200 rounded-[40px] shadow-xl p-8 pt-16 w-full max-w-lg relative overflow-hidden"
            style="background-image: url('{{ asset('assets/image/login/Rectangle 234.png') }}'); background-position: center; background-repeat: no-repeat;"
            data-aos="fade-up" data-aos-delay="500">
            
            <form action="#" method="POST" class="space-y-6">
                {{-- Email Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-regular fa-user text-xl"></i>
                    </span>
                    <input type="email" name="email" placeholder="Enter Your Email" required
                        class="w-full py-4 pl-12 pr-4 bg-white border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 shadow-sm transition-all" />
                </div>

                {{-- Password Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-solid fa-lock text-xl"></i>
                    </span>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password" required
                        class="w-full py-4 pl-12 pr-12 bg-white border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 shadow-sm transition-all" />
                    
                    <button type="button" onclick="togglePassword()"
                        class="absolute inset-y-0 right-0 flex items-center pr-5 text-gray-400 hover:text-purple-500">
                        <i id="toggleIcon" class="fa-regular fa-eye-slash text-lg"></i>
                    </button>
                </div>

                <div class="text-right pr-4">
                    <a href="#" class="text-sm font-semibold text-gray-800 hover:underline">Forgot Password</a>
                </div>

                {{-- Login Button --}}
                <div class="mt-10 md:mt-12 flex justify-center">
                    <button type="submit"
                        class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="icon" />
                        </div>
                        LOGIN NOW
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>





@endsection