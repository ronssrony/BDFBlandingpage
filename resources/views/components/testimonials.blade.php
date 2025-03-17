<x-layout>
    <div class="text-center py-4">
        <h1 class="medium font-light">{{ __('testimonial.title') }}</h1>
        <h2 class="font-extrabold title-header">{{ __('testimonial.header') }}</h2>
    </div>

    <!-- Swiper Container -->
    <div class="swiper-container pl-30">
        <div class="swiper-wrapper" id="swiper-wrapper">

            @foreach (__('testimonial.slider') as $index => $testimonial)
                <div class="swiper-slide">
                    <div
                        class="slide-content card h-[400px] w-[300px] bg-white border-2 border-blue-600 p-4 rounded-lg relative ">
                        <img src="testimonial\Group.png" alt="Client Image" class="w-12 h-8 ">
                        <div class="flex flex-col justify-between ">
                            <p class="mt-4 text-start ">{{ $testimonial['body'] }}</p>

                            <div class="flex justify-start  ">
                                <img src="{{ asset($testimonial['image']) }}" alt="Client Image"
                                    class="w-16 h-16 rounded-full">
                                <div class="flex flex-col pl-4 items-start">
                                    <h3 class="mt-2 font-bold text-center">{{ $testimonial['name'] }}</h3>
                                    <p class="text-sm text-center">{{ $testimonial['designation'] }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper('.swiper-container', {
                loop: true, // Enable infinite loop
                slidesPerView: 3, // Default to 1 slide visible
                spaceBetween: 5, // Space between slides
                pagination: true,


            });
        });
    </script>
</x-layout>
