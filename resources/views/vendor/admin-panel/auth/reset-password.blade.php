@extends('layouts.app')
@section('title', 'Reset Password – Tumbler Studio')
@section('page_title', 'Reset Password')
@section('breadcrumb', 'Reset Password')

@section('content')

<div class="text-center mx-auto mb-8 max-w-md" data-aos="fade-down" data-aos-duration="1000">
    <h1 class="lg:text-5xl md:text-3xl text-xl text-black font-bold text-beiruti mb-4">
        Reset Password
    </h1>
    <p class="text-sm text-black leading-relaxed">
        Please enter your new password below. Make sure it's a strong one to keep your account secure!
    </p>
</div>

<section class="relative py-28 bg-[rgba(255,105,33,0.07)] overflow-hidden">
    {{-- Decorative Images --}}
    <img src="{{ asset('assets/image/service/Frame.png') }}" class="absolute z-0 -top-9 w-full" alt="" />
    
    <img class="absolute bottom-0 w-full z-10" src="{{ asset('assets/image/service/top.png') }}" alt=""
        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" />

    <div class="container mx-auto px-4 relative z-10 flex flex-col items-center">
        
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
            
            <form action="{{ route('password.update') }}" method="POST" class="space-y-5">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                {{-- Email Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-regular fa-envelope text-xl"></i>
                    </span>
                    <input type="email" name="email" id="email" value="{{ old('email', $request->email) }}" placeholder="Email Address" required readonly
                        class="w-full py-4 pl-12 pr-4 bg-gray-50 border border-gray-200 rounded-full focus:outline-none cursor-not-allowed shadow-sm" />
                </div>

                {{-- New Password Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-solid fa-lock text-xl"></i>
                    </span>
                    <input type="password" name="password" id="password" placeholder="Enter New Password" required
                        class="w-full py-4 pl-12 pr-12 bg-white border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 shadow-sm transition-all" />
                    
                    <button type="button" onclick="toggleField('password', 'toggleIcon1')" class="absolute inset-y-0 right-0 flex items-center pr-5 text-gray-400 hover:text-purple-500">
                        <i id="toggleIcon1" class="fa-regular fa-eye-slash text-lg"></i>
                    </button>
                </div>

                {{-- Confirm Password Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-solid fa-shield-halved text-xl"></i>
                    </span>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" required
                        class="w-full py-4 pl-12 pr-12 bg-white border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 shadow-sm transition-all" />
                    
                    <button type="button" onclick="toggleField('password_confirmation', 'toggleIcon2')" class="absolute inset-y-0 right-0 flex items-center pr-5 text-gray-400 hover:text-purple-500">
                        <i id="toggleIcon2" class="fa-regular fa-eye-slash text-lg"></i>
                    </button>
                </div>

                {{-- Submit Button --}}
                <div class="mt-8 flex justify-center">
                    <button type="submit"
                        class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3 uppercase">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="icon" />
                        </div>
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

{{-- Scripts --}}
<script>
    // Password Toggle Function
    function toggleField(inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);
        
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        } else {
            input.type = 'password';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        }
    }

    // Timeout Alert
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                errorAlert.style.opacity = '0';
                setTimeout(() => errorAlert.remove(), 500);
            }
        }, 5000);
    });
</script>

@endsection