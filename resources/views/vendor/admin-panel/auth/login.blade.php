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
        
        {{-- Global Error Container --}}
        <div id="global-error" class="hidden w-full max-w-lg mb-6 p-4 rounded-xl bg-red-50 border-l-4 border-red-500 shadow-sm transition-all duration-300">
            <div class="flex items-center mb-2">
                <svg class="w-5 h-5 text-red-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                </svg>
                <span class="font-bold text-red-800">Login Failed</span>
            </div>
            <p id="global-error-text" class="text-sm text-red-600"></p>
        </div>

        {{-- Lockout Box --}}
        <div id="lockout-box" class="hidden w-full max-w-lg relative overflow-hidden bg-red-600 text-white rounded-2xl shadow-2xl p-6 text-center mb-6 animate-pulse z-50">
            <div class="relative z-10">
                <div class="text-xs uppercase font-bold tracking-widest opacity-90 mb-2">Security Lockout</div>
                <div class="text-5xl font-black tabular-nums tracking-tighter" id="lockout-timer">0</div>
                <div class="text-xs mt-2 font-medium opacity-90">Seconds remaining</div>
                <p class="text-[10px] mt-4 opacity-75">Too many incorrect attempts. Detector triggered.</p>
            </div>
        </div>

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
            
            {{-- Loading Overlay --}}
            <div id="loading-overlay" class="hidden absolute inset-0 bg-white/70 backdrop-blur-[2px] z-50 flex flex-col items-center justify-center rounded-[40px]">
                <div class="w-10 h-10 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
                <p class="mt-3 text-xs font-bold text-purple-600 animate-pulse">Authenticating...</p>
            </div>

            <form action="{{ route('login') }}" method="POST" id="login-form" class="space-y-6">
                @csrf
                {{-- Email Field --}}
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-purple-500">
                        <i class="fa-regular fa-user text-xl"></i>
                    </span>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" required
                        class="w-full py-4 pl-12 pr-4 bg-white border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 shadow-sm transition-all" />
                    <p class="input-error text-xs text-red-500 mt-1 ml-4 hidden" id="error-email"></p>
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
                    <p class="input-error text-xs text-red-500 mt-1 ml-4 hidden" id="error-password"></p>
                </div>

                {{-- Captcha Field (New) --}}
                <div class="bg-purple-50/50 p-4 rounded-3xl border border-purple-100 shadow-inner">
                    <div class="flex flex-col space-y-3">
                        <div class="flex items-center gap-2 bg-white p-2 rounded-full border border-purple-200">
                            <div class="flex-1 flex justify-center py-1">
                                <img src="{{ route('captcha.generate') }}" id="captcha-img" class="h-10 object-contain" style="min-width: 120px;">
                            </div>
                            <button type="button" onclick="refreshCaptcha()" class="p-2 bg-gray-100 hover:bg-purple-500 hover:text-white rounded-full transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                </svg>
                            </button>
                        </div>
                        <input type="text" name="captcha" id="captcha" placeholder="Enter Security Code" required
                            class="block w-full px-4 py-3 border border-gray-200 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-400 text-center text-lg font-mono tracking-widest bg-white">
                    </div>
                    <p class="input-error text-xs text-red-500 mt-1 hidden text-center" id="error-captcha"></p>
                </div>

                <div class="flex justify-between items-center px-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-purple-600 focus:ring-purple-500">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-800 hover:underline">Forgot Password</a>
                    @endif
                </div>

                {{-- Login Button --}}
                <div class="mt-8 flex justify-center">
                    <button type="submit" id="submit-btn"
                        class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="icon" />
                        </div>
                        <span id="btn-text">LOGIN NOW</span>
                    </button>
                </div>

                        <p class="mt-8 text-center text-sm text-gray-600 relative z-20">
            Not a member? 
            <a href="{{ route('register') }}" class="font-bold text-purple-600 hover:underline">Register now</a>
        </p>
            </form>
        </div>

    </div>
</section>

