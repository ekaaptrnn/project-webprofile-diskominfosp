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

                    <!-- Stats -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md mb-[25px]">
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-[10px]">
                                <div class="bg-primary-100 dark:bg-[#0a0e19] p-[20px] rounded-md">
                                    <span class="block">
                                        New Bookings
                                    </span>
                                    <h1 class="!leading-none !text-2xl !font-black mt-[5px] !mb-[11px]">
                                        1540
                                    </h1>
                                    <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px]">
                                        -4.15%
                                    </span>
                                    <div class="bg-white dark:bg-[#0c1427] rounded-full w-[79px] h-[79px] flex items-center justify-end -mt-[14px] ltr:ml-auto rtl:mr-auto">
                                        <img src="/assets/images/icons/add-event2.svg" alt="add-event">
                                    </div>
                                </div>
                                <div class="bg-orange-100 dark:bg-[#0a0e19] p-[20px] rounded-md">
                                    <span class="block">
                                        Check In
                                    </span>
                                    <h1 class="!leading-none !text-2xl !font-black mt-[5px] !mb-[11px]">
                                        245
                                    </h1>
                                    <span class="inline-block text-xs px-[9px] text-success-700 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                        +3.4%
                                    </span>
                                    <div class="bg-white dark:bg-[#0c1427] rounded-full w-[79px] h-[79px] flex items-center justify-end -mt-[14px] ltr:ml-auto rtl:mr-auto">
                                        <img src="/assets/images/icons/check-in-desk.svg" alt="check-in-desk">
                                    </div>
                                </div>
                                <div class="bg-purple-100 dark:bg-[#0a0e19] p-[20px] rounded-md">
                                    <span class="block">
                                        Check Out
                                    </span>
                                    <h1 class="!leading-none !text-2xl !font-black mt-[5px] !mb-[11px]">
                                        315
                                    </h1>
                                    <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px]">
                                        -1.4%
                                    </span>
                                    <div class="bg-white dark:bg-[#0c1427] rounded-full w-[79px] h-[79px] flex items-center justify-end -mt-[14px] ltr:ml-auto rtl:mr-auto">
                                        <img src="/assets/images/icons/point.svg" alt="point">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">

                        <!-- Rooms Availability -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header relative z-[2] mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Rooms Availability
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-100 dark:hover:bg-dark" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                Daily
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Daily
                                                </button>
                                            </li>
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
                                <div class="-mt-[40px]">
                                    <div id="hotelRoomsAvailabilityChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Guest Activity -->
                        <div class="trezo-card bg-secondary-600 p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0 !text-white">
                                        Guest Activity
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md bg-[#ffffff1a] text-white py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-secondary-500" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                Daily
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                            </span>
                                        </button>
                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Daily
                                                </button>
                                            </li>
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
                                <div class="-mt-[20px] -mb-[20px] ltr:-ml-[12px] rtl:-mr-[12px] ltr:-mr-[20px] rtl:-ml-[20px]">
                                    <div id="hotelGuestActivityChart"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Upcoming VIP Reservations -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Upcoming VIP Reservations
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
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Code
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Room
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Customer
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Duration
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    TRZ-32
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <a href="#" class="font-semibold text-black dark:text-white hover:text-primary-500 transition-all">
                                                    Deluxe Room - G - 3215
                                                </a>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400">
                                                    Angela Carter
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px]">
                                                    10 Dec - 15 Dec
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    TRZ-34
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <a href="#" class="font-semibold text-black dark:text-white hover:text-primary-500 transition-all">
                                                    Sweet Suite - S - 1265
                                                </a>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400">
                                                    Walter White
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px]">
                                                    12 Dec - 16 Dec
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    TRZ-42
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <a href="#" class="font-semibold text-black dark:text-white hover:text-primary-500 transition-all">
                                                    The Queensland - Q32
                                                </a>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400">
                                                    Zennifer Loren
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px]">
                                                    15 Dec - 20 Dec
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    TRZ-15
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <a href="#" class="font-semibold text-black dark:text-white hover:text-primary-500 transition-all">
                                                    Sweet Suite - S - 3214
                                                </a>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400">
                                                    Johna Mandala
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px]">
                                                    11 Dec - 14 Dec
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    TRZ-29
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <a href="#" class="font-semibold text-black dark:text-white hover:text-primary-500 transition-all">
                                                    Deluxe Room - F - 7213
                                                </a>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-500 dark:text-gray-400">
                                                    Viktor James
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px]">
                                                    10 Dec - 15 Dec
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
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
                            <div class="pt-[10px] sm:flex sm:items-center justify-between">
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
                <div class="lg:col-span-1">

                    <!-- Recent Bookings -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Bookings
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[12px] sm:mt-0">
                                <div class="inline-block py-[6.5px] px-[19px] bg-[#f5f7f8] dark:bg-[#0a0e19] rounded-md" id="currentDayDate">
                                    <span class="inline-block relative ltr:pr-[22px] rtl:pl-[22px]">
                                        <span id="currentDate"></span>
                                        <i class="ri-calendar-2-line absolute text-lg top-1/2 -translate-y-1/2 ltr:-right-[3px] rtl:-left-[3px]"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div id="workingScheduleCalendar">
                                <div class="header flex items-center justify-between mb-[16px]">
                                    <button id="prevBtn" class="transition-all text-black bg-[#E6EFF2] dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                        <i class="material-symbols-outlined">
                                            chevron_left
                                        </i>
                                    </button>
                                    <span id="monthYear" class="block font-medium text-black dark:text-white"></span>
                                    <button id="nextBtn" class="transition-all text-black bg-[#E6EFF2] dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                        <i class="material-symbols-outlined">
                                            chevron_right
                                        </i>
                                    </button>
                                </div>
                                <div class="calendar recent-appointments-calendar grid grid-cols-7 text-center">
                                    <!-- Days of the week -->
                                    <div class="days">Sun</div>
                                    <div class="days">Mon</div>
                                    <div class="days">Tue</div>
                                    <div class="days">Wed</div>
                                    <div class="days">Thu</div>
                                    <div class="days">Fri</div>
                                    <div class="days">Sat</div>
                                    <!-- Dates will be injected here by JavaScript -->
                                </div>
                            </div>
                            <div class="schedule-list h-[597px] overflow-y-scroll ltr:-mr-[20px] ltr:md:-mr-[25px] rtl:-ml-[20px] rtl:md:-ml-[25px] ltr:pr-[20px] ltr:md:pr-[25px] rtl:pl-[20px] rtl:md:pl-[25px] mt-[20px] md:mt-[25px]">
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room1.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                Deluxe Room - G - 3215
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Angela Carter</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            10 Dec - 15 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room2.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Garden Suite 101
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Jack Smith</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            12 Dec - 16 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room3.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Tranquil S-02
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Jennifer Anderson</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            15 Dec - 20 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room4.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Queen - X - 231
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Angela Carter</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            11 Dec - 14 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room5.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Velvet - F - 32045
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Skyler White</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            11 Dec - 14 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room1.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                Deluxe Room - G - 3215
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Angela Carter</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            10 Dec - 15 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room2.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Garden Suite 101
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Jack Smith</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            12 Dec - 16 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room3.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Tranquil S-02
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Jennifer Anderson</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            15 Dec - 20 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room4.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Queen - X - 231
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Angela Carter</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            11 Dec - 14 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                <div class="relative flex items-center gap-[15px] mt-[15px] pt-[15px] border-t border-gray-100 dark:border-[#172036] first:border-t-0 first:pt-0 first:mt-0">
                                    <a href="#" class="image block rounded-[4px] w-[80px]">
                                        <img src="/assets/images/rooms/room5.jpg" class="rounded-[4px]" alt="room-image">
                                    </a>
                                    <div>
                                        <h6 class="!font-semibold !mb-[6px]">
                                            <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                                The Velvet - F - 32045
                                            </a>
                                        </h6>
                                        <span class="block text-xs">
                                            Booked by <strong class="font-semibold">Skyler White</strong>
                                        </span>
                                        <span class="inline-block text-xs px-[8px] text-primary-500 bg-primary-50 dark:bg-[#15203c] py-[3px] font-medium rounded-[4px] mt-[9px]">
                                            11 Dec - 14 Dec
                                        </span>
                                    </div>
                                    <a href="#" class="flex items-center justify-center absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2 w-[30px] h-[30px] rounded-full bg-gray-100 dark:bg-[#172036] transition-all hover:bg-primary-500 hover:text-white">
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Popular Rooms -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Popular Rooms
                        </h5>
                    </div>
                </div>
                <div class="trezo-card-content relative" id="popularRoomsSlides">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="relative">
                                    <a href="#" class="block rounded-md">
                                        <img src="/assets/images/rooms/room6.jpg" alt="room-image" class="rounded-md">
                                    </a>
                                    <span class="inline-block text-xs font-medium px-[9px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px] absolute top-[10px] ltr:right-[10px] rtl:left-[10px]">
                                        Booked
                                    </span>
                                </div>
                                <h6 class="!font-semibold mt-[15px] !mb-[5px] !text-md">
                                    <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                        The Velvet - F - 32045
                                    </a>
                                </h6>
                                <span class="block">
                                    Code <strong class="font-semibold">SJ-32056</strong>
                                </span>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative">
                                    <a href="#" class="block rounded-md">
                                        <img src="/assets/images/rooms/room7.jpg" alt="room-image" class="rounded-md">
                                    </a>
                                    <span class="inline-block text-xs font-medium px-[9px] text-success-700 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px] absolute top-[10px] ltr:right-[10px] rtl:left-[10px]">
                                        Available
                                    </span>
                                </div>
                                <h6 class="!font-semibold mt-[15px] !mb-[5px] !text-md">
                                    <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                        Deluxe Room - G - 3215
                                    </a>
                                </h6>
                                <span class="block">
                                    Code <strong class="font-semibold">SJ-56721</strong>
                                </span>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative">
                                    <a href="#" class="block rounded-md">
                                        <img src="/assets/images/rooms/room8.jpg" alt="room-image" class="rounded-md">
                                    </a>
                                    <span class="inline-block text-xs font-medium px-[9px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px] absolute top-[10px] ltr:right-[10px] rtl:left-[10px]">
                                        Booked
                                    </span>
                                </div>
                                <h6 class="!font-semibold mt-[15px] !mb-[5px] !text-md">
                                    <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                        The Garden Suite 101
                                    </a>
                                </h6>
                                <span class="block">
                                    Code <strong class="font-semibold">SJ-54214</strong>
                                </span>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative">
                                    <a href="#" class="block rounded-md">
                                        <img src="/assets/images/rooms/room9.jpg" alt="room-image" class="rounded-md">
                                    </a>
                                    <span class="inline-block text-xs font-medium px-[9px] text-success-700 border border-success-500 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px] absolute top-[10px] ltr:right-[10px] rtl:left-[10px]">
                                        Available
                                    </span>
                                </div>
                                <h6 class="!font-semibold mt-[15px] !mb-[5px] !text-md">
                                    <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                        The Tranquil S-02
                                    </a>
                                </h6>
                                <span class="block">
                                    Code <strong class="font-semibold">SJ-45672</strong>
                                </span>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative">
                                    <a href="#" class="block rounded-md">
                                        <img src="/assets/images/rooms/room6.jpg" alt="room-image" class="rounded-md">
                                    </a>
                                    <span class="inline-block text-xs font-medium px-[9px] text-danger-700 border border-danger-400 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-[100px] absolute top-[10px] ltr:right-[10px] rtl:left-[10px]">
                                        Booked
                                    </span>
                                </div>
                                <h6 class="!font-semibold mt-[15px] !mb-[5px] !text-md">
                                    <a href="#" class="text-black dark:text-white hover:text-primary-500 transition-all">
                                        The Velvet - F - 32045
                                    </a>
                                </h6>
                                <span class="block">
                                    Code <strong class="font-semibold">SJ-32056</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Customer Reviews -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Customer Reviews
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
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        User ID
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Customer Name
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Ratings
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Reviews
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Date
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0"></th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #001
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[30px]">
                                                <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Joanna Watson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px] font-semibold">
                                                5.0
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="whitespace-normal w-[620px]">
                                            <span class="block text-xs mb-[5px] font-semibold text-gray-600 dark:text-gray-400">
                                                Amazing Ambiance and Delicious Food!
                                            </span>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                                Trezo was a fantastic dining experience. The ambiance is warm and inviting, perfect for a date night or celebration. I ordered the truffle pasta, which was rich and perfectly seasoned. The service was impeccable, and the staff made us feel like family. Highly recommend!
                                            </p>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            13 Nov, 25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #002
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[30px]">
                                                <img src="/assets/images/users/user59.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Jenelia Anderson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px] font-semibold">
                                                4.9
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-normal px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top w-[620px]">
                                        <span class="block text-xs mb-[5px] font-semibold text-gray-600 dark:text-gray-400">
                                            Best Brunch Spot in Town
                                        </span>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            Visited Trezo for brunch with friends, and it exceeded our expectations. The avocado toast was fresh, and their mimosas were spot-on. Our server was attentive without being intrusive. Definitely coming back!
                                        </p>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            14 Nov, 25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #003
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[30px]">
                                                <img src="/assets/images/users/user60.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Jonathon Ronan
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px] font-semibold">
                                                4.0
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-normal px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top w-[620px]">
                                        <span class="block text-xs mb-[5px] font-semibold text-gray-600 dark:text-gray-400">
                                            Good Food, Slow Service
                                        </span>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            The food at Trezo was delicious, but the service was a bit slow. We had to wait a while for our appetizers, and our main course was delayed. It’s a nice spot, but they could work on speeding up their service.
                                        </p>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            15 Nov, 25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
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
                    <div class="pt-[11px] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-xs">
                            Showing 3 of 36 results
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
