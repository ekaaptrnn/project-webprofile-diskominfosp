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


            <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="lg:col-span-3">

                    <!-- Live Auction -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header md:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Live Auction
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle sm:flex items-center sm:gap-[25px] lg:gap-[35px] sm:mt-[15px] md:mt-0">
                                <button class="text-primary-500 text-xs uppercase inline-block font-semibold transition-all mt-[12px] sm:mt-0 ltr:mr-[12px] rtl:ml-[12px] ltr:sm:mr-0 rtl:sm:ml-0" type="button">
                                    ALL ITEMS (12)
                                </button>
                                <button class="text-gray-500 dark:text-gray-400 text-xs uppercase inline-block font-medium transition-all hover:text-primary-500 mt-[12px] sm:mt-0 ltr:mr-[12px] rtl:ml-[12px] ltr:sm:mr-0 rtl:sm:ml-0" type="button">
                                    UP TO 15%(05)
                                </button>
                                <button class="text-gray-500 dark:text-gray-400 text-xs uppercase inline-block font-medium transition-all hover:text-primary-500 mt-[12px] sm:mt-0 ltr:mr-[12px] rtl:ml-[12px] ltr:sm:mr-0 rtl:sm:ml-0" type="button">
                                    UP TO 30%(07)
                                </button>
                                <button class="text-gray-500 dark:text-gray-400 text-xs uppercase inline-block font-medium transition-all hover:text-primary-500 mt-[12px] sm:mt-0 ltr:mr-[12px] rtl:ml-[12px] ltr:sm:mr-0 rtl:sm:ml-0" type="button">
                                    UP TO 50%(05)
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- NFT Items -->
                    <div class="trezo-card mb-[25px]">
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[25px]">
                                <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                    <div class="relative">
                                        <img src="/assets/images/nfts/featured1.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                        <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                            Place Bid
                                        </button>
                                        <div class="absolute left-[10px] right-[10px] text-center z-[1] p-[10px]" style="bottom: 10px;">
                                            <span class="active-auctions-timer block text-xs font-semibold text-gray-900 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                <span class="hours-span mx-[2px]">
                                                    <span class="hours">00</span>h
                                                </span>
                                                <span class="minutes-span mx-[2px]">
                                                    <span class="minutes">00</span>m
                                                </span>
                                                <span class="seconds-span mx-[2px]">
                                                    <span class="seconds">00</span>s
                                                </span>
                                            </span>
                                            <div class="absolute left-0 right-0 top-0 bottom-0 -z-[1] bg-white dark:bg-dark opacity-[.80] backdrop-blur-[12px]"></div>
                                        </div>
                                    </div>
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
                                    <div class="flex items-center justify-between">
                                        <span class="block font-semibold text-primary-800">
                                            5.50 ETH
                                        </span>
                                        <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                            <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                            <span class="text-gray-900 dark:text-gray-400">9.2/</span>10
                                        </span>
                                    </div>
                                    <div class="mt-[20px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex items-center justify-between py-[6px]">
                                        <span class="block text-xs">
                                            Sold: 130
                                        </span>
                                        <span class="block text-xs">
                                            Available: 123
                                        </span>
                                    </div>
                                </div>
                                <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                    <div class="relative">
                                        <img src="/assets/images/nfts/featured2.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                        <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                            Place Bid
                                        </button>
                                        <div class="absolute left-[10px] right-[10px] text-center z-[1] p-[10px]" style="bottom: 10px;">
                                            <span class="active-auctions-timer block text-xs font-semibold text-gray-900 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                <span class="hours-span mx-[2px]">
                                                    <span class="hours">00</span>h
                                                </span>
                                                <span class="minutes-span mx-[2px]">
                                                    <span class="minutes">00</span>m
                                                </span>
                                                <span class="seconds-span mx-[2px]">
                                                    <span class="seconds">00</span>s
                                                </span>
                                            </span>
                                            <div class="absolute left-0 right-0 top-0 bottom-0 -z-[1] bg-white dark:bg-dark opacity-[.80] backdrop-blur-[12px]"></div>
                                        </div>
                                    </div>
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
                                    <div class="flex items-center justify-between">
                                        <span class="block font-semibold text-primary-800">
                                            12.50 ETH
                                        </span>
                                        <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                            <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                            <span class="text-gray-900 dark:text-gray-400">9.5/</span>10
                                        </span>
                                    </div>
                                    <div class="mt-[20px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex items-center justify-between py-[6px]">
                                        <span class="block text-xs">
                                            Sold: 130
                                        </span>
                                        <span class="block text-xs">
                                            Available: 123
                                        </span>
                                    </div>
                                </div>
                                <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                    <div class="relative">
                                        <img src="/assets/images/nfts/featured3.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                        <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                            Place Bid
                                        </button>
                                        <div class="absolute left-[10px] right-[10px] text-center z-[1] p-[10px]" style="bottom: 10px;">
                                            <span class="active-auctions-timer block text-xs font-semibold text-gray-900 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                <span class="hours-span mx-[2px]">
                                                    <span class="hours">00</span>h
                                                </span>
                                                <span class="minutes-span mx-[2px]">
                                                    <span class="minutes">00</span>m
                                                </span>
                                                <span class="seconds-span mx-[2px]">
                                                    <span class="seconds">00</span>s
                                                </span>
                                            </span>
                                            <div class="absolute left-0 right-0 top-0 bottom-0 -z-[1] bg-white dark:bg-dark opacity-[.80] backdrop-blur-[12px]"></div>
                                        </div>
                                    </div>
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
                                    <div class="flex items-center justify-between">
                                        <span class="block font-semibold text-primary-800">
                                            9.50 ETH
                                        </span>
                                        <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                            <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                            <span class="text-gray-900 dark:text-gray-400">9.7/</span>10
                                        </span>
                                    </div>
                                    <div class="mt-[20px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex items-center justify-between py-[6px]">
                                        <span class="block text-xs">
                                            Sold: 130
                                        </span>
                                        <span class="block text-xs">
                                            Available: 123
                                        </span>
                                    </div>
                                </div>
                                <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                    <div class="relative">
                                        <img src="/assets/images/nfts/featured4.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                        <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                            Place Bid
                                        </button>
                                        <div class="absolute left-[10px] right-[10px] text-center z-[1] p-[10px]" style="bottom: 10px;">
                                            <span class="active-auctions-timer block text-xs font-semibold text-gray-900 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                <span class="hours-span mx-[2px]">
                                                    <span class="hours">00</span>h
                                                </span>
                                                <span class="minutes-span mx-[2px]">
                                                    <span class="minutes">00</span>m
                                                </span>
                                                <span class="seconds-span mx-[2px]">
                                                    <span class="seconds">00</span>s
                                                </span>
                                            </span>
                                            <div class="absolute left-0 right-0 top-0 bottom-0 -z-[1] bg-white dark:bg-dark opacity-[.80] backdrop-blur-[12px]"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                        <div class="flex items-center gap-[6px]">
                                            <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                            <div>
                                                <span class="block text-xs">
                                                    NFT ID: 35227
                                                </span>
                                                <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    Hello Thumbs
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                    </div>
                                    <span class="block text-xs mb-[4px]">
                                        Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">9.30 ETH</span>
                                    </span>
                                    <div class="flex items-center justify-between">
                                        <span class="block font-semibold text-primary-800">
                                            8.15 ETH
                                        </span>
                                        <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                            <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                            <span class="text-gray-900 dark:text-gray-400">9.3/</span>10
                                        </span>
                                    </div>
                                    <div class="mt-[20px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex items-center justify-between py-[6px]">
                                        <span class="block text-xs">
                                            Sold: 130
                                        </span>
                                        <span class="block text-xs">
                                            Available: 123
                                        </span>
                                    </div>
                                </div>
                                <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                    <div class="relative">
                                        <img src="/assets/images/nfts/featured5.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                        <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                            Place Bid
                                        </button>
                                        <div class="absolute left-[10px] right-[10px] text-center z-[1] p-[10px]" style="bottom: 10px;">
                                            <span class="active-auctions-timer block text-xs font-semibold text-gray-900 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                <span class="hours-span mx-[2px]">
                                                    <span class="hours">00</span>h
                                                </span>
                                                <span class="minutes-span mx-[2px]">
                                                    <span class="minutes">00</span>m
                                                </span>
                                                <span class="seconds-span mx-[2px]">
                                                    <span class="seconds">00</span>s
                                                </span>
                                            </span>
                                            <div class="absolute left-0 right-0 top-0 bottom-0 -z-[1] bg-white dark:bg-dark opacity-[.80] backdrop-blur-[12px]"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                        <div class="flex items-center gap-[6px]">
                                            <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                            <div>
                                                <span class="block text-xs">
                                                    NFT ID: 35248
                                                </span>
                                                <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    Pixel Watermelon
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                    </div>
                                    <span class="block text-xs mb-[4px]">
                                        Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">1.75 ETH</span>
                                    </span>
                                    <div class="flex items-center justify-between">
                                        <span class="block font-semibold text-primary-800">
                                            3.50 ETH
                                        </span>
                                        <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                            <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                            <span class="text-gray-900 dark:text-gray-400">9.1/</span>10
                                        </span>
                                    </div>
                                    <div class="mt-[20px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex items-center justify-between py-[6px]">
                                        <span class="block text-xs">
                                            Sold: 130
                                        </span>
                                        <span class="block text-xs">
                                            Available: 123
                                        </span>
                                    </div>
                                </div>
                                <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                                    <div class="relative">
                                        <img src="/assets/images/nfts/featured6.gif" class="rounded-md mb-[12px]" alt="nft-image">
                                        <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                            Place Bid
                                        </button>
                                        <div class="absolute left-[10px] right-[10px] text-center z-[1] p-[10px]" style="bottom: 10px;">
                                            <span class="active-auctions-timer block text-xs font-semibold text-gray-900 dark:text-gray-400" data-duration="9900" id="active-auctions-timer">
                                                <span class="hours-span mx-[2px]">
                                                    <span class="hours">00</span>h
                                                </span>
                                                <span class="minutes-span mx-[2px]">
                                                    <span class="minutes">00</span>m
                                                </span>
                                                <span class="seconds-span mx-[2px]">
                                                    <span class="seconds">00</span>s
                                                </span>
                                            </span>
                                            <div class="absolute left-0 right-0 top-0 bottom-0 -z-[1] bg-white dark:bg-dark opacity-[.80] backdrop-blur-[12px]"></div>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                        <div class="flex items-center gap-[6px]">
                                            <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                            <div>
                                                <span class="block text-xs">
                                                    NFT ID: 35258
                                                </span>
                                                <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    BDancing Cookies
                                                </a>
                                            </div>
                                        </div>
                                        <img src="/assets/images/nfts/verified2.svg" alt="verified">
                                    </div>
                                    <span class="block text-xs mb-[4px]">
                                        Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">10.75 ETH</span>
                                    </span>
                                    <div class="flex items-center justify-between">
                                        <span class="block font-semibold text-primary-800">
                                            12.50 ETH
                                        </span>
                                        <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                            <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                            <span class="text-gray-900 dark:text-gray-400">9.1/</span>10
                                        </span>
                                    </div>
                                    <div class="mt-[20px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                        <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                    </div>
                                    <div class="flex items-center justify-between py-[6px]">
                                        <span class="block text-xs">
                                            Sold: 130
                                        </span>
                                        <span class="block text-xs">
                                            Available: 123
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="sm:flex sm:items-center justify-between">
                                <p class="!mb-0">
                                    Showing 6 of 36 results
                                </p>
                                <ol class="mt-[10px] sm:mt-0">
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="/dashboard/nft-live-auction" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            <span class="opacity-0">
                                                0
                                            </span>
                                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                chevron_left
                                            </i>
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="/dashboard/nft-live-auction" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                            1
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="/dashboard/nft-live-auction" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            2
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="/dashboard/nft-live-auction" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            3
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="/dashboard/nft-live-auction" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            4
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="/dashboard/nft-live-auction" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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

                    <!-- Download Mobile App -->
                    <div class="trezo-card mb-[25px] p-[20px] md:p-[25px] text-center rounded-md" style="background: linear-gradient(153deg, #FAD2D2 0%, #6FA3EC 100%);">
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
