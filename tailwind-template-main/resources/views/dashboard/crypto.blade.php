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

                    <!-- Cryptocurrency Watchlist -->
                    <div class="trezo-card mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Cryptocurrency Watchlist
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content relative" id="cryptocurrencyWatchlistSlides">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bg-primary-50 dark:bg-[#172036] p-[15px] md:p-[23px] rounded-md">
                                            <div class="flex items-center">
                                                <img src="/assets/images/watchlist/bitcoin.svg" class="w-[48px]" alt="bitcoin">
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="text-black dark:text-white uppercase font-medium">
                                                        Bitcoin
                                                        <span class="font-normal text-gray-500 dark:text-gray-400">
                                                            (BTC)
                                                        </span>
                                                    </span>
                                                    <h4 class="!mb-0 mt-[6px] !text-lg md:!text-[20px] !font-semibold">
                                                        $27,500
                                                        <span class="relative font-medium text-base text-success-700 -top-px ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[24px] rtl:pr-[24px]">
                                                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                                trending_up
                                                            </i>
                                                            +2.3%
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="-mt-[15px] -mb-[18px] ltr:-ml-[11px] rtl:-mr-[11px]">
                                                <div id="cryptoWatchlistBitcoinChart"></div>
                                            </div>
                                            <ul class="ltr:mr-[8px] rtl:ml-[8px] flex items-center justify-between">
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Market Cap:
                                                    </span>
                                                    $520B
                                                </li>
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Volume (24h):
                                                    </span>
                                                    $35B
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-purple-50 dark:bg-[#172036] p-[15px] md:p-[23px] rounded-md">
                                            <div class="flex items-center">
                                                <img src="/assets/images/watchlist/ethereum.svg" class="w-[48px]" alt="ethereum">
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="text-black dark:text-white uppercase font-medium">
                                                        Ethereum
                                                        <span class="font-normal text-gray-500 dark:text-gray-400">
                                                            (ETH)
                                                        </span>
                                                    </span>
                                                    <h4 class="!mb-0 mt-[6px] !text-lg md:!text-[20px] !font-semibold">
                                                        $1,750
                                                        <span class="relative font-medium text-base text-danger-700 -top-px ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[24px] rtl:pr-[24px]">
                                                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                                trending_down
                                                            </i>
                                                            -1.2%
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="-mt-[15px] -mb-[18px] ltr:-ml-[11px] rtl:-mr-[11px]">
                                                <div id="cryptoWatchlistEthereumChart"></div>
                                            </div>
                                            <ul class="ltr:mr-[8px] rtl:ml-[8px] flex items-center justify-between">
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Market Cap:
                                                    </span>
                                                    $210B
                                                </li>
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Volume (24h):
                                                    </span>
                                                    $20B
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-danger-50 dark:bg-[#172036] p-[15px] md:p-[23px] rounded-md">
                                            <div class="flex items-center">
                                                <img src="/assets/images/watchlist/solana.svg" class="w-[48px]" alt="solana">
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="text-black dark:text-white uppercase font-medium">
                                                        Solana
                                                        <span class="font-normal text-gray-500 dark:text-gray-400">
                                                            (SOL)
                                                        </span>
                                                    </span>
                                                    <h4 class="!mb-0 mt-[6px] !text-lg md:!text-[20px] !font-semibold">
                                                        $35
                                                        <span class="relative font-medium text-base text-success-700 -top-px ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[24px] rtl:pr-[24px]">
                                                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                                trending_up
                                                            </i>
                                                            +5.8%
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="-mt-[15px] -mb-[18px] ltr:-ml-[11px] rtl:-mr-[11px]">
                                                <div id="cryptoWatchlistSolanaChart"></div>
                                            </div>
                                            <ul class="ltr:mr-[8px] rtl:ml-[8px] flex items-center justify-between">
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Market Cap:
                                                    </span>
                                                    $12B
                                                </li>
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Volume (24h):
                                                    </span>
                                                    $3.5B
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-success-50 dark:bg-[#172036] p-[15px] md:p-[23px] rounded-md">
                                            <div class="flex items-center">
                                                <img src="/assets/images/watchlist/binance.svg" class="w-[48px]" alt="binance">
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="text-black dark:text-white uppercase font-medium">
                                                        Binance
                                                        <span class="font-normal text-gray-500 dark:text-gray-400">
                                                            (BNB)
                                                        </span>
                                                    </span>
                                                    <h4 class="!mb-0 mt-[6px] !text-lg md:!text-[20px] !font-semibold">
                                                        $250
                                                        <span class="relative font-medium text-base text-success-700 -top-px ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[24px] rtl:pr-[24px]">
                                                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                                trending_up
                                                            </i>
                                                            +1.5%
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="-mt-[15px] -mb-[18px] ltr:-ml-[11px] rtl:-mr-[11px]">
                                                <div id="cryptoWatchlistBinanceChart"></div>
                                            </div>
                                            <ul class="ltr:mr-[8px] rtl:ml-[8px] flex items-center justify-between">
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Market Cap:
                                                    </span>
                                                    $40B
                                                </li>
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Volume (24h):
                                                    </span>
                                                    $1.8B
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-secondary-50 dark:bg-[#172036] p-[15px] md:p-[23px] rounded-md">
                                            <div class="flex items-center">
                                                <img src="/assets/images/watchlist/cardano.svg" class="w-[48px]" alt="cardano">
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="text-black dark:text-white uppercase font-medium">
                                                        Cardano
                                                        <span class="font-normal text-gray-500 dark:text-gray-400">
                                                            (ADA)
                                                        </span>
                                                    </span>
                                                    <h4 class="!mb-0 mt-[6px] !text-lg md:!text-[20px] !font-semibold">
                                                        $0.38
                                                        <span class="relative font-medium text-base text-danger-700 -top-px ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[24px] rtl:pr-[24px]">
                                                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                                trending_down
                                                            </i>
                                                            -2.21%
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="-mt-[15px] -mb-[18px] ltr:-ml-[11px] rtl:-mr-[11px]">
                                                <div id="cryptoWatchlistCardanoChart"></div>
                                            </div>
                                            <ul class="ltr:mr-[8px] rtl:ml-[8px] flex items-center justify-between">
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Market Cap:
                                                    </span>
                                                    $40B
                                                </li>
                                                <li class="text-xs font-semibold text-black dark:text-white">
                                                    <span class="block font-medium text-gray-500 dark:text-gray-400 mb-[5px]">
                                                        Volume (24h):
                                                    </span>
                                                    $1.8B
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-box">
                                <div class="swiper-button-prev">
                                    <i class="ri-arrow-left-s-line"></i>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                        <div class="lg:col-span-2">
        
                            <!-- Market Price Statistics -->
                            <div class="trezo-card border border-gray-100 dark:border-[#172036] pt-[15px] pb-[20px] md:pb-[25px] px-[20px] md:px-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between border-b border-gray-100 dark:border-[#172036] px-[20px] md:px-[25px] pb-[15px] -mx-[20px] md:-mx-[25px]">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Market Price Statistics
                                        </h5>
                                    </div>
                                    <div class="trezo-card-subtitle sm:flex items-center gap-[25px]">
                                        <div class="my-[15px] sm:my-0">
                                            <button type="button" class="inline-block border border-gray-100 dark:border-[#172036] px-[10px] py-[1.5px] transition-all hover:bg-primary-50 dark:hover:bg-[#15203c] -mx-[3px] ltr:first:rounded-l-md rtl:first:rounded-r-lg ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                                1H
                                            </button>
                                            <button type="button" class="inline-block border border-gray-100 dark:border-[#172036] px-[10px] py-[1.5px] transition-all hover:bg-primary-50 dark:hover:bg-[#15203c] -mx-[3px] ltr:first:rounded-l-md rtl:first:rounded-r-lg ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                                24H
                                            </button>
                                            <button type="button" class="inline-block border border-gray-100 dark:border-[#172036] px-[10px] py-[1.5px] transition-all bg-primary-50 dark:bg-[#15203c] hover:bg-primary-50 dark:hover:bg-[#15203c] -mx-[3px] ltr:first:rounded-l-md rtl:first:rounded-r-lg ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                                1W
                                            </button>
                                            <button type="button" class="inline-block border border-gray-100 dark:border-[#172036] px-[10px] py-[1.5px] transition-all hover:bg-primary-50 dark:hover:bg-[#15203c] -mx-[3px] ltr:first:rounded-l-md rtl:first:rounded-r-lg ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                                1M
                                            </button>
                                            <button type="button" class="inline-block border border-gray-100 dark:border-[#172036] px-[10px] py-[1.5px] transition-all hover:bg-primary-50 dark:hover:bg-[#15203c] -mx-[3px] ltr:first:rounded-l-md rtl:first:rounded-r-lg ltr:last:rounded-r-md rtl:last:rounded-l-md">
                                                1Y
                                            </button>
                                        </div>
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn flex items-center font-semibold relative text-black dark:text-white ltr:pr-[20px] rtl:pl-[20px]" id="dropdownToggleBtn">
                                                <img src="/assets/images/cryptocurrencies/big-bitcoin.svg" class="w-[24px] ltr:mr-[6px] rtl:ml-[6px]" alt="bitcoin">
                                                Bitcoin
                                                <i class="ri-arrow-down-s-line text-[20px] absolute ltr:-right-[4px] rtl:-left-[4px] top-1/2 -translate-y-1/2"></i>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/ethereum.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="ethereum">
                                                        Ethereum
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (ETH)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/bitcoin.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="bitcoin">
                                                        Bitcoin
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (BTC)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/solana.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="solana">
                                                        Solana
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (SOL)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/cardano.png" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="cardano">
                                                        Cardano
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (ADA)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/binance.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="binance">
                                                        Binance
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (BNB)
                                                        </span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <div class="market-price-statistics md:flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="/assets/images/cryptocurrencies/big-bitcoin.svg" alt="bitcoin">
                                            <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                <span class="text-black dark:text-white uppercase font-medium">
                                                    Bitcoin
                                                    <span class="font-normal text-gray-500 dark:text-gray-400">
                                                        (BTC)
                                                    </span>
                                                </span>
                                                <h4 class="!mb-0 mt-[6px] !text-lg md:!text-[20px] !font-semibold">
                                                    $27,500
                                                    <span class="relative font-medium text-base text-success-700 -top-px ltr:ml-[2px] rtl:mr-[2px] ltr:pl-[24px] rtl:pr-[24px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                            trending_up
                                                        </i>
                                                        +2.3%
                                                    </span>
                                                </h4>
                                            </div>
                                        </div>
                                        <ul class="my-[15px] md:my-0">
                                            <li class="inline-block text-black dark:text-white font-semibold mx-[18px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                                <span class="block text-gray-500 dark:text-gray-400 mb-[5px] font-normal">
                                                    Closing Price
                                                </span>
                                                $27,200
                                            </li>
                                            <li class="inline-block text-black dark:text-white font-semibold mx-[18px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                                <span class="block text-gray-500 dark:text-gray-400 mb-[5px] font-normal">
                                                    24h Volume
                                                </span>
                                                $35B
                                            </li>
                                        </ul>
                                        <div class="trezo-card-dropdown relative ltr:-mr-[8px] rtl:-ml-[8px]">
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
                                    <div class="mt-[15px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[15px]">
                                        <div id="cryptoMarketPriceStatisticsChart"></div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <div class="lg:col-span-1">
        
                            <!-- Exchange -->
                            <div class="trezo-card bg-purple-100 dark:bg-dark p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between border-b border-gray-200 dark:border-[#172036] pb-[8px] -mx-[20px] md:-mx-[25px] px-[20px] md:px-[25px]">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Exchange
                                        </h5>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <button type="button" class="inline-block leading-none text-black dark:text-white transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined">
                                                refresh
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="trezo-card-content pb-[13px]">
                                    <div class="mb-[20px] md:mb-[25px]">
                                        <div class="flex items-center justify-between mb-[12px]">
                                            <span class="block uppercase">
                                                Selling
                                            </span>
                                            <span class="block uppercase">
                                                Max 4,238
                                            </span>
                                        </div>
                                        <div class="cryptocurrency-types relative">
                                            <button type="button" class="block w-full relative text-black dark:text-white text-md uppercase font-medium text-sm md:text-base" id="dropdownToggleBtn">
                                                <span class="flex items-center">
                                                    <img src="/assets/images/cryptocurrencies/big-ethereum.svg" class="ltr:mr-[10px] rtl:ml-[10px]" alt="ethereum">
                                                    Ethereum
                                                    <span class="ltr:ml-[5px] rtl:mr-[5px] font-normal text-gray-500 dark:text-gray-400">
                                                        (ETH)
                                                    </span>
                                                </span>
                                                <i class="ri-arrow-down-s-line absolute ltr:-right-[4px] rtl:-left-[4px] text-[22px] top-1/2 -translate-y-1/2"></i>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu mt-[10px] transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:left-0 rtl:right-0 w-full z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/ethereum.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="ethereum">
                                                        Ethereum
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (ETH)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/bitcoin.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="bitcoin">
                                                        Bitcoin
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (BTC)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/solana.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="solana">
                                                        Solana
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (SOL)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/cardano.png" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="cardano">
                                                        Cardano
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (ADA)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/binance.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="binance">
                                                        Binance
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (BNB)
                                                        </span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="relative mt-[15px]">
                                            <label class="absolute ltr:left-[20px] rtl:right-[20px] text-xs top-[8px]">
                                                ETH
                                            </label>
                                            <input type="text" class="block w-full bg-white dark:bg-[#0c1427] border border-white dark:border-[#0c1427] rounded-md font-bold text-black dark:text-white px-[20px] h-[50px] pt-[16px] outline-0" value="1">
                                            <span class="absolute ltr:right-[20px] rtl:left-[20px] inline-block top-1/2 -translate-y-1/2">
                                                $1750
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mb-[20px] md:mb-[25px]">
                                        <div class="flex items-center justify-between mb-[12px]">
                                            <span class="block uppercase">
                                                Buying
                                            </span>
                                        </div>
                                        <div class="cryptocurrency-types relative">
                                            <button type="button" class="block w-full relative text-black dark:text-white text-md uppercase font-medium text-sm md:text-base" id="dropdownToggleBtn">
                                                <span class="flex items-center">
                                                    <img src="/assets/images/cryptocurrencies/big-solana.svg" class="ltr:mr-[10px] rtl:ml-[10px]" alt="solana">
                                                    Solana
                                                    <span class="ltr:ml-[5px] rtl:mr-[5px] font-normal text-gray-500 dark:text-gray-400">
                                                        (SOL)
                                                    </span>
                                                </span>
                                                <i class="ri-arrow-down-s-line absolute ltr:-right-[4px] rtl:-left-[4px] text-[22px] top-1/2 -translate-y-1/2"></i>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu mt-[10px] transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:left-0 rtl:right-0 w-full z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/ethereum.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="ethereum">
                                                        Ethereum
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (ETH)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/bitcoin.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="bitcoin">
                                                        Bitcoin
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (BTC)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/solana.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="solana">
                                                        Solana
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (SOL)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/cardano.png" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="cardano">
                                                        Cardano
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (ADA)
                                                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="flex items-center w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        <img src="/assets/images/cryptocurrencies/binance.svg" class="w-[22px] ltr:mr-[8px] rtl:ml-[8px]" alt="binance">
                                                        Binance
                                                        <span class="font-normal ltr:ml-[3px] rtl:mr-[3px] text-gray-500 dark:text-gray-400">
                                                            (BNB)
                                                        </span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="relative mt-[15px]">
                                            <label class="absolute ltr:left-[20px] rtl:right-[20px] text-xs top-[8px]">
                                                SOL
                                            </label>
                                            <input type="text" class="block w-full bg-white dark:bg-[#0c1427] border border-white dark:border-[#0c1427] rounded-md font-bold text-black dark:text-white px-[20px] h-[50px] pt-[16px] outline-0" value="75">
                                            <span class="absolute ltr:right-[20px] rtl:left-[20px] inline-block top-1/2 -translate-y-1/2">
                                                $35
                                            </span>
                                        </div>
                                    </div>
                                    <button class="py-[11px] px-[30px] block w-full text-center font-medium md:text-md rounded-md bg-primary-500 text-white transition-all hover:bg-primary-400" type="button">
                                        Exchange
                                    </button>
                                </div>
                            </div>
        
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-3">

                    <!-- Transactions History -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Transactions History
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[10px] sm:mt-0">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Oct 01 - Oct 31, 2025
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Sep 01 - Sep 30, 2025
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Aug 01 - Aug 31, 2025
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Jul 01 - Jul 31, 2025
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
                                            <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Coin
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Date
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Amount
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Price
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Type
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Total Value
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-09-10
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                0.50 BTC
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $27,500
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-success-100 dark:bg-[#15203c] text-success-600 inline-block rounded-sm font-medium text-xs">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $13,500
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-09-08
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                5.00 ETH
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $1,750
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-danger-100 dark:bg-[#15203c] text-danger-500 inline-block rounded-sm font-medium text-xs">
                                                    Sell
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $8,750
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-09-05
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                100 SOL
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $250
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-success-100 dark:bg-[#15203c] text-success-600 inline-block rounded-sm font-medium text-xs">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $3,500
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-08-30
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                10 BNB
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $1.00
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-success-100 dark:bg-[#15203c] text-success-600 inline-block rounded-sm font-medium text-xs">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $2,500
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-08-25
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                1,000 ADA
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.50
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-danger-100 dark:bg-[#15203c] text-danger-500 inline-block rounded-sm font-medium text-xs">
                                                    Sell
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $250
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-08-20
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                0.40 BTC
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $35
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-danger-100 dark:bg-[#15203c] text-danger-500 inline-block rounded-sm font-medium text-xs">
                                                    Sell
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $11,800
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                2025-08-15
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                3.00 USDC
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $0.9999
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="py-[3px] px-[8px] bg-success-100 dark:bg-[#15203c] text-success-600 inline-block rounded-sm font-medium text-xs">
                                                    Buy
                                                </span>
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                                $5,400
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pt-[10px] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
                                    Showing 7 of 36 results
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
                <div class="lg:col-span-2">

                    <!-- Portfolio -->
                    <div class="trezo-card bg-primary-600 bg-left-bottom bg-no-repeat bg-contain p-[20px] md:p-[25px] rounded-md" style="background-image: url(/assets/images/portfolio-bg.jpg);">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-white">
                                    Portfolio
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content relative z-[1] md:mt-[27px]">
                            <div class="flex items-center mb-[20px] md:mb-[26px]">
                                <img src="/assets/images/icons/total-balance.svg" alt="total-balance">
                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                    <span class="block uppercase text-white">
                                        Total balance
                                    </span>
                                    <h4 class="!mb-0 !text-white !font-semibold mt-[6px] !text-lg md:!text-[20px]">
                                        $78,350.00
                                        <span class="font-medium relative text-base ltr:ml-[3px] rtl:mr-[3px] ltr:pl-[25px] rtl:pr-[25px] text-success-100">
                                            <i class="material-symbols-outlined absolute !text-[20px] ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                trending_up
                                            </i>
                                            +2.3%
                                        </span>
                                    </h4>
                                </div>
                            </div>
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead class="text-white">
                                        <tr>
                                            <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Coin
                                            </th>
                                            <th class="font-medium text-xs text-center px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Amount
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Total Value
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-white">
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                Bitcoin <span class="text-xs font-normal">(BTC)</span>
                                            </td>
                                            <td class="font-medium text-center whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                0.50 BTC
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                $13,500
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                Ethereum <span class="text-xs font-normal">(ETH)</span>
                                            </td>
                                            <td class="font-medium text-center whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                5.00 ETH
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                $8,750
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                Binance <span class="text-xs font-normal">(BNB)</span>
                                            </td>
                                            <td class="font-medium text-center whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                100 SOL
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                $3,500
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                Tether <span class="text-xs font-normal">(USDT)</span>
                                            </td>
                                            <td class="font-medium text-center whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                10 BNB
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                $2,500
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                XRP <span class="text-xs font-normal">(XRP)</span>
                                            </td>
                                            <td class="font-medium text-center whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                1,000 ADA
                                            </td>
                                            <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b !border-primary-400">
                                                $250
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ltr:text-right rtl:text-left">
                                <a href="#" class="inline-block px-[12px] py-[4px] rounded-md text-white font-medium border border-primary-400 transition-all hover:bg-primary-400 mt-[20px] md:mt-[28px]">
                                    <span class="inline-block relative ltr:pr-[17px] rtl:pl-[17px]">
                                        View All Portfolio
                                        <i class="ri-arrow-right-s-line absolute ltr:-right-[6px] rtl:-left-[6px] text-[20px] top-1/2 -translate-y-1/2"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="absolute ltr:right-0 rtl:left-0 -top-[55px] -z-[1] hidden md:block">
                                <img src="/assets/images/sphere-bowl.png" alt="sphere-bowl">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Crypto Rankings -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Crypto Rankings
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle mt-[10px] sm:mt-0">
                        <div class="trezo-card-dropdown relative">
                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                    Oct 01 - Oct 31, 2025
                                    <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                </span>
                            </button>
                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                <li>
                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                        Sep 01 - Sep 30, 2025
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                        Aug 01 - Aug 31, 2025
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                        Jul 01 - Jul 31, 2025
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
                                    <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        Rank
                                    </th>
                                    <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        Cryptocurrency
                                    </th>
                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        Market Cap
                                    </th>
                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        Price
                                    </th>
                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        24h Change %
                                    </th>
                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        7d Change %
                                    </th>
                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        Value 24h
                                    </th>
                                    <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                        Circulating Supply
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        1
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $520B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $27,500
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +2.3%
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +10.2%
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $35B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        19M BTC
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        2
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $210B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $1,750
                                    </td>
                                    <td class="font-medium text-orange-600 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        -1.2%
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +6.3%
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $20B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        120M ETH
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        3
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $40B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $250
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +1.5%
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +7.8%
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $1.8B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        160M BNB
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        4
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $83B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $1.00
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +0.01%
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +0.02%
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $45B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        83B USDT
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        5
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $25B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $0.50
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +0.9%
                                    </td>
                                    <td class="font-medium text-danger-600 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        -8.6%
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $2.2B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        50B XRP
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        6
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $12B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $35
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +5.8%
                                    </td>
                                    <td class="font-medium text-success-700 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        +15.5%
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        $3.5B
                                    </td>
                                    <td class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[10px] border-b border-gray-100 dark:border-[#172036]">
                                        400M SOL
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pt-[10px] sm:flex sm:items-center justify-between">
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

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
