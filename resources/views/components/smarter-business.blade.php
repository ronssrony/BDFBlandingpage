<x-layout>
    <div class="p-4">
        <div>
            <p class=" heading_1 font-light text-center">{{ __('smarter-business.title') }}</p>
            <h1 class="title-header font-extrabold text-center">{{ __('smarter-business.subtitle') }}</h1>
            <p class="description font-light text-center hidden md:block">{!! __('smarter-business.subtitle1') !!}</p>
            <p class="description font-light text-center block md:hidden">
                {{ __('smarter-business.subtitlesm') }}</p>

        </div>
        <div class="flex flex-col md:flex-row justify-center gap-6 mt-12 px-6">
            @foreach (__('smarter-business.data') as $index => $item)
                <div class="w-full md:w-[300px]  h-[450px] p-6 text-start flex flex-col justify-between relative bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ asset($item['img']) }}');">


                    <div>
                        <h2
                            class="header_1 font-medium leading-tight
                       {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['title'] }}
                        </h2>
                        <p
                            class="paragraph_1 mt-2 font-medium
                      {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['body'] }}
                        </p>


                    </div>
                </div>
            @endforeach

        </div>


    </div>

    <div class="flex justify-center pb-16">
        @include('components.free-trail-button')
    </div>



    <div class="p-4">
        <div>
            <p class=" medium font-light text-center">{{ __('smarter-business.title2') }}</p>
            <h1 class="title-header font-extrabold text-center">{{ __('smarter-business.subtitle2') }}</h1>
            <p class="description font-light text-center hidden md:block">{!!__('smarter-business.subtitle12') !!}</p>
            <p class="description font-light text-center block md:hidden">{{__('smarter-business.subtitlesm') }}</p>


        </div>
        <div class="flex flex-col md:flex-row justify-center gap-6 mt-12 px-6">
            @foreach (__('smarter-business.data2') as $index => $item)
                <div class="w-full md:w-[276px] h-[425px] p-6 text-start flex flex-col justify-between relative bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ asset($item['img']) }}');">


                    <div>
                        <h2
                            class="header_2 font-medium leading-tight
                       {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['title'] }}
                        </h2>

                        @if (isset($item['body2']))
                        <p class="header_3 mt-2 font-medium {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['body2'] }}
                        </p>
                    @endif


                        <p
                            class="paragraph_2 mt-2 font-medium
                      {{ $loop->odd ? 'text-white' : 'text-blue-700' }}">
                            {{ $item['body'] }}
                        </p>


                    </div>
                </div>
            @endforeach

        </div>


    </div>


</x-layout>
