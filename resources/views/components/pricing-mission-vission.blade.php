<!-- resources/views/pricing.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing Plans</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="">
 <div class="bg-cover bg-center text-white min-h-screen flex flex-col items-center justify-center p-3 sm:p-6" style="background-image: url('/images/price_bg.png');">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center mb-6 sm:mb-10">
            <h2 class="text-lg sm:text-xl font-medium">Choose the <span class="text-yellow-400 font-semibold">Perfect Plan</span> for Your <span class="text-yellow-400 font-semibold">Business</span></h2>
            <h1 class="text-[60px] sm:text-4xl md:text-5xl font-bold mt-2">Simple, Transparent Pricing</h1>
        </div>

        <!-- Basic Plan -->
        <div class="border border-blue-400 rounded-lg shadow-lg mb-8 sm:mb-12 overflow-hidden">
            <div class="flex flex-col md:flex-row justify-between p-4 sm:p-6 border-b border-blue-600">
                <h2 class="text-2xl sm:text-3xl font-bold">Basic Plan</h2>
                <div class="flex items-center mt-2 md:mt-0">
                    <i class="fa-solid fa-coins text-xl sm:text-2xl mr-2"></i>
                    <span class="text-3xl sm:text-4xl font-bold">2000</span>
                    <span class="ml-1 text-base sm:text-lg">/month</span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 p-4 sm:p-6">
                <div>
                    <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-white text-xs mr-2 mt-1 flex-shrink-0 sm:hidden"></i>
                            <span>5k Free Page View</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-white text-xs mr-2 mt-1 flex-shrink-0 sm:hidden"></i>
                            <span>Drag & Drop Site Builder</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Custom Domain</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Unlimited User</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Access to All Landing Page Template</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Advanced analytics</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Product and Variant Management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Order Management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Order Notification</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Customer Management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Stock Management</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Facebook Pixel & Conversion API</span>
                        </li>
                    </ul>
                </div>
                <div class="sm:col-span-2 lg:col-span-1 mt-4 sm:mt-0">
                    <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Google Tag Manager and Analytics</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Microsoft Clarity</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>3rd Party Integration</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Courier Automation</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Custom Invoice</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Role & Permission</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="p-4 sm:p-6 text-center text-xs sm:text-sm">
                <p>N.B: After exceeding <span class="text-yellow-400 font-semibold">5,000 page views</span>, an additional charge of <span class="text-yellow-400 font-semibold">25 BDT per 1,000 page views</span> will apply.</p>
            </div>
        </div>

        <!-- Add-ons -->
        <h2 class="text-2xl sm:text-3xl font-bold text-center mb-6 sm:mb-8">Add-ons</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8 sm:mb-12">
            <!-- Fake Order Add-on -->
            <div class="border border-blue-400 rounded-lg shadow-lg overflow-hidden h-full">
                <div class="p-4 sm:p-6 border-b border-blue-600">
                    <h3 class="text-xl sm:text-2xl font-bold">Fake Order</h3>
                </div>
                <div class="p-4 sm:p-6">
                    <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>IP Block</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Phone Number Block</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Daily order Limit per customer</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Country wise IP block</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Automatic recaptcha</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                            <span>Intelligent algorithm to detect fake orders</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- SMS Add-on -->
            <div class="border border-blue-400 rounded-lg shadow-lg overflow-hidden h-full">
                <div class="p-4 sm:p-6 border-b border-blue-600">
                    <h3 class="text-xl sm:text-2xl font-bold">SMS</h3>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <div>
                            <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>SMS History</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>SMS Settings</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>SMS configuration</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>SMS package upgrade</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>50 Free SMS (One time)</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>Low SMS balance alert</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>Attractive SMS packages</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fa-solid fa-circle text-yellow-400 text-xs mr-2 mt-1 flex-shrink-0"></i>
                                    <span>Easy to manage SMS service</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call Automation Add-on -->
            <div class="border border-blue-400 rounded-lg shadow-lg overflow-hidden h-full">
                <div class="p-4 sm:p-6 border-b border-blue-600">
                    <h3 class="text-xl sm:text-2xl font-bold">Call Automation</h3>
                </div>
                <div class="p-4 sm:p-6">
                    <p class="text-xs sm:text-sm leading-relaxed">
                        You can use call automation feature to make automatic calls to your customers for order confirmation. After placing an order, users will get an automatic call to confirm their orders. This will increase your sales and efficiency.
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Member Wise Plan -->
        <h2 class="text-2xl sm:text-3xl font-bold text-center mb-6 sm:mb-8">Team Member Wise Plan</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8 sm:mb-12">
            <!-- First Team member -->
            <div class="border border-blue-400 rounded-lg shadow-lg overflow-hidden">
                <div class="p-4 sm:p-6 text-center">
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">First Team member</h3>
                    <p class="text-xl sm:text-2xl font-bold text-yellow-400">Free</p>
                    <p class="text-xs sm:text-sm mt-2">month/User</p>
                </div>
            </div>

            <!-- Up to 5 team members -->
            <div class="border border-blue-400 rounded-lg shadow-lg overflow-hidden">
                <div class="p-4 sm:p-6 text-center">
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Upto 5 team members</h3>
                    <p class="text-xs sm:text-sm line-through mb-1">1500</p>
                    <p class="text-xl sm:text-2xl font-bold text-yellow-400">1000 BDT</p>
                    <p class="text-xs sm:text-sm mt-2">month/User</p>
                </div>
            </div>

            <!-- More than 5 team members -->
            <div class="border border-blue-400 rounded-lg shadow-lg overflow-hidden">
                <div class="p-4 sm:p-6 text-center">
                    <h3 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">More than 5 team members</h3>
                    <p class="text-xs sm:text-sm line-through mb-1">1500</p>
                    <p class="text-xl sm:text-2xl font-bold text-yellow-400">900 BDT</p>
                    <p class="text-xs sm:text-sm mt-2">month/User</p>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center">
            <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 sm:py-4 sm:px-8 rounded-md transition-colors duration-200 text-sm sm:text-base">
                Start free 7-days trial
            </a>
        </div>
    </div>
