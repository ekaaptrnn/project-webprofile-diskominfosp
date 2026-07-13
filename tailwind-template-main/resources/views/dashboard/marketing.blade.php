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

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-[25px] mb-[25px]">

                <!-- Ad Spend -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between mb-[10px]">
                            <div>
                                <span class="block mb-[6px]">
                                    Ad Spend
                                </span>
                                <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                    $1,528
                                </h3>
                            </div>
                            <img src="/assets/images/icons/ads.gif" class="w-[60px] ltr:-mr-[10px] rtl:-ml-[10px]" alt="ads">
                        </div>
                        <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                            +5.4%
                        </span>
                        <span class="block text-xs mt-[10px]">
                            vs previous 30 days
                        </span>
                    </div>
                </div>

                <!-- Cost Per Thousand -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between mb-[10px]">
                            <div>
                                <span class="block mb-[6px]">
                                    Cost Per Thousand
                                </span>
                                <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                    $3.95
                                </h3>
                            </div>
                            <img src="/assets/images/icons/video-advertising.gif" class="w-[60px] ltr:-mr-[10px] rtl:-ml-[10px]" alt="video-advertising">
                        </div>
                        <span class="inline-block text-xs px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                            -1.4%
                        </span>
                        <span class="block text-xs mt-[10px]">
                            vs previous 30 days
                        </span>
                    </div>
                </div>

                <!-- Cost Per Click -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between mb-[10px]">
                            <div>
                                <span class="block mb-[6px]">
                                    Cost Per Click
                                </span>
                                <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                    $0.15
                                </h3>
                            </div>
                            <img src="/assets/images/icons/call-to-action.gif" class="w-[60px] ltr:-mr-[10px] rtl:-ml-[10px]" alt="call-to-action">
                        </div>
                        <span class="inline-block text-xs px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                            -0.04%
                        </span>
                        <span class="block text-xs mt-[10px]">
                            vs previous 30 days
                        </span>
                    </div>
                </div>

                <!-- Click Through Rate -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between mb-[10px]">
                            <div>
                                <span class="block mb-[6px]">
                                    Click Through Rate
                                </span>
                                <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                    $2.95
                                </h3>
                            </div>
                            <img src="/assets/images/icons/ads2.gif" class="w-[60px] ltr:-mr-[10px] rtl:-ml-[10px]" alt="ads2">
                        </div>
                        <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                            +7%
                        </span>
                        <span class="block text-xs mt-[10px]">
                            vs previous 30 days
                        </span>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Performance Overview -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Performance Overview
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
                            <div class="-mb-[20px] -mt-[22px] ltr:-ml-[15px] rtl:-mr-[15px]">
                                <div id="marketingPerformanceOverviewChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Download Mobile App -->
                    <div class="trezo-card p-[20px] md:p-[25px] text-center rounded-md" style="background: linear-gradient(150deg, #827CD8 0.57%, #2D2761 95.93%);">
                        <div class="trezo-card-content md:py-[13px] mx-auto md:max-w-[245px]">
                            <h3 class="!text-white !text-lg md:!text-xl !leading-[1.3] !mb-[15px] md:!mb-[30px]">
                                <span class="font-normal">Have You Tried Our</span> New Mobile App?
                            </h3>
                            <img src="/assets/images/app.png" class="mx-auto" alt="app-image">
                            <a href="#" target="_blank" class="mt-[15px] md:mt-[30px] mb-[5px] inline-block rounded-md bg-primary-500 text-white transition-all text-[15px] md:text-md font-medium py-[6px] px-[16.5px] hover:bg-primary-400">
                                Download Mobile App
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Highlights -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Highlights
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <span class="block">
                                    Last 7 days
                                </span>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <ul>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                    <div class="relative ltr:pl-[23px] rtl:pr-[23px]">
                                        <img src="/assets/images/icons/star.svg" class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="star">
                                        Average Client Rating
                                    </div>
                                    <span class="block relative font-medium text-black dark:text-white ltr:pl-[20px] rtl:pr-[20px]">
                                        <i class="material-symbols-outlined text-success-600 !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            arrow_upward
                                        </i>
                                        4.9/5.0
                                    </span>
                                </li>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                    <div class="relative ltr:pl-[23px] rtl:pr-[23px]">
                                        <img src="/assets/images/icons/instagram.svg" class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="instagram">
                                        Instagram Followers
                                    </div>
                                    <span class="block relative font-medium text-black dark:text-white ltr:pl-[20px] rtl:pr-[20px]">
                                        <i class="material-symbols-outlined text-orange-600 !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            arrow_downward
                                        </i>
                                        630K
                                    </span>
                                </li>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                    <div class="relative ltr:pl-[23px] rtl:pr-[23px]">
                                        <img src="/assets/images/icons/google2.svg" class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="google2">
                                        Google Ads CPC
                                    </div>
                                    <span class="block relative font-medium text-black dark:text-white ltr:pl-[20px] rtl:pr-[20px]">
                                        <i class="material-symbols-outlined text-success-600 !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            arrow_upward
                                        </i>
                                        $3.58
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Channels -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Channels
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.6px] mb-[14.6px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/facebook3.svg" alt="facebook">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Facebook
                                        </span>
                                        <span class="block text-xs mt-[2px]">
                                            Community
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[150px]">
                                    <div class="leading-none flex items-center gap-[12px]">
                                        <div class="flex w-full h-[8px] overflow-hidden rounded-md bg-primary-100 dark:bg-[#172036]">
                                            <div class="flex flex-col justify-center overflow-hidden bg-primary-400 rounded-md" style="width: 50%;"></div>
                                        </div>
                                        <span class="block text-xs">
                                            50%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.6px] mb-[14.6px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/dribbble2.svg" alt="dribbble">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Dribbble
                                        </span>
                                        <span class="block text-xs mt-[2px]">
                                            Community
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[150px]">
                                    <div class="leading-none flex items-center gap-[12px]">
                                        <div class="flex w-full h-[8px] overflow-hidden rounded-md bg-secondary-100 dark:bg-[#172036]">
                                            <div class="flex flex-col justify-center overflow-hidden bg-secondary-400 rounded-md" style="width: 75%;"></div>
                                        </div>
                                        <span class="block text-xs">
                                            75%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.6px] mb-[14.6px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/instagram2.svg" alt="instagram">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Instagram
                                        </span>
                                        <span class="block text-xs mt-[2px]">
                                            Reels
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[150px]">
                                    <div class="leading-none flex items-center gap-[12px]">
                                        <div class="flex w-full h-[8px] overflow-hidden rounded-md bg-orange-100 dark:bg-[#172036]">
                                            <div class="flex flex-col justify-center overflow-hidden bg-orange-400 rounded-md" style="width: 30%;"></div>
                                        </div>
                                        <span class="block text-xs">
                                            30%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.6px] mb-[14.6px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/behance.svg" alt="behance">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Behance
                                        </span>
                                        <span class="block text-xs mt-[2px]">
                                            Community
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[150px]">
                                    <div class="leading-none flex items-center gap-[12px]">
                                        <div class="flex w-full h-[8px] overflow-hidden rounded-md bg-purple-100 dark:bg-[#172036]">
                                            <div class="flex flex-col justify-center overflow-hidden bg-purple-400 rounded-md" style="width: 80%;"></div>
                                        </div>
                                        <span class="block text-xs">
                                            80%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.6px] mb-[14.6px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/figma2.svg" alt="figma">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Figma
                                        </span>
                                        <span class="block text-xs mt-[2px]">
                                            Community
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[150px]">
                                    <div class="leading-none flex items-center gap-[12px]">
                                        <div class="flex w-full h-[8px] overflow-hidden rounded-md bg-info-100 dark:bg-[#172036]">
                                            <div class="flex flex-col justify-center overflow-hidden bg-info-400 rounded-md" style="width: 50%;"></div>
                                        </div>
                                        <span class="block text-xs">
                                            50%
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.6px] mb-[14.6px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/google3.svg" alt="google">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Google
                                        </span>
                                        <span class="block text-xs mt-[2px]">
                                            SEO & PPC
                                        </span>
                                    </div>
                                </div>
                                <div class="w-[150px]">
                                    <div class="leading-none flex items-center gap-[12px]">
                                        <div class="flex w-full h-[8px] overflow-hidden rounded-md bg-success-100 dark:bg-[#172036]">
                                            <div class="flex flex-col justify-center overflow-hidden bg-success-400 rounded-md" style="width: 20%;"></div>
                                        </div>
                                        <span class="block text-xs">
                                            20%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Campaigns -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Campaigns
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <button type="button" class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white" id="add-new-popup-toggle">
                                    <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                            add
                                        </i>
                                        Add Campaign
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="trezo-card-content min-h-[377px]">
                            <div class="trezo-tabs" id="trezo-tabs">
                                <ul class="campaigns-navs mb-[15px]">
                                    <li class="nav-item inline-block ltr:mr-[35px] rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab1" class="nav-link active text-xs block font-semibold text-gray-500 dark:text-gray-400 uppercase transition-all tracking-[2px]">
                                            All (05)
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block ltr:mr-[35px] rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab2" class="nav-link text-xs block font-semibold text-gray-500 dark:text-gray-400 uppercase transition-all tracking-[2px]">
                                            Pending (03)
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block ltr:mr-[35px] rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab3" class="nav-link text-xs block font-semibold text-gray-500 dark:text-gray-400 uppercase transition-all tracking-[2px]">
                                            Completed (02)
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="table-responsive overflow-x-auto">
                                            <table class="w-full">
                                                <tbody class="text-black dark:text-white">
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Christmas Eve
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 10 Oct - 15 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-orange-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/instagram2.svg" class="w-[18px]" alt="instagram">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/linkedin2.svg" class="w-[18px]" alt="linkedin">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-orange-100 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                                                Live Now
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user53.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user54.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user56.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user57.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] text-xs rounded-full border border-white bg-gray-700 text-white font-medium flex items-center justify-center dark:border-dark">
                                                                    +3
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Teacher’s Day
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 08 Oct - 12 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-primary-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/instagram2.svg" class="w-[18px]" alt="instagram">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm font-medium text-xs">
                                                                Reviewing
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user52.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user51.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user50.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    ThanksGiving
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 01 Oct - 05 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-purple-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/linkedin2.svg" class="w-[18px]" alt="linkedin">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-secondary-100 dark:bg-[#15203c] text-secondary-500 rounded-sm font-medium text-xs">
                                                                Paused
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user1.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user2.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Team Gateway
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 05 Oct - 17 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-secondary-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-orange-100 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                                                Live Now
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user3.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user4.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user5.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Halloween
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 20 Oct - 31 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-success-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/instagram2.svg" class="w-[18px]" alt="instagram">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/linkedin2.svg" class="w-[18px]" alt="linkedin">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm font-medium text-xs">
                                                                Reviewing
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user45.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user46.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user47.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="table-responsive overflow-x-auto">
                                            <table class="w-full">
                                                <tbody class="text-black dark:text-white">
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Teacher’s Day
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 08 Oct - 12 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-primary-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/instagram2.svg" class="w-[18px]" alt="instagram">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm font-medium text-xs">
                                                                Reviewing
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user52.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user51.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user50.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    ThanksGiving
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 01 Oct - 05 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-purple-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/linkedin2.svg" class="w-[18px]" alt="linkedin">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-secondary-100 dark:bg-[#15203c] text-secondary-500 rounded-sm font-medium text-xs">
                                                                Paused
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user1.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user2.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Halloween
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 20 Oct - 31 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-success-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/instagram2.svg" class="w-[18px]" alt="instagram">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/linkedin2.svg" class="w-[18px]" alt="linkedin">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm font-medium text-xs">
                                                                Reviewing
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user45.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user46.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user47.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
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
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Christmas Eve
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 10 Oct - 15 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-orange-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/facebook3.svg" class="w-[18px]" alt="facebook">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/instagram2.svg" class="w-[18px]" alt="instagram">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/linkedin2.svg" class="w-[18px]" alt="linkedin">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-orange-100 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                                                Live Now
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user53.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user54.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user56.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user57.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] text-xs rounded-full border border-white bg-gray-700 text-white font-medium flex items-center justify-center">
                                                                    +3
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="relative py-[3.5px] ltr:pl-[13px] rtl:pr-[13px]">
                                                                <span class="block font-semibold mb-[5px]">
                                                                    Team Gateway
                                                                </span>
                                                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                                                    From 05 Oct - 17 Oct, 24
                                                                </span>
                                                                <div class="absolute ltr:left-0 rtl:right-0 top-0 bottom-0 w-[2px] bg-secondary-500"></div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center gap-[10px]">
                                                                <a href="#" target="_blank" class="inline-block">
                                                                    <img src="/assets/images/icons/google3.svg" class="w-[18px]" alt="google">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <span class="px-[8px] py-[3px] inline-block bg-orange-100 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                                                Live Now
                                                            </span>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <div class="flex items-center">
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user3.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user4.jpg" />
                                                                </div>
                                                                <div class="w-[26px] h-[26px] rounded-full ltr:-mr-[7px] rtl:-ml-[7px] border border-white dark:border-dark">
                                                                    <img alt="user-image" class="rounded-full" src="/assets/images/users/user5.jpg" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                            <button class="inline-block rounded-full w-[30px] h-[30px] bg-gray-100 dark:bg-[#172036] text-center leading-[30px] text-lg text-gray-400 transition-all hover:bg-primary-500 hover:text-white" type="button" id="scrollingLongContentModalToggle">
                                                                <i class="ri-arrow-right-line"></i>
                                                            </button>
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

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">

                        <!-- External Links -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        External Links
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[7.8px] mb-[7.8px] last:border-none last:mb-0 last:pb-0">
                                    <div class="relative ltr:pl-[28px] rtl:pr-[28px] font-medium text-primary-500">
                                        <img src="/assets/images/icons/google3.svg" class="w-[18px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="google">
                                        Google Ad Analytics
                                    </div>
                                    <a href="#" target="_blank" class="inline-block transition-all leading-none hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg">
                                            open_in_new
                                        </i>
                                    </a>
                                </div>
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[7.8px] mb-[7.8px] last:border-none last:mb-0 last:pb-0">
                                    <div class="relative ltr:pl-[28px] rtl:pr-[28px] font-medium text-primary-500">
                                        <img src="/assets/images/icons/instagram2.svg" class="w-[18px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="instagram">
                                        Instagram Ads
                                    </div>
                                    <a href="#" target="_blank" class="inline-block transition-all leading-none hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg">
                                            open_in_new
                                        </i>
                                    </a>
                                </div>
                                <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[7.8px] mb-[7.8px] last:border-none last:mb-0 last:pb-0">
                                    <div class="relative ltr:pl-[28px] rtl:pr-[28px] font-medium text-primary-500">
                                        <img src="/assets/images/icons/facebook3.svg" class="w-[18px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="facebook">
                                        Facebook Ads
                                    </div>
                                    <a href="#" target="_blank" class="inline-block transition-all leading-none hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg">
                                            open_in_new
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Instagram Campaigns -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                                <div class="trezo-card-title flex items-center gap-[10px]">
                                    <h5 class="!mb-0">
                                        Instagram Campaigns
                                    </h5>
                                    <span class="px-[8px] py-[3px] inline-block bg-orange-100 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                        Live Now
                                    </span>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="flex items-center gap-[25px]">
                                    <div>
                                        <div class="flex items-center gap-[5px] mb-[5px]">
                                            <span class="block w-[10px] h-[10px] rounded-full bg-purple-500"></span>
                                            <span class="block text-sm">
                                                Campaign Budget
                                            </span>
                                        </div>
                                        <h3 class="!mb-0 !leading-none !text-[20px]">
                                            $3200
                                        </h3>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-[5px] mb-[5px]">
                                            <span class="block w-[10px] h-[10px] rounded-full bg-orange-400"></span>
                                            <span class="block text-sm">
                                                Followers Goal
                                            </span>
                                        </div>
                                        <h3 class="!mb-0 !leading-none !text-[20px]">
                                            140,000
                                        </h3>
                                    </div>
                                </div>
                                <div class="h-[76px] relative">
                                    <div class="absolute left-0 right-0 -bottom-[55px] -ml-[33px] md:-ml-[37px] -mr-[30px] md:-mr-[35px]">
                                        <div id="marketingInstagramCampaignsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- CTA -->
                    <div class="trezo-card p-[20px] md:p-[25px] text-center rounded-md" style="background: linear-gradient(162deg, #D7B5FD 3.82%, #9947F5 98.54%);">
                        <div class="trezo-card-content md:py-[11px] mx-auto md:max-w-[212px]">
                            <h3 class="dark:!text-black !text-lg md:!text-xl !leading-[1.3] !mb-[15px] md:!mb-[30px] mx-auto max-w-[185px]">
                                <span class="font-normal">Want To Try</span> New Marketing Tool?
                            </h3>
                            <img src="/assets/images/marketing-tool.png" class="mx-auto" alt="marketing-tool-image">
                            <a href="javascript:void(0);" target="_blank" class="mt-[15px] md:mt-[30px] mb-[5px] inline-block rounded-md bg-purple-700 text-white transition-all text-[15px] md:text-md font-medium py-[6px] px-[16.5px] hover:bg-purple-600">
                                Contact Us
                            </a>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-3">

                    <!-- Instagram Subscribers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Instagram Subscribers
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
                            <div class="ltr:-ml-[12px] rtl:-mr-[12px] -mb-[18px] -mt-[20px]">
                                <div id="marketingInstagramSubscribersChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
            @include('partials.dashboard.campaign_modal')
            @include('partials.dashboard.view_campaign_modal')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
