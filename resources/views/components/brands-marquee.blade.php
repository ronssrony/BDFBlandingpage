<div>
    <div class=" py-10 max-w-[1200px] max-[1200px]:px-6  mx-auto">
        <h1 class="text-[#666666] text-center text-[18px] md:text-[24px] font-[300] pb-6">{{__('brands.header')}}</h1>

        <div class="overflow-hidden relative cursor-pointer">
            <div x-data="{ scrolling: true }">
                <div id="marquee" class="flex items-center gap-x-10 animate-marquee">
                    @php
                        $images = [
                            '/images/brands/brand1.png',
                            '/images/brands/brand2.png',
                            '/images/brands/brand3.png',
                            '/images/brands/brand4.png',
                            '/images/brands/brand5.png',
                            '/images/brands/brand6.png',
                            '/images/brands/brand7.png',
                            '/images/brands/brand8.png',
                            '/images/brands/brand9.png'
                        ];
                    @endphp

                    @foreach ($images as $image)
                        <div>
                            <img src="{{ asset($image) }}" alt="brand" class="h-auto">
                        </div>
                    @endforeach


                    @foreach ($images as $image)
                        <div>
                            <img src="{{ asset($image) }}" alt="brand" class="h-auto">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes marquee {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }

    .animate-marquee {
        display: flex;
        white-space: nowrap;
        animation: marquee 15s linear infinite;
        width: max-content;
    }

    [x-data] .animate-marquee:hover {
        animation-play-state: paused;
    }
</style>
