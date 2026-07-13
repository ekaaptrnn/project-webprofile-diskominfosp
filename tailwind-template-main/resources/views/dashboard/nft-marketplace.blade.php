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
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    Marketplace
                </h5>
                <ol class="breadcrumb mt-[12px] md:mt-0">
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        <a href="/dashboard" class="inline-block relative ltr:pl-[22px] rtl:pr-[22px] transition-all hover:text-primary-500">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-lg -mt-px text-primary-500 top-1/2 -translate-y-1/2">
                                home
                            </i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        NFT
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Marketplace
                    </li>
                </ol>
            </div>

            <!-- Marketplace -->
            <div class="trezo-card mb-[25px] p-[20px] md:p-[25px] relative z-[1] rounded-md" style="background: linear-gradient(92deg, #23272E 7.31%, #3F5272 97.89%);">
                <div class="trezo-card-content md:py-[33px] md:px-[15px] lg:flex justify-between items-center">
                    <div>
                        <h3 class="!text-white !text-xl md:!text-2xl !mb-[5px]">
                            Manage Your NFT From One Place
                        </h3>
                        <p class="text-gray-300">
                            The world’s first and largest digital marketplace for discover, collect, sell and create your own NFTs.
                        </p>
                    </div>
                    <div>
                        <a href="/dashboard/create-nft" class="text-[15px] md:text-md mt-[15px] lg:mt-0 rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[30px] transition-all hover:bg-primary-400 inline-block">
                            Create NFT
                        </a>
                    </div>
                </div>
                <img src="/assets/images/nfts/shape.png" class="absolute top-0 ltr:right-0 rtl:left-0 -z-[1]" alt="shape">
            </div>

            <!-- Featured NFT Artworks -->
            <div class="trezo-card mb-[25px]">
                <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Featured NFT Artworks
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle">
                        <a href="/dashboard/nft-explore-all" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                            Browse All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                        </a>
                    </div>
                </div>
                <div class="trezo-card-content">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-[25px]">
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured1.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
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
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured2.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
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
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured3.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
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
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured4.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
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
                            <div class="flex items-center justify-between pb-[5px]">
                                <span class="block font-semibold text-primary-800">
                                    8.15 ETH
                                </span>
                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                    <span class="text-gray-900 dark:text-gray-400">9.3/</span>10
                                </span>
                            </div>
                        </div>
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured5.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
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
                            <div class="flex items-center justify-between pb-[5px]">
                                <span class="block font-semibold text-primary-800">
                                    3.50 ETH
                                </span>
                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                    <span class="text-gray-900 dark:text-gray-400">9.1/</span>10
                                </span>
                            </div>
                        </div>
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured6.gif" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
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
                            <div class="flex items-center justify-between pb-[5px]">
                                <span class="block font-semibold text-primary-800">
                                    12.50 ETH
                                </span>
                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                    <span class="text-gray-900 dark:text-gray-400">9.1/</span>10
                                </span>
                            </div>
                        </div>
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured7.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
                            </div>
                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                <div class="flex items-center gap-[6px]">
                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                    <div>
                                        <span class="block text-xs">
                                            NFT ID: 35158
                                        </span>
                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                            Rotating Flower
                                        </a>
                                    </div>
                                </div>
                                <img src="/assets/images/nfts/verified2.svg" alt="verified">
                            </div>
                            <span class="block text-xs mb-[4px]">
                                Highest Bid: <span class="font-semibold text-gray-900 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">3.95 ETH</span>
                            </span>
                            <div class="flex items-center justify-between pb-[5px]">
                                <span class="block font-semibold text-primary-800">
                                    6.50 ETH
                                </span>
                                <span class="block relative text-xs font-semibold ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-heart-fill text-orange-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-lg"></i>
                                    <span class="text-gray-900 dark:text-gray-400">8.7/</span>10
                                </span>
                            </div>
                        </div>
                        <div class="nft-card bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <div class="relative">
                                <img src="/assets/images/nfts/featured8.jpg" class="rounded-md mb-[12px]" alt="nft-image">
                                <button class="bid-btn absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[15px] md:text-md rounded-[4px] bg-primary-500 text-white font-medium py-[7px] px-[20px] transition-all hover:bg-primary-400 inline-block" type="button">
                                    Place Bid
                                </button>
                            </div>
                            <div class="flex items-center justify-between border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[14px]">
                                <div class="flex items-center gap-[6px]">
                                    <img src="/assets/images/nfts/author.gif" class="rounded-full w-[27px]" alt="author-image">
                                    <div>
                                        <span class="block text-xs">
                                            NFT ID: 35782
                                        </span>
                                        <a href="/dashboard/nft-details" class="block font-semibold text-gray-900 dark:text-gray-400 transition-all hover:text-primary-500">
                                            Flying Bulb
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

            <!-- Top Creators -->
            <div class="trezo-card mb-[25px]">
                <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Top Creators
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle">
                        <a href="/dashboard/nft-creators" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                            Browse All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                        </a>
                    </div>
                </div>
                <div class="trezo-card-content">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-[25px]">
                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <img src="/assets/images/nfts/creator1.jpg" class="rounded-md" alt="creator-image">
                            <div class="text-center -mt-[34px]">
                                <div class="relative mb-[15px] inline-block">
                                    <img src="/assets/images/nfts/user.gif" class="rounded-full inline-block w-[68px]" alt="user-image">
                                    <img src="/assets/images/nfts/verified2.svg" class="absolute bottom-0 ltr:right-0 rtl:left-0" alt="verified">
                                </div>
                                <h3 class="!text-md !font-semibold !mb-[8px]">
                                    Hunny Bunny
                                </h3>
                                <span class="block text-xs">
                                    ITEMS: 3204
                                </span>
                                <div class="h-[1px] bg-primary-50 dark:bg-[#172036] my-[15px]"></div>
                                <button type="button" class="inline-block rounded-[7px] py-[6px] px-[17px] font-medium md:text-md bg-primary-500 text-white transition-all hover:bg-primary-400">
                                    Follow
                                </button>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <img src="/assets/images/nfts/creator2.jpg" class="rounded-md" alt="creator-image">
                            <div class="text-center -mt-[34px]">
                                <div class="relative mb-[15px] inline-block">
                                    <img src="/assets/images/nfts/user.gif" class="rounded-full inline-block w-[68px]" alt="user-image">
                                    <img src="/assets/images/nfts/verified2.svg" class="absolute bottom-0 ltr:right-0 rtl:left-0" alt="verified">
                                </div>
                                <h3 class="!text-md !font-semibold !mb-[8px]">
                                    Aristocrat
                                </h3>
                                <span class="block text-xs">
                                    ITEMS: 5301
                                </span>
                                <div class="h-[1px] bg-primary-50 dark:bg-[#172036] my-[15px]"></div>
                                <button type="button" class="inline-block rounded-[7px] py-[6px] px-[17px] font-medium md:text-md bg-primary-500 text-white transition-all hover:bg-primary-400">
                                    Follow
                                </button>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <img src="/assets/images/nfts/creator3.jpg" class="rounded-md" alt="creator-image">
                            <div class="text-center -mt-[34px]">
                                <div class="relative mb-[15px] inline-block">
                                    <img src="/assets/images/nfts/user.gif" class="rounded-full inline-block w-[68px]" alt="user-image">
                                    <img src="/assets/images/nfts/verified2.svg" class="absolute bottom-0 ltr:right-0 rtl:left-0" alt="verified">
                                </div>
                                <h3 class="!text-md !font-semibold !mb-[8px]">
                                    Hooman Robotic
                                </h3>
                                <span class="block text-xs">
                                    ITEMS: 4213
                                </span>
                                <div class="h-[1px] bg-primary-50 dark:bg-[#172036] my-[15px]"></div>
                                <button type="button" class="inline-block rounded-[7px] py-[6px] px-[17px] font-medium md:text-md bg-gray-400 text-white transition-all hover:bg-gray-400">
                                    Unfollow
                                </button>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-[#0c1427] p-[10px] rounded-md">
                            <img src="/assets/images/nfts/creator4.jpg" class="rounded-md" alt="creator-image">
                            <div class="text-center -mt-[34px]">
                                <div class="relative mb-[15px] inline-block">
                                    <img src="/assets/images/nfts/user.gif" class="rounded-full inline-block w-[68px]" alt="user-image">
                                    <img src="/assets/images/nfts/verified2.svg" class="absolute bottom-0 ltr:right-0 rtl:left-0" alt="verified">
                                </div>
                                <h3 class="!text-md !font-semibold !mb-[8px]">
                                    Colorful Life
                                </h3>
                                <span class="block text-xs">
                                    ITEMS: 2314
                                </span>
                                <div class="h-[1px] bg-primary-50 dark:bg-[#172036] my-[15px]"></div>
                                <button type="button" class="inline-block rounded-[7px] py-[6px] px-[17px] font-medium md:text-md bg-primary-500 text-white transition-all hover:bg-primary-400">
                                    Follow
                                </button>
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