</div>

<div class="pt-10">
    <div class="max-w-5xl mx-auto px-4 py-10">
            <div class="text-center mb-10">
                <h1 class="text-xl font-light text-gray-700">Mission Vision of Our Company</h1>
                <h2 class="text-5xl font-bold text-black mt-4">BD Funnel Builder</h2>
            </div>

            <div class="bg-blue-600 text-white rounded-t-[70px] p-12 relative overflow-hidden mb-10">
                <h2 class="text-4xl font-bold text-right mb-6">Vision</h2>
                <p class="text-[16px] text-right ">
                    BD Funnel Builder aims to revolutionize the way Bangladeshi entrepreneurs build and scale their online businesses. Our vision is to provide a simple, powerful and cost-effective funnel-building platform that enables business owners to create high-converting sales funnels, automate marketing and maximize revenue—without any technical complexity. We believe that every entrepreneur in Bangladesh should have access to world-class digital tools tailored to their needs, helping them grow faster and compete globally.
                </p>
                <img src="/images/vission_top.png" alt="Vision Image" class="absolute  start-0 top-0 w-26 opacity-70 md:block">
                <img src="/images/vission_code.png" alt="Vision Image" class="absolute bottom-0 right-1 w-16 opacity-70 pt-2 md:block">
            </div>

            <div class="bg-[#EBF4FF] rounded-b-[65px] p-12 relative overflow-hidden z-10">
                <img src="/images/mission_top.png " alt="Mission Top" class="absolute top-0 right-0 w-16 md:block z-0">
                <img src="/images/mission_b.png" alt="Mission Bottom" class="absolute bottom-2 left-10 w-20 opacity-70 md:block z-0">
                <h2 class="text-[36px] font-bold text-blue-600 mb-6 relative z-10">Mission</h2>
                <p class="text-[16px] text-blue-600 leading-relaxed text-left relative z-10">
                   Our mission is to empower digital entrepreneurs with an all-in-one solution that combines e-commerce, lead generation, customer management and sales funnels under one platform. We are committed to making online business easier by offering intuitive drag-and-drop tools, high-converting templates, local payment integrations and expert support.  Through innovation, education and a strong community, BD Funnel Builder is dedicated to helping businesses achieve sustainable success in the digital space.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
