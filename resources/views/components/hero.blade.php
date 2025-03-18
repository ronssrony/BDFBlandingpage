<div id="home" class="py-4 pl-5 pr-5 lg:py-4  lg:pr-0 grid justify-center items-center">
    <div class=" max-w-[1200px]  flex gap-2 flex-col lg:flex-row items-center justify-center">
        <div>
            <div class="">
                <div>
                    <p class="text-[40px] sm:text-[56px] font-black text-[#1565CE]">{{ __('hero.title') }}</p>
                </div>
                <div>
                    <p class="text-[24px] sm:text-[34px] font-bold leading-[1.5] md:leading-[2.5rem]">{{ __('hero.subtitle') }}</p>
                </div>
                <div>
                    <p class="text-[18px] sm:text-[24px] pt-4 pb-4 lg:pb-0 lg:pt-8">{{ __('hero.business-hassle') }}</p>
                </div>
            </div>

            <div class="block lg:hidden">
                <img src="{{ asset('images/hero/graphChart-section-sm.png') }}" alt="" class="w-150 sm:w-200 h-auto">
            </div>

            <div class="pt-0 lg:pt-4">
                <div class="-space-y-1 py-4 md:py-0">
                    <div class="flex items-center">
                        <div class="relative">
                            <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 opacity-75 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                            <img src="{{ asset('images/hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                        </div>
                        <p class="text-[14px] sm:text-[16px]">
                            <span class="font-bold">{{ __('hero.item1-bold') }}</span>{{ __('hero.item1') }}
                        </p>
                    </div>

                    <div class="flex items-center">
                        <div class="relative">
                            <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                            <img src="{{ asset('images/hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                        </div>
                        <p class="text-[14px] sm:text-[16px]"><span class="font-bold">{{ __('hero.item2-bold') }}</span>{{ __('hero.item2') }}</p>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 opacity-75 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                            <img src="{{ asset('images/hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                        </div>
                        <p class="text-[14px] sm:text-[16px]"><span class="font-bold">{{ __('hero.item3-bold') }}</span>{{ __('hero.item3') }}</p>
                    </div>
                </div>
                <div class="flex gap-5 items-center pt-6 pb-5">
                    <div>
                        @include('components.heroButton')
                    </div>
                    <div>
                        <button class="underline text-[18px] cursor-pointer">{{ __('hero.seemore') }}</button>
                    </div>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="flex gap-[-8px]">
                        <img src="{{ asset('images/hero/activeUser1.png') }}" alt="" class="scale-90">
                        <img src="{{ asset('images/hero/activeUser2.png') }}" alt="" class="-ml-8 scale-90">
                        <img src="{{ asset('images/hero/activeUser3.png') }}" alt="" class="-ml-8 scale-90">
                    </div>
                    <div>
                        <img src="{{ asset('images/hero/stars.png') }}" alt="" class="">
                        <p class="text-[16px]">600+ Active Users Reviews</p>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <img src="{{ asset('images/hero/graphChart-section-lg.png') }}" alt="" class=" h-auto hidden lg:block">

        </div>
    </div>
</div>

</div>
