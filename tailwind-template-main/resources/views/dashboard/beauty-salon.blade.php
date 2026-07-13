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

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
                
                <!-- Welcome -->
                <div
                    class="trezo-card p-[20px] md:p-[25px] rounded-md !pb-0"
                    style="background: linear-gradient(90deg, #EAB9D2 0%, #EBA2C7 100%);"
                >
                    <div class="trezo-card-content md:pt-[11px]">
                        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-[20px] md:gap-[25px]">
                            <div class="relative z-[1] md:-top-[11px] md:max-w-[255px] text-center ltr:md:text-left rtl:md:text-right ltr:md:-mr-[15px] rtl:md:-ml-[15px]">
                                <span class="block text-md md:text-lg mb-[10px] text-dark">
                                    Hello Olivia!
                                </span>
                                <h1 class="!font-black !text-xl md:!text-2xl !mb-[12px] !text-dark">
                                    Welcome To Your Beauty Lounge
                                </h1>
                                <p class="text-black !mb-0">
                                    You have 15.7% more bookings today.
                                </p>
                                <div
                                    class="absolute -z-[1] -top-[15px] -left-[15px] w-[60px] h-[60px] rounded-full"
                                    style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.04) 100%);"
                                ></div>
                            </div>
                            <div class="mx-auto max-w-[237px] relative z-[1] text-center">
                                <img src="/assets/images/girl-with-smile.png" class="inline-block" alt="girl-with-smile">
                                <div
                                    class="absolute -z-[1] top-[30px] left-1/2 -translate-x-1/2 w-[220px] h-[220px] rounded-full"
                                    style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 0%, rgba(255, 255, 255, 0.04) 100%);"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">

                    <!-- Customer Satisfaction Rate -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <span class="block">
                                Customer Satisfaction Rate
                            </span>
                            <h2 class="!leading-none !text-2xl md:!text-3xl mt-[6px] md:!mb-[12px]">
                                88.5%
                            </h2>
                            <div id="bsCustomerSatisfactionRateChart"></div>
                        </div>
                    </div>

                    <!-- New Customers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <span class="block">
                                New Customers This Month
                            </span>
                            <h2 class="!leading-none !text-2xl md:!text-3xl mt-[6px] !mb-[8px]">
                                14.5K
                            </h2>
                            <span class="inline-block text-xs rounded-[30px] py-px px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                +7%
                            </span>
                            <span class="block mt-[6px] text-xs">
                                vs previous 30 days
                            </span>
                            <div class="flex items-center mt-[70px] mb-[10px]">
                                <img src="/assets/images/users/user36.jpg" alt="user-image" class="rounded-full w-[46px] ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black shadow-lg">
                                <img src="/assets/images/users/user37.jpg" alt="user-image" class="rounded-full w-[46px] ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black shadow-lg">
                                <div class="flex items-center justify-center w-[46px] h-[46px] text-white bg-info-500 rounded-full shadow-lg font-bold ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black">
                                    P
                                </div>
                                <img src="/assets/images/users/user38.jpg" alt="user-image" class="rounded-full w-[46px] ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black shadow-lg">
                                <div class="flex items-center justify-center w-[46px] h-[46px] text-white bg-primary-500 rounded-full shadow-lg font-bold ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black">
                                    S
                                </div>
                                <img src="/assets/images/users/user43.jpg" alt="user-image" class="rounded-full w-[46px] ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black shadow-lg">
                                <div class="flex items-center justify-center w-[46px] h-[46px] text-white bg-black rounded-full shadow-lg font-bold ltr:-mr-[20px] rtl:-ml-[20px] border-[2px] border-white dark:border-black">
                                    +24
                                </div>
                            </div>
                            <span class="block text-xs text-black dark:text-white font-medium">
                                Joined Today
                            </span>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Top Selling Products -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Selling Products
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#f5f7f8] bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            This Month
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                        </span>
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
                        <div class="trezo-card-content relative" id="topSellingProductsSlides">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product24.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Hair Treatment
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $23.50
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    321
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product25.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Facial Kit
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $20.50
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    124
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product26.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Winter Cream
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $12.43
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    99
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product27.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Perfume
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $22.12
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    23
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product24.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Hair Treatment
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $23.50
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    321
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product25.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Facial Kit
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $20.50
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    124
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product26.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Winter Cream
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $12.43
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    99
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <a
                                            href="/dashboard/product-details"
                                            class="h-[183px] rounded-md block bg-no-repeat bg-center bg-cover"
                                            style="background-image: url(/assets/images/products/product27.jpg);"
                                        ></a>
                                        <div class="flex justify-between mt-[15px]">
                                            <div>
                                                <h6 class="!text-base !font-semibold !mb-[4px]">
                                                    <a href="/dashboard/product-details" class="text-black dark:text-white transition-all hover:text-primary-500">
                                                        Perfume
                                                    </a>
                                                </h6>
                                                <span class="block font-semibold text-primary-800">
                                                    $22.12
                                                </span>
                                            </div>
                                            <div class="text-center">
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                                    23
                                                </span>
                                                <span class="text-xs block mt-[3px]">
                                                    sold
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-line"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Customers From Channels -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Customers From Channels
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.5px] mb-[14.5px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/facebook3.svg" alt="facebook">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Facebook
                                        </span>
                                        <span class="block text-xs mt-[4px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.5px] mb-[14.5px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/dribbble2.svg" alt="dribbble">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Dribbble
                                        </span>
                                        <span class="block text-xs mt-[4px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.5px] mb-[14.5px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/instagram2.svg" alt="instagram">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Instagram
                                        </span>
                                        <span class="block text-xs mt-[4px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14.5px] mb-[14.5px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/google3.svg" alt="google">
                                    <div>
                                        <span class="block font-semibold text-black dark:text-white">
                                            Google
                                        </span>
                                        <span class="block text-xs mt-[4px]">
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
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Featured Services -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Featured Services
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <ul>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[12px] mb-[12px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/hair-cutting.svg" alt="hair-cutting">
                                        <div>
                                            <span class="block font-medium text-black dark:text-white mb-[4px]">
                                                Hair Cut
                                            </span>
                                            <span class="block text-xs">
                                                132 Served this week
                                            </span>
                                        </div>
                                    </div>
                                    <span class="font-medium text-primary-500 rounded-full flex items-center justify-center bg-primary-100 dark:bg-[#172036] w-[25px] h-[25px] text-xs pt-px">
                                        01
                                    </span>
                                </li>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[12px] mb-[12px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/manicure.svg" alt="manicure">
                                        <div>
                                            <span class="block font-medium text-black dark:text-white mb-[4px]">
                                                Manicure
                                            </span>
                                            <span class="block text-xs">
                                                102 Served this week
                                            </span>
                                        </div>
                                    </div>
                                    <span class="font-medium text-primary-500 rounded-full flex items-center justify-center bg-primary-100 dark:bg-[#172036] w-[25px] h-[25px] text-xs pt-px">
                                        02
                                    </span>
                                </li>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[12px] mb-[12px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/pedicure.svg" alt="pedicure">
                                        <div>
                                            <span class="block font-medium text-black dark:text-white mb-[4px]">
                                                Pedicure
                                            </span>
                                            <span class="block text-xs">
                                                99 Served this week
                                            </span>
                                        </div>
                                    </div>
                                    <span class="font-medium text-primary-500 rounded-full flex items-center justify-center bg-primary-100 dark:bg-[#172036] w-[25px] h-[25px] text-xs pt-px">
                                        03
                                    </span>
                                </li>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[12px] mb-[12px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/nail-polish.svg" alt="nail-polish">
                                        <div>
                                            <span class="block font-medium text-black dark:text-white mb-[4px]">
                                                Nail Art
                                            </span>
                                            <span class="block text-xs">
                                                89 Served this week
                                            </span>
                                        </div>
                                    </div>
                                    <span class="font-medium text-primary-500 rounded-full flex items-center justify-center bg-primary-100 dark:bg-[#172036] w-[25px] h-[25px] text-xs pt-px">
                                        04
                                    </span>
                                </li>
                                <li class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[12px] mb-[12px] last:border-none last:mb-0 last:pb-0">
                                    <div class="flex items-center gap-[15px]">
                                        <img src="/assets/images/icons/woman.svg" alt="woman">
                                        <div>
                                            <span class="block font-medium text-black dark:text-white mb-[4px]">
                                                Facial Treatment
                                            </span>
                                            <span class="block text-xs">
                                                72 Served this week
                                            </span>
                                        </div>
                                    </div>
                                    <span class="font-medium text-primary-500 rounded-full flex items-center justify-center bg-primary-100 dark:bg-[#172036] w-[25px] h-[25px] text-xs pt-px">
                                        05
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Recent Appointments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Appointments
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
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
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
                                <div class="schedule-list h-[293px] overflow-y-scroll ltr:-mr-[20px] ltr:md:-mr-[25px] rtl:-ml-[20px] rtl:md:-ml-[25px] ltr:pr-[20px] ltr:md:pr-[25px] rtl:pl-[20px] rtl:md:pl-[25px]">
                                    <div class="p-[20px] rounded-md relative z-[1] bg-primary-100 dark:bg-[#172036] ltr:ml-[34px] rtl:mr-[34px] mb-[20px] last:mb-0">
                                        <div class="absolute ltr:-left-[34px] rtl:-right-[34px] top-1/2 -translate-y-1/2">
                                            <img src="/assets/images/icons/done.svg" alt="done">
                                        </div>
                                        <div class="flex justify-between">
                                            <div>
                                                <span class="block text-black dark:text-white font-medium">
                                                    10:00 AM
                                                </span>
                                                <span class="block text-primary-500 font-semibold mt-[4px]">
                                                    Pedicure Treatment
                                                </span>
                                            </div>
                                            <div>
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-dark dark:bg-dark">
                                                    Done
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mt-[15px] sm:flex lg:block xl:flex justify-between">
                                            <div class="flex items-center gap-[8px]">
                                                <img src="/assets/images/users/user36.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Client
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Jonathon Ronan
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[8px] mt-[15px] sm:mt-0 lg:mt-[15px] xl:mt-0">
                                                <img src="/assets/images/users/user37.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Served by
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Zinia Andy
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-mt-[20px] absolute ltr:-left-[22px] rtl:-right-[22px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                    </div>
                                    <div class="p-[20px] rounded-md relative z-[1] bg-purple-100 dark:bg-[#172036] ltr:ml-[34px] rtl:mr-[34px] mb-[20px] last:mb-0">
                                        <div class="absolute ltr:-left-[34px] rtl:-right-[34px] top-1/2 -translate-y-1/2">
                                            <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                        </div>
                                        <div class="flex justify-between">
                                            <div>
                                                <span class="block text-black dark:text-white font-medium">
                                                    11:00 AM
                                                </span>
                                                <span class="block text-purple-500 font-semibold mt-[4px]">
                                                    Facial Treatment
                                                </span>
                                            </div>
                                            <div>
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-danger-300 text-danger-700 bg-danger-100 dark:border-dark dark:bg-dark">
                                                    Upcoming
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mt-[15px] sm:flex lg:block xl:flex justify-between">
                                            <div class="flex items-center gap-[8px]">
                                                <img src="/assets/images/users/user38.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Client
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Angela Carter
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[8px] mt-[15px] sm:mt-0 lg:mt-[15px] xl:mt-0">
                                                <img src="/assets/images/users/user40.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Served by
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Skyler White
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-mt-[20px] absolute ltr:-left-[22px] rtl:-right-[22px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                    </div>
                                    <div class="p-[20px] rounded-md relative z-[1] bg-primary-100 dark:bg-[#172036] ltr:ml-[34px] rtl:mr-[34px] mb-[20px] last:mb-0">
                                        <div class="absolute ltr:-left-[34px] rtl:-right-[34px] top-1/2 -translate-y-1/2">
                                            <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                        </div>
                                        <div class="flex justify-between">
                                            <div>
                                                <span class="block text-black dark:text-white font-medium">
                                                    10:00 AM
                                                </span>
                                                <span class="block text-primary-500 font-semibold mt-[4px]">
                                                    Pedicure Treatment
                                                </span>
                                            </div>
                                            <div>
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-danger-300 text-danger-700 bg-danger-100 dark:border-dark dark:bg-dark">
                                                    Upcoming
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mt-[15px] sm:flex lg:block xl:flex justify-between">
                                            <div class="flex items-center gap-[8px]">
                                                <img src="/assets/images/users/user36.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Client
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Jonathon Ronan
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[8px] mt-[15px] sm:mt-0 lg:mt-[15px] xl:mt-0">
                                                <img src="/assets/images/users/user37.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Served by
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Zinia Andy
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-mt-[20px] absolute ltr:-left-[22px] rtl:-right-[22px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                    </div>
                                    <div class="p-[20px] rounded-md relative z-[1] bg-purple-100 dark:bg-[#172036] ltr:ml-[34px] rtl:mr-[34px] mb-[20px] last:mb-0">
                                        <div class="absolute ltr:-left-[34px] rtl:-right-[34px] top-1/2 -translate-y-1/2">
                                            <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                        </div>
                                        <div class="flex justify-between">
                                            <div>
                                                <span class="block text-black dark:text-white font-medium">
                                                    11:00 AM
                                                </span>
                                                <span class="block text-purple-500 font-semibold mt-[4px]">
                                                    Facial Treatment
                                                </span>
                                            </div>
                                            <div>
                                                <span class="inline-block text-xs rounded-[30px] px-[10px] border border-danger-300 text-danger-700 bg-danger-100 dark:border-dark dark:bg-dark">
                                                    Upcoming
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mt-[15px] sm:flex lg:block xl:flex justify-between">
                                            <div class="flex items-center gap-[8px]">
                                                <img src="/assets/images/users/user38.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Client
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Angela Carter
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-[8px] mt-[15px] sm:mt-0 lg:mt-[15px] xl:mt-0">
                                                <img src="/assets/images/users/user40.jpg" alt="user-image" class="rounded-full w-[35px] border border-white dark:border-black">
                                                <div>
                                                    <span class="block text-xs">
                                                        Served by
                                                    </span>
                                                    <span class="block text-[13px] font-semibold text-black dark:text-white">
                                                        Skyler White
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="-mt-[20px] absolute ltr:-left-[22px] rtl:-right-[22px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Revenue by Services -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Revenue by Services
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#f5f7f8] bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                            <div class="-mt-[22px] -mb-[25px] ltr:-ml-[15px] rtl:-mr-[15px]">
                                <div id="revenueByServicesChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Top Stylist Performance -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Stylist Performance
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user75.jpg" class="inline-block rounded-md" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-[2px]">
                                                            Johhna Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            2032 Total Bookings
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center justify-end leading-none gap-[2px]">
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
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user76.jpg" class="inline-block rounded-md" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-[2px]">
                                                            Angela Carter
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            1020 Total Bookings
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center justify-end leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-half-line text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        4.5
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user77.jpg" class="inline-block rounded-md" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-[2px]">
                                                            Skyler White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            99 Total Bookings
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center justify-end leading-none gap-[2px]">
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
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user78.jpg" class="inline-block rounded-md" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-[2px]">
                                                            Jane Ronan
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            89 Total Bookings
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center justify-end leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-half-line text-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        3.5
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/users/user79.jpg" class="inline-block rounded-md" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-[2px]">
                                                            Angel Peril
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            72 Total Bookings
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center justify-end leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        3.0
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Top Customers -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Top Customers
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle">
                        <div class="trezo-card-dropdown relative">
                            <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#f5f7f8] bg-[#f5f7f8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                    This Week
                                    <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                </span>
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
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        ID
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Customer Name
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Phone No
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Email
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Preferred Service
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Last Visit
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Status
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0"></th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #001
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user36.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Johhna Loren
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            +321 427 8690
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs text-gray-600 dark:text-gray-400">
                                            loren123@gmail.com
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            Nail Art
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            17 Oct, 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            VIP
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #002
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user37.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Skyler White
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            +321 427 3980
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs text-gray-600 dark:text-gray-400">
                                            skyqueen@gmail.com
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            Hair Cut
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            18 Oct, 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="inline-block text-xs px-[9px] text-purple-700 border border-purple-300 bg-purple-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            Royal
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #003
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user38.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Jonathon Watson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            +321 427 1243
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs text-gray-600 dark:text-gray-400">
                                            jona2134@gmail.com
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            Manicure
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            19 Oct, 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="inline-block text-xs px-[9px] text-purple-700 border border-purple-300 bg-purple-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            Royal
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #004
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user43.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Walter Olivia
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            +321 427 7685
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs text-gray-600 dark:text-gray-400">
                                            puzzleworld@gmail.com
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            Pedicure
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            21 Oct, 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            VIP
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #005
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user40.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                David Carlen
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            +321 427 9021
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs text-gray-600 dark:text-gray-400">
                                            liveslong@gmail.com
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            Facial
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            25 Oct, 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                        <span class="inline-block text-xs px-[9px] text-primary-700 border border-primary-300 bg-primary-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            Normal
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
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
                    <div class="pt-[11px] sm:flex sm:items-center justify-between">
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

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
