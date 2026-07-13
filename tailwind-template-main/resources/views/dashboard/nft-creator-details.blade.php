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
                    Creator Details
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
                        Creators
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Creator Details
                    </li>
                </ol>
            </div>
            
            <!-- Creator Details -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">

                <!-- Creator -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center gap-[17px] mb-[20px] md:mb-[25px]">
                            <img src="/assets/images/nfts/creator-author.jpg" class="rounded-full w-[65px]" alt="creator-author">
                            <div>
                                <h3 class="!text-lg md:!text-xl !mb-[10px]">
                                    Angela Carter
                                </h3>
                                <span class="block text-xs">
                                    ID: 35246
                                </span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mb-[20px] md:mb-[25px]">
                            <div class="flex items-center gap-[14px]">
                                <img src="/assets/images/icons/schedule.svg" alt="schedule">
                                <div>
                                    <span class="block text-xs">
                                        Joined Since
                                    </span>
                                    <span class="block text-black dark:text-white font-semibold">
                                        23 June 2025
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="inline-block rounded-[7px] py-[6px] px-[17px] font-medium md:text-md bg-primary-500 text-white transition-all hover:bg-primary-400">
                                Follow
                            </button>
                        </div>
                        <div class="py-[20px] md:py-[25px] px-[20px] md:px-[30px] bg-gray-50 dark:bg-[#0a0e19] flex items-center justify-between gap-[15px] rounded-md text-center">
                            <div>
                                <span class="block text-xs">
                                    Total NFT
                                </span>
                                <span class="block font-semibold text-primary-800">
                                    156
                                </span>
                            </div>
                            <div>
                                <span class="block text-xs">
                                    Total Earned
                                </span>
                                <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                    1234ETH
                                </span>
                            </div>
                            <div>
                                <span class="block text-xs">
                                    Auction
                                </span>
                                <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                    45
                                </span>
                            </div>
                        </div>
                        <h3 class="!text-lg mt-[20px] md:mt-[25px] !mb-[10px]">
                            Description
                        </h3>
                        <p>
                            This NFT captures the essence of boundless potential, symbolized by a surreal landscape where the sky meets the earth in a dazzling fusion of colors. The intricate design features flowing lines that blend together, representing the limitless paths we can take in life.
                        </p>
                    </div>
                </div>

                <!-- NFTs -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Angela’s NFTs
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="trezo-tabs" id="trezo-tabs">
                            <ul class="nfts-navs mb-[20px]">
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px]">
                                    <button type="button" data-tab="tab1" class="nav-link active block transition-all relative uppercase md:tracking-[2px] text-xs font-semibold">
                                        All
                                    </button>
                                </li>
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px]">
                                    <button type="button" data-tab="tab2" class="nav-link block transition-all relative uppercase md:tracking-[2px] text-xs font-semibold">
                                        IN AUCTION
                                    </button>
                                </li>
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px] ltr:md:mr-[35px] rtl:md:ml-[35px]">
                                    <button type="button" data-tab="tab3" class="nav-link block transition-all relative uppercase md:tracking-[2px] text-xs font-semibold">
                                        SOLD
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <div class="table-responsive overflow-x-auto">
                                        <table class="w-full">
                                            <tbody class="text-black dark:text-white">
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.00 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            30 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            9.25 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            6.10 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            17.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1.30 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            12.12 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            35 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            8.15 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            7.15 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            2 hrs ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.00 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            30 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            9.25 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            6.10 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            17.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1.30 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            12.12 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            35 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            8.15 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            7.15 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            2 hrs ago
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pt-[10px] sm:flex sm:items-center justify-between">
                                        <p class="!mb-0 text-sm">
                                            Showing 10 of 36 results
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
                                <div class="tab-pane" id="tab2">
                                    <div class="table-responsive overflow-x-auto">
                                        <table class="w-full">
                                            <tbody class="text-black dark:text-white">
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.00 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            30 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            17.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1.30 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            9.25 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            6.10 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            8.15 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            7.15 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            2 hrs ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            12.12 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            35 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <div class="table-responsive overflow-x-auto">
                                        <table class="w-full">
                                            <tbody class="text-black dark:text-white">
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.00 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            30 mins ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            9.25 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            6.10 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            17.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            11.75 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            1.30 hr ago
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            12.12 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            10.24 ETH
                                                        </span>
                                                    </td>
                                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                            35 mins ago
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
                </div>

            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
