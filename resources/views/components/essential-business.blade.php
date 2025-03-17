<div id="features" class="max-w-[1300px] mx-auto px-4">
    <p class="text-center mt-10 mb-2 text-gray-800 text-lg md:text-xl lg:text-2xl">
    {{ __('essential.header1') }}
    </p>
    <div class="flex items-center justify-center">
        <div class="relative flex items-center justify-center w-[80%] md:w-[725px] h-[85px] mb-10">
            <img src="{{ asset('images/essential-business/heading-background.png') }}" alt=""
                class="absolute inset-0 w-full  h-full  object-cover mt-6 sm:mt-0 ">
                @if( app()->getLocale() === 'bn')
            <h1 class=" text-[25px] md:text-[50.5px] lg:text-[50.5px] font-bold text-black absolute text-center px-4
                   w-full break-words  md:whitespace-nowrap   ml-[-8%] mb--10 lg:mb-1 md:mb-1 leading-tight ">
                   {{ __('essential.header2') }}
            </h1>
            @else
            <h1 class=" text-[32px] md:text-[59.5px] lg:text-[59.5px] font-bold text-black absolute text-center px-4
                   w-full break-words  md:whitespace-nowrap ml-[-7%] mb-1">
                   {{ __('essential.header2') }}
            </h1>
            @endif

        </div>
    </div>
    <div class="p-4 md:p-8 lg:p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            @foreach (__('essential.data') as $index => $i)
                    <div class="relative w-[90%] md:w-[80%] lg:w-[100%] mx-auto  p-1.5">
                        @if($loop->index % 2 == 0)
                            <img src="{{ asset('images/essential-business/section2-bg.png') }}" alt="Image {{ $loop->index }}"
                                class="h-[140px] w-full object-cover">
                            <div class="absolute top-0 left-0 w-full h-full p-3 text-white flex justify-center items-center">
                                <img src="{{ asset($i['image']) }}" alt="Image {{ $loop->index }}"
                                    class="p-2 w-16 h-16 md:w-20 md:h-20">
                                <div class="ml-4">
                                    <h2 class="text-base md:text-lg font-semibold">{{ $i['title'] }}</h2>
                                    <p class="text-sm mt-1">{{ $i['body'] }}</p>
                                </div>
                            </div>
                        @else
                            <img src="{{ asset('images/essential-business/section1-bg.svg') }}" alt="Image {{ $loop->index }}"
                                class="h-[140px] w-full object-cover">
                            <div
                                class="absolute top-0 left-0 w-full h-full p-3 text-[#1565CE] flex justify-center items-center">
                                <img src="{{ asset($i['image']) }}" alt="Image {{ $loop->index }}"
                                    class="p-2 w-16 h-16 md:w-20 md:h-20">
                                <div class="ml-4">
                                    <h2 class="text-base md:text-lg font-semibold">{{ $i['title'] }}</h2>
                                    <p class="text-sm">{{ $i['body'] }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
            @endforeach
        </div>
    </div>
    <div class="relative p-10 mb-10 hidden md:block">
        <img src="{{ asset('images/essential-business/seamless-customer-support.png') }}" alt="" class="w-full h-auto">
        <div class="absolute inset-0 flex flex-col justify-center items-start text-white px-5 md:px-15 lg:px-20">
            <h1 class="text-3xl md:text-4xl font-bold">{{ __('essential.footer-head') }}</h1>
            <p class="text-base  md:text-xl  lg:mb-5">{{ __('essential.footer-body') }}</p>
            @include('components.free-trail-button')
        </div>
    </div>

    <div class="relative p-5 mb-10  block md:hidden">
        <img src="{{ asset('images/essential-business/sm-bg.svg') }}" alt="" class="w-full h-auto">
        <div class="absolute inset-0 flex flex-col  items-start text-white px-15 mt-[12%] ">
            <h1 class="text-[28px]  font-bold leading-tight">{{ __('essential.footer-head') }}</h1>
            <p class="text-base mt-2 mb-5">{{ __('essential.footer-body') }}</p>
            @include('components.free-trail-button')
        </div>
    </div>
</div>