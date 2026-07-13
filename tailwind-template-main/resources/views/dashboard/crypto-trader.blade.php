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

            <!-- Stats -->
            <div
                class="trezo-card bg-cover bg-no-repeat bg-center p-[20px] md:p-[25px] rounded-md mb-[25px]"
                style="background-image: url(/assets/images/sparklines/sparkline-bg.jpg);"
            >
                <div class="trezo-card-content">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px]">
                        <div class="p-[20px] md:p-[25px] rounded-md bg-white dark:bg-[#0c1427]">
                            <span class="block">
                                Total Value of all Crypto
                            </span>
                            <h4 class="!mb-0 mt-[5px] !text-[20px]">
                                $597.655B
                            </h4>
                        </div>
                        <div class="p-[20px] md:p-[25px] rounded-md bg-white dark:bg-[#0c1427]">
                            <span class="block">
                                First Trade Volume
                            </span>
                            <h4 class="!mb-0 mt-[5px] !text-[20px]">
                                $21.953M <span class="text-base font-normal text-gray-500 dark:text-gray-400">(1 Jan, 2025)</span>
                            </h4>
                        </div>
                        <div class="p-[20px] md:p-[25px] rounded-md bg-white dark:bg-[#0c1427]">
                            <span class="block">
                                Last Trade Volume
                            </span>
                            <h4 class="!mb-0 mt-[5px] !text-[20px]">
                                $25.965B <span class="text-base font-normal text-gray-500 dark:text-gray-400">(1 Nov, 2025)</span>
                            </h4>
                        </div>
                        <div class="p-[20px] md:p-[25px] rounded-md bg-white dark:bg-[#0c1427]">
                            <span class="block">
                                Crypto Total Market Cap
                            </span>
                            <h4 class="!mb-0 mt-[5px] !text-[20px]">
                                $1.36T
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="xl:col-span-2">

                    <!-- Price Movement -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Price Movement
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <button type="button" class="inline-block transition-all w-[40px] h-[30px] rounded-[4px] border border-primary-500 dark:border-[#172036] bg-primary-500 text-white mx-[1px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                                    1h
                                </button>
                                <button type="button" class="inline-block transition-all w-[40px] h-[30px] rounded-[4px] border border-gray-100 dark:border-[#172036] hover:bg-primary-500 hover:text-white hover:border-primary-500 mx-[1px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                                    1d
                                </button>
                                <button type="button" class="inline-block transition-all w-[40px] h-[30px] rounded-[4px] border border-gray-100 dark:border-[#172036] hover:bg-primary-500 hover:text-white hover:border-primary-500 mx-[1px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                                    1w
                                </button>
                                <button type="button" class="inline-block transition-all w-[40px] h-[30px] rounded-[4px] border border-gray-100 dark:border-[#172036] hover:bg-primary-500 hover:text-white hover:border-primary-500 mx-[1px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                                    1m
                                </button>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mt-[18px] -mb-[15px]">
                                <div id="cryptoTraderPriceMovementChart1"></div>
                                <div id="cryptoTraderPriceMovementChart2" class="-mt-[12px]"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="xl:col-span-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 gap-[25px]">

                        <!-- Trading Volume -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header flex items-center justify-between">
                                <div class="trezo-card-title flex items-center gap-[15px]">
                                    <div>
                                        <span class="block mb-[3px]">
                                            Trading Volume
                                        </span>
                                        <h5 class="!mb-0 !text-[20px]">
                                            $117,950
                                        </h5>
                                    </div>
                                    <span class="inline-block text-xs font-medium px-[8px] text-success-600 border border-success-600 bg-success-100 text-sm rounded-[100px] dark:bg-[#15203c] dark:border-[#15203c]">
                                        +7.6%
                                    </span>
                                </div>
                                <div class="trezo-card-subtitle">
                                    Last 7 days
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mb-[25px] -mt-[3px]">
                                    <div id="cryptoTraderTradingVolumeChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Distribution -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Portfolio Distribution
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
                                <div class="-mt-[5px] -mb-[5px]">
                                    <div id="cryptoTraderPortfolioDistributionChart"></div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px] mb-[25px]">

                        <!-- Profit & Loss -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Profit & Loss
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
                                <div class="-mt-[22px] -mb-[20px]">
                                    <div id="cryptoTraderProfitLossChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Risk Exposure -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between relative z-[1]">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Risk Exposure
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
                                <div class="-mt-[55px] -mb-[47px] ltr:-ml-[17px] rtl:-mr-[17px]">
                                    <div id="cryptoTraderRiskExposureChart"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Recent Transactions -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Transactions
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
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Date
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Asset
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Type
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Amount
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Price
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Total Value
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-10-31
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Bitcoin
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                0.5 BTC
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $34,000
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $17,000
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Done
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-10-30
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Ethereum
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-danger-100 dark:bg-[#15203c] text-danger-600">
                                                    Sell
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2 ETH
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $1,800
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $3,600
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Done
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-10-29
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Tether
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $1.00
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $175
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $1,750
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-danger-100 dark:bg-[#15203c] text-danger-600">
                                                    Failed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-10-28
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                USD Coin
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-danger-100 dark:bg-[#15203c] text-danger-600">
                                                    Sell
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.9999
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $230
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $1,150
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Done
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-10-27
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Cardano
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                5000 DOGE
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.07
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $350
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-warning-50 dark:bg-[#15203c] text-warning-700">
                                                    Pending
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-10-26
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Tron
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                142 TRX
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.192391	
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $350
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="inline-block py-[4px] px-[8px] rounded-[4px] text-xs font-medium bg-danger-100 dark:bg-[#15203c] text-danger-600">
                                                    Failed
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-[20px] md:px-[25px] pt-[14px] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
                                    Showing 6 of 36 results
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

                    <!-- Live Price Tracker -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Live Price Tracker
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
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/bitcoin.svg">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        Bitcoin
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(BTC)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $68848.92
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/ethereum.svg">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        Ethereum
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(ETH)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $2565.77
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/binance.svg">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        Binance
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(BNB)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $2565.77
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/tether.svg">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        Tether
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(USDT)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $1.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/xrp.svg">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        XRP
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(XRP)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.529105
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/solana.svg">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        Solana
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(SOL)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $179.44
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/usdc.png">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        USDC
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(USDC)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $1.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[22px]">
                                                        <img alt="cryptocurrency-image" src="/assets/images/cryptocurrencies/tron.png">
                                                    </div>
                                                    <span class="block font-medium ltr:ml-[8px] rtl:mr-[8px]">
                                                        Tron
                                                        <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">(TRX)</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.192391
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-[20px] md:px-[25px] pt-[15px] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
                                    Showing 8 of 36 results
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

                    <!-- Trades Per Month -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Trades Per Month
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mt-[18px] -mb-[15px]">
                                <div id="cryptoTraderTradesPerMonthChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- Asset Allocation -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Asset Allocation
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            Last 30 Days
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <span class="block">
                            Total Value
                        </span>
                        <h5 class="!mb-0 mt-[5px] !text-[20px]">
                            $17,485
                        </h5>
                        <div class="-mt-[15px]">
                            <div id="cryptoTraderAssetAllocationChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Gainers & Losers -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Gainers & Losers
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            Timeframe: 24h
                        </div>
                    </div>
                    <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                        <div class="table-responsive overflow-x-auto">
                            <table class="w-full">
                                <tbody class="text-black dark:text-white">
                                    <tr class="group">
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            Goatseus Maximus
                                        </td>
                                        <td class="text-gray-500 dark:text-gray-400 text-center whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            $0.719
                                        </td>
                                        <td class="text-success-600 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            + 47.44%
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            Uniswap
                                        </td>
                                        <td class="text-gray-500 dark:text-gray-400 text-center whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            $9.15
                                        </td>
                                        <td class="text-danger-500 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            - 31.87%
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            Aave
                                        </td>
                                        <td class="text-gray-500 dark:text-gray-400 text-center whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            $161.05
                                        </td>
                                        <td class="text-success-600 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            + 23.94%
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            Bittenso
                                        </td>
                                        <td class="text-gray-500 dark:text-gray-400 text-center whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            $526.97
                                        </td>
                                        <td class="text-danger-500 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            - 22.94%
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            Injective
                                        </td>
                                        <td class="text-gray-500 dark:text-gray-400 text-center whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            $20.87
                                        </td>
                                        <td class="text-success-600 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            + 21.41%
                                        </td>
                                    </tr>
                                    <tr class="group">
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            Monero
                                        </td>
                                        <td class="text-gray-500 dark:text-gray-400 text-center whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            $209.38
                                        </td>
                                        <td class="text-danger-500 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.9px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036] text-[13px] group-last:pb-0 group-last:border-b-0 group-first:pt-0 group-first:!border-t-0">
                                            - 0.84%
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Market Sentiment Indicator -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Market Sentiment Indicator
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="-mt-[30px]">
                            <div id="cryptoTraderMarketSentimentIndicatorChart"></div>
                        </div>
                        <div class="flex mx-auto justify-center items-center flex-wrap text-xs max-w-[315px] gap-[13px] -mt-[30px]">
                            <div class="flex items-center gap-[5px]">
                                <span>
                                    🟢
                                </span>
                                Extreme Greed
                            </div>
                            <div class="flex items-center gap-[5px]">
                                <span>
                                    🟢 
                                </span>
                                Greed
                            </div>
                            <div class="flex items-center gap-[5px]">
                                <span>
                                    🟡 
                                </span>
                                Neutral
                            </div>
                            <div class="flex items-center gap-[5px]">
                                <span>
                                    🟠 
                                </span>
                                Fear
                            </div>
                            <div class="flex items-center gap-[5px]">
                                <span>
                                    🔴 
                                </span>
                                Extreme Fear
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
