<x-layout>

<div class="flex items-center justify-center">
    <div class="relative flex items-center justify-center w-[750px] h-[100px] mt-10 mb-10">
        <img src="{{ asset('images/essential-business/heading-background.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
        <h1 class="text-[62px] font-bold text-black relative ml-[-12px] mr-[-20px] mb-3">Essential for Your Business</h1>
    </div>
</div>

<div class="p-10">
    <div class="grid grid-cols-3 gap-4">
         @php
            // Include the PHP file containing the data
            $data = include(app_path('../lang/en/essential.php')); // Adjust the path if needed
         @endphp

         @foreach($data as $i)
              <div class="relative h-[150px] w-[420px] p-1.5 mb-3">
                  @if($loop->index % 2 == 0)
                      <img src="{{ asset('images/essential-business/section1-bg.png') }}" alt="Image {{ $loop->index }}" class=" h-[140px] w-[420px] object-cover p-2">
                      <div class="absolute top-0 left-0 w-full h-full p-3 text-[#1565CE] flex flex-col-2 justify-center items-center">
                      <img src="{{ asset($i['image']) }}" alt="Image {{ $loop->index }}" class="w-24 h-24 object-cover mt-3 ml-5 ">
                      <div class="ml-4">
                      <h2 class="text-lg font-semibold">{{ $i['title'] }}</h2>
                      <p class="text-sm mr-2">{{ $i['body'] }}</p>
                      </div>
                  </div>

                  @else
                      <img src="{{ asset('images/essential-business/section2-bg.png') }}" alt="Image {{ $loop->index }}" class="h-[140px] w-[420px] object-cover p-2 ">

                      <div class="absolute top-0 left-0 w-full h-full p-3 text-white flex flex-col-2 justify-center items-center">
                      <img src="{{ asset($i['image']) }}" alt="Image {{ $loop->index }}" class="w-24 h-24 object-cover mt-3 ml-5 ">
                      <div class="ml-4">
                      <h2 class="text-lg font-semibold">{{ $i['title'] }}</h2>
                      <p class="text-sm mr-2">{{ $i['body'] }}</p>
                      </div>
                  </div>
                  @endif
              </div>
         @endforeach
    </div>
</div>
<div class="relative justify justify-center p-10 mb-10">
       <img src="{{ asset('images/essential-business/seamless-customer-support.png') }}" alt="">
       <div class="mt-[-270px] ml-10 text-white">
             <h1 class="text-5xl font-bold ">Seamless Customer Support</h1>
             <p class="text-xl mt-2">Boost Customer Satisfaction & Resolve Issues Faster!</p>
             @include('components.free-trail-button')
       </div>
</div>
</x-layout>
