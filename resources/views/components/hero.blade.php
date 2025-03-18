<div class="relative py-8 pl-32 pr-14 container ">
    <div class="absolute right-0 top-4/8 transform -translate-y-1/2 flex flex-col gap-4">
        <img src="{{ asset('images/hero/overviewTable1.png') }}" alt="" class="w-55 h-auto">
        <img src="{{ asset('images/hero/superFast-website.png') }}" alt="" class="w-44 h-auto ml-12">
        <img src="{{ asset('images/hero/abandonedOrders.png') }}" alt="" class="w-44 h-auto ml-12">
        <img src="{{ asset('images/hero/fakeOrderSolution.png') }}" alt="" class="w-44 h-auto ml-12">
    </div>
    <div class="grid grid-rows-1 md:grid-cols-3 gap-x-60 gap-y-4">
        <div class="w-[520px]">
            <div>
                <p class="text-[56px] font-black text-[#1565CE]">{{ __('hero.title') }}</p>
            </div>
            <div>
                <p class="text-[34px] font-bold leading-[3rem]">{{ __('hero.subtitle') }}</p>
            </div>
            <div>
                <p class="text-[19px] pt-8">{{ __('hero.business-hassle') }}</p>
            </div>
        </div>
        <div class="bg-[#DEEAFF] row-span-2 col-span-2 rounded-2xl  ">
            <div class="p-4 mt-2">
                <div class="flex gap-3 pb-6">
                    <div class="flex gap-1 items-center justify-center px-4 py-3 bg-white rounded-sm shadow-md shadow-gray-400">
                        <div>
                            <img src="{{ asset('images/hero/total-orders-icon.png') }}" alt="" class="scale-85">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[12px] font-bold">Total Orders</p>
                            <p class="text-[11px]">69,8478 Taka</p>
                        </div>

                    </div>
                    <div class="flex gap-2 items-center justify-center px-4 py-3 bg-white rounded-sm shadow-md shadow-gray-400">
                        <div>
                            <img src="{{ asset('images/hero/readyToShip-icon.png') }}" alt="" class="scale-85">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[12px] font-bold">Ready to Ship</p>
                            <p class="text-[11px]">58,2518 Taka</p>
                        </div>
                    </div>
                    <div class="flex gap-2 items-center justify-center px-4 py-3 bg-white rounded-sm shadow-md shadow-gray-400">
                        <div>
                            <img src="{{ asset('images/hero/deliveredOrders-icon.png') }}" alt="" class="scale-85">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[12px] font-bold">Delivered Orders</p>
                            <p class="text-[11px]">17,86347 Taka</p>
                        </div>

                    </div>
                    <div class="flex gap-2 items-center justify-center px-4 py-3 bg-white rounded-sm shadow-md shadow-gray-400">
                        <div>
                            <img src="{{ asset('images/hero/total-orders2-icon.png') }}" alt="" class="scale-85">
                        </div>
                        <div class="flex flex-col">
                            <p class="text-[12px] font-bold">Total Orders</p>
                            <p class="text-[11px]">36,8478 Taka</p>
                        </div>

                    </div>
                </div>
                <div class="flex -ml-4">
                    <div class="relative w-fit h-fit">
                        <img src="{{ asset('images/hero/order-source.png') }}" alt="" class="w-87 h-auto">

                        <img src="{{ asset('images/hero/order-source-chart.png') }}" alt=""
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-37 h-auto">
                    </div>

                    <div class="w-fit h-fit">
                        <img src="{{ asset('images/hero/pageView.png') }}" alt="" class="w-87 h-auto">
                    </div>
                </div>
                <div class="flex gap-5 -ml-1">
                    <div class="w-fit h-fit">
                        <img src="{{ asset('images/hero/orders.png') }}" alt="" class="w-82 h-auto">
                    </div>
                    <div class="w-fit h-fit">
                        <img src="{{ asset('images/hero/salesOverview.png') }}" alt="" class="w-82 h-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[500px]">
            <div class="-space-y-1">
                <div class="flex items-center">
                    <div class="relative">
                        <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 opacity-75 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                        <img src="{{ asset('images/hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                    </div>
                    <p class="text-[16px]">
                        <span class="font-bold">{{ __('hero.item1-bold') }}</span>{{ __('hero.item1') }}
                    </p>
                </div>

                <div class="flex items-center">
                    <div class="relative">
                        <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                        <img src="{{ asset('images/hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                    </div>
                    <p class="text-[16px]"><span class="font-bold">{{ __('hero.item2-bold') }}</span>{{ __('hero.item2') }}</p>
                </div>
                <div class="flex items-center">
                    <div class="relative">
                        <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 opacity-75 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                        <img src="{{ asset('images/hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                    </div>
                    <p class="text-[16px]"><span class="font-bold">{{ __('hero.item3-bold') }}</span>{{ __('hero.item3') }}</p>
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
            <div class="flex gap-2 items-center px-2">
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
</div>


</div>
