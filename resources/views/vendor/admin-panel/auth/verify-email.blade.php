@extends('layouts.app')
@section('title', 'Verify Email – Tumbler Studio')
@section('page_title', 'Verify Email')
@section('breadcrumb', 'Verify Email')

@section('content')

<div class="text-center mx-auto mb-8 max-w-md" data-aos="fade-down" data-aos-duration="1000">
    <h1 class="lg:text-5xl md:text-3xl text-xl text-black font-bold text-beiruti mb-4">
        Verify Email
    </h1>
    <p class="text-sm text-black leading-relaxed">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
    </p>
</div>

<section class="relative py-28 bg-[rgba(255,105,33,0.07)] overflow-hidden">
    {{-- Decorative Images --}}
    <img src="{{ asset('assets/image/service/Frame.png') }}" class="absolute z-0 -top-9 w-full" alt="" />
    
    <img class="absolute bottom-0 w-full z-10" src="{{ asset('assets/image/service/top.png') }}" alt=""
        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" />

    <div class="container mx-auto px-4 relative z-10 flex flex-col items-center">
        
        {{-- Success Message (Resend Link Sent) --}}
        @if (session('status') == 'verification-link-sent')
            <div id="status-alert" class="w-full max-w-lg mb-6 p-4 rounded-xl bg-green-50 border-l-4 border-green-500 text-green-700 text-center shadow-sm transition-opacity duration-500" role="alert">
                A new verification link has been sent to your email address.
            </div>
        @endif

        {{-- Mascot Image --}}
        <div class="relative z-30 -mb-12 md:-mb-16 mx-auto w-48 md:w-72 lg:w-80 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="300">
            <img class="w-full h-auto object-contain mx-auto" src="{{ asset('assets/image/login/owl.png') }}" alt="Mascot" />
        </div>

        {{-- Form Box --}}
        <div class="form-bg mx-auto border-2 border-purple-200 rounded-[40px] shadow-xl p-8 pt-16 w-full max-w-lg relative overflow-hidden text-center"
            style="background-image: url('{{ asset('assets/image/login/Rectangle 234.png') }}'); background-position: center; background-repeat: no-repeat;"
            data-aos="fade-up" data-aos-delay="500">
            
            <p class="text-gray-600 mb-8 px-4">
                If you didn't receive the email, we will gladly send you another.
            </p>

            <div class="flex flex-col gap-6 items-center">
                {{-- Resend Button Form --}}
                <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                    @csrf
                    <button type="submit"
                        class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3 mx-auto uppercase">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="icon" />
                        </div>
                        Resend Verification Email
                    </button>
                </form>

                {{-- Logout Form --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-bold text-purple-600 hover:text-purple-800 underline transition-all">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Timeout Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const statusAlert = document.getElementById('status-alert');
            if (statusAlert) {
                statusAlert.style.opacity = '0';
                setTimeout(() => statusAlert.remove(), 500);
            }
        }, 5000);
    });
</script>

@endsection