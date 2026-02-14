<div class="container py-10 mx-auto w-full">
    <div class="text-center mb-10" data-aos="fade-down" data-aos-duration="1000">
        <h1 class="text-3xl md:text-5xl lg:text-7xl text-beiruti font-extrabold text-[#000000]">
            Got an exciting <span class="text-[#CF0037]">project in mind?</span>
        </h1>
        <p class="text-[#000000] mt-4 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            We thrive on creative challenges, and your project could be our next
            masterpiece. Let's work together to bring your vision to life through
            the magic of animation.
        </p>
    </div>

    {{-- Desktop Version --}}
    <div class="min-h-screen hidden py-40 2xl:py-0 relative lg:flex justify-center items-center bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('assets/image/home/XMLID_18.png') }}');" 
        data-aos="zoom-in" data-aos-duration="1200">
        
        <img src="{{ asset('assets/image/home/man01.png') }}" class="absolute bottom-12 2xl:bottom-7 left-48 w-[120px] 2xl:w-[150px]"
            alt="" data-aos="fade-right" data-aos-delay="500" />

        <div class="max-w-3xl relative mx-auto flex lg:flex-row gap-12 items-start">
            <div class="w-full lg:w-3/5 order-2 lg:order-1" data-aos="fade-right" data-aos-delay="300">
                <h2 class="text-4xl lg:text-6xl 2xl:text7xl font-bold mb-4 text-beiruti">
                    Let's <span class="text-[#CF0037]">Talk</span>
                </h2>
                <p class="text-[#000000] mb-8">
                    Our Animation Institute is a modern creative training center
                    dedicated to transforming passion into professional skills.
                </p>

                <form action="#" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Enter Name"
                            class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400" />
                        <input type="email" placeholder="Enter Email"
                            class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400" />
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <input id="phone" type="tel"
                                class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none" />
                        </div>
                        <select
                            class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white text-gray-400">
                            <option>Select Subject</option>
                            <option>2D Animation</option>
                            <option>3D Modeling</option>
                        </select>
                    </div>

                    <textarea rows="4" placeholder="Message"
                        class="w-full px-6 resize-none py-4 rounded-3xl border border-[#572BC6] shadow-[0_4px_24_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400"></textarea>

                    <div class="mt-20 flex justify-center items-center">
                        <button type="submit"
                            class="hidden relative md:flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full text-white shadow-lg font-bold hover:scale-105 transition transform"
                            data-aos="zoom-in-up" data-aos-delay="600">
                            <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                                <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                            </div>
                            SEND MESSAGE
                        </button>
                    </div>
                </form>
            </div>

            <div class="w-full lg:w-2/5 order-1 lg:order-2 flex flex-col items-center lg:items-start text-center lg:text-left"
                data-aos="fade-left" data-aos-delay="400">
                <div class="relative mb-10">
                    <img src="{{ asset('assets/image/home/Group 194.png') }}" alt="Support" class="w-full" />
                </div>

                <div class="space-y-6 text-beiruti">
                    <h3 class="text-2xl lg:text-4xl 2xl:text-5xl font-bold text-[#000000]">
                        Contact <span class="text-[#CF0037]">Information</span>
                    </h3>

                    <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="w-10 h-10 bg-[#FE3668] shrink-0 rounded-full flex justify-center items-center">
                            <img src="{{ asset('assets/image/footer/Group 26.png') }}" alt="" />
                        </div>
                        <p class="text-[#000000] text-xl">23/B Creative Avenue, Dhanmondi</p>
                    </div>
                    <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="w-10 h-10 bg-[#FE3668] shrink-0 rounded-full flex justify-center items-center">
                            <img src="{{ asset('assets/image/footer/Group 27.png') }}" alt="" />
                        </div>
                        <p class="text-[#000000] text-xl">7895698996</p>
                    </div>
                    <div class="flex items-center gap-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="w-10 h-10 bg-[#FE3668] shrink-0 rounded-full flex justify-center items-center">
                            <img src="{{ asset('assets/image/footer/Group 28.png') }}" alt="" />
                        </div>
                        <p class="text-[#000000] text-xl">infoanimation@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Mobile Version --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 px-4 lg:hidden">
        <div class="w-full lg:w-3/5 order-2 lg:order-1" data-aos="fade-up">
            <h2 class="text-4xl lg:text-6xl 2xl:text7xl font-bold mb-4 text-beiruti">
                Let's <span class="text-[#CF0037]">Talk</span>
            </h2>
            <p class="text-[#000000] mb-8">
                Our Animation Institute is a modern creative training center
                dedicated to transforming passion into professional skills.
            </p>

            <form action="#" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Enter Name"
                        class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400" />
                    <input type="email" placeholder="Enter Email"
                        class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400" />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <input id="phone-mobile" placeholder="Enter mobile number" type="tel"
                            class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none" />
                    </div>
                    <select
                        class="w-full px-6 py-3 rounded-full border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400 bg-white text-gray-400">
                        <option>Select Subject</option>
                        <option>2D Animation</option>
                        <option>3D Modeling</option>
                    </select>
                </div>

                <textarea rows="4" placeholder="Message"
                    class="w-full px-6 resize-none py-4 rounded-3xl border border-[#572BC6] shadow-[0_4px_24px_0_rgba(254,54,104,0.19)] focus:outline-none focus:ring-2 focus:ring-purple-400"></textarea>

                <div class="mt-20 flex justify-center items-center">
                    <button type="submit"
                        class="relative flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] text-xl pl-10 pr-6 py-3 rounded-full text-white shadow-lg font-bold hover:scale-105 transition transform">
                        <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                            <img src="{{ asset('assets/image/portfolio/Group 160.png') }}" class="w-6" alt="" />
                        </div>
                        SEND MESSAGE
                    </button>
                </div>
            </form>
        </div>

        <div class="w-full flex flex-col items-start text-left" data-aos="fade-up">
            <div class="space-y-6 text-beiruti">
                <h3 class="text-3xl lg:text-4xl 2xl:text-5xl font-bold text-[#000000]">
                    Contact <span class="text-[#CF0037]">Information</span>
                </h3>

                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#FE3668] shrink-0 rounded-full flex justify-center items-center">
                        <img src="{{ asset('assets/image/footer/Group 26.png') }}" alt="" />
                    </div>
                    <p class="text-[#000000] text-xl">23/B Creative Avenue, Dhanmondi</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#FE3668] shrink-0 rounded-full flex justify-center items-center">
                        <img src="{{ asset('assets/image/footer/Group 27.png') }}" alt="" />
                    </div>
                    <p class="text-[#000000] text-xl">7895698996</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-[#FE3668] shrink-0 rounded-full flex justify-center items-center">
                        <img src="{{ asset('assets/image/footer/Group 28.png') }}" alt="" />
                    </div>
                    <p class="text-[#000000] text-xl">infoanimation@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>