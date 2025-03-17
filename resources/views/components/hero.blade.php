<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <x-layout>
        <div class="py-8 pl-20">
            <div class="grid grid-rows-1 md:grid-cols-3 gap-x-60 gap-y-4">
                <div class="w-[550px]">
                    <div>
                        <p class="text-6xl font-bold text-[#1565CE] py-4">The Ultimate</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold leading-[3rem]">All-in-One Business Solution for <br> E-commerce Entrepreneurs!</p>
                    </div>
                    <div>
                        <p class="text-[22px] pt-8">Build, Automate & Scale Your Business Hassle-Free.</p>
                    </div>
                </div>
                <div class="bg-[#DEEAFF] row-span-2 col-span-2 rounded-2xl  "></div>
                <div class="w-[550px]">
                    <div>
                        <div class="flex items-center pl-2">
                            <div class="relative">
                                <span class="absolute top-0 left-0 w-5 h-5 bg-blue-500 opacity-75 rounded-full animate-ping ml-[10px] mt-[11px]"></span>
                                <img src="{{ asset('hero/listIcon.png') }}" alt="" class="relative z-10">
                            </div>
                            <p class="pl-2 text-[18px]">
                                <span class="font-bold">Drag & Drop Site Builder – </span>No coding required
                            </p>
                        </div>

                        <div class="flex items-center pl-2">
                            <div class="relative">
                                <span class="absolute top-0 left-0 w-5 h-5 bg-blue-500 rounded-full animate-ping ml-[10px] mt-[11px]"></span>
                                <img src="{{ asset('hero/listIcon.png') }}" alt="" class="relative z-10">
                            </div>
                            <p class="pl-2 text-[18px]"><span class="font-bold">Business Automation –</span>Manage everything in one place</p>
                        </div>
                        <div class="flex items-center pl-2">
                            <div class="relative">
                                <span class="absolute top-0 left-0 w-5 h-5 bg-blue-500 opacity-75 rounded-full animate-ping ml-[10px] mt-[11px]"></span>
                                <img src="{{ asset('hero/listIcon.png') }}" alt="" class="relative z-10">
                            </div>
                            <p class="pl-2 text-[18px]"><span class="font-bold">Powerful Analytics –</span>Make data-driven decisions</p>
                        </div>
                    </div>
                    <div class="flex gap-7 items-center px-2 pt-16 pb-10">
                        <div>
                            @include('components.heroButton')
                        </div>
                        <div>
                            <button class="underline text-[18px] cursor-pointer">More Info</button>
                        </div>
                    </div>
                    <div class="flex gap-7 items-center px-2">
                        <div class="flex gap-[-8px]">
                            <img src="{{ asset('hero/activeUser1.png') }}" alt="" class="">
                            <img src="{{ asset('hero/activeUser2.png') }}" alt="" class="-ml-8">
                            <img src="{{ asset('hero/activeUser3.png') }}" alt="" class="-ml-8">
                        </div>
                        <div>
                            <img src="{{ asset('hero/stars.png') }}" alt="">
                            <p>600+ Active Users Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>

</body>

</html>