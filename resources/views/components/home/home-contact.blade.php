<section class="relative flex items-center justify-center py-12 overflow-hidden">

    <div class="absolute top-0 left-0 h-full -z-10" data-aos="fade-right" data-aos-duration="1200">
        <img src="{{ asset('assets/image/home/leftsidee.png') }}" alt="Shape" class="w-full h-full object-cover object-left">
    </div>

    <div class="container px-4 2xl:px-0 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative">

        <div class="bg-[#5C33CF] rounded-[40px] p-8 md:p-12 shadow-2xl relative z-10 w-full max-w-2xl mx-auto lg:ml-0" 
            data-aos="fade-up" data-aos-duration="1000">
            
            <h2 class="text-white text-3xl md:text-4xl font-bold mb-8">
                Get In <span class="text-[#FF0055]">Touch</span>
            </h2>

            <form action="#" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Enter Name"
                        class="w-full px-6 py-4 rounded-full bg-white text-gray-700 focus:outline-none shadow-inner">
                    <input type="email" placeholder="Enter Email"
                        class="w-full px-6 py-4 rounded-full bg-white text-gray-700 focus:outline-none shadow-inner">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Enter Phone Number"
                        class="w-full px-6 py-4 rounded-full bg-white text-gray-700 focus:outline-none shadow-inner">
                    <select
                        class="w-full px-6 py-4 rounded-full bg-white text-gray-400 focus:outline-none shadow-inner appearance-none">
                        <option>Select Subject</option>
                        <option>Web Design</option>
                        <option>Development</option>
                    </select>
                </div>

                <textarea placeholder="Message" rows="4"
                    class="w-full px-6 py-4 rounded-[30px] bg-white text-gray-700 focus:outline-none shadow-inner resize-none"></textarea>

                <div class="flex justify-center md:justify-start">
                    <button type="submit"
                        class="relative text-white flex items-center gap-2 bg-gradient-to-b from-[#FE3668] to-[#CF0037] pl-10 pr-6 py-3 rounded-full shadow-lg font-bold hover:scale-105 transition transform">
                        <div class="bg-white border-4 border-[#FE3668] absolute -left-2 w-10 h-10 flex justify-center items-center rounded-full">
                            <img src="{{ asset('assets/image/home/Group 1.png') }}" alt="" />
                        </div>
                        SEND MESSAGE
                    </button>
                </div>
            </form>
        </div>

        <div class="relative flex justify-center items-end lg:h-full" data-aos="fade-left" data-aos-duration="1200">
            <div class="w-full max-w-[400px] lg:max-w-full">
                <img src="{{ asset('assets/image/home/putul11.png') }}" alt="Character" class="w-full h-auto object-contain">
            </div>
        </div>

    </div>
</section>