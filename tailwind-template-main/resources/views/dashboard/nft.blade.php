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

            <div class="mb-[25px] relative z-[1] pt-[20px] md:pt-[40px] lg:pt-[55px] px-[20px] md:px-[33px] rounded-md" id="allNFTSlides">
                <div class="lg:flex justify-between mb-[20px] md:mb-[30px] lg:mb-[50px] lg:px-[7px]">
                    <div>
                        <h3 class="!text-white !text-xl md:!text-2xl !mb-[5px]">
                            Manage Your NFT From One Place
                        </h3>
                        <p class="text-gray-300">
                            The world’s first and largest digital marketplace for discover, collect, sell and create your own NFTs.
                        </p>
                    </div>
                    <div>
                        <a href="/dashboard/create-nft" class="text-[15px] md:text-md mt-[15px] lg:mt-[3px] rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[30px] transition-all hover:bg-primary-400 inline-block">
                            Create NFT
                        </a>
                    </div>
                </div>
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft1.gif);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35246
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                Christmas Eve
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        5.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft2.jpg);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35247
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                Rotating Panda
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">10.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        12.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.5/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft3.gif);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35228
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                Cookies Live
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">8.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        9.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.7/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft4.gif);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35246
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                World Savior
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        5.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft1.gif);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35246
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                Christmas Eve
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        5.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft2.jpg);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35247
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                Rotating Panda
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">10.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        12.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.5/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft3.gif);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35228
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                Cookies Live
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">8.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        9.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.7/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                <div
                                    class="h-[270px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                    style="background-image: url(/assets/images/nfts/nft4.gif);"
                                ></div>
                                <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                        <div>
                                            <span class="block text-xs">
                                                NFT ID: 35246
                                            </span>
                                            <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                World Savior
                                            </a>
                                        </div>
                                    </div>
                                    <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                </div>
                                <span class="block text-xs mb-[4px]">
                                    Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.75 ETH</span>
                                </span>
                                <div class="flex items-center justify-between pb-[5px]">
                                    <span class="block font-semibold text-primary-800">
                                        5.50 ETH
                                    </span>
                                    <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                        <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nft-swiper-button-prev absolute cursor-pointer ltr:-left-[8px] rtl:-right-[8px] bottom-[145px] w-[25px] md:w-[30px] h-[25px] md:h-[30px] rounded-full bg-black text-primary-200 text-center leading-[24px] md:leading-[29px] transition-all hover:bg-primary-500 text-white">
                    <i class="ri-arrow-left-line"></i>
                </div>
                <div class="nft-swiper-button-next absolute cursor-pointer ltr:-right-[8px] rtl:-left-[8px] bottom-[145px] w-[25px] md:w-[30px] h-[25px] md:h-[30px] rounded-full bg-black text-primary-200 text-center leading-[24px] md:leading-[29px] transition-all hover:bg-primary-500 text-white">
                    <i class="ri-arrow-right-line"></i>
                </div>
                <div class="absolute top-0 left-0 right-0 rounded-md -z-[1] h-[54%]" style="background: linear-gradient(92deg, #23272E 7.31%, #3F5272 97.89%);"></div>
                <img src="/assets/images/nfts/shape.png" class="absolute top-0 ltr:right-0 rtl:left-0 -z-[1]" alt="shape">
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Ethereum Rate -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <span class="block mb-[7px]">
                                Ethereum Rate
                            </span>
                            <div class="flex items-center gap-[10px]">
                                <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                    $1,528
                                </h3>
                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 text-sm rounded-[100px]">
                                    +5.4%
                                </span>
                            </div>
                            <span class="block text-xs mt-[9px]">
                                vs previous 30 days
                            </span>
                            <div class="mt-[20px] md:mt-[25px] flex items-center gap-[30px]">
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
                            <div id="nftEthereumRateChart"></div>
                            <ul>
                                <li class="flex items-center justify-between mb-[18px] last:mb-0">
                                    <span class="block text-xs font-semibold">
                                        11:30 AM
                                    </span>
                                    <span class="block text-xs font-semibold text-gray-700 dark:text-gray-400">
                                        $3,605.08
                                    </span>
                                    <span class="block text-xs font-semibold text-success-700">
                                        +5.4%
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[18px] last:mb-0">
                                    <span class="block text-xs font-semibold">
                                        01:20 PM
                                    </span>
                                    <span class="block text-xs font-semibold text-gray-700 dark:text-gray-400">
                                        $3,615.50
                                    </span>
                                    <span class="block text-xs font-semibold text-orange-600">
                                        -3.21%
                                    </span>
                                </li>
                                <li class="flex items-center justify-between mb-[18px] last:mb-0">
                                    <span class="block text-xs font-semibold">
                                        03:33 AM
                                    </span>
                                    <span class="block text-xs font-semibold text-gray-700 dark:text-gray-400">
                                        $3,831.13
                                    </span>
                                    <span class="block text-xs font-semibold text-success-700">
                                        +7.32%
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Active Auctions -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Active Auctions
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 bg-gray-100 dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Item
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Open Price
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Your Offer
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Recent Offer
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Time Left
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                View
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[50px]">
                                                        <img src="/assets/images/nfts/auction1.gif" class="inline-block rounded-[6px]" alt="auction-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Christmas Eve
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by John Lira
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    11.75 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    10.00 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[5px]">
                                                    <img src="/assets/images/users/user58.jpg" class="w-[22px] rounded-full" alt="user-image">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        10.00 ETH
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="active-auctions-timer block text-xs font-semibold text-gray-600 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                    <span class="hours-span">
                                                        <span class="hours">00</span>h
                                                    </span>
                                                    <span class="minutes-span">
                                                        <span class="minutes">00</span>m
                                                    </span>
                                                    <span class="seconds-span">
                                                        <span class="seconds">00</span>s
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[50px]">
                                                        <img src="/assets/images/nfts/auction2.gif" class="inline-block rounded-[6px]" alt="auction-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Rotating Flower
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by WalterW.
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    9.25 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    6.10 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[5px]">
                                                    <img src="/assets/images/users/user59.jpg" class="w-[22px] rounded-full" alt="user-image">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        7.15 ETH
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="active-auctions-timer block text-xs font-semibold text-gray-600 dark:text-gray-400" data-duration="4860" id="active-auctions-timer">
                                                    <span class="hours-span">
                                                        <span class="hours">00</span>h
                                                    </span>
                                                    <span class="minutes-span">
                                                        <span class="minutes">00</span>m
                                                    </span>
                                                    <span class="seconds-span">
                                                        <span class="seconds">00</span>s
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[50px]">
                                                        <img src="/assets/images/nfts/auction3.jpg" class="inline-block rounded-[6px]" alt="auction-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Windows Art
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Christino
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    17.24 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    11.75 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[5px]">
                                                    <img src="/assets/images/users/user60.jpg" class="w-[22px] rounded-full" alt="user-image">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        14.11 ETH
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="active-auctions-timer block text-xs font-semibold text-gray-600 dark:text-gray-400" data-duration="2580" id="active-auctions-timer">
                                                    <span class="hours-span">
                                                        <span class="hours">00</span>h
                                                    </span>
                                                    <span class="minutes-span">
                                                        <span class="minutes">00</span>m
                                                    </span>
                                                    <span class="seconds-span">
                                                        <span class="seconds">00</span>s
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[50px]">
                                                        <img src="/assets/images/nfts/auction4.jpg" class="inline-block rounded-[6px]" alt="auction-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            3D Logo
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Hater
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    12.12 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    10.24 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[5px]">
                                                    <img src="/assets/images/users/user61.jpg" class="w-[22px] rounded-full" alt="user-image">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        12.08 ETH
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="active-auctions-timer block text-xs font-semibold text-gray-600 dark:text-gray-400" data-duration="6600" id="active-auctions-timer">
                                                    <span class="hours-span">
                                                        <span class="hours">00</span>h
                                                    </span>
                                                    <span class="minutes-span">
                                                        <span class="minutes">00</span>m
                                                    </span>
                                                    <span class="seconds-span">
                                                        <span class="seconds">00</span>s
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[50px]">
                                                        <img src="/assets/images/nfts/auction5.jpg" class="inline-block rounded-[6px]" alt="auction-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Awesome Bird
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Liveslong
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    8.15 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    7.15 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[5px]">
                                                    <img src="/assets/images/users/user62.jpg" class="w-[22px] rounded-full" alt="user-image">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        8.08 ETH
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="active-auctions-timer block text-xs font-semibold text-gray-600 dark:text-gray-400" data-duration="15300" id="active-auctions-timer">
                                                    <span class="hours-span">
                                                        <span class="hours">00</span>h
                                                    </span>
                                                    <span class="minutes-span">
                                                        <span class="minutes">00</span>m
                                                    </span>
                                                    <span class="seconds-span">
                                                        <span class="seconds">00</span>s
                                                    </span>
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pt-[10px] sm:flex sm:items-center justify-between">
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

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="lg:col-span-3">

                    <!-- Featured NFT Artworks -->
                    <div class="trezo-card" id="featuredNftArtworksSlides">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Featured NFT Artworks
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle flex items-center gap-[10px]">
                                <div class="swiper-button-prev !relative !top-0 !mt-0 !inline-block !w-[30px] !h-[30px] !rounded-full !border !border-gray-500 dark:!border-[#172036] !text-gray-500 dark:!text-gray-400 !leading-[28px] !text-lg !left-0 !right-0 !text-center !transition-all hover:!bg-dark hover:!text-white hover:!border-dark">
                                    <i class="ri-arrow-left-line"></i>
                                </div>
                                <div class="swiper-button-next !relative !top-0 !mt-0 !inline-block !w-[30px] !h-[30px] !rounded-full !border !border-gray-500 dark:!border-[#172036] !text-gray-500 dark:!text-gray-400 !leading-[28px] !text-lg !left-0 !right-0 !text-center !transition-all hover:!bg-dark hover:!text-white hover:!border-dark">
                                    <i class="ri-arrow-right-line"></i>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                            <div
                                                class="h-[176px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                                style="background-image: url(/assets/images/nfts/featured1.jpg);"
                                            ></div>
                                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                                <div class="flex items-center gap-[6px]">
                                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                                    <div>
                                                        <span class="block text-xs">
                                                            NFT ID: 35246
                                                        </span>
                                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                            Christmas Eve
                                                        </a>
                                                    </div>
                                                </div>
                                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                            </div>
                                            <span class="block text-xs mb-[4px]">
                                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.75 ETH</span>
                                            </span>
                                            <div class="flex items-center justify-between pb-[5px]">
                                                <span class="block font-semibold text-primary-800">
                                                    5.50 ETH
                                                </span>
                                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                                    <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                            <div
                                                class="h-[176px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                                style="background-image: url(/assets/images/nfts/featured2.jpg);"
                                            ></div>
                                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                                <div class="flex items-center gap-[6px]">
                                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                                    <div>
                                                        <span class="block text-xs">
                                                            NFT ID: 35247
                                                        </span>
                                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                            Humming Bird
                                                        </a>
                                                    </div>
                                                </div>
                                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                            </div>
                                            <span class="block text-xs mb-[4px]">
                                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">10.75 ETH</span>
                                            </span>
                                            <div class="flex items-center justify-between pb-[5px]">
                                                <span class="block font-semibold text-primary-800">
                                                    12.50 ETH
                                                </span>
                                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                                    <span class="text-gray-900 dark:text-gray-400">9.5/</span>10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                            <div
                                                class="h-[176px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                                style="background-image: url(/assets/images/nfts/featured3.jpg);"
                                            ></div>
                                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                                <div class="flex items-center gap-[6px]">
                                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                                    <div>
                                                        <span class="block text-xs">
                                                            NFT ID: 35228
                                                        </span>
                                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                            Naughty Pool
                                                        </a>
                                                    </div>
                                                </div>
                                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                            </div>
                                            <span class="block text-xs mb-[4px]">
                                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">8.75 ETH</span>
                                            </span>
                                            <div class="flex items-center justify-between pb-[5px]">
                                                <span class="block font-semibold text-primary-800">
                                                    9.50 ETH
                                                </span>
                                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                                    <span class="text-gray-900 dark:text-gray-400">9.7/</span>10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                            <div
                                                class="h-[176px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                                style="background-image: url(/assets/images/nfts/featured1.jpg);"
                                            ></div>
                                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                                <div class="flex items-center gap-[6px]">
                                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                                    <div>
                                                        <span class="block text-xs">
                                                            NFT ID: 35246
                                                        </span>
                                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                            Christmas Eve
                                                        </a>
                                                    </div>
                                                </div>
                                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                            </div>
                                            <span class="block text-xs mb-[4px]">
                                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.75 ETH</span>
                                            </span>
                                            <div class="flex items-center justify-between pb-[5px]">
                                                <span class="block font-semibold text-primary-800">
                                                    5.50 ETH
                                                </span>
                                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                                    <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                            <div
                                                class="h-[176px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                                style="background-image: url(/assets/images/nfts/featured2.jpg);"
                                            ></div>
                                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                                <div class="flex items-center gap-[6px]">
                                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                                    <div>
                                                        <span class="block text-xs">
                                                            NFT ID: 35247
                                                        </span>
                                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                            Humming Bird
                                                        </a>
                                                    </div>
                                                </div>
                                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                            </div>
                                            <span class="block text-xs mb-[4px]">
                                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">10.75 ETH</span>
                                            </span>
                                            <div class="flex items-center justify-between pb-[5px]">
                                                <span class="block font-semibold text-primary-800">
                                                    12.50 ETH
                                                </span>
                                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                                    <span class="text-gray-900 dark:text-gray-400">9.5/</span>10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                            <div
                                                class="h-[176px] rounded-md bg-center bg-cover bg-no-repeat mb-[12px]"
                                                style="background-image: url(/assets/images/nfts/featured3.jpg);"
                                            ></div>
                                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                                <div class="flex items-center gap-[6px]">
                                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                                    <div>
                                                        <span class="block text-xs">
                                                            NFT ID: 35228
                                                        </span>
                                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                            Naughty Pool
                                                        </a>
                                                    </div>
                                                </div>
                                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                            </div>
                                            <span class="block text-xs mb-[4px]">
                                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">8.75 ETH</span>
                                            </span>
                                            <div class="flex items-center justify-between pb-[5px]">
                                                <span class="block font-semibold text-primary-800">
                                                    9.50 ETH
                                                </span>
                                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                                    <span class="text-gray-900 dark:text-gray-400">9.7/</span>10
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Download Mobile App -->
                    <div class="trezo-card p-[20px] md:p-[25px] text-center rounded-md" style="background: linear-gradient(153deg, #FAD2D2 0%, #6FA3EC 100%);">
                        <div class="trezo-card-content py-px relative z-[1] mx-auto md:max-w-[245px]">
                            <h3 class="!text-lg dark:!text-black md:!text-[20px] !leading-[1.2] !mb-[15px] md:!mb-[20px]">
                                <span class="font-normal">Have You Tried Our</span> New Mobile App?
                            </h3>
                            <img src="/assets/images/nfts/nft-app.png" class="mx-auto" alt="nft-app-image">
                            <a href="#" target="_blank" class="mt-[15px] md:mt-[22px] inline-block rounded-md bg-primary-500 text-white transition-all text-[15px] md:text-md font-medium py-[6px] px-[16.5px] hover:bg-primary-400">
                                Download App
                            </a>
                            <div class="absolute top-1/2 -translate-y-1/2 left-0 right-0 w-[201px] h-[201px] rounded-full bg-white opacity-[.15] -z-[1] mx-auto"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Most Popular Sellers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Most Popular Sellers
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 bg-gray-100 dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Sellers
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Deliveries
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Earnings
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Ratings
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                View
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Johhna Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    6240
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    624 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        5.0
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user53.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Skyler White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Neverdies
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    5135
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    597 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-half-fill text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        4.5
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user37.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Jonathon Watson
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Emoticons
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    4321
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    413 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        4.0
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user36.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Walter White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Puzzleworld
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    3124
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    321 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-half-fill text-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        3.5
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user30.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            David Carlen
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            by Liveslong
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    2137
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    246 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        5.0
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <a href="/dashboard/nft-details" class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white">
                                                    <i class="ri-arrow-right-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pt-[10px] sm:flex sm:items-center justify-between">
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

                    <!-- Worldwide Top Creators -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Worldwide Top Creators
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
                            <div class="flex items-center justify-center min-h-[160px]">
                                <div id="salesByLocationsJsVectorMap"></div>
                            </div>
                            <ul class="mt-[20px] md:mt-[24px]">
                                <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/portugal.svg" class="w-[24px]" alt="portugal">
                                        <span class="block text-[13px] font-medium text-gray-600 dark:text-gray-400">
                                            Portugal
                                        </span>
                                    </div>
                                    <div class="w-[140px]">
                                        <div class="leading-none flex items-center gap-[10px]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-100 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-400 rounded-md" style="width: 85%;"></div>
                                            </div>
                                            <span class="block text-[13px] font-medium">
                                                85%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/germany.svg" class="w-[24px]" alt="germany">
                                        <span class="block text-[13px] font-medium text-gray-600 dark:text-gray-400">
                                            Germany
                                        </span>
                                    </div>
                                    <div class="w-[140px]">
                                        <div class="leading-none flex items-center gap-[10px]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-secondary-100 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-secondary-400 rounded-md" style="width: 65%;"></div>
                                            </div>
                                            <span class="block text-[13px] font-medium">
                                                65%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/spain.svg" class="w-[24px]" alt="spain">
                                        <span class="block text-[13px] font-medium text-gray-600 dark:text-gray-400">
                                            Spain
                                        </span>
                                    </div>
                                    <div class="w-[140px]">
                                        <div class="leading-none flex items-center gap-[10px]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-purple-100 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-purple-400 rounded-md" style="width: 45%;"></div>
                                            </div>
                                            <span class="block text-[13px] font-medium">
                                                45%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between border-b first:border-t border-primary-50 dark:border-[#172036] py-[10px] md:py-[12px]">
                                    <div class="flex items-center gap-[8px]">
                                        <img src="/assets/images/flags/canada.svg" class="w-[24px]" alt="canada">
                                        <span class="block text-[13px] font-medium text-gray-600 dark:text-gray-400">
                                            Canada
                                        </span>
                                    </div>
                                    <div class="w-[140px]">
                                        <div class="leading-none flex items-center gap-[10px]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-success-100 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md" style="width: 75%;"></div>
                                            </div>
                                            <span class="block text-[13px] font-medium">
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

            <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="2xl:col-span-1 md:order-1 2xl:order-1">

                    <!-- Top Collections -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Collections
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content relative md:border-t md:border-b border-primary-50 dark:border-[#172036] md:py-[20px] md:py-[25px]" id="topCollectionsSlides">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="flex items-center gap-[12px] mb-[22px]">
                                            <div class="relative ltr:pr-[7px] rtl:pl-[7px]">
                                                <img src="/assets/images/nfts/author.gif" class="rounded-full w-[50px]" alt="author-image">
                                                <img src="/assets/images/nfts/verified.svg" class="absolute ltr:right-0 rtl:left-0 bottom-0" alt="verified">
                                            </div>
                                            <div>
                                                <span class="font-semibold text-black dark:text-white inline-block mb-[3px]">
                                                    Christmas Eve
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    3250 Items
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-[15px]">
                                            <div class="w-[100px] md:w-[120px] rounded-md shrink">
                                                <img src="/assets/images/nfts/top-collection.gif" alt="top-collection-image" class="rounded-md">
                                            </div>
                                            <div class="grow-0">
                                                <div class="font-semibold text-black dark:text-white text-md md:text-lg mb-[4px]">
                                                    Man Walking
                                                </div>
                                                <span class="block text-sm">
                                                    @queensland
                                                </span>
                                            </div>
                                        </div>
                                        <a href="/dashboard/nft-details" class="inline-block font-medium rounded-md mt-[20px] px-[13px] py-[6px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                            <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                                <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                                    add
                                                </i>
                                                View Details
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="flex items-center gap-[12px] mb-[22px]">
                                            <div class="relative ltr:pr-[7px] rtl:pl-[7px]">
                                                <img src="/assets/images/nfts/author.gif" class="rounded-full w-[50px]" alt="author-image">
                                                <img src="/assets/images/nfts/verified.svg" class="absolute ltr:right-0 rtl:left-0 bottom-0" alt="verified">
                                            </div>
                                            <div>
                                                <span class="font-semibold text-black dark:text-white inline-block mb-[3px]">
                                                    Christmas Eve
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    3250 Items
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-[15px]">
                                            <div class="w-[100px] md:w-[120px] rounded-md shrink">
                                                <img src="/assets/images/nfts/top-collection.gif" alt="top-collection-image" class="rounded-md">
                                            </div>
                                            <div class="grow-0">
                                                <div class="font-semibold text-black dark:text-white text-md md:text-lg mb-[4px]">
                                                    Man Walking
                                                </div>
                                                <span class="block text-sm">
                                                    @queensland
                                                </span>
                                            </div>
                                        </div>
                                        <a href="/dashboard/nft-details" class="inline-block font-medium rounded-md mt-[20px] px-[13px] py-[6px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                            <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                                <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                                    add
                                                </i>
                                                View Details
                                            </span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="flex items-center gap-[12px] mb-[22px]">
                                            <div class="relative ltr:pr-[7px] rtl:pl-[7px]">
                                                <img src="/assets/images/nfts/author.gif" class="rounded-full w-[50px]" alt="author-image">
                                                <img src="/assets/images/nfts/verified.svg" class="absolute ltr:right-0 rtl:left-0 bottom-0" alt="verified">
                                            </div>
                                            <div>
                                                <span class="font-semibold text-black dark:text-white inline-block mb-[3px]">
                                                    Christmas Eve
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    3250 Items
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-[15px]">
                                            <div class="w-[100px] md:w-[120px] rounded-md shrink">
                                                <img src="/assets/images/nfts/top-collection.gif" alt="top-collection-image" class="rounded-md">
                                            </div>
                                            <div class="grow-0">
                                                <div class="font-semibold text-black dark:text-white text-md md:text-lg mb-[4px]">
                                                    Man Walking
                                                </div>
                                                <span class="block text-sm">
                                                    @queensland
                                                </span>
                                            </div>
                                        </div>
                                        <a href="/dashboard/nft-details" class="inline-block font-medium rounded-md mt-[20px] px-[13px] py-[6px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                            <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                                <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                                    add
                                                </i>
                                                View Details
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="md:col-span-2 2xl:col-span-2 md:order-3 2xl:order-2">

                    <!-- Top NFTs -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top NFTs
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 bg-gray-100 dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                                <table class="w-full without-border">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Nfts
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Volumn
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Flow Price
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/nfts/top1.gif" class="inline-block rounded-full" alt="nft-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Sky Bird
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    6240
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    624 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    +5.4%
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/nfts/top2.gif" class="inline-block rounded-full" alt="nft-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Walking Brain
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @neverdies
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    5135
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    597 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="inline-block text-xs px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    -3.2%
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/nfts/top3.gif" class="inline-block rounded-full" alt="nft-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Flying Flower
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @emoticons
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    4321
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    413 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    +2.5%
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/nfts/top4.gif" class="inline-block rounded-full" alt="nft-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Living Robot
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @puzzleworld
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    3124
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    321 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="inline-block text-xs px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    -1.5%
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/nfts/top5.gif" class="inline-block rounded-full" alt="nft-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Thumbs Up
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @liveslong
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    2137
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    246 ETH
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    +5.4%
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="2xl:col-span-1 md:order-2 2xl:order-2">

                    <!-- History Of Bids -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    History Of Bids
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
                            <div class="table-responsive overflow-auto h-[333px] ltr:-mr-[20px] ltr:md:-mr-[25px] rtl:-ml-[20px] rtl:md:-ml-[25px] ltr:pr-[20px] ltr:md:pr-[25px] rtl:pl-[20px] rtl:md:pl-[25px]">
                                <table class="w-full">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Johhna Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    624 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user7.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Zara Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    121.1 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user8.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Walter White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    24.78 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user9.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Viktor James
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    72.8 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user10.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Zinia Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    986 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user11.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            John Carter
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    123.1 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Johhna Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    624 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user7.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Zara Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    121.1 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user8.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Walter White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    24.78 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user9.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Viktor James
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    72.8 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user10.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Zinia Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    986 ETH
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user11.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            John Carter
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            @queensland
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    123.1 ETH
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
