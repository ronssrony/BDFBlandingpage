
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        .scroll-to-top:hover {
            background-color: #333;
        }

        /* Hide scroll button on mobile devices */
        @media (max-width: 768px) {
            .scroll-to-top {
                display: none !important;
            }
        }

        @media (max-width: 640px) {
            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }
    </style>


    <!-- Hero Section -->
    <div id="contact" class="pt-20">
        <section class="bg-[#1565CE] mx-auto w-full text-white rounded-xl py-8 md:py-10 sm:rounded-lg relative">
            <div class="container px-4 md:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-10 z-10">
                    <img src="images\mask.png" alt="Mask-Top" class="absolute top-0 right-0 w-40 md:block z-0">

                    <!-- Text content -->
                    <div class="sm:text-center md:w-1/2">
                        <h2 class="text-[24px] md:text-2xl  text-left font-semibold mb-2">{{ __('footer.subtitle') }}
                        </h2>
                        <h1 class="text-[40px] md:text-5xl text-left sm:text-6xl font-bold">{{ __('footer.title') }}
                        </h1>
                    </div>

                    <!-- Form and button section -->
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                        <div class="flex flex-col sm:flex-row items-center gap-3 max-w-md w-full">
                            <!-- Email input field -->
                            <div class="bg-white rounded-full flex items-center w-full overflow-hidden">
                                <div class="flex items-center w-full px-4">
                                    <i class="ri-mail-line text-gray-400 mr-2"></i>
                                    <input type="email" placeholder="{{ __('footer.email') }}"
                                        class="w-full py-4 px-2 outline-none text-gray-700" />
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button
                                class="bg-[#FF9442] hover:bg-orange-500 text-white font-medium px-8 py-4 rounded-full transition duration-200 ">
                                {{ __('footer.button') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="py-12 border-b">
            <div class="container mx-auto px-4 md:px-8">
                <div class="flex flex-col md:flex-row items-center gap-6">
                    <div class="w-full md:w-1/4">
                        <img src="/images/bfb_logo.png" alt="BD Funnel Builder Logo" class="w-48  md:mx-0">
                    </div>
                    <div class="w-full md:w-1/2">
                        <p class="text-[#0B0B0B] text-left md:text-left text-[16px] leading-relaxed">
                            {{ __('footer.description') }}
                        </p>
                    </div>

                    <!-- Social Media Icons -->
                    <div class=" flex justify-center md:justify-end mt-4 md:mt-0 space-x-4">
                        <a href="#" class="media_circle hover:bg-blue-100 ">
                            <i class="ri-facebook-fill text-2xl"></i>
                        </a>
                        <a href="#" class="media_circle hover:bg-blue-100 ">
                            <i class="ri-linkedin-fill text-2xl"></i>
                        </a>
                        <a href="#" class="media_circle hover:bg-blue-100 ">
                            <i class="ri-instagram-line text-2xl"></i>
                        </a>
                        <a href="#" class="media_circle hover:bg-blue-100 ">
                            <i class="ri-whatsapp-line text-2xl"></i>
                        </a>
                        <a href="#" class="media_circle hover:bg-blue-100 ">
                            <i class="ri-telegram-2-fill text-2xl"></i>
                        </a>
                        <a href="#" class="media_circle hover:bg-blue-100 ">
                            <i class="ri-youtube-fill text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-12">
            <div class="container mx-auto px-4 md:px-8 max-w-7xl">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 text-left">
                    <div class="flex items-center justify-between">
                        <!-- Company Section -->
                        <div class=" ">
                            <h3 class="text-xl font-bold mb-4">{{ __('footer.company') }}</h3>
                            <ul class="space-y-2">
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.about') }}</a></li>
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.careers') }}</a></li>
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.news') }}</a></li>
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.contact') }}</a></li>
                            </ul>
                        </div>

                        <!-- Legal Section -->
                        <div class="">
                            <h3 class="text-xl font-bold mb-4 ">{{ __('footer.contact') }}</h3>
                            <ul class="space-y-2">
                                <li><a href="{{route('terms-and-conditions')}}"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.terms') }}</a></li>
                                <li><a href="{{route('privacy-policy')}}"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.privacy') }}</a></li>
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.cookie') }}</a></li>
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.license') }}</a></li>
                                <li><a href="#"
                                        class="text-secondary hover:text-blue-600">{{ __('footer.refund') }}</a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- Contact Us Section -->
                    <div class="lg:pl-16">
                        <h3 class="text-[20px] font-bold mb-4 ">{{ __('footer.contactus') }}</h3>
                        <p class="font-bold paragraph_1">{{ __('footer.address') }}</p>
                        <p class="mb-4 paragraph_2 text-secondary">{{ __('footer.address2') }}</p>

                        <p class="font-bold">{{ __('footer.phone') }}</p>
                        <p class="mb-4 text-secondary">{{ __('footer.number') }}</p>
                    </div>

                    <!-- Map Section -->
                    <div class="md:col-span-1 md:mt-0">
                        <div class="w-full h-48 bg-gray-200 rounded-lg overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4340.615157967687!2d90.4215723268882!3d23.81832429293884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d61e95fe7ee33b3%3A0x699bc2c7d11775d!2sBD%20Funnel%20Builder!5e0!3m2!1sen!2sbd!4v1741960971034!5m2!1sen!2sbd"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Copyright Section -->
                <div class="border-t mt-12 pt-6 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-secondary">{{ __('footer.copyright') }}</p>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button -->
        <button id="scrollToTop"
            class="fixed bottom-6 right-6 bg-black text-white text-2xl flex items-center justify-center w-10 h-10 rounded-full shadow-lg transition-opacity duration-300 hover:bg-gray-800 focus:outline-none z-50 scroll-to-top opacity-0 pointer-events-none">
            <i class="ri-arrow-up-line"></i>
        </button>
    </div>

    <script>

        const scrollToTopButton = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopButton.classList.remove('opacity-0', 'pointer-events-none');
                scrollToTopButton.classList.add('opacity-100');
            } else {
                scrollToTopButton.classList.add('opacity-0', 'pointer-events-none');
                scrollToTopButton.classList.remove('opacity-100');
            }
        });

        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>


