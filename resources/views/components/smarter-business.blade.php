<x-layout>
    <div class="p-4">
        <div>
            <p class=" text-[18px] md:text-[24px] font-[300] text-center">{{ __('smarter-business.title') }}</p>
            <h1 class="text-[36px] md:text-[60px] font-[800] text-center">{{ __('smarter-business.subtitle') }}</h1>
            <p class="text-[16px] md:text-[18px] font-[300] text-center hidden md:block">{!! __('smarter-business.subtitle1') !!}</p>
            <p class="text-[16px] md:text-[18px] font-[300] text-center block md:hidden">
                {{ __('smarter-business.subtitlesm') }}</p>

        </div>
        <div class="flex flex-col md:flex-row justify-center gap-6 mt-12 px-6">
            @foreach (__('smarter-business.data') as $index => $item)
                <div class="w-full md:w-[300px] lg:w-[350px] h-[400px] p-6 text-start flex flex-col justify-between relative bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ asset($item['img']) }}');">


                    <div>
                        <h2
                            class="text-[40px] font-[500] leading-tight
                       {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['title'] }}
                        </h2>
                        <p
                            class="text-[16px] mt-2 font-[500]
                      {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['body'] }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>


    </div>


</x-layout>
