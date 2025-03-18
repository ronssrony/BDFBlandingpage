<div>
    <div class="text-start py-4 pl-60 pt-20">
        <h1 class="heading_1 font-light">{{ __('unlimited-templates.title') }}</h1>
        <h2 class="font-extrabold title-header">{{ __('unlimited-templates.header') }}</h2>
        <p class="font-medium header_4">{{ __('unlimited-templates.subtitle') }}</p>
    </div>




    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wave-Like Continuous Slider</title>

        <style>
            .slider-container {
                width: 100%;
                overflow: hidden;
                white-space: nowrap;
                position: relative;
            }

            .slider {
                display: flex;
                animation: scroll 14s linear infinite;
            }

            .slider.reverse {
                animation: scroll 10s linear infinite;
            }

            /* Pause animation on hover */
            .slider:hover {
                animation-play-state: paused;
            }

            @keyframes scroll {
                from {
                    transform: translateX(0%);
                }

                to {
                    transform: translateX(-100%);
                }
            }

            @keyframes scrollReverse {
                from {
                    transform: translateX(-100%);
                }

                to {
                    transform: translateX(0%);
                }
            }

            .slider img {
                width: 400px;
                height: 300px;
                object-fit: cover;
                margin: 0 10px;
                border-radius: 10px;
            }
        </style>
    </head>

    <body>
        <div class="space-y-5">
            <div class="slider-container">
                <!-- First Row -->
                <div class="slider" id="firstRow"></div>
            </div>

            <div class="slider-container">
                <!-- Second Row -->
                <div class="slider reverse" id="secondRow"></div>
            </div>
        </div>

        <script>
            let firstRowImages = [
                "{{ asset('unlimited-templates/Frame 1.png') }}",
                "{{ asset('unlimited-templates/Frame 2.png') }}",
                "{{ asset('unlimited-templates/Frame 3.png') }}",
                "{{ asset('unlimited-templates/Frame 4.png') }}",
                "{{ asset('unlimited-templates/Frame 5.png') }}",
                "{{ asset('unlimited-templates/Frame 14.png') }}",
                "{{ asset('unlimited-templates/Frame 15.png') }}",
                "{{ asset('unlimited-templates/Frame 9.png') }}"
            ];

            let secondRowImages = [
                "{{ asset('unlimited-templates/Frame 6.png') }}",
                "{{ asset('unlimited-templates/Frame 7.png') }}",
                "{{ asset('unlimited-templates/Frame 8.png') }}",
                "{{ asset('unlimited-templates/Frame 9.png') }}",
                "{{ asset('unlimited-templates/Frame 10.png') }}",
                "{{ asset('unlimited-templates/Frame 11.png') }}",
                "{{ asset('unlimited-templates/Frame 12.png') }}",
                "{{ asset('unlimited-templates/Frame 13.png') }}"
            ];

            function generateSlides(containerId, imagesArray) {
                let container = document.getElementById(containerId);
                let totalImages = imagesArray.length * 2;

                for (let i = 0; i < totalImages; i++) {
                    let img = document.createElement("img");
                    img.src = imagesArray[i % imagesArray.length];
                    container.appendChild(img);
                }
            }

            generateSlides("firstRow", firstRowImages);
            generateSlides("secondRow", secondRowImages);
        </script>

    </body>

    

</div>
