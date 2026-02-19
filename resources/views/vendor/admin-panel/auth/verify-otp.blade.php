@extends('layouts.app')
@section('title', 'Verify OTP – Tumbler Studio')
@section('page_title', 'Verify OTP')
@section('breadcrumb', 'Verify OTP')

@section('content')

<div class="text-center mx-auto mb-8 max-w-md" data-aos="fade-down" data-aos-duration="1000">
    <h1 class="lg:text-5xl md:text-3xl text-xl text-black font-bold text-beiruti mb-4">
        Verify OTP
    </h1>
    <p class="text-base text-black leading-relaxed">
        We've sent a 6-digit security code to your email: <br>
        <strong class="text-purple-600">{{ session('otp_email') }}</strong>
    </p>
</div>

<section class="relative py-28 bg-[rgba(255,105,33,0.07)] overflow-hidden">
    {{-- Decorative Images --}}
    <img src="{{ asset('assets/image/service/Frame.png') }}" class="absolute z-0 -top-9 w-full" alt="" />
    
    <img class="absolute bottom-0 w-full z-10" src="{{ asset('assets/image/service/top.png') }}" alt=""
        data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" />

    <div class="container mx-auto px-4 relative z-10 flex flex-col items-center">
        
        {{-- Success/Error Messages --}}
        <div id="resend-success" class="hidden w-full max-w-lg mb-6 p-4 rounded-xl bg-green-50 border-l-4 border-green-500 text-green-700 text-center shadow-sm">
            New OTP sent successfully!
        </div>

        @if ($errors->any())
            <div class="w-full max-w-lg mb-6 p-4 rounded-xl bg-red-50 border-l-4 border-red-500 text-red-700 shadow-sm">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
            </div>
        @endif

        {{-- Mascot Image (Login owl used for consistency) --}}
        <div class="relative z-30 -mb-12 md:-mb-16 mx-auto w-48 md:w-72 lg:w-80 transition-all duration-300"
            data-aos="zoom-in" data-aos-delay="300">
            <img class="w-full h-auto object-contain mx-auto" src="{{ asset('assets/image/login/owl.png') }}" alt="Mascot" />
        </div>

        {{-- Form Box --}}
        <div class="form-bg mx-auto border-2 border-purple-200 rounded-[40px] shadow-xl p-8 pt-16 w-full max-w-lg relative overflow-hidden"
            style="background-image: url('{{ asset('assets/image/login/Rectangle 234.png') }}'); background-position: center; background-repeat: no-repeat;"
            data-aos="fade-up" data-aos-delay="500">
            
            <form class="space-y-8" method="POST" action="{{ route('otp.verify') }}">
                @csrf
                
                <div class="text-center">
                    <label for="otp" class="block text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">
                        Enter 6-Digit Code
                    </label>
                    <div class="relative">
                        <input id="otp" name="otp" type="text" inputmode="numeric" maxlength="6" required autofocus
                            class="w-full py-5 px-4 bg-white border-2 border-purple-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-400 text-center text-4xl font-bold tracking-[0.75rem] md:tracking-[1.2rem] text-purple-700 shadow-inner transition-all"
                            placeholder="******">
                    </div>
                </div>

                {{-- Verify Button --}}
                <div class="flex justify-center">
                    <button type="submit"
                        class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-10 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="icon" />
                        </div>
                        VERIFY & LOGIN
                    </button>
                </div>
            </form>

            {{-- Timer & Resend Section --}}
            <div class="mt-8 text-center border-t border-purple-100 pt-6">
                <p class="text-sm text-gray-600">
                    Didn't receive code? 
                    <span id="timer-container" class="font-bold text-purple-600">
                        Resend in <span id="timer" class="font-mono">02:00</span>
                    </span>
                    
                    <a href="#" id="resend-link" class="hidden font-bold text-[#E60045] hover:underline transition-all">
                        Resend OTP
                    </a>
                    
                    <span id="sending-msg" class="hidden text-gray-500 italic animate-pulse">
                        <i class="fa-solid fa-paper-plane mr-1"></i> Sending...
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    let timeLeft = 120; // 2 minutes
    const timerEl = document.getElementById('timer');
    const timerContainer = document.getElementById('timer-container');
    const resendLink = document.getElementById('resend-link');
    const sendingMsg = document.getElementById('sending-msg');
    const successMsg = document.getElementById('resend-success');
    let timerId;

    function formatTime(seconds) {
        const m = Math.floor(seconds / 60);
        const s = seconds % 60;
        return `${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
    }

    function startTimer() {
        timeLeft = 120;
        timerEl.textContent = formatTime(timeLeft);
        timerContainer.classList.remove('hidden');
        resendLink.classList.add('hidden');

        clearInterval(timerId);
        timerId = setInterval(() => {
            timeLeft--;
            timerEl.textContent = formatTime(timeLeft);

            if (timeLeft <= 0) {
                clearInterval(timerId);
                timerContainer.classList.add('hidden');
                resendLink.classList.remove('hidden');
            }
        }, 1000);
    }

    // Start timer on page load
    startTimer();

    resendLink.addEventListener('click', async (e) => {
        e.preventDefault();

        resendLink.classList.add('hidden');
        sendingMsg.classList.remove('hidden');
        successMsg.classList.add('hidden');

        try {
            const response = await fetch("{{ route('otp.resend') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            if (response.ok) {
                successMsg.classList.remove('hidden');
                sendingMsg.classList.add('hidden');
                startTimer();
            } else {
                alert('Failed to resend OTP. Please try again.');
                resendLink.classList.remove('hidden');
                sendingMsg.classList.add('hidden');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Something went wrong. Please check your connection.');
            resendLink.classList.remove('hidden');
            sendingMsg.classList.add('hidden');
        }
    });

    // Auto-focus logic for better UX
    const otpInput = document.getElementById('otp');
    otpInput.addEventListener('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

<style>
    /* Custom spacing for the OTP characters */
    #otp::placeholder {
        letter-spacing: normal;
        font-size: 1.5rem;
        color: #d1d5db;
        opacity: 0.5;
    }
    
    input#otp:focus {
        border-color: #c084fc;
        background-color: #fff;
    }
</style>

@endsection