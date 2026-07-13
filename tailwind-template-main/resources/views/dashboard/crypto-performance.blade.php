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

            <!-- Breadcrumb -->
            <div
                class="trezo-card bg-cover bg-no-repeat bg-center p-[20px] md:p-[25px] rounded-md mb-[25px]"
                style="background-image: url(/assets/images/sparklines/sparkline-bg.jpg);"
            >
                <div class="trezo-card-content md:flex items-center justify-between">
                    <h5 class="!mb-0 !text-white">
                        Crypto Performance
                    </h5>
                    <ol class="breadcrumb mt-[12px] md:mt-0">
                        <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0 before:text-white">
                            <a href="/dashboard" class="inline-block relative ltr:pl-[22px] rtl:pr-[22px] text-white">
                                <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-lg -mt-px text-white top-1/2 -translate-y-1/2">
                                    home
                                </i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0 text-white before:text-white">
                            Crypto Performance
                        </li>
                    </ol>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">

                <!-- Performance Per Investment -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Performance Per Investment
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
                        <div class="-mt-[15px] -mb-[15px]">
                            <div id="cryptoPerformancePerInvestmentChart"></div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">

                    <!-- Portfolio Value -->
                    <div class="trezo-card bg-primary-100 dark:bg-[#162243] py-[15px] px-[20px] md:px-[25px] rounded-md">
                        <div class="trezo-card-content flex items-center justify-between">
                            <div>
                                <span class="block">
                                    Portfolio Value
                                </span>
                                <h5 class="!mb-0 mt-[4px] !text-[20px]">
                                    $94.69B
                                </h5>
                            </div>
                            <div class="w-[53px] h-[53px] rounded-full bg-white dark:bg-[#0c1427] text-primary-500 flex items-center justify-center">
                                <i class="material-symbols-outlined">
                                    attach_money
                                </i>
                            </div>
                        </div>
                    </div>

                    <!-- Crypto Market Cap -->
                    <div class="trezo-card bg-purple-100 dark:bg-[#162243] py-[15px] px-[20px] md:px-[25px] rounded-md">
                        <div class="trezo-card-content flex items-center justify-between">
                            <div>
                                <span class="block">
                                    Crypto Market Cap
                                </span>
                                <h5 class="!mb-0 mt-[4px] !text-[20px]">
                                    $2.64T
                                </h5>
                            </div>
                            <div class="w-[53px] h-[53px] rounded-full bg-white dark:bg-[#0c1427] text-purple-500 flex items-center justify-center">
                                <i class="material-symbols-outlined">
                                    payments
                                </i>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-2">

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
                            <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                                <div class="table-responsive overflow-x-auto">
                                    <table class="w-full">
                                        <tbody class="text-black dark:text-white">
                                            <tr>
                                                <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                                <td class="text-center whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    <span class="inline-block py-[2px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                        Sold
                                                    </span>
                                                </td>
                                                <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    $68848.92
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                                <td class="text-center whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    <span class="inline-block py-[2px] px-[8px] rounded-[4px] text-xs font-medium bg-danger-100 dark:bg-[#15203c] text-danger-600">
                                                        Withdraw
                                                    </span>
                                                </td>
                                                <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    $2565.77
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                                <td class="text-center whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    <span class="inline-block py-[2px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                        Sold
                                                    </span>
                                                </td>
                                                <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    $2565.77
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                                <td class="text-center whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    <span class="inline-block py-[2px] px-[8px] rounded-[4px] text-xs font-medium bg-success-100 dark:bg-[#15203c] text-success-600">
                                                        Sold
                                                    </span>
                                                </td>
                                                <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    $1.00
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-[13px] ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                                <td class="text-center whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    <span class="inline-block py-[2px] px-[8px] rounded-[4px] text-xs font-medium bg-danger-100 dark:bg-[#15203c] text-danger-600">
                                                        Withdraw
                                                    </span>
                                                </td>
                                                <td class="text-[13px] ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[11.8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                    $0.529105
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="px-[20px] md:px-[25px] pt-[12px] sm:flex sm:items-center justify-between">
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

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Market Performance -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Market Performance
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
                            <div id="cryptoPerformanceMarketPerformanceChart"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:col-span-3">

                    <!-- Performance Metrics -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Performance Metrics
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Monthly
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
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
                            <div class="-mt-[20px] -mb-[22px]">
                                <div id="cryptoPerformanceMetricsChart"></div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

            <!-- Individual Asset Performance -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Individual Asset Performance
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
                                        Asset
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Allocation %
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        ROI
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Current Value
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Net Gain/Los
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        1D Change
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        7D Change
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Sparkline
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        35%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +120%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $35,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $15,000
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +0.5%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +3.0%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        <img src="/assets/images/sparklines/sparkline1.png" alt="sparkline-chart">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        25%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +80%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $25,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $8,000
                                    </td>
                                    <td class="text-danger-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        -1.0%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +1.5%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        <img src="/assets/images/sparklines/sparkline2.png" alt="sparkline-chart">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        15%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +30%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $7,500
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $1,500
                                    </td>
                                    <td class="text-danger-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        -2.5%
                                    </td>
                                    <td class="text-danger-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        -5.0%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        <img src="/assets/images/sparklines/sparkline3.png" alt="sparkline-chart">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        10%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +45%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $4,500
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $1,000
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +0.2%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +2.0%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        <img src="/assets/images/sparklines/sparkline4.png" alt="sparkline-chart">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        5%
                                    </td>
                                    <td class="text-danger-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        -10%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $3,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        $1,200
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +1.5%
                                    </td>
                                    <td class="text-success-600 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        +4.5%
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] border-b border-gray-100 dark:border-[#172036]">
                                        <img src="/assets/images/sparklines/sparkline5.png" alt="sparkline-chart">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="px-[20px] md:px-[25px] pt-[15px] sm:flex sm:items-center justify-between">
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
                
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="xl:col-span-1">

                    <!-- Risk & Stability Indicators -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Risk & Stability Indicators
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div id="cryptoPerformanceRiskStabilityIndicatorsChart"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="xl:col-span-2">

                    <!-- Comparative Analysis -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Comparative Analysis
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Monthly
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
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
                            <div class="-mt-[10px] -mb-[20px]">
                                <div id="cryptoPerformanceComparativeAnalysisChart"></div>
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
