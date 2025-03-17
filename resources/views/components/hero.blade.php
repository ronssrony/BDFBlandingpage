<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <x-layout>
        <div class="py-8 pl-30">
            <div class="grid grid-rows-1 md:grid-cols-3 gap-x-60 gap-y-4">
                <div class="w-[410px]">
                    <div>
                        <p class="text-[42px] font-black text-[#1565CE]">The Ultimate</p>
                    </div>
                    <div>
                        <p class="text-[27px] font-bold leading-[3rem]">All-in-One Business Solution for <br> E-commerce Entrepreneurs!</p>
                    </div>
                    <div>
                        <p class="text-[15px] pt-8">Build, Automate & Scale Your Business Hassle-Free.</p>
                    </div>
                </div>
                <div class="bg-[#DEEAFF] row-span-2 col-span-2 rounded-2xl  ">
                    <div class="p-6 mt-2">
                        <div class="flex gap-1.5 pb-6">
                            <div class="flex items-center justify-center px-2 py-1 bg-white rounded-sm shadow-md shadow-gray-400">
                                <div>
                                    <img src="{{ asset('hero/total-orders-icon.png') }}" alt="" class="scale-70">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-[10px] font-bold">Total Orders</p>
                                    <p class="text-[9px]">69,8478 Taka</p>
                                </div>

                            </div>
                            <div class="flex items-center justify-center px-2 py-1 bg-white rounded-sm shadow-md shadow-gray-400">
                                <div>
                                    <img src="{{ asset('hero/readyToShip-icon.png') }}" alt="" class="scale-70">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-[10px] font-bold">Ready to Ship</p>
                                    <p class="text-[9px]">58,2518 Taka</p>
                                </div>

                            </div>
                            <div class="flex items-center justify-center px-2 py-1 bg-white rounded-sm shadow-md shadow-gray-400">
                                <div>
                                    <img src="{{ asset('hero/deliveredOrders-icon.png') }}" alt="" class="scale-70">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-[10px] font-bold">Delivered Orders</p>
                                    <p class="text-[9px]">17,86347 Taka</p>
                                </div>

                            </div>
                            <div class="flex items-center justify-center px-2 py-1 bg-white rounded-sm shadow-md shadow-gray-400">
                                <div>
                                    <img src="{{ asset('hero/total-orders2-icon.png') }}" alt="" class="scale-70">
                                </div>
                                <div class="flex flex-col">
                                    <p class="text-[10px] font-bold">Total Orders</p>
                                    <p class="text-[9px]">36,8478 Taka</p>
                                </div>

                            </div>
                        </div>
                        <div class="flex -ml-4">
                            <div class="relative w-fit h-fit">
                                <img src="{{ asset('hero/order-source.png') }}" alt="" class="w-70 h-auto">

                                <img src="{{ asset('hero/order-source-chart.png') }}" alt=""
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-37 h-auto">
                            </div>

                            <div class="w-fit h-fit">
                                <img src="{{ asset('hero/pageView.png') }}" alt="" class="w-70 h-auto">
                            </div>
                        </div>
                        <div class="flex gap-5 -ml-1">
                            <div class="w-fit h-fit">
                                <img src="{{ asset('hero/orders.png') }}" alt="" class="w-66 h-auto">
                            </div>
                            <div class="w-fit h-fit">
                                <img src="{{ asset('hero/salesOverview.png') }}" alt="" class="w-66 h-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[410px]">
                    <div class="-space-y-2">
                        <div class="flex items-center">
                            <div class="relative">
                                <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 opacity-75 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                                <img src="{{ asset('hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                            </div>
                            <p class="text-[13px]">
                                <span class="font-bold">Drag & Drop Site Builder – </span>No coding required
                            </p>
                        </div>

                        <div class="flex items-center">
                            <div class="relative">
                                <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                                <img src="{{ asset('hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                            </div>
                            <p class="text-[13px]"><span class="font-bold">Business Automation –</span>Manage everything in one place</p>
                        </div>
                        <div class="flex items-center">
                            <div class="relative">
                                <span class="absolute top-0 left-0 w-4 h-4 bg-blue-500 opacity-75 rounded-full animate-ping ml-[12px] mt-[12px]"></span>
                                <img src="{{ asset('hero/listIcon.png') }}" alt="" class="relative z-10 scale-80">
                            </div>
                            <p class="text-[13px]"><span class="font-bold">Powerful Analytics –</span>Make data-driven decisions</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-center pt-6 pb-5">
                        <div>
                            @include('components.heroButton')
                        </div>
                        <div>
                            <button class="underline text-[14px] cursor-pointer">More Info</button>
                        </div>
                    </div>
                    <div class="flex items-center px-2">
                        <div class="flex gap-[-8px]">
                            <img src="{{ asset('hero/activeUser1.png') }}" alt="" class="scale-85">
                            <img src="{{ asset('hero/activeUser2.png') }}" alt="" class="-ml-8 scale-85">
                            <img src="{{ asset('hero/activeUser3.png') }}" alt="" class="-ml-8 scale-85">
                        </div>
                        <div>
                            <img src="{{ asset('hero/stars.png') }}" alt="" class="scale-85">
                            <p class="text-[13px] pl-3">600+ Active Users Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>

</body>

</html>