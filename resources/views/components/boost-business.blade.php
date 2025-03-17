<div>
    <div class="px-6">
        <div class="relative my-20">
            <img src="boost-business\boost-bg-small.png" alt="background" class="block md:hidden w-full">
            <img src="boost-business\boost-bg-large.png" alt="background" class="hidden md:block w-full">
            <div class="absolute top-10 md:inset-y-0 md:top-auto left-10 flex flex-col md:justify-center h-full">
                <p class="text-[16px] md:text-[20px] font-[300] bg-[#DA5E00] text-center text-white rounded-full py-2 w-[80%]">{{__('boost-business.header')}}</p>
                <h3 class="text-[22px] md:text-[30px] font-[300] py-4">{{__('boost-business.subtitle')}}</h3>
                <h1 class="text-[45px] md:text-[60px] font-[700] leading-none pb-8">{!! __('boost-business.title') !!}</h1>
                <div>
                    @include('components.free-trail-button')
                </div>
            </div>
        </div>
    </div>
</div>
