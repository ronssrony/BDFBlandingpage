<div>
    <div class="pt-10">
        <div class="max-w-[1200px] mx-auto px-4 py-10">
            <div class="text-center mb-10">
                <h1 class="text-[24px] font-light text-secondary">{{__('mission_vision.sub-title')}}</h1>
                <h2 class="text-[60px] font-bold text-black mt-4">{{__('mission_vision.title')}}</h2>
            </div>

            <div class="bg-blue-600 text-white rounded-t-[70px] sm:rounded-t-xl p-12  relative overflow-hidden mb-10">
                <h2 class="text-[36px] font-bold text-right mb-6">{{__('mission_vision.vision')}}</h2>
                <p class="description text-right ">
                    {{__('mission_vision.vision-description')}}
                </p>
                <img src="/images/vission_top.png" alt="Vision Image"
                     class="absolute  start-0 top-0 w-26 opacity-70 md:block">

                <img src="/images/vission_code.png" alt="Vision Image"
                     class="absolute bottom-0 right-1 w-16 opacity-70 pt-2 hidden sm:block">
                <!-- mobile version  -->
                <img src="/images/vission_code.png" alt="Vision Image"
                     class="absolute bottom-0 left-1 w-16 opacity-70 pt-2 lg:hidden">
            </div>

            <div class="bg-[#EBF4FF] rounded-b-[65px] sm:rounded-b-xl p-12 relative overflow-hidden z-10">
                <img src="/images/mission_top.png " alt="Mission Top"
                     class="absolute top-0 right-0 w-16 md:block z-0">
                <img src="/images/mission_b.png" alt="Mission Bottom"
                     class="absolute bottom-2 left-10 w-20 opacity-70 md:block z-0">

                <h2 class="text-[36px] font-bold text-left text-primary mb-6 relative z-10">{{__('mission_vision.mission')}}</h2>
                <p class="description text-primary leading-relaxed text-left relative z-10">
                    {{__('mission_vision.mission-description')}}
                </p>
            </div>
        </div>
    </div>
</div>
