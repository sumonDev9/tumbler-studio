@extends('layouts.app')
@section('title', 'Forgot Password – Tumbler Studio')
@section('page_title', 'Forgot Password')
@section('breadcrumb', 'Forgot Password')

@section('content')

<div class="text-center mx-auto mb-8 max-w-md" data-aos="fade-down" data-aos-duration="1000">
    <h1 class="lg:text-5xl md:text-3xl text-xl text-black font-bold text-beiruti mb-4">
        Forgot Password?
    </h1>
    <p class="text-sm text-black leading-relaxed">
        No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </p>
</div>

<section class="relative py-28 bg-[rgba(255,105,33,0.07)] overflow-hidden">
    {{-- Decorative Images --}}
    <img src="{{ asset('assets/image/service/Frame.png') }}" class="absolute z-0 -top-9 w-full" alt="" />
    
    <img class="absolute bottom-0 w-full z-10" src="{{ asset('assets/image/service/top.png') }}" alt=""
        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" />

    <div class="container mx-auto px-4 relative z-10 flex flex-col items-center">
        
        {{-- Session Status Message (Reset Link Sent) --}}
        @if (session('status'))
            <div id="status-alert" class="w-full max-w-lg mb-6 p-4 rounded-xl bg-green-50 border-l-4 border-green-500 text-green-700 text-center shadow-sm transition-opacity duration-500" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div id="error-alert" class="w-full max-w-lg mb-6 p-4 rounded-xl bg-red-50 border-l-4 border-red-500 text-red-700 shadow-sm transition-opacity duration-500" role="alert">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
            </div>
        @endif

        {{-- Mascot Image --}}
        <div class="relative z-30 -mb-12 md:-mb-16 mx-auto w-48 md:w-72 lg:w-80 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="300">
            <img class="w-full h-auto object-contain mx-auto" src="{{ asset('assets/image/login/owl.png') }}" alt="Mascot" />
        </div>

        {{-- Form Box --}}
        <div class="form-bg mx-auto border-2 border-purple-200 rounded-[40px] shadow-xl p-8 pt-16 w-full max-w-lg relative overflow-hidden"
            style="background-image: url('{{ asset('assets/image/login/Rectangle 234.png') }}'); background-position: center; background-repeat: no-repeat;"
            data-aos="fade-up" data-aos-delay="500">
            
            <form action="{{ route('password.email') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Email Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-regular fa-envelope text-xl"></i>
                    </span>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter Your Email Address" required autofocus
                        class="w-full py-4 pl-12 pr-4 bg-white border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 shadow-sm transition-all" />
                </div>

                {{-- Submit Button --}}
                <div class="mt-8 flex justify-center">
                    <button type="submit"
                        class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3 uppercase">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="icon" />
                        </div>
                        Send Reset Link
                    </button>
                </div>
            </form>

            {{-- Back to Login --}}
            <div class="mt-8 text-center border-t border-purple-100 pt-6">
                <p class="text-sm text-gray-600">
                    Remembered your password? 
                    <a href="{{ route('login') }}" class="font-bold text-purple-600 hover:underline transition-all">
                        Back to Login
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Timeout Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
    
        setTimeout(function() {
            const statusAlert = document.getElementById('status-alert');
            const errorAlert = document.getElementById('error-alert');

            if (statusAlert) {
                statusAlert.style.opacity = '0';
                setTimeout(() => statusAlert.remove(), 500); 
            }

            if (errorAlert) {
                errorAlert.style.opacity = '0';
                setTimeout(() => errorAlert.remove(), 500); 
            }
        }, 5000);
    });
</script>

@endsection