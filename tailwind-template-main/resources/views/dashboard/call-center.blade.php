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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Overview -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Overview
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            This Year
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
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
                            <div class="trezo-tabs" id="trezo-tabs">
                                <ul class="overview-navs grid grid-cols-1 sm:grid-cols-3 gap-[15px] md:gap-[25px]">
                                    <li class="nav-item">
                                        <button type="button" data-tab="tab1" class="nav-link active block w-full py-[15px] px-[20px] rounded-md bg-primary-50 ltr:text-left rtl:text-right transition-all dark:bg-[#0a0e19]">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="block">
                                                        Total Calls
                                                    </span>
                                                    <h5 class="!mb-0 !text-lg md:!text-xl !font-semibold">
                                                        26,435
                                                    </h5>
                                                </div>
                                                <img src="/assets/images/icons/call5.svg" alt="call">
                                                <img src="/assets/images/icons/call4.svg" class="hidden" alt="call">
                                            </div>
                                            <span class="inline-block font-medium text-black dark:text-white relative ltr:pl-[27px] rtl:pr-[27px] mt-[32px]">
                                                <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-success-600 !text-[20px]">
                                                    trending_up
                                                </i>
                                                +15% <span class="text-gray-500 dark:text-gray-400 font-normal">last year</span>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" data-tab="tab2" class="nav-link block w-full py-[15px] px-[20px] rounded-md bg-purple-50 ltr:text-left rtl:text-right transition-all dark:bg-[#0a0e19]">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="block">
                                                        Answered Calls
                                                    </span>
                                                    <h5 class="!mb-0 !text-lg md:!text-xl !font-semibold">
                                                        18,520
                                                    </h5>
                                                </div>
                                                <img src="/assets/images/icons/call3.svg" alt="call">
                                                <img src="/assets/images/icons/call6.svg" class="hidden" alt="call">
                                            </div>
                                            <span class="inline-block font-medium text-black dark:text-white relative ltr:pl-[27px] rtl:pr-[27px] mt-[32px]">
                                                <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-success-600 !text-[20px]">
                                                    trending_up
                                                </i>
                                                +7.5% <span class="text-gray-500 dark:text-gray-400 font-normal">last year</span>
                                            </span>
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" data-tab="tab3" class="nav-link block w-full py-[15px] px-[20px] rounded-md bg-orange-50 ltr:text-left rtl:text-right transition-all dark:bg-[#0a0e19]">
                                            <div class="flex items-center justify-between">
                                                <div>
                                                    <span class="block">
                                                        Missed Calls
                                                    </span>
                                                    <h5 class="!mb-0 !text-lg md:!text-xl !font-semibold">
                                                        3,735
                                                    </h5>
                                                </div>
                                                <img src="/assets/images/icons/call7.svg" alt="call">
                                                <img src="/assets/images/icons/call8.svg" class="hidden" alt="call">
                                            </div>
                                            <span class="inline-block font-medium text-black dark:text-white relative ltr:pl-[27px] rtl:pr-[27px] mt-[32px]">
                                                <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-orange-600 !text-[20px]">
                                                    trending_down
                                                </i>
                                                -25% <span class="text-gray-500 dark:text-gray-400 font-normal">last year</span>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="-mb-[15px] ltr:-ml-[15px] rtl:mr-[15px]">
                                            <div id="callCenterTotalCallsChart"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="-mb-[15px] ltr:-ml-[15px] rtl:mr-[15px]">
                                            <div id="callCenterAnsweredCallsChart"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="-mb-[15px] ltr:-ml-[15px] rtl:mr-[15px]">
                                            <div id="callCenterMissedCallsChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-[25px]">
        
                        <!-- Inbound Calls -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-px !font-semibold">
                                        Inbound Calls
                                    </h5>
                                    <p class="text-xs">
                                        Overview of incoming call volume
                                    </p>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[18px] rtl:pl-[17px] rtl:ml:pr-[18px]">
                                                Today
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Day
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Week
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Month
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Year
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mt-[45px] -mb-[25px]">
                                    <div id="callCenterInboundCallsChart"></div>
                                </div>
                                <div class="flex items-center gap-[30px]">
                                    <div class="flex items-center gap-[15px]">
                                        <div class="border border-gray-100 bg-gray-50 w-[48px] h-[48px] rounded-[5px] flex items-center justify-center dark:bg-[#0a0e19] dark:border-[#172036]">
                                            <img src="/assets/images/icons/call.svg" alt="call">
                                        </div>
                                        <div>
                                            <h5 class="!mb-px !text-xl md:!text-2xl !leading-none !font-semibold">
                                                1,235
                                            </h5>
                                            <span class="block">
                                                Past 24 hours
                                            </span>
                                        </div>
                                    </div>
                                    <span class="inline-block font-medium text-black dark:text-white relative ltr:pl-[27px] rtl:pr-[27px]">
                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-success-600 !text-[20px]">
                                            trending_up
                                        </i>
                                        +7.5%
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Outbound Calls -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-px !font-semibold">
                                        Outbound Calls
                                    </h5>
                                    <p class="text-xs">
                                        Summary of outgoing call efforts
                                    </p>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[18px] rtl:pl-[17px] rtl:ml:pr-[18px]">
                                                Last Month
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Day
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Week
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Month
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Last Year
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mt-[45px] -mb-[25px]">
                                    <div id="callCenterOutboundCallsChart"></div>
                                </div>
                                <div class="flex items-center gap-[30px]">
                                    <div class="flex items-center gap-[15px]">
                                        <div class="border border-gray-100 bg-gray-50 w-[48px] h-[48px] rounded-[5px] flex items-center justify-center dark:bg-[#0a0e19] dark:border-[#172036]">
                                            <img src="/assets/images/icons/call2.svg" alt="call2">
                                        </div>
                                        <div>
                                            <h5 class="!mb-px !text-xl md:!text-2xl !leading-none !font-semibold">
                                                890
                                            </h5>
                                            <span class="block">
                                                Last month
                                            </span>
                                        </div>
                                    </div>
                                    <span class="inline-block font-medium text-black dark:text-white relative ltr:pl-[27px] rtl:pr-[27px]">
                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-danger-600 !text-[20px]">
                                            trending_down
                                        </i>
                                        -5.8%
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
                
                <!-- Agents Performance Overview -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !font-semibold">
                                Agents Performance Overview
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Last Month
                                        <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                    </span>
                                </button>
                                <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Day
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Week
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Month
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Year
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <span class="block mb-[10px]">
                            Top Performing Agent
                        </span>
                        <div class="grid grid-cols-1 md:grid-cols-3">
                            <div class="md:col-span-1">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user61.jpg" class="w-[40px] rounded-[4px]" alt="user-image">
                                    <div class="relative">
                                        <span class="font-semibold text-gray-700 dark:text-white block">
                                            John Smith
                                        </span>
                                        <span class="block -mt-px text-gray-700 dark:text-gray-400">
                                            380 Calls
                                        </span>
                                        <div class="absolute top-1/2 -translate-y-1/2 ltr:-left-[14px] rtl:-right-[14px] w-[8px] h-[8px] rounded-full bg-success-500"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <div class="ltr:md:pl-[45px] rtl:md:pr-[45px] mt-[10px] md:mt-0">
                                    <div class="flex items-center justify-between mb-[5px]">
                                        <span class="block">
                                            Customer Satisfaction (CSAT)
                                        </span>
                                        <span class="block">
                                            92%
                                        </span>
                                    </div>
                                    <div class="flex w-full h-[6px] overflow-hidden rounded-md bg-gray-100 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-success-600 rounded-md" style="width: 92%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive overflow-x-auto mt-[15px] md:mt-[20px]">
                            <table class="w-full">
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <div class="flex items-center gap-[10px]">
                                                <img src="/assets/images/users/user62.jpg" class="w-[36px] rounded-[4px]" alt="user-image">
                                                <div class="relative">
                                                    <span class="font-medium text-gray-700 dark:text-white block">
                                                        Sarah Davis
                                                    </span>
                                                    <span class="block -mt-px text-gray-700 dark:text-gray-400">
                                                        65 Calls
                                                    </span>
                                                    <div class="absolute top-1/2 -translate-y-1/2 ltr:-left-[14px] rtl:-right-[14px] w-[8px] h-[8px] rounded-full bg-success-500"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                Avg. Call Duration
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                4 mins 10 secs
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                FCR
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                85%
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                CSAT
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                90%
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <div class="flex items-center gap-[10px]">
                                                <img src="/assets/images/users/user63.jpg" class="w-[36px] rounded-[4px]" alt="user-image">
                                                <div class="relative">
                                                    <span class="font-medium text-gray-700 dark:text-white block">
                                                        Michael Brown
                                                    </span>
                                                    <span class="block -mt-px text-gray-700 dark:text-gray-400">
                                                        58 Calls
                                                    </span>
                                                    <div class="absolute top-1/2 -translate-y-1/2 ltr:-left-[14px] rtl:-right-[14px] w-[8px] h-[8px] rounded-full bg-orange-500"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                Avg. Call Duration
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                5 mins 20 secs
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                FCR
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                82%
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                CSAT
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                87%
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <div class="flex items-center gap-[10px]">
                                                <img src="/assets/images/users/user64.jpg" class="w-[36px] rounded-[4px]" alt="user-image">
                                                <div class="relative">
                                                    <span class="font-medium text-gray-700 dark:text-white block">
                                                        Emily Johnson
                                                    </span>
                                                    <span class="block -mt-px text-gray-700 dark:text-gray-400">
                                                        72 Calls
                                                    </span>
                                                    <div class="absolute top-1/2 -translate-y-1/2 ltr:-left-[14px] rtl:-right-[14px] w-[8px] h-[8px] rounded-full bg-success-500"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                Avg. Call Duration
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                4 mins 30 secs
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                FCR
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                88%
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                CSAT
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                90%
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                        <td class="p-[5px]"></td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <div class="flex items-center gap-[10px]">
                                                <img src="/assets/images/users/user65.jpg" class="w-[36px] rounded-[4px]" alt="user-image">
                                                <div class="relative">
                                                    <span class="font-medium text-gray-700 dark:text-white block">
                                                        David Lee
                                                    </span>
                                                    <span class="block -mt-px text-gray-700 dark:text-gray-400">
                                                        53 Calls
                                                    </span>
                                                    <div class="absolute top-1/2 -translate-y-1/2 ltr:-left-[14px] rtl:-right-[14px] w-[8px] h-[8px] rounded-full bg-orange-500"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                Avg. Call Duration
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                3 mins 50 secs
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                FCR
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                80%
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap py-[8px] px-[9px] bg-gray-50 dark:bg-[#0a0e19] border-none ltr:first:rounded-l-md rtl:first:rounded-r-md ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                            <span class="block text-gray-500 dark:text-gray-400">
                                                CSAT
                                            </span>
                                            <span class="font-medium text-gray-700 dark:text-white">
                                                85%
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Call Center Geography -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !font-semibold">
                                Call Center Geography
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Last Year
                                        <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                    </span>
                                </button>
                                <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Day
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Week
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Month
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Year
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-center min-h-[204px]">
                            <div id="salesByLocationsJsVectorMap"></div>
                        </div>
                        <ul class="mt-[20px]">
                            <li class="flex items-center mb-[20px] last:mb-0">
                                <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                    <img src="/assets/images/flags/usa.svg" class="inline-block" alt="usa">
                                </div>
                                <div class="grow">
                                    <div class="flex items-center justify-between mb-[5px] relative">
                                        <span class="block font-medium">
                                            United States
                                        </span>
                                        <span class="block font-medium absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                            1,200 calls
                                        </span>
                                        <span class="block font-medium">
                                            90%
                                        </span>
                                    </div>
                                    <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center mb-[20px] last:mb-0">
                                <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                    <img src="/assets/images/flags/canada.svg" class="inline-block" alt="canada">
                                </div>
                                <div class="grow">
                                    <div class="flex items-center justify-between mb-[5px] relative">
                                        <span class="block font-medium">
                                            Canada
                                        </span>
                                        <span class="block font-medium absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                            980 calls
                                        </span>
                                        <span class="block font-medium">
                                            88%
                                        </span>
                                    </div>
                                    <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 88%;"></div>
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-center mb-[20px] last:mb-0">
                                <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                    <img src="/assets/images/flags/brazil.svg" class="inline-block" alt="brazil">
                                </div>
                                <div class="grow">
                                    <div class="flex items-center justify-between mb-[5px] relative">
                                        <span class="block font-medium">
                                            Brazil
                                        </span>
                                        <span class="block font-medium absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2">
                                            850 calls
                                        </span>
                                        <span class="block font-medium">
                                            65%
                                        </span>
                                    </div>
                                    <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-orange-500 rounded-md" style="width: 65%;"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Agent Avg. Earnings -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Agent Avg. Earnings
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
                            <div class="flex items-center gap-[30px]">
                                <button type="button" class="inline-block rounded-[4px] transition-all bg-primary-500 text-white w-[34px] h-[28px]">
                                    1d
                                </button>
                                <button type="button" class="inline-block rounded-[4px] transition-all hover:bg-primary-500 hover:text-white w-[34px] h-[28px]">
                                    15d
                                </button>
                                <button type="button" class="inline-block rounded-[4px] transition-all hover:bg-primary-500 hover:text-white w-[34px] h-[28px]">
                                    1m
                                </button>
                                <button type="button" class="inline-block rounded-[4px] transition-all hover:bg-primary-500 hover:text-white w-[34px] h-[28px]">
                                    6m
                                </button>
                                <button type="button" class="inline-block rounded-[4px] transition-all hover:bg-primary-500 hover:text-white w-[34px] h-[28px]">
                                    1y
                                </button>
                            </div>
                            <div class="-mb-[3px]">
                                <div id="callCenterAgentAvgEarningsChart"></div>
                            </div>
                            <div class="flex items-center gap-[30px]">
                                <div class="flex items-center gap-[15px]">
                                    <div class="border border-gray-100 bg-gray-50 w-[48px] h-[48px] rounded-[5px] flex items-center justify-center dark:bg-[#0a0e19] dark:border-[#172036]">
                                        <img src="/assets/images/icons/money.svg" alt="money">
                                    </div>
                                    <div>
                                        <h5 class="!mb-px !text-2xl !leading-none !font-semibold">
                                            $2,534
                                        </h5>
                                        <span class="block">
                                            Last month earning
                                        </span>
                                    </div>
                                </div>
                                <span class="inline-block font-medium text-black dark:text-white relative ltr:pl-[27px] rtl:pr-[27px]">
                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-success-600 !text-[20px]">
                                        trending_up
                                    </i>
                                    +8.7%
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Recent Calls -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Recent Calls
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle flex items-center mt-[15px] sm:mt-0">
                                <form class="relative w-[225px] sm:w-[265px] ltr:mr-[10px] rtl:ml-[10px] ltr:sm:mr-[15px] rtl:sm:ml-[15px]">
                                    <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            search
                                        </i>
                                    </label>
                                    <input type="text" placeholder="Search for a name...." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400" id="dataTableSearchInput">
                                </form>
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
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]" id="dataTable">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="caller_name">
                                                Caller Name
                                                <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="call_type">
                                                Call Type
                                                <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="duration">
                                                Duration
                                                <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative ltr:text-right rtl:text-left" data-column="status">
                                                Status
                                                <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative ltr:text-right rtl:text-left" data-column="time">
                                                Time
                                                <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative ltr:text-right rtl:text-left" data-column="csat">
                                                CSAT
                                                <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Emily Johnson
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            +1 555-123-4567
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-primary-500 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Inbound
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                5 mins
                                            </td>
                                            <td class="text-success-700 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                Resolved
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                10:30 AM
                                            </td>
                                            <td class="text-success-700 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                90%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user59.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Sarah Green
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            +44 20 7946 0958
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-orange-500 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Outbound
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                3 mins
                                            </td>
                                            <td class="text-orange-600 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                Pending
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                10:35 AM
                                            </td>
                                            <td class="text-purple-600 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                85%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user60.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Adam Smith
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            +1 555-234-5678
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-primary-500 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Inbound
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                7 mins
                                            </td>
                                            <td class="text-success-700 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                Resolved
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                10:40 AM
                                            </td>
                                            <td class="text-orange-600 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                83%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user7.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Laura Martin
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            +61 2 1234 5678
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-primary-500 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Inbound
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                4 mins
                                            </td>
                                            <td class="text-purple-600 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                Dropped
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                10:45 AM
                                            </td>
                                            <td class="text-purple-600 font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] ltr:text-right rtl:text-left">
                                                87%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="noResultsMessage" class="hidden my-[10px] px-[20px] md:px-[25px]">
                                No results found.
                            </div>
                            <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
                                    Showing 4 of 36 results
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

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
