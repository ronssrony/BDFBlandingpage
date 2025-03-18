<div class="grid justify-center ">
   <div class="max-w-[1200px] max-[1200px]:px-6">
       <div>
           <h1 class="text-[24px] font-[700] mb-4">{{__('terms-condition.title')}}</h1>
           <p class="text-[20px] font-[300] mb-4">{{__('terms-condition.subtitle')}}</p>
       </div>

       @foreach(__('terms-condition.items') as $item)
           <div class="mb-6">
               <h2 class="text-[20px] font-[700] mb-6">{{ $item['header'] }}</h2>
               <div>
                   @foreach ($item['content'] as $point)
                       <p class="text-[16px] font-[300] pb-2">{{ $point }}</p>
                   @endforeach
               </div>
           </div>
       @endforeach
   </div>
</div>
