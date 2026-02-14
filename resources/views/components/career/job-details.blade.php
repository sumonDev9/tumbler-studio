<section class="bg-white py-5 lg:pt-5 lg:pb-10 px-6 relative overflow-hidden">
    <img src="{{ asset('assets/image/home/top.png') }}" 
         class="absolute -bottom-5 right-0 w-[150px] hidden lg:block" 
         alt="" 
         data-aos="fade-left" 
         data-aos-duration="1000">

    <div class="container mx-auto">
        <div class="w-full pb-10 text-center relative">
            <h1 class="text-3xl md:text-7xl text-beiruti lg:text-8xl font-black text-[#5628D2] tracking-widest uppercase drop-shadow-sm mb-6"
                data-aos="zoom-in" 
                data-aos-duration="1000">
                3 D ANIMATOR
            </h1>

            <p class="text-lg md:text-2xl text-black font-semibold max-w-4xl mx-auto leading-relaxed px-4"
               data-aos="fade-up" 
               data-aos-delay="200">
                We are looking for dynamic 3D animators, who are confident to
                animate human and animal characters for feature film and tv series.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-16">
            <div class="flex-shrink-0" data-aos="fade-right" data-aos-duration="1200">
                <img class="w-48 h-48 md:w-64 md:h-64 lg:w-[342px] lg:h-[342px] object-contain mx-auto"
                     src="{{ asset('assets/image/home/image 13.png') }}" 
                     alt="Character" />
            </div>

            <div class="w-full">
                <h2 class="text-3xl text-beiruti md:text-5xl font-bold text-[#D10034] mb-8 text-center lg:text-left"
                    data-aos="fade-left" 
                    data-aos-delay="300">
                    Superpowers you have are-
                </h2>

                <ul class="space-y-4 md:space-y-5 text-lg md:text-xl font-bold text-black">
                    @php
                        $requirements = [
                            'Should have excellent knowledge of body anatomy.',
                            'Should know the physics applied in animation.',
                            'Able to react quickly and strong vision to analyze the storyboard to transform it into animation.',
                            'A good team player to meet the quality and schedule of delivery.',
                            'Knowledge of software - "Autodesk Maya" is a must.'
                        ];
                    @endphp

                    @foreach($requirements as $index => $requirement)
                        <li class="flex items-start gap-4" 
                            data-aos="fade-left" 
                            data-aos-delay="{{ 400 + ($index * 100) }}">
                            <img src="{{ asset('assets/image/home/Group 201.png') }}" 
                                 alt="tick"
                                 class="w-5 h-5 mt-1 flex-shrink-0 object-contain" />
                            <span>{{ $requirement }}</span>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-10 md:mt-12 flex justify-center lg:justify-start" 
                     data-aos="zoom-in-up" 
                     data-aos-delay="900">
                    <button class="group bg-gradient-to-r from-[#FF3B6B] to-[#E60045] text-white px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 flex items-center gap-3">
                        <div class="bg-white/80 p-1.5 rounded-full">
                            <img src="{{ asset('assets/image/home/Group 38.png') }}" alt="" />
                        </div>
                        APPLY NOW
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>