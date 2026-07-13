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
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-[25px]">

                        <!-- Total Active Properties -->
                        <div class="trezo-card relative pt-[20px] md:pt-[25px] ltr:pl-[20px] ltr:md:pl-[25px] rtl:pr-[20px] rtl:md:pr-[25px] rounded-md" style="background: linear-gradient(101deg, #FE7A36 0%, #FD5812 100%);">
                            <div class="trezo-card-content">
                                <span class="block text-white mb-[4px]">
                                    Total Active Properties
                                </span>
                                <h3 class="!mb-0 !text-[20px] !text-white">
                                    507,020
                                </h3>
                                <div class="-mt-[5px] ltr:text-right rtl:text-left">
                                    <img src="/assets/images/man-searching-house.png" class="inline-block" alt="man-searching-house.png">
                                </div>
                            </div>
                            <img src="/assets/images/icons/4dot2.svg" class="absolute bottom-0 ltr:left-0 rtl:right-0 rtl:-scale-x-100" alt="4dot">
                        </div>

                        <!-- Revenue -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-[15px]">
                                        <div>
                                            <span class="block mb-[4px]">
                                                Revenue
                                            </span>
                                            <h3 class="!mb-0 !text-[20px]">
                                                $194,712
                                            </h3>
                                        </div>
                                        <span class="inline-block px-[8.5px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                            +60%
                                        </span>
                                    </div>
                                    <span class="block text-xs">
                                        Last 7 days
                                    </span>
                                </div>
                                <div class="-mb-[38px] -mt-[17px] max-w-[310px] mx-auto">
                                    <div id="realEstateRevenueChart"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="lg:col-span-2">

                    <!-- New Listings vs Sold Properties -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    New Listings vs Sold Properties
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                            <div class="-mb-[20px] ltr:-ml-[14px] rtl:-mr-[14px] -mt-[10px]">
                                <div id="realEstateNewListingsSoldPropertiesChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- Properties for Sale -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content relative">
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-[8.5px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                +75%
                            </span>
                            <span class="block text-xs">
                                Last 30 days
                            </span>
                        </div>
                        <div class="h-[70px]"></div>
                        <span class="block mb-[4px]">
                            Properties for Sale
                        </span>
                        <h3 class="!mb-0 !text-[20px]">
                            5,458
                        </h3>
                        <div class="absolute ltr:-right-[95px] rtl:-left-[95px] -bottom-[35px]">
                            <div id="realEstatePropertiesForSaleChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Properties for Rent -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content relative">
                        <div class="flex items-center justify-between">
                            <span class="inline-block px-[8.5px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px] text-xs">
                                +35%
                            </span>
                            <span class="block text-xs">
                                Last 30 days
                            </span>
                        </div>
                        <div class="h-[70px]"></div>
                        <span class="block mb-[4px]">
                            Properties for Rent
                        </span>
                        <h3 class="!mb-0 !text-[20px]">
                            2,510
                        </h3>
                        <div class="absolute ltr:-right-[95px] rtl:-left-[95px] -bottom-[35px]">
                            <div id="realEstatePropertiesForRentChart"></div>
                        </div>
                    </div>
                </div>

                <!-- New Customers This Month -->
                <div class="md:col-span-2 lg:col-span-1 trezo-card relative p-[20px] md:p-[25px] rounded-md" style="background: linear-gradient(73deg, #23272E 0%, #343A46 100%);">
                    <div class="trezo-card-content">
                        <span class="block mb-[4px] text-gray-400">
                            New Customers This Month
                        </span>
                        <h3 class="!mb-[20px] !text-[20px] !text-white">
                            4,712
                        </h3>
                        <span class="block text-gray-400 mb-[10px]">
                            Join Today
                        </span>
                        <div class="flex items-center">
                            <img src="/assets/images/users/user36.jpg" class="rounded-full w-[40px] border border-white ltr:-mr-[10px] rtl:-ml-[10px] ltr:last:mr-0 rtl:last:ml-0" alt="user-image">
                            <img src="/assets/images/users/user37.jpg" class="rounded-full w-[40px] border border-white ltr:-mr-[10px] rtl:-ml-[10px] ltr:last:mr-0 rtl:last:ml-0" alt="user-image">
                            <img src="/assets/images/users/user38.jpg" class="rounded-full w-[40px] border border-white ltr:-mr-[10px] rtl:-ml-[10px] ltr:last:mr-0 rtl:last:ml-0" alt="user-image">
                            <img src="/assets/images/users/user39.jpg" class="rounded-full w-[40px] border border-white ltr:-mr-[10px] rtl:-ml-[10px] ltr:last:mr-0 rtl:last:ml-0" alt="user-image">
                            <img src="/assets/images/users/user40.jpg" class="rounded-full w-[40px] border border-white ltr:-mr-[10px] rtl:-ml-[10px] ltr:last:mr-0 rtl:last:ml-0" alt="user-image">
                            <div class="flex items-center justify-center bg-orange-400 border border-white w-[40px] h-[40px] rounded-full text-white font-semibold ltr:-mr-[10px] rtl:-ml-[10px] ltr:last:mr-0 rtl:last:ml-0">
                                59
                            </div>
                        </div>
                    </div>
                    <img src="/assets/images/icons/4dot3.svg" class="absolute bottom-0 ltr:right-0 rtl:left-0 rtl:-scale-x-100" alt="4dot">
                </div>

            </div>
                
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Most Sales Location -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Most Sales Location
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
                            <div class="flex items-center justify-center min-h-[200px]">
                                <div id="salesByLocationsJsVectorMap"></div>
                            </div>
                            <ul class="mt-[20px]">
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/usa.svg" class="inline-block" alt="usa">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            United States
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 85%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                85%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/germany.svg" class="inline-block" alt="germany">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            Germany
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 75%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                75%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/uk.svg" class="inline-block" alt="uk">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            United Kingdom
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 40%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                40%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/canada.svg" class="inline-block" alt="canada">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            Canada
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 10%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                10%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/portugal.svg" class="inline-block" alt="portugal">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            Portugal
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 5%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                05%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/spain.svg" class="inline-block" alt="spain">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            Spain
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 15%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                15%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex items-center mb-[15px] last:mb-0">
                                    <div class="shrink-0 ltr:mr-[15px] rtl:ml-[15px]">
                                        <img src="/assets/images/flags/france.svg" class="inline-block" alt="france">
                                    </div>
                                    <div class="grow">
                                        <span class="block font-medium mb-[2px]">
                                            France
                                        </span>
                                        <div class="leading-none flex items-center">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 25%;"></div>
                                            </div>
                                            <span class="block ltr:ml-[15px] rtl:mr-[15px]">
                                                25%
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">
                    
                    <!-- Rental Income -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Rental Income
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
                            <div class="-mt-[22px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px]">
                                <div id="realEstateRentalHomeChart"></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">

                        <!-- Social Search -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <h5 class="!mb-[5px]">
                                    Social Search
                                </h5>
                                <span class="block text-sm">
                                    Total traffic in this week
                                </span>
                                <div class="-mb-[23px]">
                                    <div id="realEstateSocialSearchChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Properties -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Recent Properties
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content" id="recentPropertiesSlides">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="rounded-[5px] h-[112px] bg-cover bg-no-repeat bg-center" style="background-image: url(/assets/images/properties/property1.jpg);"></div>
                                            <div class="flex items-center justify-between mb-[8px] mt-[15px]">
                                                <h3 class="!text-lg !mb-0 !text-orange-500">
                                                    $18,000
                                                </h3>
                                                <a href="/dashboard/property-details" class="inline-block font-medium text-primary-500 transition-all hover:text-primary-400 hover:underline">
                                                    View More
                                                </a>
                                            </div>
                                            <span class="block relative pt-px ltr:pl-[22px] rtl:pr-[22px]">
                                                <i class="material-symbols-outlined text-primary-500 absolute ltr:-left-[2px] rtl:-right-[2px] top-1/2 -translate-y-1/2 !text-[19px]">
                                                    location_on
                                                </i>
                                                35 Prince Consort Road
                                            </span>
                                            <ul class="mt-[10px]">
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        bed
                                                    </i>
                                                    6Bed
                                                </li>
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        bathtub
                                                    </i>
                                                    5Bath
                                                </li>
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        square_foot
                                                    </i>
                                                    1800sqft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rounded-[5px] h-[112px] bg-cover bg-no-repeat bg-center" style="background-image: url(/assets/images/properties/property2.jpg);"></div>
                                            <div class="flex items-center justify-between mb-[8px] mt-[15px]">
                                                <h3 class="!text-lg !mb-0 !text-orange-500">
                                                    $220,000
                                                </h3>
                                                <a href="/dashboard/property-details" class="inline-block font-medium text-primary-500 transition-all hover:text-primary-400 hover:underline">
                                                    View More
                                                </a>
                                            </div>
                                            <span class="block relative pt-px ltr:pl-[22px] rtl:pr-[22px]">
                                                <i class="material-symbols-outlined text-primary-500 absolute ltr:-left-[2px] rtl:-right-[2px] top-1/2 -translate-y-1/2 !text-[19px]">
                                                    location_on
                                                </i>
                                                58 Gateway Road Portland
                                            </span>
                                            <ul class="mt-[10px]">
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        bed
                                                    </i>
                                                    8Bed
                                                </li>
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        bathtub
                                                    </i>
                                                    6Bath
                                                </li>
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        square_foot
                                                    </i>
                                                    2000sqft
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="rounded-[5px] h-[112px] bg-cover bg-no-repeat bg-center" style="background-image: url(/assets/images/properties/property3.jpg);"></div>
                                            <div class="flex items-center justify-between mb-[8px] mt-[15px]">
                                                <h3 class="!text-lg !mb-0 !text-orange-500">
                                                    $350,000
                                                </h3>
                                                <a href="/dashboard/property-details" class="inline-block font-medium text-primary-500 transition-all hover:text-primary-400 hover:underline">
                                                    View More
                                                </a>
                                            </div>
                                            <span class="block relative pt-px ltr:pl-[22px] rtl:pr-[22px]">
                                                <i class="material-symbols-outlined text-primary-500 absolute ltr:-left-[2px] rtl:-right-[2px] top-1/2 -translate-y-1/2 !text-[19px]">
                                                    location_on
                                                </i>
                                                18 Chemin Challet
                                            </span>
                                            <ul class="mt-[10px]">
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        bed
                                                    </i>
                                                    8Bed
                                                </li>
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        bathtub
                                                    </i>
                                                    7Bath
                                                </li>
                                                <li class="relative inline-block relative ltr:pl-[24px] rtl:pr-[24px] ltr:mr-[20px] rtl:ml-[20px] ltr:last:mr-0 rtl:last:ml-0">
                                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-primary-500 !text-lg">
                                                        square_foot
                                                    </i>
                                                    2200sqft
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Customer Reviews -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Customer Reviews
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
                        <div class="trezo-card-content" id="customerReviewsSlides">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide bg-gray-50 dark:bg-[#0a0e19] rounded-md py-[20px] md:py-[25px] px-[20px]">
                                        <div class="sm:flex items-center justify-between mb-[10px] sm:mb-[12px]">
                                            <div class="flex items-center gap-[12px]">
                                                <img src="/assets/images/users/user64.jpg" class="w-[45px] rounded-full" alt="user-image">
                                                <div>
                                                    <span class="block sm:text-[15px] text-black dark:text-white font-semibold">
                                                        Jose Grafton
                                                    </span>
                                                    <span class="block">
                                                        22m ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[3px] mt-[15px] sm:mt-0">
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-half-fill text-orange-500"></i>
                                            </div>
                                        </div>
                                        <p class="md:max-w-[365px]">
                                            "Impressed with the timely responses and professional approach. Highly recommend for anyone seeking real estate solutions!"
                                        </p>
                                    </div>
                                    <div class="swiper-slide bg-gray-50 dark:bg-[#0a0e19] rounded-md py-[20px] md:py-[25px] px-[20px]">
                                        <div class="sm:flex items-center justify-between mb-[10px] sm:mb-[12px]">
                                            <div class="flex items-center gap-[12px]">
                                                <img src="/assets/images/users/user65.jpg" class="w-[45px] rounded-full" alt="user-image">
                                                <div>
                                                    <span class="block sm:text-[15px] text-black dark:text-white font-semibold">
                                                        Irene George
                                                    </span>
                                                    <span class="block">
                                                        15m ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[3px] mt-[15px] sm:mt-0">
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                            </div>
                                        </div>
                                        <p class="md:max-w-[365px]">
                                            "Great service! Found exactly what I needed for my property, and the process was smooth and hassle-free."
                                        </p>
                                    </div>
                                    <div class="swiper-slide bg-gray-50 dark:bg-[#0a0e19] rounded-md py-[20px] md:py-[25px] px-[20px]">
                                        <div class="sm:flex items-center justify-between mb-[10px] sm:mb-[12px]">
                                            <div class="flex items-center gap-[12px]">
                                                <img src="/assets/images/users/user63.jpg" class="w-[45px] rounded-full" alt="user-image">
                                                <div>
                                                    <span class="block sm:text-[15px] text-black dark:text-white font-semibold">
                                                        Paula McClelland
                                                    </span>
                                                    <span class="block">
                                                        30m ago
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[3px] mt-[15px] sm:mt-0">
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-fill text-orange-500"></i>
                                                <i class="ri-star-line  text-orange-500"></i>
                                            </div>
                                        </div>
                                        <p class="md:max-w-[365px]">
                                            "The entire process was seamless, and I couldn't be happier with the results. Excellent customer service throughout!"
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Top Properties -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Properties
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
                            <div class="flex items-center gap-[12px] mb-[13px] last:mb-0">
                                <img src="/assets/images/properties/top1.jpg" class="w-[40px] rounded-[5px]" alt="top-image">
                                <div>
                                    <a href="#" class="inline-block font-semibold sm:text-[15px] md:text-md text-black dark:text-white transition-all hover:text-primary-500">
                                        Industrial
                                    </a>
                                    <span class="block">
                                        36 Clay Street Indianapolis
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center gap-[12px] mb-[13px] last:mb-0">
                                <img src="/assets/images/properties/top2.jpg" class="w-[40px] rounded-[5px]" alt="top-image">
                                <div>
                                    <a href="#" class="inline-block font-semibold sm:text-[15px] md:text-md text-black dark:text-white transition-all hover:text-primary-500">
                                        Office
                                    </a>
                                    <span class="block">
                                        07 Maple Street Los Angeles
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center gap-[12px] mb-[13px] last:mb-0">
                                <img src="/assets/images/properties/top3.jpg" class="w-[40px] rounded-[5px]" alt="top-image">
                                <div>
                                    <a href="#" class="inline-block font-semibold sm:text-[15px] md:text-md text-black dark:text-white transition-all hover:text-primary-500">
                                        Multi-Family
                                    </a>
                                    <span class="block">
                                        94 Brooke Street Houston
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center gap-[12px] mb-[13px] last:mb-0">
                                <img src="/assets/images/properties/top4.jpg" class="w-[40px] rounded-[5px]" alt="top-image">
                                <div>
                                    <a href="#" class="inline-block font-semibold sm:text-[15px] md:text-md text-black dark:text-white transition-all hover:text-primary-500">
                                        Retail
                                    </a>
                                    <span class="block">
                                        84 Pick Street Centennial
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Latest Transactions -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Latest Transactions
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle">
                        <div class="trezo-card-dropdown relative">
                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                    Last 30 Days
                                    <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
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
                                        Customer ID
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Customer Name
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Property
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Date
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Price
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Status
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Payment
                                    </th>
                                    <th class="font-normal ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #TRE0015
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px]">
                                                <img src="/assets/images/users/user1.jpg" class="inline-block rounded-md" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Sarah Johnson
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Industrial
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            30 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $500,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Master Card
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #TRE0099
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px]">
                                                <img src="/assets/images/users/user2.jpg" class="inline-block rounded-md" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Michael Smith
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Office
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            29 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $1,200,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-secondary-50 dark:bg-[#15203c] text-secondary-600 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Paypal
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #TRE0145
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px]">
                                                <img src="/assets/images/users/user3.jpg" class="inline-block rounded-md" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Emily Brown
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Multi-Family
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            28 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $350,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-orange-50 dark:bg-[#15203c] text-orange-600 rounded-sm font-medium text-xs">
                                            Cancel
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Wise
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #TRE0247
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px]">
                                                <img src="/assets/images/users/user4.jpg" class="inline-block rounded-md" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Jason Lee
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Residential
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            27 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $220,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Payoneer
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[15px]">
                                            <div class="form-check relative top-[1.5px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                            <span class="text-gray-500 dark:text-gray-400">
                                                #TRE0299
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px]">
                                                <img src="/assets/images/users/user5.jpg" class="inline-block rounded-md" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Ashley Davis
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Commercial
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            26 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $1,500,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-600 rounded-sm font-medium text-xs">
                                            Rejected
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            Credit Card
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
