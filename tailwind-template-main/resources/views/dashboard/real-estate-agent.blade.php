<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.front.styles')

        <title>Trezo - Tailwind CSS Admin Dashboard Template</title>

        @vite('resources/css/app.css')

    </head>
    <body>
        @include('partials.dashboard.sidebar')
        @include('partials.dashboard.header')

        <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

            <!-- Welcome -->
            <div class="trezo-card bg-orange-400 p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content py-[8px] md:py-[10px] xl:pt-[10px] xl:pb-[70px] lg:px-[25px] 2xl:px-[75px]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] items-center">
                        <div class="max-w-[400px] mx-auto lg:mx-0 md:max-w-[480px] text-center ltr:lg:text-left rtl:lg:text-right">
                            <span class="inline-block text-base md:text-[15px] lg:text-md text-orange-100 py-[1px] px-[13px] mb-[12px] bg-[#212529] font-medium">
                                Hello Olivia!
                            </span>
                            <h1 class="!mb-0 !text-white !text-xl md:!text-2xl lg:!text-3xl -tracking-[.5px]">
                                Welcome Back! Ready to Close More Deals Today?
                            </h1>
                        </div>
                        <div class="text-center ltr:lg:text-right rtl:lg:text-left">
                            <img src="/assets/images/bank.png" class="inline-block" alt="bank-image">
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="mt-[25px] xl:-mt-[67px]">

                <!-- Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px] mb-[25px]">

                    <!-- Total Listings -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex items-center justify-between">
                            <div>
                                <span class="block">
                                    Total Listings
                                </span>
                                <h3 class="!leading-none !text-xl mt-[6px] !mb-[11px]">
                                    3251
                                </h3>
                                <span class="inline-block text-xs font-medium px-[8px] text-success-700 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                    +3.4%
                                </span>
                            </div>
                            <div>
                                <img src="/assets/images/buildings/building1.png" alt="building-image">
                            </div>
                        </div>
                    </div>

                    <!-- Sales Volume -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex items-center justify-between">
                            <div>
                                <span class="block">
                                    Sales Volume
                                </span>
                                <h3 class="!leading-none !text-xl mt-[6px] !mb-[11px]">
                                    $1.2M
                                </h3>
                                <span class="inline-block text-xs font-medium px-[8px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px]">
                                    -3.2%
                                </span>
                            </div>
                            <div>
                                <img src="/assets/images/buildings/building2.png" alt="building-image">
                            </div>
                        </div>
                    </div>

                    <!-- Active Deals -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex items-center justify-between">
                            <div>
                                <span class="block">
                                    Active Deals
                                </span>
                                <h3 class="!leading-none !text-xl mt-[6px] !mb-[11px]">
                                    1124
                                </h3>
                                <span class="inline-block text-xs font-medium px-[8px] text-success-700 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                    +1.4%
                                </span>
                            </div>
                            <div>
                                <img src="/assets/images/buildings/building3.png" alt="building-image">
                            </div>
                        </div>
                    </div>

                    <!-- Closed Deals -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex items-center justify-between">
                            <div>
                                <span class="block">
                                    Closed Deals
                                </span>
                                <h3 class="!leading-none !text-xl mt-[6px] !mb-[11px]">
                                    2312
                                </h3>
                                <span class="inline-block text-xs font-medium px-[8px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px]">
                                    -1.2%
                                </span>
                            </div>
                            <div>
                                <img src="/assets/images/buildings/building4.png" alt="building-image">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                    <div class="lg:col-span-2">
    
                        <!-- Total Revenue -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <span class="block mb-[7px]">
                                            Total Revenue
                                        </span>
                                        <div class="flex items-center gap-[10px]">
                                            <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                                $1,528
                                            </h3>
                                            <span class="inline-block text-xs font-medium px-[8px] text-success-700 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                +5.4%
                                            </span>
                                        </div>
                                    </div>
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-100 dark:hover:bg-dark" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                Monthly
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Weekly
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Monthly
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Yearly
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-[6.5px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[22px]">
                                    <div id="realEstateAgentTotalRevenueChart"></div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="lg:col-span-1">
    
                        <!-- Top Channels -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Top Channels
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <a href="#" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                                        Browse All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[10px] mb-[10px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/facebook3.svg" alt="facebook">
                                        <div>
                                            <span class="block font-semibold text-black dark:text-white">
                                                Facebook
                                            </span>
                                            <span class="block text-xs mt-[2px]">
                                                Community
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rounded-full relative w-[50px] h-[50px]">
                                        <!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ -->
                                        <svg width="60" height="60" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                            <circle r="90" cx="100" cy="100" stroke="#605DFF" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="113px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                        </svg>
                                        <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                            80%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[10px] mb-[10px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/dribbble2.svg" alt="dribbble">
                                        <div>
                                            <span class="block font-semibold text-black dark:text-white">
                                                Dribbble
                                            </span>
                                            <span class="block text-xs mt-[2px]">
                                                Community
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rounded-full relative w-[50px] h-[50px]">
                                        <!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ -->
                                        <svg width="60" height="60" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                            <circle r="90" cx="100" cy="100" stroke="#5DA8FF" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="141px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                        </svg>
                                        <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                            75%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[10px] mb-[10px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/instagram2.svg" alt="instagram">
                                        <div>
                                            <span class="block font-semibold text-black dark:text-white">
                                                Instagram
                                            </span>
                                            <span class="block text-xs mt-[2px]">
                                                Reels
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rounded-full relative w-[50px] h-[50px]">
                                        <!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ -->
                                        <svg width="60" height="60" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                            <circle r="90" cx="100" cy="100" stroke="#FE7A36" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="113px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                        </svg>
                                        <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                            80%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[10px] mb-[10px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/google3.svg" alt="google">
                                        <div>
                                            <span class="block font-semibold text-black dark:text-white">
                                                Google
                                            </span>
                                            <span class="block text-xs mt-[2px]">
                                                SEO & PPC
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rounded-full relative w-[50px] h-[50px]">
                                        <!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ -->
                                        <svg width="60" height="60" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                            <circle r="90" cx="100" cy="100" stroke="#58F229" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="0px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                        </svg>
                                        <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                            100%
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[10px] mb-[10px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/figma2.svg" alt="figma">
                                        <div>
                                            <span class="block font-semibold text-black dark:text-white">
                                                Figma
                                            </span>
                                            <span class="block text-xs mt-px">
                                                Community
                                            </span>
                                        </div>
                                    </div>
                                    <div class="rounded-full relative w-[50px] h-[50px]">
                                        <!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ -->
                                        <svg width="60" height="60" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                            <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                            <circle r="90" cx="100" cy="100" stroke="#BF85FB" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="226px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                        </svg>
                                        <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                            60%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                    <div class="lg:col-span-1">
    
                        <!-- Recent Clients -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Recent Clients
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[22px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Day
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Week
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Month
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Year
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <ul>
                                    <li class="relative flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                        <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                            <img src="/assets/images/users/user48.jpg" alt="user-image" class="rounded-full w-[35px]">
                                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[1px] border-white dark:border-[#0c1427]"></span>
                                        </div>
                                        <div>
                                            <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                                Johhna Loren
                                            </span>
                                            <span class="block text-xs mt-[3px]">
                                                Doctor
                                            </span>
                                        </div>
                                        <a href="#" class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 text-lg inline-block transition-all hover:text-primary-500">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                    <li class="relative flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                        <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                            <img src="/assets/images/users/user37.jpg" alt="user-image" class="rounded-full w-[35px]">
                                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[1px] border-white dark:border-[#0c1427]"></span>
                                        </div>
                                        <div>
                                            <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                                Zinia Watson
                                            </span>
                                            <span class="block text-xs mt-[3px]">
                                                Lawyer
                                            </span>
                                        </div>
                                        <a href="#" class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 text-lg inline-block transition-all hover:text-primary-500">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                    <li class="relative flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                        <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                            <img src="/assets/images/users/user38.jpg" alt="user-image" class="rounded-full w-[35px]">
                                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[1px] border-white dark:border-[#0c1427]"></span>
                                        </div>
                                        <div>
                                            <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                                Angela Carter
                                            </span>
                                            <span class="block text-xs mt-[3px]">
                                                Businesswoman
                                            </span>
                                        </div>
                                        <a href="#" class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 text-lg inline-block transition-all hover:text-primary-500">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                    <li class="relative flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                        <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                            <img src="/assets/images/users/user39.jpg" alt="user-image" class="rounded-full w-[35px]">
                                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-gray-400 border-[1px] border-white dark:border-[#0c1427]"></span>
                                        </div>
                                        <div>
                                            <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                                Skyler White
                                            </span>
                                            <span class="block text-xs mt-[3px]">
                                                Entrepreneur
                                            </span>
                                        </div>
                                        <a href="#" class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 text-lg inline-block transition-all hover:text-primary-500">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                    <li class="relative flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                        <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                            <img src="/assets/images/users/user40.jpg" alt="user-image" class="rounded-full w-[35px]">
                                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[1px] border-white dark:border-[#0c1427]"></span>
                                        </div>
                                        <div>
                                            <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                                Jane Ronan
                                            </span>
                                            <span class="block text-xs mt-[3px]">
                                                Editor
                                            </span>
                                        </div>
                                        <a href="#" class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 text-lg inline-block transition-all hover:text-primary-500">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                    <li class="relative flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                        <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                            <img src="/assets/images/users/user42.jpg" alt="user-image" class="rounded-full w-[35px]">
                                            <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-gray-400 border-[1px] border-white dark:border-[#0c1427]"></span>
                                        </div>
                                        <div>
                                            <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                                Viktor James
                                            </span>
                                            <span class="block text-xs mt-[3px]">
                                                Businessman
                                            </span>
                                        </div>
                                        <a href="#" class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 text-lg inline-block transition-all hover:text-primary-500">
                                            <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                    </div>
                    <div class="lg:col-span-2">
    
                        <!-- My Featured Listings -->
                        <div class="trezo-card bg-orange-100 dark:bg-[#15203c] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        My Featured Listings
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content relative" id="myFeaturedListingsSlides">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide bg-white rounded-md dark:bg-[#0c1427]">
                                            <div
                                                class="relative h-[202.5px] bg-center bg-cover bg-no-repeat rounded-t-md"
                                                style="background-image: url(/assets/images/properties/property13.jpg);"
                                            >
                                                <span class="inline-block absolute top-[10px] ltr:left-[10px] rtl:right-[10px] bg-danger-100 text-danger-700 text-xs font-medium py-[2px] px-[8px] rounded-[4px]">
                                                    For Rent
                                                </span>
                                            </div>
                                            <div class="p-[20px]">
                                                <h6 class="!text-md !mb-[5px] !font-semibold">
                                                    <a href="#" class="transition-all hover:text-primary-500">
                                                        White House Villa
                                                    </a>
                                                </h6>
                                                <span class="block">
                                                    New Castle, United Kingdom
                                                </span>
                                                <ul class="mt-[13px] flex items-center justify-between">
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            open_run
                                                        </i>
                                                        321 Sft
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bed
                                                        </i>
                                                        2 Bed
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bathtub
                                                        </i>
                                                        2 Bath
                                                    </li>
                                                </ul>
                                                <div class="flex items-center justify-between mt-[13px] pt-[13px] border-t border-gray-100 dark:border-[#172036]">
                                                    <div class="text-md text-black dark:text-white font-bold leading-none">
                                                        $3,124/m
                                                    </div>
                                                    <a href="#" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#15203c] transition-all hover:text-white hover:bg-primary-500">
                                                        <i class="ri-arrow-right-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide bg-white rounded-md dark:bg-[#0c1427]">
                                            <div
                                                class="relative h-[202.5px] bg-center bg-cover bg-no-repeat rounded-t-md"
                                                style="background-image: url(/assets/images/properties/property14.jpg);"
                                            >
                                                <span class="inline-block absolute top-[10px] ltr:left-[10px] rtl:right-[10px] bg-success-100 text-success-700 text-xs font-medium py-[2px] px-[8px] rounded-[4px]">
                                                    For Sale
                                                </span>
                                            </div>
                                            <div class="p-[20px]">
                                                <h6 class="!text-md !mb-[5px] !font-semibold">
                                                    <a href="#" class="transition-all hover:text-primary-500">
                                                        Luxury Comfort Villa
                                                    </a>
                                                </h6>
                                                <span class="block">
                                                    London, United Kingdom
                                                </span>
                                                <ul class="mt-[13px] flex items-center justify-between">
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            open_run
                                                        </i>
                                                        425 Sft
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bed
                                                        </i>
                                                        3 Bed
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bathtub
                                                        </i>
                                                        2 Bath
                                                    </li>
                                                </ul>
                                                <div class="flex items-center justify-between mt-[13px] pt-[13px] border-t border-gray-100 dark:border-[#172036]">
                                                    <div class="text-md text-black dark:text-white font-bold leading-none">
                                                        $4,274/m
                                                    </div>
                                                    <a href="#" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#15203c] transition-all hover:text-white hover:bg-primary-500">
                                                        <i class="ri-arrow-right-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide bg-white rounded-md dark:bg-[#0c1427]">
                                            <div
                                                class="relative h-[202.5px] bg-center bg-cover bg-no-repeat rounded-t-md"
                                                style="background-image: url(/assets/images/properties/property13.jpg);"
                                            >
                                                <span class="inline-block absolute top-[10px] ltr:left-[10px] rtl:right-[10px] bg-danger-100 text-danger-700 text-xs font-medium py-[2px] px-[8px] rounded-[4px]">
                                                    For Rent
                                                </span>
                                            </div>
                                            <div class="p-[20px]">
                                                <h6 class="!text-md !mb-[5px] !font-semibold">
                                                    <a href="#" class="transition-all hover:text-primary-500">
                                                        White House Villa
                                                    </a>
                                                </h6>
                                                <span class="block">
                                                    New Castle, United Kingdom
                                                </span>
                                                <ul class="mt-[13px] flex items-center justify-between">
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            open_run
                                                        </i>
                                                        321 Sft
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bed
                                                        </i>
                                                        2 Bed
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bathtub
                                                        </i>
                                                        2 Bath
                                                    </li>
                                                </ul>
                                                <div class="flex items-center justify-between mt-[13px] pt-[13px] border-t border-gray-100 dark:border-[#172036]">
                                                    <div class="text-md text-black dark:text-white font-bold leading-none">
                                                        $3,124/m
                                                    </div>
                                                    <a href="#" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#15203c] transition-all hover:text-white hover:bg-primary-500">
                                                        <i class="ri-arrow-right-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide bg-white rounded-md dark:bg-[#0c1427]">
                                            <div
                                                class="relative h-[202.5px] bg-center bg-cover bg-no-repeat rounded-t-md"
                                                style="background-image: url(/assets/images/properties/property14.jpg);"
                                            >
                                                <span class="inline-block absolute top-[10px] ltr:left-[10px] rtl:right-[10px] bg-success-100 text-success-700 text-xs font-medium py-[2px] px-[8px] rounded-[4px]">
                                                    For Sale
                                                </span>
                                            </div>
                                            <div class="p-[20px]">
                                                <h6 class="!text-md !mb-[5px] !font-semibold">
                                                    <a href="#" class="transition-all hover:text-primary-500">
                                                        Luxury Comfort Villa
                                                    </a>
                                                </h6>
                                                <span class="block">
                                                    London, United Kingdom
                                                </span>
                                                <ul class="mt-[13px] flex items-center justify-between">
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            open_run
                                                        </i>
                                                        425 Sft
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bed
                                                        </i>
                                                        3 Bed
                                                    </li>
                                                    <li class="text-xs text-black dark:text-white relative ltr:pl-[23px] rtl:pr-[23px]">
                                                        <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 !text-lg ltr:left-0 rtl:right-0 text-gray-400">
                                                            bathtub
                                                        </i>
                                                        2 Bath
                                                    </li>
                                                </ul>
                                                <div class="flex items-center justify-between mt-[13px] pt-[13px] border-t border-gray-100 dark:border-[#172036]">
                                                    <div class="text-md text-black dark:text-white font-bold leading-none">
                                                        $4,274/m
                                                    </div>
                                                    <a href="#" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#15203c] transition-all hover:text-white hover:bg-primary-500">
                                                        <i class="ri-arrow-right-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
    
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                    <div class="lg:col-span-2">
    
                        <!-- Revenue Goal Progress -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Revenue Goal Progress
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-100 dark:hover:bg-dark" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                Monthly
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Weekly
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Monthly
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Yearly
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mt-[20px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[22px]">
                                    <div id="realEstateAgentRevenueGoalProgressChart"></div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="lg:col-span-1">
    
                        <!-- Properties by Country -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Properties by Country
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[22px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                            <i class="ri-more-2-fill"></i>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Day
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Week
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Month
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    This Year
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="flex items-center justify-center min-h-[160px]">
                                    <div id="salesByLocationsJsVectorMap"></div>
                                </div>
                                <ul class="mt-[20px] md:mt-[25px]">
                                    <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/flags/portugal.svg" class="w-[24px]" alt="portugal">
                                            <span class="block font-medium">
                                                Portugal
                                            </span>
                                        </div>
                                        <div class="w-[150px]">
                                            <div class="leading-none flex items-center gap-[12px]">
                                                <div class="flex w-full h-[5px] overflow-hidden rounded-md bg-primary-100 dark:bg-[#172036]">
                                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-400 rounded-md" style="width: 85%;"></div>
                                                </div>
                                                <span class="block">
                                                    85%
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/flags/germany.svg" class="w-[24px]" alt="germany">
                                            <span class="block font-medium">
                                                Germany
                                            </span>
                                        </div>
                                        <div class="w-[150px]">
                                            <div class="leading-none flex items-center gap-[12px]">
                                                <div class="flex w-full h-[5px] overflow-hidden rounded-md bg-secondary-100 dark:bg-[#172036]">
                                                    <div class="flex flex-col justify-center overflow-hidden bg-secondary-400 rounded-md" style="width: 65%;"></div>
                                                </div>
                                                <span class="block">
                                                    65%
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/flags/spain.svg" class="w-[24px]" alt="spain">
                                            <span class="block font-medium">
                                                Spain
                                            </span>
                                        </div>
                                        <div class="w-[150px]">
                                            <div class="leading-none flex items-center gap-[12px]">
                                                <div class="flex w-full h-[5px] overflow-hidden rounded-md bg-purple-100 dark:bg-[#172036]">
                                                    <div class="flex flex-col justify-center overflow-hidden bg-purple-400 rounded-md" style="width: 45%;"></div>
                                                </div>
                                                <span class="block">
                                                    45%
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/flags/canada.svg" class="w-[24px]" alt="canada">
                                            <span class="block font-medium">
                                                Canada
                                            </span>
                                        </div>
                                        <div class="w-[150px]">
                                            <div class="leading-none flex items-center gap-[12px]">
                                                <div class="flex w-full h-[5px] overflow-hidden rounded-md bg-success-100 dark:bg-[#172036]">
                                                    <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md" style="width: 75%;"></div>
                                                </div>
                                                <span class="block">
                                                    75%
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
    
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                    <div class="lg:col-span-1">
    
                        <!-- Download App -->
                        <div class="trezo-card bg-success-200 dark:bg-[#15203c] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content mx-auto py-[10px] md:py-[20px] lg:py-[26px] max-w-[210px]">
                                <h3 class="!text-[20px] md:!text-xl !mb-[15px] md:!mb-[20px]">
                                    Manage Your Dashboard From Your Mobile
                                </h3>
                                <a href="#" class="py-[7px] px-[17.5px] mb-[20px] md:mb-[31px] inline-block rounded-[4px] text-white text-base md:text-[15px] lg:text-md font-medium bg-success-900 transition-all hover:bg-success-700" target="_blank">
                                    Download App
                                </a>
                                <img src="/assets/images/paper.png" alt="paper-image" class="mx-auto">
                            </div>
                        </div>
    
                    </div>
                    <div class="lg:col-span-3">
    
                        <!-- Latest Transactions -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Latest Transactions
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-100 dark:hover:bg-dark" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                Monthly
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Weekly
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Monthly
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Yearly
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="table-responsive overflow-x-auto">
                                    <table class="w-full">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                    Client
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                    Email
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                    Amount
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                    Payment Method
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black dark:text-white">
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[32px]">
                                                            <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <span class="font-semibold inline-block">
                                                            Johhna Loren
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-medium text-gray-500 dark:text-gray-400">
                                                        loren123@gmail.com
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-semibold">
                                                        $6240
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        <img src="/assets/images/payment-method/paypal.svg" alt="paypal">
                                                        Paypal
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="inline-block text-xs font-medium py-px px-[10px] text-success-600 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Completed
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[30px]">
                                                            <img src="/assets/images/users/user53.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <span class="font-semibold inline-block">
                                                            Skyler Queen
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-medium text-gray-500 dark:text-gray-400">
                                                        skyqueen@gmail.com
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-semibold">
                                                        $5135
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        <img src="/assets/images/payment-method/wise.svg" alt="wise">
                                                        Wise
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="inline-block text-xs font-medium py-px px-[10px] text-info-600 border border-info-500 bg-info-50 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Pending
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[30px]">
                                                            <img src="/assets/images/users/user55.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <span class="font-semibold inline-block">
                                                            Jonathon Watson
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-medium text-gray-500 dark:text-gray-400">
                                                        jona2134@gmail.com
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-semibold">
                                                        $4321
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        <img src="/assets/images/payment-method/bank.svg" alt="bank">
                                                        Bank
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="inline-block text-xs font-medium py-px px-[10px] text-danger-600 border border-danger-500 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Failed
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[30px]">
                                                            <img src="/assets/images/users/user54.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <span class="font-semibold inline-block">
                                                            Walter White
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-medium text-gray-500 dark:text-gray-400">
                                                        puzzleworld@gmail.com
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-semibold">
                                                        $3124
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        <img src="/assets/images/payment-method/paypal.svg" alt="paypal">
                                                        Paypal
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="inline-block text-xs font-medium py-px px-[10px] text-success-600 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Completed
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[30px]">
                                                            <img src="/assets/images/users/user40.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <span class="font-semibold inline-block">
                                                            David Carlen
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-medium text-gray-500 dark:text-gray-400">
                                                        liveslong@gmail.com
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="block text-xs font-semibold">
                                                        $2137
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        <img src="/assets/images/payment-method/skrill.svg" alt="skrill">
                                                        Skrill
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                    <span class="inline-block text-xs font-medium py-px px-[10px] text-info-600 border border-info-500 bg-info-50 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Pending
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pt-[13px] sm:flex sm:items-center justify-between">
                                    <p class="!mb-0 text-xs">
                                        Showing 5 of 36 results
                                    </p>
                                    <ol class="mt-[10px] sm:mt-0">
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                <span class="opacity-0">
                                                    0
                                                </span>
                                                <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                    chevron_left
                                                </i>
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                                1
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                2
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                3
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                4
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                <span class="opacity-0">
                                                    0
                                                </span>
                                                <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                    chevron_right
                                                </i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                
                <!-- Client Ratings -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Client Ratings
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-100 dark:hover:bg-dark" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Top Rated
                                        <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                    </span>
                                </button>
                                <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Top Rated
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Latest
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Oldest
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="trezo-card-content" id="clientRatingsSlides">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide p-[20px] md:p-[25px] bg-primary-50 dark:bg-[#0a0e19] rounded-md">
                                    <div class="flex items-center gap-[12px] mb-[20px] md:mb-[25px]">
                                        <img src="/assets/images/users/user72.jpg" alt="user-image" class="rounded-full w-[38px]">
                                        <div>
                                            <h6 class="!font-semibold !text-base !mb-[3px]">
                                                David Carlen
                                            </h6>
                                            <span class="block text-xs">
                                                New Castle, United Kingdom
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-black dark:text-white !text-md !leading-[1.5]">
                                        “Working with William was an absolute pleasure. His market knowledge and attention to detail helped us sell our home quickly and at a great price.”
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base flex items-center leading-none gap-[1px] text-orange-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <span class="relative text-gray-500 dark:text-gray-400 top-[1.7px] text-xs ltr:ml-[2px] rtl:mr-[2px]">
                                                5.0
                                            </span>
                                        </div>
                                        <div class="text-[30px] text-white leading-none">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-[20px] md:p-[25px] bg-orange-50 dark:bg-[#0a0e19] rounded-md">
                                    <div class="flex items-center gap-[12px] mb-[20px] md:mb-[25px]">
                                        <img src="/assets/images/users/user76.jpg" alt="user-image" class="rounded-full w-[38px]">
                                        <div>
                                            <h6 class="!font-semibold !text-base !mb-[3px]">
                                                Zinia Anderson
                                            </h6>
                                            <span class="block text-xs">
                                                New Brunchwick, Canada
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-black dark:text-white !text-md !leading-[1.5]">
                                        “William’s professionalism and responsiveness set him apart from other agents. He listened, and delivered outstanding results.”
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base flex items-center leading-none gap-[1px] text-orange-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-line"></i>
                                            <span class="relative text-gray-500 dark:text-gray-400 top-[1.7px] text-xs ltr:ml-[2px] rtl:mr-[2px]">
                                                4.5
                                            </span>
                                        </div>
                                        <div class="text-[30px] text-white leading-none">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-[20px] md:p-[25px] bg-success-50 dark:bg-[#0a0e19] rounded-md">
                                    <div class="flex items-center gap-[12px] mb-[20px] md:mb-[25px]">
                                        <img src="/assets/images/users/user75.jpg" alt="user-image" class="rounded-full w-[38px]">
                                        <div>
                                            <h6 class="!font-semibold !text-base !mb-[3px]">
                                                Walter White
                                            </h6>
                                            <span class="block text-xs">
                                                New York, USA
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-black dark:text-white !text-md !leading-[1.5]">
                                        “Thanks to William, I felt confident every step of the way during my first home purchase. His friendly demeanor and expert advice helped us.”
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base flex items-center leading-none gap-[1px] text-orange-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                            <span class="relative text-gray-500 dark:text-gray-400 top-[1.7px] text-xs ltr:ml-[2px] rtl:mr-[2px]">
                                                4.0
                                            </span>
                                        </div>
                                        <div class="text-[30px] text-white leading-none">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-[20px] md:p-[25px] bg-primary-50 dark:bg-[#0a0e19] rounded-md">
                                    <div class="flex items-center gap-[12px] mb-[20px] md:mb-[25px]">
                                        <img src="/assets/images/users/user72.jpg" alt="user-image" class="rounded-full w-[38px]">
                                        <div>
                                            <h6 class="!font-semibold !text-base !mb-[3px]">
                                                David Carlen
                                            </h6>
                                            <span class="block text-xs">
                                                New Castle, United Kingdom
                                            </span>
                                        </div>
                                    </div>
                                    <p class="text-black dark:text-white !text-md !leading-[1.5]">
                                        “Working with William was an absolute pleasure. His market knowledge and attention to detail helped us sell our home quickly and at a great price.”
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="text-base flex items-center leading-none gap-[1px] text-orange-500">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <span class="relative text-gray-500 dark:text-gray-400 top-[1.7px] text-xs ltr:ml-[2px] rtl:mr-[2px]">
                                                5.0
                                            </span>
                                        </div>
                                        <div class="text-[30px] text-white leading-none">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination2"></div>
                    </div>
                </div>

            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
