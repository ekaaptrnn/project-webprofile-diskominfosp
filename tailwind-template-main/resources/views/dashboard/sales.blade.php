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

            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] !pb-0 rounded-md">
                <div class="trezo-card-content">

                    <!-- Stats Stats -->
                    <div class="trezo-card rounded-md mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 md:!text-xl flex items-center !font-normal">
                                    Welcome Back, <span class="text-primary-500 font-medium">Olivia!</span><img src="/assets/images/icons/dog.svg" class="inline-block ltr:ml-[5px] rtl:mr-[5px]" alt="dog">
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle sm:flex items-center mt-[10px] sm:mt-0">
                                <button type="button" class="ltr:mr-[10px] rtl:ml-[10px] rounded-md inline-block transition-all py-[3.5px] px-[17px] border border-gray-100 dark:border-[#172036] hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                                    <span class="inline-block relative ltr:pl-[26px] rtl:pr-[26px]">
                                        <i class="ri-calendar-line absolute text-lg top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                        Oct 01 - Oct 31, 2025
                                    </span>
                                </button>
                                <button type="button" class="inline-block rounded-md transition-all bg-primary-500 text-white py-[4.5px] px-[17px] hover:bg-primary-400 mt-[10px] sm:mt-0">
                                    <span class="inline-block relative ltr:pl-[26px] rtl:pr-[26px]">
                                        <i class="ri-download-2-line absolute text-lg top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                        Export CSV
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-[25px]">

                                <!-- Total Sales -->
                                <div class="relative rounded-md p-[20px] md:p-[25px] !pb-[65px] border border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center">
                                        <div class="bg-primary-100 dark:bg-[#15203c] text-white text-center relative z-[1] ltr:mr-[15px] rtl:ml-[15px] rounded-[5px] text-[25px] w-[55px] h-[55px]">
                                            <span class="inset-0 -z-[1] m-[8px] absolute rounded-[5px] bg-primary-500"></span>
                                            <i class="ri-shopping-cart-line absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </div>
                                        <div>
                                            <h6 class="!text-lg md:!text-xl !mb-[2px] !font-medium">
                                                $150,000
                                            </h6>
                                            <span class="block">
                                                Total Sales
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-[25px] md:mt-[45px] flex items-center">
                                        <span class="font-medium inline-block relative text-xs rounded-full border border-success-300 text-success-700 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] py-[2px] ltr:pl-[20px] rtl:pr-[20px] ltr:pr-[10px] rtl:pl-[10px]">
                                            <i class="ri-arrow-up-fill absolute top-1/2 -translate-y-1/2 text-base -mt-px ltr:left-[6px] rtl:right-[6px]"></i>
                                            12%
                                        </span>
                                        <span class="block ltr:ml-[10px] rtl:mr-[10px] text-xs">
                                            from last week
                                        </span>
                                    </div>
                                    <div class="absolute left-0 right-0 -bottom-[30px] ltr:-ml-[12px] rtl:-mr-[12px] ltr:-mr-[10px] rtl:-ml-[10px]">
                                        <div id="salesTotalSalesChart"></div>
                                    </div>
                                </div>

                                <!-- Total Orders -->
                                <div class="relative rounded-md p-[20px] md:p-[25px] !pb-[65px] border border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center">
                                        <div class="bg-purple-100 dark:bg-[#15203c] text-white text-center relative z-[1] ltr:mr-[15px] rtl:ml-[15px] rounded-[5px] text-[25px] w-[55px] h-[55px]">
                                            <span class="inset-0 -z-[1] m-[8px] absolute rounded-[5px] bg-purple-500"></span>
                                            <i class="ri-shopping-bag-3-line absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </div>
                                        <div>
                                            <h6 class="!text-lg md:!text-xl !mb-[2px] !font-medium">
                                                1,250
                                            </h6>
                                            <span class="block">
                                                Total Orders
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-[25px] md:mt-[45px] flex items-center">
                                        <span class="font-medium inline-block relative text-xs rounded-full border border-success-300 text-success-700 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] py-[2px] ltr:pl-[20px] rtl:pr-[20px] ltr:pr-[10px] rtl:pl-[10px]">
                                            <i class="ri-arrow-up-fill absolute top-1/2 -translate-y-1/2 text-base -mt-px ltr:left-[6px] rtl:right-[6px]"></i>
                                            8%
                                        </span>
                                        <span class="block ltr:ml-[10px] rtl:mr-[10px] text-xs">
                                            from last week
                                        </span>
                                    </div>
                                    <div class="absolute -bottom-[31px] ltr:left-0 rtl:right-0 ltr:right-[10px] rtl:left-[10px]">
                                        <div id="salesTotalOrdersChart"></div>
                                    </div>
                                </div>

                                <!-- Total Profit -->
                                <div class="relative rounded-md p-[20px] md:p-[25px] !pb-[65px] border border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center">
                                        <div class="bg-secondary-100 dark:bg-[#15203c] text-white text-center relative z-[1] ltr:mr-[15px] rtl:ml-[15px] rounded-[5px] text-[25px] w-[55px] h-[55px]">
                                            <span class="inset-0 -z-[1] m-[8px] absolute rounded-[5px] bg-secondary-500"></span>
                                            <i class="ri-wallet-2-line absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </div>
                                        <div>
                                            <h6 class="!text-lg md:!text-xl !mb-[2px] !font-medium">
                                                $80,000
                                            </h6>
                                            <span class="block">
                                                Total Profit
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-[25px] md:mt-[45px] flex items-center">
                                        <span class="font-medium inline-block relative text-xs rounded-full border border-danger-300 text-orange-600 bg-danger-200 dark:bg-[#15203c] dark:border-[#15203c] py-[2px] ltr:pl-[20px] rtl:pr-[20px] ltr:pr-[10px] rtl:pl-[10px]">
                                            <i class="ri-arrow-down-fill absolute top-1/2 -translate-y-1/2 text-base -mt-px ltr:left-[6px] rtl:right-[6px]"></i>
                                            7%
                                        </span>
                                        <span class="block ltr:ml-[10px] rtl:mr-[10px] text-xs">
                                            from last week
                                        </span>
                                    </div>
                                    <div class="absolute left-0 right-0 -bottom-[30px] ltr:-ml-[12px] rtl:-mr-[12px] ltr:-mr-[10px] rtl:-ml-[10px]">
                                        <div id="salesTotalProfitChart"></div>
                                    </div>
                                </div>

                                <!-- Total Revenue -->
                                <div class="relative rounded-md p-[20px] md:p-[25px] !pb-[65px] border border-gray-100 dark:border-[#172036]">
                                    <div class="flex items-center">
                                        <div class="bg-orange-100 dark:bg-[#15203c] text-white text-center relative z-[1] ltr:mr-[15px] rtl:ml-[15px] rounded-[5px] text-[25px] w-[55px] h-[55px]">
                                            <span class="inset-0 -z-[1] m-[8px] absolute rounded-[5px] bg-orange-500"></span>
                                            <i class="ri-money-dollar-circle-line absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </div>
                                        <div>
                                            <h6 class="!text-lg md:!text-xl !mb-[2px] !font-medium">
                                                $250,000
                                            </h6>
                                            <span class="block">
                                                Total Revenue
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-[25px] md:mt-[45px] flex items-center">
                                        <span class="font-medium inline-block relative text-xs rounded-full border border-success-300 text-success-700 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] py-[2px] ltr:pl-[20px] rtl:pr-[20px] ltr:pr-[10px] rtl:pl-[10px]">
                                            <i class="ri-arrow-up-fill absolute top-1/2 -translate-y-1/2 text-base -mt-px ltr:left-[6px] rtl:right-[6px]"></i>
                                            12%
                                        </span>
                                        <span class="block ltr:ml-[10px] rtl:mr-[10px] text-xs">
                                            from last week
                                        </span>
                                    </div>
                                    <div class="absolute left-[15px] right-[15px] -bottom-[30px]">
                                        <div id="salesTotalRevenueChart"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                        <div class="lg:col-span-2">
        
                            <!-- Recent Earnings -->
                            <div class="trezo-card border border-gray-100 dark:border-[#172036] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Recent Earnings
                                        </h5>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                    This Week
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
                                    <div class="-mt-[5px] -mb-[27px] ltr:-ml-[16px] rtl:-mr-[16px]">
                                        <div id="salesRecentEarningsChart"></div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <div class="lg:col-span-1">

                            <!-- Sales by Locations -->
                            <div class="trezo-card border border-gray-100 dark:border-[#172036] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Sales by Locations
                                        </h5>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                <i class="ri-more-fill"></i>
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
                                    <div class="flex items-center justify-center min-h-[162px]">
                                        <div id="salesByLocationsJsVectorMap"></div>
                                    </div>
                                    <div class="table-responsive overflow-x-auto mt-[9px] without-border">
                                        <table class="w-full">
                                            <thead>
                                                <tr>
                                                    <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[8px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                        Country
                                                    </th>
                                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[8px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                        Orders
                                                    </th>
                                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[8px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                        Earnings
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-black dark:text-white">
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        <div class="flex items-center">
                                                            <div class="w-[22px]">
                                                                <img alt="browser-image" src="/assets/images/flags/usa.svg">
                                                            </div>
                                                            <span class="block font-medium ltr:ml-[10px] rtl:mr-[10px]">
                                                                USA
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        22,124
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        $250.4k
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        <div class="flex items-center">
                                                            <div class="w-[22px]">
                                                                <img alt="browser-image" src="/assets/images/flags/germany.svg">
                                                            </div>
                                                            <span class="block font-medium ltr:ml-[10px] rtl:mr-[10px]">
                                                                Germany
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        18,320
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        $180.3k
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        <div class="flex items-center">
                                                            <div class="w-[22px]">
                                                                <img alt="browser-image" src="/assets/images/flags/uk.svg">
                                                            </div>
                                                            <span class="block font-medium ltr:ml-[10px] rtl:mr-[10px]">
                                                                UK
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        12,560
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        $125.6k
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        <div class="flex items-center">
                                                            <div class="w-[22px]">
                                                                <img alt="browser-image" src="/assets/images/flags/canada.svg">
                                                            </div>
                                                            <span class="block font-medium ltr:ml-[10px] rtl:mr-[10px]">
                                                                Canada
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        8,720
                                                    </td>
                                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[11px] border-b border-gray-100 dark:border-[#172036]">
                                                        $94.1k
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Transactions History -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Transactions History
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                        <i class="ri-more-fill"></i>
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
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-primary-100 dark:bg-[#15203c] text-primary-500 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                credit_card
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Master Card
                                            </span>
                                            <span class="block text-sm">
                                                16 Jun 2025 - 7:12 pm
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-success-600">
                                        +1,520
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                redeem
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Paypal
                                            </span>
                                            <span class="block text-sm">
                                                15 Jun 2025 - 1:42 am
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-danger-500">
                                        -2,250
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-purple-100 dark:bg-[#15203c] text-purple-500 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                account_balance
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Wise
                                            </span>
                                            <span class="block text-sm">
                                                14 Jun 2025 - 4:21 pm
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-success-600">
                                        +3,560
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-secondary-100 dark:bg-[#15203c] text-secondary-500 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                currency_ruble
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Payoneer
                                            </span>
                                            <span class="block text-sm">
                                                13 Jun 2025 - 2:42 am
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-success-600">
                                        +6,500
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-success-100 dark:bg-[#15203c] text-success-600 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                credit_score
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Credit Card
                                            </span>
                                            <span class="block text-sm">
                                                12 Jun 2025 - 3:20 pm
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-danger-500">
                                        -4,320
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-purple-100 dark:bg-[#15203c] text-purple-500 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                account_balance
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Wise
                                            </span>
                                            <span class="block text-sm">
                                                16 Dec 2025 - 1:23 pm
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-success-600">
                                        +5,432
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[15px] md:mb-[18px] lg:mb-[27.2px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="w-[41px] h-[41px] ltr:mr-[12px] rtl:ml-[12px] bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-full flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                redeem
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white text-base md:text-[16px] mb-[3px] md:mb-px font-medium">
                                                Paypal
                                            </span>
                                            <span class="block text-sm">
                                                23 Dec 2025 - 3:20 pm
                                            </span>
                                        </div>
                                    </div>
                                    <span class="block text-success-600">
                                        +1,820
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Recent Orders -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Orders
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle sm:flex sm:items-center">
                                <form class="relative sm:w-[240px] ltr:sm:mr-[20px] rtl:sm:ml-[20px] my-[13px] sm:my-0">
                                    <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            search
                                        </i>
                                    </label>
                                    <input type="text" placeholder="Search here....." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400">
                                </form>
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Show All
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:left-0 sm:ltr:right-0 rtl:right-0 sm:rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
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
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                                Order ID
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                                Customer
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                                Created
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                                Total
                                            </th>
                                            <th class="font-medium text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tr-md">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                #JAN-2345
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <div class="flex items-center">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user1.jpg" class="inline-block rounded-md" alt="product-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Sarah Johnson
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                12 Jun 2025
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                $10,490
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    Shipped
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                #JAN-1323
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <div class="flex items-center">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user2.jpg" class="inline-block rounded-md" alt="product-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Michael Smith
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                11 Jun 2025
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                $6,575
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Confirmed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                #DEC-1234
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <div class="flex items-center">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user3.jpg" class="inline-block rounded-md" alt="product-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Emily Brown
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                10 Jun 2025
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                $12,870
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                #DEC-3567
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <div class="flex items-center">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user4.jpg" class="inline-block rounded-md" alt="product-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Jason Lee
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                09 Jun 2025
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                $7,895
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    Shipped
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                #DEC-1098
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <div class="flex items-center">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user5.jpg" class="inline-block rounded-md" alt="product-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Ashley Davis
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                08 Jun 2025
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                $4,680
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                <span class="px-[8px] py-[3px] inline-block bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                    Rejected
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- Real-Time Sales -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Real-Time Sales
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Today
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
                        <div class="-mt-[25px]">
                            <div id="salesRealTimeSalesChart"></div>
                        </div>
                        <div class="flex justify-between pt-[28px] border-t border-gray-100 dark:border-[#172036]">
                            <div>
                                <span class="block text-xs">
                                    Total Sales
                                </span>
                                <h6 class="!mb-0 !font-medium !text-lg mt-[5px]">
                                    $150.7k
                                    <span class="text-success-600 text-xs ltr:pl-[16px] rtl:pr-[16px] relative">
                                        <i class="ri-arrow-up-fill ltr:left-0 rtl:right-0 absolute text-md top-1/2 -translate-y-1/2"></i>
                                        12%
                                    </span>
                                </h6>
                            </div>
                            <div>
                                <span class="block text-xs">
                                    Avg. Sales Per Day
                                </span>
                                <h6 class="!mb-0 !font-medium !text-lg mt-[5px]">
                                    $19.2k
                                    <span class="text-danger-500 text-xs ltr:pl-[16px] rtl:pr-[16px] relative">
                                        <i class="ri-arrow-down-fill ltr:left-0 rtl:right-0 absolute text-md top-1/2 -translate-y-1/2"></i>
                                        7%
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sales Overview -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Sales Overview
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
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
                        <div class="-mt-[30px] -mb-[23px]">
                            <div id="salesOverviewChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Gross Earnings -->
                <div class="trezo-card bg-purple-100 dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center">
                            <img src="/assets/images/icons/gross-earnings.svg" alt="gross-earnings">
                            <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                <span class="block uppercase">
                                    Gross Earnings
                                </span>
                                <h4 class="!mb-0 !text-[20px] mt-[6px] !font-semibold">
                                    $78,350.00
                                    <span class="text-success-600 text-base font-medium -top-px relative ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[25px] rtl:pr-[25px]">
                                        <i class="material-symbols-outlined !text-[20px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            trending_up
                                        </i>
                                        +2.3%
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <div class="-mt-[15px] -mb-[8px]">
                            <div id="salesGrossEarningsChart"></div>
                        </div>
                        <div class="flex justify-between pt-[17px] border-t border-purple-200 dark:border-[#172036]">
                            <div>
                                <span class="block text-xs">
                                    Total Balance
                                </span>
                                <h6 class="!mb-0 !font-medium !text-lg mt-[5px]">
                                    $3,42,890
                                </h6>
                            </div>
                            <div>
                                <span class="block text-xs">
                                    Withdrawals
                                </span>
                                <h6 class="!mb-0 !font-medium !text-lg mt-[5px]">
                                    $2,35,425
                                </h6>
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
