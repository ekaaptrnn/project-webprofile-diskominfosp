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

            <div class="grid grid-cols-1 xl:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="xl:col-span-3">

                    <!-- Welcome -->
                    <div
                        class="trezo-card p-[20px] md:p-[25px] rounded-md !pb-0"
                        style="background: linear-gradient(104deg, #361E7D 2.4%, #403CFF 112.33%);"
                    >
                        <div class="trezo-card-content 2xl:px-[15px]">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                <div class="lg:col-span-2">
                                    <div class="md:pt-[20px] text-center ltr:md:text-left rtl:md:text-right">
                                        <span class="block text-primary-200 font-medium mb-[4px]">
                                            Hello Olivia ✋
                                        </span>
                                        <h1 class="!text-white !text-2xl !mb-0 !font-normal">
                                            Welcome To Trezo – <strong class="font-black">Your Store</strong>
                                        </h1>
                                    </div>
                                </div>
                                <div class="lg:col-span-1">
                                    <div class="text-center ltr:md:text-right rtl:md:text-left">
                                        <img src="/assets/images/store.png" class="inline-block" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="relative mt-[25px] lg:-mt-[25px] lg:mx-[25px] 2xl:mx-[40px]">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-[25px]">

                            <!-- New Customers -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-content flex justify-between">
                                    <div>
                                        <span class="block">
                                            New Customers
                                        </span>
                                        <h3 class="!text-2xl mt-[4px] !mb-[8px]">
                                            14.5k
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            +7%
                                        </span>
                                    </div>
                                    <div class="bg-primary-100 dark:bg-[#15203c] text-primary-500 rounded-full w-[48px] h-[48px] flex items-center justify-center text-xl">
                                        <i class="ri-user-3-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Sales -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-content flex justify-between">
                                    <div>
                                        <span class="block">
                                            Sales
                                        </span>
                                        <h3 class="!text-2xl mt-[4px] !mb-[8px]">
                                            $64.5k
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            -1.4%
                                        </span>
                                    </div>
                                    <div class="bg-success-100 dark:bg-[#15203c] text-success-500 rounded-full w-[48px] h-[48px] flex items-center justify-center text-xl">
                                        <i class="ri-money-dollar-circle-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Products -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-content flex justify-between">
                                    <div>
                                        <span class="block">
                                            Products
                                        </span>
                                        <h3 class="!text-2xl mt-[4px] !mb-[8px]">
                                            11.9k
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            +1.1%
                                        </span>
                                    </div>
                                    <div class="bg-purple-100 dark:bg-[#15203c] text-purple-500 rounded-full w-[48px] h-[48px] flex items-center justify-center text-xl">
                                        <i class="ri-price-tag-3-fill"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="xl:col-span-1">
                    
                    <!-- Customer Visits -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Customer Visits
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between relative z-[1]">
                                <div>
                                    <div class="rounded-full w-[25px] h-[25px] flex items-center justify-center bg-gray-50 dark:bg-[#15203c]">
                                        <i class="ri-user-fill"></i>
                                    </div>
                                    <span class="block max-w-[70px] leading-[1.4] mt-[6px] mb-[4px]">
                                        Walk-In Customers
                                    </span>
                                    <h3 class="!text-2xl !mb-[7px]">
                                        1.5K
                                    </h3>
                                    <span class="inline-block text-xs py-px px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                        +7%
                                    </span>
                                </div>
                                <div class="ltr:text-right rtl:text-left">
                                    <div class="rounded-full w-[25px] h-[25px] flex items-center justify-center bg-gray-50 dark:bg-[#15203c] ltr:ml-auto rtl:mr-auto">
                                        <i class="ri-user-add-fill"></i>
                                    </div>
                                    <span class="block max-w-[70px] leading-[1.4] mt-[6px] mb-[4px]">
                                        Repeat Customers
                                    </span>
                                    <h3 class="!text-2xl !mb-[7px]">
                                        2.1K
                                    </h3>
                                    <span class="inline-block text-xs py-px px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                        -1.4%
                                    </span>
                                </div>
                                <div class="absolute top-0 bottom-0 -z-[1] bg-gray-100 dark:bg-[#172036] w-[1px] left-1/2 -translate-x-1/2"></div>
                                <div class="rounded-full w-[33px] h-[33px] text-lg absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 text-primary-500 flex items-center justify-center bg-primary-100 dark:bg-[#15203c]">
                                    <i class="ri-flashlight-line"></i>
                                </div>
                            </div>
                            <div class="mt-[23px] flex w-full h-[8px] overflow-hidden rounded-md bg-success-600">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 32%;"></div>
                            </div>
                            <div class="flex items-center justify-between mt-[7px]">
                                <span class="text-xs block">
                                    32%
                                </span>
                                <span class="text-xs block">
                                    64%
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Top Selling Products -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Selling Products
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
                                                        <img src="/assets/images/stock-alerts/stock1.jpg" class="inline-block rounded-md" alt="stock-image">
                                                    </div>
                                                    <div>
                                                        <a href="/dashboard/product-details" class="font-semibold inline-block mb-[2px]">
                                                            Tablet PC
                                                        </a>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            <span class="font-semibold">2032</span> sold
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
                                                        <img src="/assets/images/stock-alerts/stock2.jpg" class="inline-block rounded-md" alt="stock-image">
                                                    </div>
                                                    <div>
                                                        <a href="/dashboard/product-details" class="font-semibold inline-block mb-[2px]">
                                                            Laptop
                                                        </a>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            <span class="font-semibold">1020</span> sold
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
                                                        <img src="/assets/images/stock-alerts/stock3.jpg" class="inline-block rounded-md" alt="stock-image">
                                                    </div>
                                                    <div>
                                                        <a href="/dashboard/product-details" class="font-semibold inline-block mb-[2px]">
                                                            QCY Airpod
                                                        </a>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            <span class="font-semibold">99</span> sold
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
                                                        <img src="/assets/images/stock-alerts/stock4.jpg" class="inline-block rounded-md" alt="stock-image">
                                                    </div>
                                                    <div>
                                                        <a href="/dashboard/product-details" class="font-semibold inline-block mb-[2px]">
                                                            Zenbook X
                                                        </a>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            <span class="font-semibold">89</span> sold
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
                                                        <img src="/assets/images/stock-alerts/stock5.jpg" class="inline-block rounded-md" alt="stock-image">
                                                    </div>
                                                    <div>
                                                        <a href="/dashboard/product-details" class="font-semibold inline-block mb-[2px]">
                                                            Clay Camera
                                                        </a>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            <span class="font-semibold">72</span> sold
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
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[40px]">
                                                        <img src="/assets/images/stock-alerts/stock6.jpg" class="inline-block rounded-md" alt="stock-image">
                                                    </div>
                                                    <div>
                                                        <a href="/dashboard/product-details" class="font-semibold inline-block mb-[2px]">
                                                            Laptop Mockup
                                                        </a>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            <span class="font-semibold">72</span> sold
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                <div class="flex items-center justify-end leading-none gap-[2px]">
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-fill text-orange-500"></i>
                                                    <i class="ri-star-half-linetext-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <i class="ri-star-line text-orange-500"></i>
                                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                        2.5
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
                <div class="lg:col-span-2">

                    <!-- Gross Revenue -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="block mb-[7px]">
                                        Gross Revenue
                                    </span>
                                    <div class="flex items-center gap-[10px]">
                                        <h3 class="!leading-none !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                            $1,528
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            +5.4%
                                        </span>
                                    </div>
                                    <span class="block text-xs mt-[9px]">
                                        vs previous 30 days
                                    </span>
                                </div>
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
                            <div class="-mb-[22px] ltr:-ml-[14px] rtl:-mr-[14px]">
                                <div id="storeAnalysisGrossRevenueChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="xl:col-span-3">

                    <!-- Recent Sales -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Sales
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#F5F7F8] bg-[#F5F7F8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Ref
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Customer
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Grand Total
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Paid
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Payment Method
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[13px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #001
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[30px]">
                                                        <img src="/assets/images/users/user36.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <span class="font-semibold inline-block">
                                                        Johhna Loren
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $6240
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-success-600">
                                                    Paid
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/paypal.svg" alt="paypal">
                                                    Paypal
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #002
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[30px]">
                                                        <img src="/assets/images/users/user53.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <span class="font-semibold inline-block">
                                                        Skyler Queen
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $5135
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-danger-600">
                                                    Due
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/wise.svg" alt="wise">
                                                    Wise
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-purple-700 border border-purple-300 bg-purple-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    Pending
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #003
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[30px]">
                                                        <img src="/assets/images/users/user55.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <span class="font-semibold inline-block">
                                                        Jonathon Watson
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $4321
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-success-600">
                                                    Paid
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/bank.svg" alt="bank">
                                                    Bank
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #004
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[30px]">
                                                        <img src="/assets/images/users/user54.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <span class="font-semibold inline-block">
                                                        Walter White
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $3124
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-success-600">
                                                    Paid
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/paypal.svg" alt="paypal">
                                                    Paypal
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #005
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[30px]">
                                                        <img src="/assets/images/users/user40.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <span class="font-semibold inline-block">
                                                        David Carlen
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $2137
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-danger-600">
                                                    Due
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/skrill.svg" alt="skrill">
                                                    Skrill
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    Failed
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pt-[13px] sm:flex sm:items-center justify-between">
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

                </div>
                <div class="xl:col-span-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-1 gap-[25px]">

                        <!-- Sales By Gender -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Sales By Gender
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="-mt-[5px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[8px]">
                                    <div id="salesByGenderChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Sales This Month -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <span class="block">
                                    Sales This Month
                                </span>
                                <h3 class="!text-2xl mt-px !mb-[5px]">
                                    $64.5K
                                </h3>
                                <span class="inline-block text-xs py-px px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                    -1.4%
                                </span>
                                <div class="-mt-[10px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px]">
                                    <div id="salesThisMonthChart"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Sales by Category -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Sales by Category
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mt-[30px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[15px]">
                                <div id="salesByCategoryChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Stock Alerts -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Stock Alerts
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Code
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Product
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Store
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Quantity
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Alert Quantity
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #3421
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[29px]">
                                                        <img src="/assets/images/stock-alerts/stock1.jpg" calt="user-image" class="rounded-md">
                                                    </div>
                                                    <a href="/dashboard/product-details" class="font-semibold inline-block text-black dark:text-white transition-all hover:text-primary-500">
                                                        ZenX Laptop
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Store 01
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    5
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    10
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
                                                    #3429
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[29px]">
                                                        <img src="/assets/images/stock-alerts/stock2.jpg" calt="user-image" class="rounded-md">
                                                    </div>
                                                    <a href="/dashboard/product-details" class="font-semibold inline-block text-black dark:text-white transition-all hover:text-primary-500">
                                                        Mackbook Pro
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Store 02
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    3
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    15
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
                                                    #3425
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[29px]">
                                                        <img src="/assets/images/stock-alerts/stock3.jpg" calt="user-image" class="rounded-md">
                                                    </div>
                                                    <a href="/dashboard/product-details" class="font-semibold inline-block text-black dark:text-white transition-all hover:text-primary-500">
                                                        Smart Pencil
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Store 01
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    2
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    07
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
                                                    #3424
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[29px]">
                                                        <img src="/assets/images/stock-alerts/stock4.jpg" calt="user-image" class="rounded-md">
                                                    </div>
                                                    <a href="/dashboard/product-details" class="font-semibold inline-block text-black dark:text-white transition-all hover:text-primary-500">
                                                        Banner Mockup
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Store 02
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    4
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    12
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
                                                    #3422
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-md w-[29px]">
                                                        <img src="/assets/images/stock-alerts/stock5.jpg" calt="user-image" class="rounded-md">
                                                    </div>
                                                    <a href="/dashboard/product-details" class="font-semibold inline-block text-black dark:text-white transition-all hover:text-primary-500">
                                                        Clay Camera
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Store 01
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    3
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                    10
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

                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
