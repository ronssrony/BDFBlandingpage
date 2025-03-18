<div>
    <div class="px-10 md:px-28 py-10 max-w-[1300px]">
        <h1 class="text-[#666666] text-center text-[18px] md:text-[24px] font-[300] pb-6">{{__('brands.header')}}</h1>

        <div class="overflow-hidden relative w-full">
            <div id="scroll-container" class="flex items-center gap-10 animate-marquee">

                <img src="brands/brand1.png" alt="brand1">
                <img src="brands/brand2.png" alt="brand2">
                <img src="brands/brand3.png" alt="brand3">
                <img src="brands/brand4.png" alt="brand4">
                <img src="brands/brand5.png" alt="brand5">
                <img src="brands/brand6.png" alt="brand6">
                <img src="brands/brand7.png" alt="brand7">
                <img src="brands/brand8.png" alt="brand8">
                <img src="brands/brand9.png" alt="brand9">

                <img src="brands/brand1.png" alt="brand1">
                <img src="brands/brand2.png" alt="brand2">
                <img src="brands/brand3.png" alt="brand3">
                <img src="brands/brand4.png" alt="brand4">
                <img src="brands/brand5.png" alt="brand5">
                <img src="brands/brand6.png" alt="brand6">
                <img src="brands/brand7.png" alt="brand7">
                <img src="brands/brand8.png" alt="brand8">
                <img src="brands/brand9.png" alt="brand9">
            </div>
        </div>
    </div>
</div>


<style>
    @keyframes marquee {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: flex;
        white-space: nowrap;
        animation: marquee 20s linear infinite;
        width: max-content;
    }
</style>
