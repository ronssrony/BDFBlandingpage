<div>
    <div class="bg-black text-white   min-h-screen w-full"
        style="background-image: url('/images/Group 427321952 (1) 1.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">

        @php
        $data = include(app_path('../lang/bn/growth-story-bn.php'));
        $data = include(app_path('../lang/en/growth-story.php'));
        @endphp

        <div>
            <div class="text-center mt-40 mx-auto">
                <h3 class="text-sm text-gray-400">{{ $data['growth_story']['title'] }}</h3>
                <h1 class="text-3xl font-bold">{{ $data['growth_story']['subtitle'] }}</h1>
            </div>
        </div>


         <div class="relative lg:relative lg:w-11/12 lg:mt-40 lg:mx-auto ">

            <div class="absolute left-14 -translate-x-1/2  w-0.5 h-full border-l-2 border-dashed border-gray-600 lg:hidden"></div>
            <!-- Horizontal Line -->
            <div class="lg:absolute lg:top-1/2 lg:left-0 lg:w-full lg:border-t-2 lg:border-dashed lg:border-gray-600"></div>
            <div class="lg:flex lg:flex-row md:flex-row lg:justify-between lg:items-center lg:relative">

                <!-- Item 1 (White Circle - Top Line) -->
                <div class="lg:relative lg:text-center lg:w-full md:w-1/6">

                    <div class="w-10 h-10 bg-white rounded-full translate-x-9 -translate-y-1 z-[999]
                                lg:absolute lg:top-1/2 lg:left-[50%] lg:-translate-x-5 lg:-translate-y-2.5
                                lg:w-10 lg:h-10 lg:bg-white lg:rounded-full lg:border-4 lg:border-gray-900">
                    </div>

                    <div class="absolute -translate-y-3 left-14 w-14 border-t-4 border-dashed border-gray-500
                                lg:absolute lg:bottom-[calc(50%+5px)]  lg:left-1/2 lg:-translate-y-0 lg:-translate-x-1/2 lg:w-0.5 lg:h-20 lg:border-l-2 lg:border-dashed lg:border-gray-500">
                    </div>
                    <div class="ml-20 mt-5 lg:ml-0 lg:-mt-60 ">
                        <h2 class="sub-heading font-semibold">{{ $data['year_2023']['title'] }}</h2>
                        <div class="paragraph_small justify-between text-gray-400 mt-4">
                           <div class="flex"><p class=" font-bold text-white">{{ $data['year_2023']['subtitle_1'] }}</p>  <p class="ml-2">{{ $data['year_2023']['subtitle_2'] }}</p></div>
                            <div class="mt-3"><span class="font-bold mt-4 text-white">Builder</span> started.</div>
                        </div>
                    </div>
                </div>



                <!-- Item 2 (Orange Circle - Bottom Line) -->
                 <div class="lg:relative lg:text-center lg:w-full md:w-1/6 pb-8 mb-6">
                    <div class="w-8 h-8 bg-orange-500 rounded-full translate-x-9 -translate-y-1 z-[999] lg:absolute lg:top-1/2 lg:left-[50%] lg:-translate-x-5 lg:-translate-y-2.5 lg:w-9 lg:h-9 lg:bg-orange-500 lg:rounded-full lg:border-2 lg:border-gray-900 lg:z-[9999]"></div>
                    <div class="absolute -translate-y-3 left-14 w-16 border-t-4 border-dashed border-gray-600 lg:absolute lg:top-[calc(50%+12px)] lg:left-1/2 lg:-translate-x-1/2 lg:w-0.5 lg:h-20 lg:border-l-2 lg:border-dashed lg:border-gray-600"></div>
                    <div class="ml-20 mt-5 lg:ml-0  lg:mt-72 lg:flex lg:flex-col lg:items-center lg:text-center">

                        <h2 class="text-2xl text-left font-semibold lg:text-xl lg:font-bold lg:text-white">
                            {{ __('growth-story.current_premium.title_1') }}
                        </h2>
                        <h2 class="text-2xl text-left font-semibold lg:text-xl lg:font-bold lg:text-white">
                            {{ __('growth-story.current_premium.title_2') }}
                        </h2>

                        <div class="flex text-left mt-2">
                            <p class="lg:text-sm text-white font-bold lg:text-white">{{ __('growth-story.current_premium.subtitle_1') }}</p>
                            <p class="lg:text-sm lg:ml-1 lg:text-gray-400">{{ __('growth-story.current_premium.subtitle_2') }}</p>

                        </div>

                    </div>
                </div>
                <!-- Item 3 (White Circle - Top Line) -->
                <div class="lg:relative lg:text-center lg:w-full md:w-1/6">
                    <div class="w-10 h-10 bg-white rounded-full translate-x-9 -translate-y-1 z-[999]
                                lg:absolute lg:top-1/2 lg:left-[50%] lg:-translate-x-5 lg:-translate-y-2.5
                                lg:w-10 lg:h-10 lg:bg-white lg:rounded-full lg:border-4 lg:border-gray-900">
                    </div>


                    <div class="absolute -translate-y-3 left-14 w-16 border-t-4 border-dashed border-gray-600
                                 lg:left-1/2 lg:absolute lg:bottom-[calc(50%+5px)] lg:-translate-y-0 lg:-translate-x-1/2 lg:w-0.5 lg:h-20 lg:border-l-2 lg:border-dashed lg:border-gray-600">
                    </div>
                    <div class="ml-20 mt-5 lg:ml-0 lg:-mt-72">
                        <h2 class="sub-heading font-semibold lg:-mt-44">2025</h2>
                        <div class="paragraph text-gray-400 mt-4">
                            <p><span class="font-bold text-white">Official launch of </span> BD Funnel</p>
                            <div class="mt-3"><span class="font-bold mt-4 text-white">Builder.</span></div>
                        </div>
                    </div>

                </div>


                <!-- Item 2 (Orange Circle - Bottom Line) -->
                <div class="lg:relative lg:text-center lg:w-full md:w-1/6 pb-8 mb-6">
                    <div class="w-8 h-8 bg-orange-500 rounded-full translate-x-9 -translate-y-1 z-[999] lg:absolute lg:top-1/2 lg:left-[50%] lg:-translate-x-5 lg:-translate-y-2.5 lg:w-9 lg:h-9 lg:bg-orange-500 lg:rounded-full lg:border-2 lg:border-gray-900 lg:z-[9999]"></div>
                    <div class="absolute -translate-y-3 left-14 w-16 border-t-4 border-dashed border-gray-600 lg:absolute lg:top-[calc(50%+12px)] lg:left-1/2 lg:-translate-x-1/2 lg:w-0.5 lg:h-20 lg:border-l-2 lg:border-dashed lg:border-gray-500"></div>
                    <div class="ml-20 mt-5 lg:ml-0  lg:mt-72 lg:text-center">
                        <h2 class="text-2xl text-left font-semibold lg:text-xl lg:font-bold lg:text-white">{{ __('growth-story.monthly_renewals.title_1') }}</h2>
                        <div class="lg:text-[14px] lg:flex lg:text-nowrap flex text-left">
                            <p class=" lg:text-white text-white lg:font-semibold lg:text-nowrap">{{ __('growth-story.monthly_renewals.subtitle_1') }}</p>
                        <p class=" ml-1 lg:text-gray-400 lg:text-nowrap">{{ __('growth-story.monthly_renewals.subtitle_2') }}</p>
                        </div>
                        <p class="lg:text-[14px] text-left ml-1 lg:text-gray-400 lg:whitespace-nowrap">{{ __('growth-story.monthly_renewals.subtitle_3') }}</p>
                    </div>
                </div>
              <!-- Item 5 (White Circle - Top Line) -->
              <div class="lg:relative lg:text-center lg:w-full md:w-1/6 pb-8 mb-6">

                <div class="w-8 h-8 bg-white rounded-full translate-x-9 -translate-y-1 z-[999]
                            lg:absolute lg:top-1/2 lg:left-[50%] lg:-translate-x-5 lg:-translate-y-2.5
                            lg:w-10 lg:h-10 lg:bg-white lg:rounded-full lg:border-4 lg:border-gray-900">
                </div>
                <div class="absolute -translate-y-3 left-14 w-16 border-t-4 border-dashed border-gray-500
                            lg:absolute lg:bottom-[calc(50%+5px)] lg:left-1/2 lg:-translate-y-0 lg:-translate-x-1/2 lg:w-0.5 lg:h-20 lg:border-l-2 lg:border-dashed lg:border-gray-500">
                </div>
                <div class="ml-20 mt-5 lg:ml-0 lg:-mt-72">
                    <h2 class="text-4xl font-semibold lg:text-2xl lg:-mt-44">First Launch Response</h2>
                    <div class="text-sm text-gray-400 mt-4 lg:text-lg">
                        <span class="font-bold text-white">1,700+ Entrepreneurs</span> <br> applied for subscriptions<br>
                        <div class="mt-3"><span class="font-bold mt-4 text-white">1,000+  Entrepreneurs</span> <br> successfully registered</div>
                    </div>
                </div>
            </div>
                <!-- Item 2 (Orange Circle - Bottom Line) -->
                <div class="lg:relative lg:text-center lg:w-full md:w-1/6 pb-8 mb-6">
                    <div class="w-8 h-8 bg-orange-500 rounded-full translate-x-9 -translate-y-1 z-[999] lg:absolute lg:top-1/2 lg:left-[50%] lg:-translate-x-5 lg:-translate-y-2.5 lg:w-9 lg:h-9 lg:bg-orange-500 lg:rounded-full lg:border-2 lg:border-gray-900 lg:z-[9999]"></div>
                    <div class="absolute -translate-y-3 left-14 w-16 border-t-4 border-dashed border-gray-500 lg:absolute lg:top-[calc(50%+12px)] lg:left-1/2 lg:-translate-x-1/2 lg:w-0.5 lg:h-20 lg:border-l-2 lg:border-dashed lg:border-gray-500"></div>
                    <div class="ml-20 mt-5 lg:ml-0  lg:mt-72">
                        <h2 class="text-2xl font-bold lg:text-nowrap text-left lg:text-xl lg:font-bold lg:text-white">{{ __('growth-story.positive_feedback.title_1') }}</h2>
                        <div class="paragraph_small block text-left lg:text-nowrap lg:flex lg:justify-center">
                            <span class="lg:text-[14px]  lg:text-gray-400">{{ __('growth-story.positive_feedback.subtitle_1') }}</span>
                        <span class="lg:text-[14px] lg:font-semibold font-semibold ml-1 lg:text-white">{{ __('growth-story.positive_feedback.subtitle_2') }}</span>
                        <span class="lg:text-[14px]   ml-1 lg:text-gray-400">{{ __('growth-story.positive_feedback.subtitle_3') }}</span>
                        </div>
                        <span class="lg:text-[14px] block text-left lg:ml-1 lg:text-nowrap  lg:text-gray-400">{{ __('growth-story.positive_feedback.subtitle_4') }}</span>
                    </div>
                </div>


            </div>
        </div>



    </div>
    </div>







