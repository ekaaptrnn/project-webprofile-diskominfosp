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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px] lg:gap-[25px] mb-[25px]">

                <!-- Total Sales -->
                <div
                    class="trezo-card rounded-md border border-gray-100 dark:border-[#172036]"
                    style="background: linear-gradient(102deg, #4936F5 3.78%, #757DFF 70.84%);"
                >
                    <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !text-white !text-md !font-medium">
                                Total Sales
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                <button type="button" class="trezo-card-dropdown-btn inline-block text-[22px] text-white leading-none" id="dropdownToggleBtn">
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
                    <div class="trezo-card-content bg-white dark:bg-[#15203c] rounded-[4px] p-[20px] md:p-[25px] border-t border-gray-100 dark:border-[#172036]">
                        <div class="flex items-center justify-between">
                            <h3 class="!font-semibold !mb-0 !text-[22px] md:!text-xl">
                                $75,000
                            </h3>
                            <div class="flex items-center justify-center w-[51px] h-[51px] bg-primary-50 dark:bg-dark rounded-full">
                                <img src="/assets/images/icons/dollar-bag.svg" alt="dollar-bag">
                            </div>
                        </div>
                        <div class="relative mt-[15px] ltr:pl-[29px] rtl:pr-[29px]">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] text-success-600 top-1/2 -translate-y-1/2">
                                trending_up
                            </i>
                            <span class="font-semibold">
                                +15%
                            </span>
                            from last month
                        </div>
                    </div>
                </div>
                        
                <!-- Total Transactions -->
                <div
                    class="trezo-card rounded-md border border-gray-100 dark:border-[#172036]"
                    style="background: linear-gradient(103deg, #9135E8 9.27%, #BF85FB 83.62%);"
                >
                    <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !text-white !text-md !font-medium">
                                Total Transactions
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                <button type="button" class="trezo-card-dropdown-btn inline-block text-[22px] text-white leading-none" id="dropdownToggleBtn">
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
                    <div class="trezo-card-content bg-white dark:bg-[#15203c] rounded-[4px] p-[20px] md:p-[25px] border-t border-gray-100 dark:border-[#172036]">
                        <div class="flex items-center justify-between">
                            <h3 class="!font-semibold !mb-0 !text-[22px] md:!text-xl">
                                1200
                            </h3>
                            <div class="flex items-center justify-center w-[51px] h-[51px] bg-purple-100 dark:bg-dark rounded-full">
                                <img src="/assets/images/icons/transactions.svg" alt="transactions">
                            </div>
                        </div>
                        <div class="relative mt-[15px] ltr:pl-[29px] rtl:pr-[29px]">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] text-success-600 top-1/2 -translate-y-1/2">
                                trending_up
                            </i>
                            <span class="font-semibold">
                                +10%
                            </span>
                            from last month
                        </div>
                    </div>
                </div>

                <!-- Average Order Value -->
                <div
                    class="trezo-card rounded-md border border-gray-100 dark:border-[#172036]"
                    style="background: linear-gradient(104deg, #25B003 7.79%, #37D80A 83.18%);"
                >
                    <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !text-white !text-md !font-medium">
                                Average Order Value
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                <button type="button" class="trezo-card-dropdown-btn inline-block text-[22px] text-white leading-none" id="dropdownToggleBtn">
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
                    <div class="trezo-card-content bg-white dark:bg-[#15203c] rounded-[4px] p-[20px] md:p-[25px] border-t border-gray-100 dark:border-[#172036]">
                        <div class="flex items-center justify-between">
                            <h3 class="!font-semibold !mb-0 !text-[22px] md:!text-xl">
                                $40
                            </h3>
                            <div class="flex items-center justify-center w-[51px] h-[51px] bg-success-100 dark:bg-dark rounded-full">
                                <img src="/assets/images/icons/check-cart.svg" alt="check-cart">
                            </div>
                        </div>
                        <div class="relative mt-[15px] ltr:pl-[29px] rtl:pr-[29px]">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] text-danger-500 top-1/2 -translate-y-1/2">
                                trending_down
                            </i>
                            <span class="font-semibold">
                                -5%
                            </span>
                            from last month
                        </div>
                    </div>
                </div>
                        
                <!-- Total Discount -->
                <div
                    class="trezo-card rounded-md border border-gray-100 dark:border-[#172036]"
                    style="background: linear-gradient(106deg, #EE3E08 9.72%, #FD5812 79.69%);"
                >
                    <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !text-white !text-md !font-medium">
                                Total Discount
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                <button type="button" class="trezo-card-dropdown-btn inline-block text-[22px] text-white leading-none" id="dropdownToggleBtn">
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
                    <div class="trezo-card-content bg-white dark:bg-[#15203c] rounded-[4px] p-[20px] md:p-[25px] border-t border-gray-100 dark:border-[#172036]">
                        <div class="flex items-center justify-between">
                            <h3 class="!font-semibold !mb-0 !text-[22px] md:!text-xl">
                                $5,200
                            </h3>
                            <div class="flex items-center justify-center w-[51px] h-[51px] bg-orange-100 dark:bg-dark rounded-full">
                                <img src="/assets/images/icons/gift-card.svg" alt="gift-card">
                            </div>
                        </div>
                        <div class="relative mt-[15px] ltr:pl-[29px] rtl:pr-[29px]">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] text-success-600 top-1/2 -translate-y-1/2">
                                trending_up
                            </i>
                            <span class="font-semibold">
                                +8%
                            </span>
                            from last month
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Sales Analytics -->
                    <div class="trezo-card bg-gray-50 dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                        <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-md !font-medium">
                                    Sales Analytics
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            This Week
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
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
                        <div class="trezo-card-content bg-white dark:bg-dark p-[20px] md:p-[25px] rounded-md border-t border-gray-100 dark:border-[#172036]">
                            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-[25px]">
                                <div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="flex items-center justify-center bg-primary-100 dark:bg-[#15203c] rounded-md w-[44px] h-[44px]">
                                            <img src="/assets/images/icons/chart.svg" alt="chart">
                                        </div>
                                        <div>
                                            <span class="block">
                                                Sales Over Time
                                            </span>
                                            <h4 class="!mb-0 !font-semibold mt-px">
                                                $120,000
                                            </h4>
                                        </div>
                                        <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-700 rounded-md ltr:ml-[5px] rtl:mr-[5px]">
                                            +9.1%
                                        </span>
                                    </div>
                                    <p class="mt-[15px] md:mt-[20px] !leading-[1.4] md:max-w-[400px]">
                                        Sales have shown a positive trend, with a significant increase of 9.1% over the previous month.
                                    </p>
                                </div>
                                <div class="-mt-[11px] -mb-[11px] lg:ltr:-ml-[35px] lg:rtl:-mr-[35px]">
                                    <div id="posSystemSalesAnalyticsChart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content bg-white dark:bg-dark p-[20px] md:p-[25px] rounded-b-md border-t border-gray-100 dark:border-[#172036]">
                            <div class="relative py-[15px] ltr:md:pl-[175px] rtl:md:pr-[175px]">
                                <div class="md:absolute md:ltr:-left-[25px] md:rtl:-right-[25px] md:max-w-[200px] -mb-[40px] md:mb-0">
                                    <div id="posSystemTopPerformingChart"></div>
                                </div>
                                <h5 class="!font-medium !text-md !mb-[20px]">
                                    Sales by Category/Products <span class="text-gray-500 dark:text-gray-400 text-base">(Top Performing)</span>
                                </h5>
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-[20px]">
                                    <div class="flex items-center gap-[10px]">
                                        <div class="flex items-center justify-center w-[44px] h-[44px] rounded-md bg-purple-100 text-purple-500 dark:bg-[#15203c]">
                                            <i class="material-symbols-outlined">
                                                devices
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block mb-[2px]">
                                                Electronics
                                            </span>
                                            <h4 class="!mb-0 !font-medium !text-[20px]">
                                                $35,000
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="flex items-center justify-center w-[44px] h-[44px] rounded-md bg-success-100 text-success-600 dark:bg-[#15203c]">
                                            <i class="material-symbols-outlined">
                                                apparel
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block mb-[2px]">
                                                Clothing
                                            </span>
                                            <h4 class="!mb-0 !font-medium !text-[20px]">
                                                $25,000
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-[10px]">
                                        <div class="flex items-center justify-center w-[44px] h-[44px] rounded-md bg-secondary-100 text-secondary-500 dark:bg-[#15203c]">
                                            <i class="material-symbols-outlined">
                                                deployed_code
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block mb-[2px]">
                                                Home Goods
                                            </span>
                                            <h4 class="!mb-0 !font-medium !text-[20px]">
                                                $18,000
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Customer Segmentation -->
                    <div class="trezo-card bg-gray-50 dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                        <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-md !font-medium">
                                    Customer Segmentation
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
                        <div class="trezo-card-content bg-white dark:bg-dark p-[20px] md:p-[25px] rounded-md border-t border-gray-100 dark:border-[#172036]">
                            <div class="lg:mb-[20px]">
                                <div id="posSystemCustomerSegmentationChart"></div>
                            </div>
                            <div class="flex items-center gap-[10px] mb-[20px] md:mb-[25px] last:mb-0">
                                <div class="flex items-center justify-center bg-secondary-100 text-secondary-500 dark:bg-[#15203c] rounded-md w-[44px] h-[44px]">
                                    <i class="material-symbols-outlined">
                                        person_add
                                    </i>
                                </div>
                                <div>
                                    <span class="block mb-[3px]">
                                        New Customers
                                    </span>
                                    <h4 class="!mb-0 !font-semibold !text-[20px] flex items-center gap-[6px]">
                                        1,200 <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">+40% of total transactions</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="flex items-center gap-[10px] mb-[20px] md:mb-[25px] last:mb-0">
                                <div class="flex items-center justify-center bg-purple-100 text-purple-500 dark:bg-[#15203c] rounded-md w-[44px] h-[44px]">
                                    <i class="material-symbols-outlined">
                                        account_circle
                                    </i>
                                </div>
                                <div>
                                    <span class="block mb-[3px]">
                                        Returning Customers
                                    </span>
                                    <h4 class="!mb-0 !font-semibold !text-[20px] flex items-center gap-[6px]">
                                        1,800 <span class="text-gray-500 dark:text-gray-400 text-xs font-normal">+60% of total transactions</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Categories -->
                    <div class="trezo-card mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-md md:!text-[20px] !font-medium">
                                    Categories
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="trezo-tabs" id="trezo-tabs">
                                <ul class="categories-navs mb-[10px]">
                                    <li class="nav-item inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab1" class="nav-link active py-[16px] px-[22px] rounded-md text-black dark:text-white transition-all border-[2px] border-gray-100 dark:border-[#172036]">
                                            <img src="/assets/images/icons/container.svg" class="inline-block" alt="container">
                                            <div class="block font-medium text-md mt-[12px] mb-[2px]">
                                                All
                                            </div>
                                            <div class="relative text-gray-500 dark:text-gray-400 font-medium">
                                                <span class="text-xs left-0 right-0 top-1/2 -translate-y-1/2 absolute transition-all">
                                                    450
                                                </span>
                                                <span class="text-xs transition-all">
                                                    450 Products
                                                </span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab2" class="nav-link py-[16px] px-[22px] rounded-md text-black dark:text-white transition-all border-[2px] border-gray-100 dark:border-[#172036]">
                                            <img src="/assets/images/icons/data.svg" class="inline-block" alt="data">
                                            <div class="block font-medium text-md mt-[12px] mb-[2px]">
                                                Electronics
                                            </div>
                                            <div class="relative text-gray-500 dark:text-gray-400 font-medium">
                                                <span class="text-xs left-0 right-0 top-1/2 -translate-y-1/2 absolute transition-all">
                                                    45
                                                </span>
                                                <span class="text-xs transition-all">
                                                    45 Products
                                                </span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab3" class="nav-link py-[16px] px-[22px] rounded-md text-black dark:text-white transition-all border-[2px] border-gray-100 dark:border-[#172036]">
                                            <img src="/assets/images/icons/clothing.svg" class="inline-block" alt="clothing">
                                            <div class="block font-medium text-md mt-[12px] mb-[2px]">
                                                Clothing
                                            </div>
                                            <div class="relative text-gray-500 dark:text-gray-400 font-medium">
                                                <span class="text-xs left-0 right-0 top-1/2 -translate-y-1/2 absolute transition-all">
                                                    29
                                                </span>
                                                <span class="text-xs transition-all">
                                                    29 Products
                                                </span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab4" class="nav-link py-[16px] px-[22px] rounded-md text-black dark:text-white transition-all border-[2px] border-gray-100 dark:border-[#172036]">
                                            <img src="/assets/images/icons/face.svg" class="inline-block" alt="face">
                                            <div class="block font-medium text-md mt-[12px] mb-[2px]">
                                                Beauty
                                            </div>
                                            <div class="relative text-gray-500 dark:text-gray-400 font-medium">
                                                <span class="text-xs left-0 right-0 top-1/2 -translate-y-1/2 absolute transition-all">
                                                    34
                                                </span>
                                                <span class="text-xs transition-all">
                                                    34 Products
                                                </span>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab5" class="nav-link py-[16px] px-[22px] rounded-md text-black dark:text-white transition-all border-[2px] border-gray-100 dark:border-[#172036]">
                                            <img src="/assets/images/icons/food.svg" class="inline-block" alt="food">
                                            <div class="block font-medium text-md mt-[12px] mb-[2px]">
                                                Foods
                                            </div>
                                            <div class="relative text-gray-500 dark:text-gray-400 font-medium">
                                                <span class="text-xs left-0 right-0 top-1/2 -translate-y-1/2 absolute transition-all">
                                                    18
                                                </span>
                                                <span class="text-xs transition-all">
                                                    18 Products
                                                </span>
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-[25px]">
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product16.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Apple iPhone 16
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Smartphones
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $799
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product18.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Levi's 501
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Pants
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $89
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product15.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Maybelline Lash
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $29
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product19.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Quaker Oats
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Breakfast
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $99
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product20.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Fitbit Charge
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Wearables
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $179
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product17.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Adidas Women
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Outerwear
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $85
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product21.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Galaxy Tab
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Tablets
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $649
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product22.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            H&M Basic
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        T-Shirts
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $20
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product23.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            L'Oréal Paris
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $69
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-[25px]">
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product23.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            L'Oréal Paris
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $69
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product22.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            H&M Basic
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        T-Shirts
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $20
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product21.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Galaxy Tab
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Tablets
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $649
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product17.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Adidas Women
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Outerwear
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $85
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product20.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Fitbit Charge
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Wearables
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $179
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product19.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Quaker Oats
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Breakfast
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $99
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product15.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Maybelline Lash
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $29
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product18.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Levi's 501
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Pants
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $89
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product16.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Apple iPhone 16
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Smartphones
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $799
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-[25px]">
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product18.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Levi's 501
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Pants
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $89
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product19.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Quaker Oats
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Breakfast
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $99
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product20.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Fitbit Charge
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Wearables
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $179
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product23.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            L'Oréal Paris
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $69
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product21.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Galaxy Tab
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Tablets
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $649
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product15.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Maybelline Lash
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $29
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product17.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Adidas Women
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Outerwear
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $85
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product22.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            H&M Basic
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        T-Shirts
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $20
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product16.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Apple iPhone 16
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Smartphones
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $799
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-[25px]">
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product15.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Maybelline Lash
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $29
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product20.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Fitbit Charge
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Wearables
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $179
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product19.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Quaker Oats
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Breakfast
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $99
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product17.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Adidas Women
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Outerwear
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $85
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product21.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Galaxy Tab
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Tablets
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $649
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product22.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            H&M Basic
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        T-Shirts
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $20
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product16.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Apple iPhone 16
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Smartphones
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $799
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product18.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Levi's 501
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Pants
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $89
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product23.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            L'Oréal Paris
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $69
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-[25px]">
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product19.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Quaker Oats
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Breakfast
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $99
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product17.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Adidas Women
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Outerwear
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $85
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product21.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Galaxy Tab
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Tablets
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $649
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product22.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            H&M Basic
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        T-Shirts
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $20
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product23.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            L'Oréal Paris
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $69
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product16.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Apple iPhone 16
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Smartphones
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $799
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product18.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Levi's 501
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Pants
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $89
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product15.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Maybelline Lash
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Makeup
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $29
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-[15px] md:p-[20px] bg-white dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                                                <a href="/dashboard/product-details" class="block rounded-md">
                                                    <img src="/assets/images/products/product20.jpg" class="rounded-md" alt="product-image">
                                                </a>
                                                <div class="mt-[18px]">
                                                    <h4 class="!font-medium !text-lg md:!text-[20px] !mb-[4px]">
                                                        <a href="/dashboard/product-details" class="transition-all hover:text-primary-500">
                                                            Fitbit Charge
                                                        </a>
                                                    </h4>
                                                    <span class="block">
                                                        Wearables
                                                    </span>
                                                    <div class="mt-[12px] flex items-center justify-between">
                                                        <span class="block leading-none text-success-600 font-medium text-lg md:text-xl">
                                                            $179
                                                        </span>
                                                        <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-sm text-primary-500 bg-primary-100 dark:bg-dark transition-all hover:text-white hover:bg-primary-500">
                                                            <i class="material-symbols-outlined">
                                                                shopping_cart
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] border border-gray-100 dark:border-[#172036] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="sm:flex sm:items-center justify-between">
                                <p class="!mb-0">
                                    Showing 9 of 36 results
                                </p>
                                <ol class="mt-[10px] sm:mt-0">
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            <span class="opacity-0">
                                                0
                                            </span>
                                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                chevron_left
                                            </i>
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                            1
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            2
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            3
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            4
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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

                    <!-- Order Details -->
                    <div class="trezo-card bg-gray-50 dark:bg-[#0c1427] rounded-md border border-gray-100 dark:border-[#172036]">
                        <div class="trezo-card-header py-[15px] px-[20px] md:px-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-md md:!text-[20px] !font-medium">
                                    Order Details
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <button type="button" class="block leading-none text-primary-500 transition-all hover:rotate-90">
                                    <i class="material-symbols-outlined">
                                        autorenew
                                    </i>
                                </button>
                            </div>
                        </div>
                        <div class="trezo-card-content bg-white dark:bg-dark p-[20px] md:p-[25px] rounded-md border-t border-gray-100 dark:border-[#172036]">
                            <div class="sm:flex items-center justify-between border-t border-gray-100 dark:border-[#172036] first:border-t-0 pt-[17px] first:pt-0 mt-[17px] first:mt-0">
                                <a href="#" class="flex items-center gap-[10px] text-black dark:text-white transition-all hover:text-primary-500">
                                    <img src="/assets/images/products/product15.jpg" class="w-[40px] rounded-md" alt="product-image">
                                    <span class="block font-medium leading-[1.2] lg:max-w-[80px]">
                                        Maybelline Lash
                                    </span>
                                </a>
                                <div class="mt-[12px] sm:mt-0 flex items-center gap-[15px]">
                                    <div class="counter-container relative w-[90px]" id="inputCounter">
                                        <button class="decrease-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:left-[12px] rtl:right-[12px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                            -
                                        </button>
                                        <input type="text" class="counter text-base h-[34px] rounded-md text-center block w-full bg-gray-50 dark:bg-[#15203c] text-black outline-0 font-medium dark:text-white" value="1" readonly />
                                        <button class="increase-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:right-[12px] rtl:left-[12px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                            +
                                        </button>
                                    </div>
                                    <div class="leading-none font-medium sm:w-[45px] text-lg text-primary-500">
                                        $29
                                    </div>
                                </div>
                            </div>
                            <div class="sm:flex items-center justify-between border-t border-gray-100 dark:border-[#172036] first:border-t-0 pt-[17px] first:pt-0 mt-[17px] first:mt-0">
                                <a href="#" class="flex items-center gap-[10px] text-black dark:text-white transition-all hover:text-primary-500">
                                    <img src="/assets/images/products/product16.jpg" class="w-[40px] rounded-md" alt="product-image">
                                    <span class="block font-medium leading-[1.2] lg:max-w-[80px]">
                                        Apple iPhone 16
                                    </span>
                                </a>
                                <div class="mt-[12px] sm:mt-0 flex items-center gap-[15px]">
                                    <div class="counter-container relative w-[90px]" id="inputCounter">
                                        <button class="decrease-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:left-[12px] rtl:right-[12px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                            -
                                        </button>
                                        <input type="text" class="counter text-base h-[34px] rounded-md text-center block w-full bg-gray-50 dark:bg-[#15203c] text-black outline-0 font-medium dark:text-white" value="2" readonly />
                                        <button class="increase-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:right-[12px] rtl:left-[12px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                            +
                                        </button>
                                    </div>
                                    <div class="leading-none font-medium sm:w-[45px] text-lg text-primary-500">
                                        $799
                                    </div>
                                </div>
                            </div>
                            <div class="sm:flex items-center justify-between border-t border-gray-100 dark:border-[#172036] first:border-t-0 pt-[17px] first:pt-0 mt-[17px] first:mt-0">
                                <a href="#" class="flex items-center gap-[10px] text-black dark:text-white transition-all hover:text-primary-500">
                                    <img src="/assets/images/products/product17.jpg" class="w-[40px] rounded-md" alt="product-image">
                                    <span class="block font-medium leading-[1.2] lg:max-w-[80px]">
                                        Adidas Woman
                                    </span>
                                </a>
                                <div class="mt-[12px] sm:mt-0 flex items-center gap-[15px]">
                                    <div class="counter-container relative w-[90px]" id="inputCounter">
                                        <button class="decrease-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:left-[12px] rtl:right-[12px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                            -
                                        </button>
                                        <input type="text" class="counter text-base h-[34px] rounded-md text-center block w-full bg-gray-50 dark:bg-[#15203c] text-black outline-0 font-medium dark:text-white" value="1" readonly />
                                        <button class="increase-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:right-[12px] rtl:left-[12px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                            +
                                        </button>
                                    </div>
                                    <div class="leading-none font-medium sm:w-[45px] text-lg text-primary-500">
                                        $85
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 dark:bg-dark rounded-md mt-[20px] md:mt-[25px] p-[15px] md:p-[20px]">
                                <div class="flex items-center justify-between mb-[5px]">
                                    <span class="block">
                                        Total:
                                    </span>
                                    <span class="block">
                                        3 Items
                                    </span>
                                </div>
                                <div class="flex items-center justify-between mb-[5px]">
                                    <span class="block text-black dark:text-white font-medium">
                                        Subtotal:
                                    </span>
                                    <span class="block text-black dark:text-white font-medium">
                                        $913.00
                                    </span>
                                </div>
                                <div class="flex items-center justify-between mb-[5px]">
                                    <span class="block text-black dark:text-white font-medium">
                                        Shipping:
                                    </span>
                                    <span class="block text-black dark:text-white font-medium">
                                        $0.00
                                    </span>
                                </div>
                                <div class="flex items-center justify-between mb-[5px]">
                                    <span class="block text-black dark:text-white font-medium">
                                        Tax (10%):
                                    </span>
                                    <span class="block text-black dark:text-white font-medium">
                                        $91.30
                                    </span>
                                </div>
                                <div class="flex items-center justify-between mt-[18px]">
                                    <span class="block text-lg md:text-[20px] text-black dark:text-white font-medium">
                                        Payable Total:
                                    </span>
                                    <span class="block text-lg md:text-[20px] text-black dark:text-white font-medium">
                                        $1004.30
                                    </span>
                                </div>
                            </div>
                            <h4 class="!font-medium !mb-[15px] !text-[20px] mt-[25px]">
                                Payment Method
                            </h4>
                            <div class="payment-method flex items-center gap-[20px] md:gap-[25px]">
                                <div class="text-center relative w-[82px] h-[66px] pt-[4px] rounded-md bg-gray-50 dark:bg-dark border border-primary-100 dark:border-[#172036] transition-all">
                                    <i class="material-symbols-outlined !text-2xl text-primary-500">
                                        paid
                                    </i>
                                    <span class="block -mt-[2px] md:-mt-[4px]">
                                        Cash
                                    </span>
                                    <input type="radio" name="paymentMethod" id="cashType" class="top-0 left-0 z-[1] w-full h-full m-0 absolute cursor-pointer opacity-0">
                                </div>
                                <div class="text-center relative w-[82px] h-[66px] pt-[4px] rounded-md bg-gray-50 dark:bg-dark border border-primary-100 dark:border-[#172036] transition-all">
                                    <i class="material-symbols-outlined !text-2xl text-primary-500">
                                        credit_card
                                    </i>
                                    <span class="block -mt-[2px] md:-mt-[4px]">
                                        Card
                                    </span>
                                    <input type="radio" name="paymentMethod" checked id="cardType" class="top-0 left-0 z-[1] w-full h-full m-0 absolute cursor-pointer opacity-0">
                                </div>
                                <div class="text-center relative w-[82px] h-[66px] pt-[4px] rounded-md bg-gray-50 dark:bg-dark border border-primary-100 dark:border-[#172036] transition-all">
                                    <i class="material-symbols-outlined !text-2xl text-primary-500">
                                        wallet
                                    </i>
                                    <span class="block -mt-[2px] md:-mt-[4px]">
                                        E-Wallet
                                    </span>
                                    <input type="radio" name="paymentMethod" id="eWalletType" class="top-0 left-0 z-[1] w-full h-full m-0 absolute cursor-pointer opacity-0">
                                </div>
                            </div>
                            <button type="button" class="mt-[20px] md:mt-[25px] font-medium block w-full transition-all rounded-md md:text-md py-[10px] md:py-[11px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                Place Order
                            </button>
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
