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

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">

                    <!-- Total Revenue -->
                    <div class="trezo-card p-[20px] md:p-[25px] rounded-md" style="background: linear-gradient(108deg, #3A4252 0%, #23272E 100%);">
                        <div class="trezo-card-content">
                            <div class="flex justify-between">
                                <div>
                                    <span class="inline-block px-[8.5px] text-success-600 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                        +30%
                                    </span>
                                </div>
                                <div class="ltr:text-right rtl:text-left">
                                    <span class="block text-gray-300 text-xs mb-[2px]">
                                        Last 30 days
                                    </span>
                                    <span class="block font-bold text-success-500 text-xs">
                                        $13,250
                                    </span>
                                </div>
                            </div>
                            <div class="mt-[20px] md:mt-[27px] flex items-end justify-between">
                                <div>
                                    <span class="block mb-[4px] text-gray-300">
                                        Total Revenue
                                    </span>
                                    <h3 class="!mb-0 !text-[20px] !text-white">
                                        $99,590
                                    </h3>
                                </div>
                                <div class="w-[55px] lg:w-[60px] h-[55px] lg:h-[60px] flex items-center justify-center rounded-full text-white bg-success-500">
                                    <i class="material-symbols-outlined !text-[28px]">
                                        attach_money
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Shipments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="flex justify-between">
                                <div>
                                    <span class="inline-block px-[8.5px] text-success-600 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                        +45%
                                    </span>
                                </div>
                                <div class="ltr:text-right rtl:text-left">
                                    <span class="block text-xs mb-[2px]">
                                        Last 30 days
                                    </span>
                                    <span class="block font-bold text-purple-500 text-xs">
                                        +20,300
                                    </span>
                                </div>
                            </div>
                            <div class="mt-[20px] md:mt-[27px] flex items-end justify-between">
                                <div>
                                    <span class="block mb-[4px]">
                                        Total Shipments
                                    </span>
                                    <h3 class="!mb-0 !text-[20px]">
                                        175,950
                                    </h3>
                                </div>
                                <div class="w-[55px] lg:w-[60px] h-[55px] lg:h-[60px] flex items-center justify-center rounded-full text-white bg-purple-500">
                                    <i class="material-symbols-outlined !text-[28px]">
                                        local_shipping
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Customers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="flex justify-between">
                                <div>
                                    <span class="inline-block px-[8.5px] text-success-600 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                        +15%
                                    </span>
                                </div>
                                <div class="ltr:text-right rtl:text-left">
                                    <span class="block text-xs mb-[2px]">
                                        Last 30 days
                                    </span>
                                    <span class="block font-bold text-primary-500 text-xs">
                                        +3k
                                    </span>
                                </div>
                            </div>
                            <div class="mt-[20px] md:mt-[27px] flex items-end justify-between">
                                <div>
                                    <span class="block mb-[4px]">
                                        Total Customers
                                    </span>
                                    <h3 class="!mb-0 !text-[20px]">
                                        29,554
                                    </h3>
                                </div>
                                <div class="w-[55px] lg:w-[60px] h-[55px] lg:h-[60px] flex items-center justify-center rounded-full text-white bg-primary-500">
                                    <i class="material-symbols-outlined !text-[28px]">
                                        group
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Orders -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="flex justify-between">
                                <div>
                                    <span class="inline-block px-[8.5px] text-danger-600 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                        -2.5%
                                    </span>
                                </div>
                                <div class="ltr:text-right rtl:text-left">
                                    <span class="block text-xs mb-[2px]">
                                        Last 30 days
                                    </span>
                                    <span class="block font-bold text-orange-500 text-xs">
                                        -140
                                    </span>
                                </div>
                            </div>
                            <div class="mt-[20px] md:mt-[27px] flex items-end justify-between">
                                <div>
                                    <span class="block mb-[4px]">
                                        Total Orders
                                    </span>
                                    <h3 class="!mb-0 !text-[20px]">
                                        49,120
                                    </h3>
                                </div>
                                <div class="w-[55px] lg:w-[60px] h-[55px] lg:h-[60px] flex items-center justify-center rounded-full text-white bg-orange-500">
                                    <i class="material-symbols-outlined !text-[28px]">
                                        deployed_code
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Shipment Delivered -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Shipment Delivered
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <span class="block">
                                Last 30 days
                            </span>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="ltr:-ml-[15px] rtl:-mr-[15px] -mb-[20px] -mt-[15px]">
                            <div id="shipmentDeliveredChart"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-[25px] mb-[25px]">

                        <!-- Average Delivery Time -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <span class="block">
                                        Average Delivery Time
                                    </span>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <span class="block">
                                        Per Week
                                    </span>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mt-[28px] -mb-[22px]">
                                    <div id="shipmentAverageDeliveryTimeChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Live Shipment Status -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <span class="block">
                                        Live Shipment Status
                                    </span>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <span class="block">
                                        Last 7 days
                                    </span>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mb-[22px] -mt-[22px]">
                                    <div id="shipmentLiveShipmentStatusChart"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Tracking Orders -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Tracking Orders
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Last 30 Days
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 md:mt-px"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last 7 Days
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last 15 Days
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last 30 Days
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Order ID
                                            </th>
                                            <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Customer Name
                                            </th>
                                            <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Order Date
                                            </th>
                                            <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Current Location
                                            </th>
                                            <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Tracking Number
                                            </th>
                                            <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[12px]">
                                                    <div class="form-check relative top-[1.5px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <span class="text-gray-500 dark:text-gray-400">
                                                        #OR045
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Mark Blake
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                30 Apr 2025
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Chicago, IL
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                TRK001
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    Delivered
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[12px]">
                                                    <div class="form-check relative top-[1.5px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <span class="text-gray-500 dark:text-gray-400">
                                                        #OR085
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Cheryl Myers
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                29 Apr 2025
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                London, UK
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                TRK002
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-secondary-50 dark:bg-[#15203c] text-secondary-600 rounded-sm font-medium text-xs">
                                                    In Transit
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[12px]">
                                                    <div class="form-check relative top-[1.5px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <span class="text-gray-500 dark:text-gray-400">
                                                        #OR099
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Marc Bradley
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                28 Apr 2025
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Paris, France
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                TRK003
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-orange-50 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                                    On The Way
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[12px]">
                                                    <div class="form-check relative top-[1.5px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <span class="text-gray-500 dark:text-gray-400">
                                                        #OR125
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Ryan Vasquez
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                N/A
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                N/A
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                N/A
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-600 rounded-sm font-medium text-xs">
                                                    Canceled
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[12px]">
                                                    <div class="form-check relative top-[1.5px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <span class="text-gray-500 dark:text-gray-400">
                                                        #OR245
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Donald Ness
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                26 Apr 2025
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Tokyo, Japan
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                TRK004
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
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
                <div class="lg:col-span-1">

                    <!-- Shipment To Top Countries -->
                    <div class="trezo-card mb-[25px] p-[20px] md:p-[25px] text-center rounded-md" style="background: linear-gradient(180deg, #757DFF 0%, #605DFF 100%);">
                        <div class="trezo-card-content">
                            <h5 class="!text-white !mb-[5px] mx-auto max-w-[250px] !leading-[1.5]">
                                Shipment To Top Countries Around The World
                            </h5>
                            <div class="flex items-center justify-center min-h-[180px] mb-[8px]">
                                <div id="topCountriesVectorMap"></div>
                            </div>
                            <div class="max-w-[310px] mx-auto w-full">
                                <div class="grid grid-cols-2 gap-[12px]">
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/usa.svg" class="inline-block w-[16px]" alt="usa">
                                        <span class="block text-white font-medium text-sm">
                                            USA 85%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/germany.svg" class="inline-block w-[16px]" alt="germany">
                                        <span class="block text-white font-medium text-sm">
                                            Germany 75%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/brazil.svg" class="inline-block w-[16px]" alt="brazil">
                                        <span class="block text-white font-medium text-sm">
                                            Brazil 40%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/canada.svg" class="inline-block w-[16px]" alt="canada">
                                        <span class="block text-white font-medium text-sm">
                                            Canada 10%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/portugal.svg" class="inline-block w-[16px]" alt="portugal">
                                        <span class="block text-white font-medium text-sm">
                                            Portugal 05%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/spain.svg" class="inline-block w-[16px]" alt="spain">
                                        <span class="block text-white font-medium text-sm">
                                            Spain 15%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/france.svg" class="inline-block w-[16px]" alt="france">
                                        <span class="block text-white font-medium text-sm">
                                            France 25%
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/australia.svg" class="inline-block w-[16px]" alt="australia">
                                        <span class="block text-white font-medium text-sm">
                                            Australia 55%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Chat
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
                                                View
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Delete
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Block
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Report
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="chat-body h-[199px] overflow-y-scroll ltr:-mr-[25px] rtl:-ml-[25px] rotate-180">
                                <ul class="flex-col-reverse flex ltr:pl-[25px] rtl:pr-[25px] justify-end">
                                    <li class="relative rotate-180 ltr:pl-[45px] rtl:pr-[45px] w-full md:w-[90%]">
                                        <img src="/assets/images/users/user31.jpg" width="35" alt="user" class="rounded-full top-0 ltr:left-0 rtl:right-0 absolute">
                                        <div class="ltr:text-left rtl:text-right">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-gray-50 dark:bg-[#15203c] ltr:rounded-r-md rtl:rounded-l-md text-sm">
                                                    Hey Olivia, have you had a chance to check out the new admin dashboard?
                                                </p>
                                            </div>
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-gray-50 dark:bg-[#15203c] ltr:rounded-r-md rtl:rounded-l-md text-sm">
                                                    Oh, they've got this Kanban board for task management. You can drag and drop tasks between columns – it's so intuitive. Makes managing tasks a breeze. 🔥
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-left rtl:text-right mb-[13px] mt-[6px]">
                                            09:10 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 w-full md:w-[90%] ltr:text-right md:rtl:text-left md:ltr:mr-auto rtl:ml-auto">
                                        <div class="ltr:text-right rtl:text-left">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-primary-500 text-white ltr:rounded-l-md rtl:rounded-l-md text-sm">
                                                    Oh, you mean the one for project?
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-right rtl:text-left mb-[13px] mt-[6px]">
                                            09:20 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 ltr:pl-[45px] rtl:pr-[45px] w-full md:w-[90%]">
                                        <img src="/assets/images/users/user31.jpg" width="35" alt="user" class="rounded-full top-0 ltr:left-0 rtl:right-0 absolute">
                                        <div class="ltr:text-left rtl:text-right">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-gray-50 dark:bg-[#15203c] ltr:rounded-r-md rtl:rounded-l-md text-sm">
                                                    Yeah, that's the one! It's got a sleek Material Design, and the features are pretty robust.
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-left rtl:text-right mb-[13px] mt-[6px]">
                                            09:20 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 w-full md:w-[90%] ltr:text-right md:rtl:text-left md:ltr:mr-auto rtl:ml-auto">
                                        <div class="ltr:text-right rtl:text-left">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-primary-500 text-white ltr:rounded-l-md rtl:rounded-l-md text-sm">
                                                    Nice! What features are you finding?
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-right rtl:text-left mb-[13px] mt-[6px]">
                                            09:21 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 ltr:pl-[45px] rtl:pr-[45px] w-full md:w-[90%]">
                                        <img src="/assets/images/users/user31.jpg" width="35" alt="user" class="rounded-full top-0 ltr:left-0 rtl:right-0 absolute">
                                        <div class="ltr:text-left rtl:text-right">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-gray-50 dark:bg-[#15203c] ltr:rounded-r-md rtl:rounded-l-md text-sm">
                                                    Well, it has a project overview with all the key metrics on the landing page – project
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-left rtl:text-right mb-[13px] mt-[6px]">
                                            09:22 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 w-full md:w-[90%] ltr:text-right md:rtl:text-left md:ltr:mr-auto rtl:ml-auto">
                                        <div class="ltr:text-right rtl:text-left">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-primary-500 text-white ltr:rounded-l-md rtl:rounded-l-md text-sm">
                                                    That sounds handy. How about the task management features?
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-right rtl:text-left mb-[13px] mt-[6px]">
                                            09:25 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 ltr:pl-[45px] rtl:pr-[45px] w-full md:w-[90%]">
                                        <img src="/assets/images/users/user31.jpg" width="35" alt="user" class="rounded-full top-0 ltr:left-0 rtl:right-0 absolute">
                                        <div class="ltr:text-left rtl:text-right">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-gray-50 dark:bg-[#15203c] ltr:rounded-r-md rtl:rounded-l-md text-sm">
                                                    Oh, they've got this Kanban board for task management. You can drag and drop tasks between columns – it's so intuitive. Makes tasks a breeze. 🔥
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-left rtl:text-right mb-[13px] mt-[6px]">
                                            09:30 AM
                                        </span>
                                    </li>
                                    <li class="relative rotate-180 w-full md:w-[90%] ltr:text-right md:rtl:text-left md:ltr:mr-auto rtl:ml-auto">
                                        <div class="ltr:text-right rtl:text-left">
                                            <div class="mb-[5px] last:mb-0">
                                                <p class="py-[8px] px-[15px] inline-block bg-primary-500 text-white ltr:rounded-l-md rtl:rounded-l-md text-sm">
                                                    Sweet! What about team collaboration?
                                                </p>
                                            </div>
                                        </div>
                                        <span class="block text-xs ltr:text-right rtl:text-left mb-[13px] mt-[6px]">
                                            09:31 AM
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="md:flex gap-[15px]">
                                <div class="relative flex gap-[8px] items-center top-[2px]">
                                    <button class="inline-block transition-all hover:text-primary-500" type="button">
                                        <i class="material-symbols-outlined !text-md">
                                            sentiment_satisfied
                                        </i>
                                    </button>
                                    <button class="inline-block transition-all hover:text-primary-500" type="button">
                                        <i class="material-symbols-outlined !text-md">
                                            attach_file
                                        </i>
                                    </button>
                                </div>
                                <div class="relative mt-[15px] md:mt-0 flex-auto">
                                    <input type="text" class="block text-sm w-full rounded-md bg-gray-50 dark:bg-[#15203c] px-[15px] h-[45px] text-black dark:text-white placeholder:text-gray-500 dark:text-gray-400 outline-0" placeholder="Write your message...">
                                    <button type="submit" class="absolute ltr:right-[15px] rtl:left-[15px] transition-all hover:text-primary-500 top-1/2 -translate-y-1/2 mt-[2px]">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            send
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- Top Shipping Methods -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <span class="block">
                                Top Shipping Methods
                            </span>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="max-w-[310px] mx-auto -mt-[5px] -mb-[8px]">
                            <div id="shipmentTopShippingMethodsChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Todays Shipments -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <span class="block mb-[4px]">
                                Today's Shipments
                            </span>
                            <h5 class="!mb-0 md:!text-[20px]">
                                9,120 Ton
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <span class="inline-block px-[8.5px] text-success-600 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                +5%
                            </span>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="-mt-[26px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[29px]">
                            <div id="shipmentTodaysShipmentsChart"></div>
                        </div>
                    </div>
                </div>

                <!-- On-Time Delivery -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <span class="block">
                                On-Time Delivery
                            </span>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="max-w-[310px] mx-auto -mt-[5px] -mb-[8px]">
                            <div id="shipmentOnTimeDeliveryChart"></div>
                        </div>
                    </div>
                </div>
                    
            </div>
            
            <!-- Shipment List -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Shipment List
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
                                    Last 30 Days
                                    <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 md:mt-px"></i>
                                </span>
                            </button>
                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                <li>
                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                        Last 7 Days
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                        Last 15 Days
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                        Last 30 Days
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Shipment ID
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Customer Name
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Products
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Cost
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Ship Date
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Origin
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Shipment Method
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Status
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[12px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #0015
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="rounded-md w-[30px]">
                                                <img src="/assets/images/users/user54.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <span class="block font-medium">
                                                David Farrior
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Toys
                                    </td>
                                    <td class="text-orange-500 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $50,000
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        30 Apr 2025
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        New York, USA
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Air
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Delivered
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[12px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #0099
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="rounded-md w-[30px]">
                                                <img src="/assets/images/users/user55.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <span class="block font-medium">
                                                Leslie Yawn
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Sports
                                    </td>
                                    <td class="text-orange-500 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $1,20,000
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        29 Apr 2025
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Shanghai, China
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Sea
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-secondary-50 dark:bg-[#15203c] text-secondary-600 rounded-sm font-medium text-xs">
                                            In Transit
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[12px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #0145
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-md w-[30px]">
                                                <img src="/assets/images/users/user59.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <span class="block font-medium">
                                                Willie Wood
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Fashion
                                    </td>
                                    <td class="text-orange-500 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $35,000
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        28 Apr 2025
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Berlin, Germany
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Road
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-orange-50 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                            On The Way
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[12px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #0247
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-md w-[30px]">
                                                <img src="/assets/images/users/user51.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <span class="block font-medium">
                                                Jill Caldera
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Food
                                    </td>
                                    <td class="text-orange-500 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $80,000
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        27 Apr 2025
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Tokyo, Japan
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Air
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Delivered
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[12px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #0299
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-md w-[30px]">
                                                <img src="/assets/images/users/user43.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <span class="block font-medium">
                                                Bill Mitchell
                                            </span>
                                        </div>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Electronics
                                    </td>
                                    <td class="text-orange-500 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $1,50,000
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        26 Apr 2025
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Madrid, Spain
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Sea
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-600 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[18px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
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

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