<script>
    // Password Toggle
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('toggleIcon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        } else {
            passwordInput.type = 'password';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        }
    }

    // Refresh Captcha
    function refreshCaptcha() {
        const img = document.getElementById('captcha-img');
        img.style.opacity = '0.5';
        img.src = '{{ route("captcha.generate") }}?' + Math.random();
        const captchaInput = document.getElementById('captcha');
        if (captchaInput) captchaInput.value = '';
        img.onload = () => img.style.opacity = '1';
    }

    // AJAX Login Logic
    document.getElementById('login-form').addEventListener('submit', async function (e) {
        e.preventDefault();

        const form = this;
        const submitBtn = document.getElementById('submit-btn');
        const loadingOverlay = document.getElementById('loading-overlay');
        const globalError = document.getElementById('global-error');
        const globalErrorText = document.getElementById('global-error-text');

        // Reset UI
        loadingOverlay.classList.remove('hidden');
        submitBtn.disabled = true;
        globalError.classList.add('hidden');
        document.querySelectorAll('.input-error').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('input').forEach(el => el.classList.remove('border-red-500'));

        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch("{{ route('login') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (response.ok) {
                window.location.href = result.redirect_url || '/dashboard';
            } else if (response.status === 422) {
                loadingOverlay.classList.add('hidden');
                submitBtn.disabled = false;
                refreshCaptcha();

                if (result.errors.seconds_left) {
                    startLockout(result.errors.seconds_left[0] || result.errors.seconds_left);
                    return;
                }

                if (result.errors) {
                    for (const [key, messages] of Object.entries(result.errors)) {
                        const errorEl = document.getElementById(`error-${key}`);
                        const inputEl = document.getElementById(key);
                        if (errorEl) {
                            errorEl.textContent = messages[0];
                            errorEl.classList.remove('hidden');
                        }
                        if (inputEl) {
                            inputEl.classList.add('border-red-500', 'shake');
                            setTimeout(() => inputEl.classList.remove('shake'), 500);
                        }
                    }
                }

                if (!result.errors || Object.keys(result.errors).length === 0) {
                    showGlobalError(result.message || 'Login failed. Please check your credentials.');
                }

            } else if (response.status === 429) {
                loadingOverlay.classList.add('hidden');
                const retryAfter = response.headers.get('Retry-After');
                startLockout(retryAfter || 60);
            } else {
                throw new Error(result.message || 'Something went wrong.');
            }
        } catch (error) {
            loadingOverlay.classList.add('hidden');
            submitBtn.disabled = false;
            showGlobalError("Unable to connect to the server. Please check your connection.");
        }
    });

    function showGlobalError(msg) {
        const globalError = document.getElementById('global-error');
        const globalErrorText = document.getElementById('global-error-text');
        globalErrorText.textContent = msg;
        globalError.classList.remove('hidden');
        globalError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function startLockout(seconds) {
        const lockoutBox = document.getElementById('lockout-box');
        const lockoutTimer = document.getElementById('lockout-timer');
        const form = document.getElementById('login-form');
        const submitBtn = document.getElementById('submit-btn');

        lockoutBox.classList.remove('hidden');
        form.classList.add('opacity-50', 'pointer-events-none');
        submitBtn.disabled = true;

        let timeLeft = parseInt(seconds);
        lockoutTimer.innerText = timeLeft;

        const countdown = setInterval(() => {
            timeLeft--;
            lockoutTimer.innerText = timeLeft;
            if (timeLeft <= 0) {
                clearInterval(countdown);
                lockoutBox.classList.add('hidden');
                form.classList.remove('opacity-50', 'pointer-events-none');
                submitBtn.disabled = false;
                refreshCaptcha();
            }
        }, 1000);
    }
</script>

<style>
    .shake { animation: shake 0.5s cubic-bezier(.36, .07, .19, .97) both; }
    @keyframes shake {
        10%, 90% { transform: translate3d(-1px, 0, 0); }
        20%, 80% { transform: translate3d(2px, 0, 0); }
        30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
        40%, 60% { transform: translate3d(4px, 0, 0); }
    }
    input::placeholder { color: #9ca3af; font-size: 0.9rem; }
</style>

@endsection