<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        <h4 class="text-[24px] font-[300] text-center">{{__('welcome.one_stop_solution.sub-title')}}</h4>
        <h2 class="text-[60px] font-[800] text-gray-800 text-center">{{__('welcome.one_stop_solution.title')}}</h2>
        <div class="p-1 flex flex-wrap items-center justify-center">
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-[#FEF5DB] rounded-lg w-[383px] h-[355px] shadow-lg">
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <img class="relative w-[310px] h-[204px]" src="/images/one-stop-solution/one-stop-solution1.png" alt="">
                </div>
                <h3 class="pt-10 font-[500] text-[26px] text-center">{{__('welcome.one_stop_solution.cardTitle1')}}</h3>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-[#DBEBFF] rounded-lg w-[383px] h-[355px] shadow-lg">
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <img class="relative w-[310px] h-[204px]" src="/images/one-stop-solution/one-stop-solution2.png" alt="">
                </div>
                <h3 class="pt-10 font-[500] text-[26px] text-center">{{__('welcome.one_stop_solution.cardTitle2')}}</h3>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-[#FEF5DB] rounded-lg w-[383px] h-[355px] shadow-lg">
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <img class="relative w-[310px] h-[204px]" src="/images/one-stop-solution/one-stop-solution3.png" alt="">
                </div>
                <h3 class="pt-10 font-[500] text-[26px] text-center">{{__('welcome.one_stop_solution.cardTitle3')}}</h3>
            </div>

        </div>
    </div>
</body>

</html>