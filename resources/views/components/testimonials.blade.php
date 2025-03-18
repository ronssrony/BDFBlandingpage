<div id="testimonials">
    <div class="text-center py-4">
        <h1 class="medium font-light">{{ __('testimonial.title') }}</h1>
        <h2 class="font-extrabold title-header">{{ __('testimonial.header') }}</h2>
    </div>
    <div class="flex justify-center relative  ">
        <div class="max-w-[950px] w-full">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach (__('testimonial.slider') as $index => $testimonial)
                        <div class="swiper-slide pl-18 pr-0 md:pr-0 md:pl-10 lg:pl-0">
                            <div
                                class="flex flex-col justify-between slide-content card h-[400px] w-[300px] bg-white border-2 border-blue-600 p-4 rounded-lg relative">
                                <div>
                                    <img src="images/testimonial/Group.png" alt="Client Image" class="w-12 h-8">
                                    <p class="mt-4 text-start">{{ $testimonial['body'] }}</p>
                                </div>

                                <div class="flex justify-start border-t-2 border-dashed pt-5 border-blue-500">
                                    <img src="{{ asset( 'images/'.$testimonial['image']) }}" alt="Client Image"
                                         class="w-16 h-16 rounded-full">
                                    <div class="flex flex-col pl-4 items-start">
                                        <h3 class="mt-2 font-bold text-center">{{ $testimonial['name'] }}</h3>
                                        <p class="text-sm text-center">{{ $testimonial['designation'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Fixed pagination -->
                <div class="swiper-pagination">

                </div>

            </div>
        </div>
    </div>

    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom styles for pagination -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper('.mySwiper', {
                loop: true,
                slidesPerView: 3,
                clickable: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                    type: 'bullets',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1
                    },
                    768: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });
        });
    </script>
</div>
