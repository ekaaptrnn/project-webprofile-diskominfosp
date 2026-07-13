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

                    <!-- Today’s Payment -->
                    <div class="trezo-card p-[20px] md:p-[25px] rounded-md" style="background: linear-gradient(104deg, #361E7D 2.4%, #403CFF 112.33%);">
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="block mb-[7px] text-gray-300">
                                        Today’s Payment
                                    </span>
                                    <div class="flex items-center gap-[10px]">
                                        <h3 class="!leading-none !text-white !text-xl md:!text-2xl lg:!text-3xl !mb-0">
                                            $1,528
                                        </h3>
                                        <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 text-sm rounded-[100px]">
                                            +5.4%
                                        </span>
                                    </div>
                                </div>
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-primary-500 bg-primary-500 text-white py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-primary-400 hover:border-primary-400" id="dropdownToggleBtn">
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
                            <div class="-mb-[18px] ltr:-ml-[15px] rtl:-mr-[15px] mt-[10px]">
                                <div id="saasTodaysPaymentChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-1 gap-[25px]">

                        <!-- Total Users -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content relative">
                                <span class="block mb-[5px]">
                                    Total Users
                                </span>
                                <h3 class="!leading-none !text-lg md:!text-xl !mb-[8px]">
                                    241K
                                </h3>
                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                    +5.4%
                                </span>
                                <div class="absolute mt-[5px] ltr:-right-[110px] rtl:-left-[110px] top-1/2 -translate-y-1/2">
                                    <div id="saasTotalUsersChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Revenue -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content relative">
                                <span class="block mb-[5px]">
                                    Revenue
                                </span>
                                <h3 class="!leading-none !text-lg md:!text-xl !mb-[8px]">
                                    $1.2M
                                </h3>
                                <span class="inline-block text-xs px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                    -3.2%
                                </span>
                                <div class="absolute max-w-[125px] mt-[10px] ltr:-right-[10px] rtl:-left-[10px] top-1/2 -translate-y-1/2">
                                    <div id="saasRevenueChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Conversion -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content relative">
                                <span class="block mb-[5px]">
                                    Conversion
                                </span>
                                <h3 class="!leading-none !text-lg md:!text-xl !mb-[8px]">
                                    32.5%
                                </h3>
                                <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                    +1.4%
                                </span>
                                <div class="absolute max-w-[115px] ltr:-right-[10px] rtl:-left-[10px] top-1/2 -translate-y-1/2">
                                    <div id="saasConversionChart"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Refers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Refers
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <a href="#" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                                    Browse All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                                </a>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/facebook3.svg" alt="facebook">
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Facebook
                                        </span>
                                        <span class="block text-xs mt-[3px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/dribbble2.svg" alt="dribbble">
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Dribbble
                                        </span>
                                        <span class="block text-xs mt-[3px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/instagram2.svg" alt="instagram">
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Instagram
                                        </span>
                                        <span class="block text-xs mt-[3px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/behance.svg" alt="behance">
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Behance
                                        </span>
                                        <span class="block text-xs mt-[3px]">
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
                            <div class="flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[14px] mb-[14px] last:border-none last:mb-0 last:pb-0">
                                <div class="flex items-center gap-[15px]">
                                    <img src="/assets/images/icons/google3.svg" alt="google">
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Google
                                        </span>
                                        <span class="block text-xs mt-[3px]">
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

                    <!-- Active Users -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Active Users
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
                            <div class="-mt-[18px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[15px]">
                                <div id="saasActiveUsersChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="lg:col-span-3">

                    <!-- Latest Transactions -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Latest Transactions
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
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                ID
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Client
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Amount
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Subscription Plan
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Payment Method
                                            </th>
                                            <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[10px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #001
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Johhna Loren
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            loren123@gmail.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $6240
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Pro
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/paypal.svg" alt="paypal">
                                                    Paypal
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block font-medium text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                                    Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #002
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user53.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Skyler White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            skyqueen@gmail.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $5135
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Enterprise
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/wise.svg" alt="wise">
                                                    Wise
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block font-medium text-xs px-[9px] text-primary-700 border border-primary-300 bg-primary-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                                    Pending
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #003
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user55.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Jonathon Watson
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            jona2134@gmail.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $4321
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Startup
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/bank.svg" alt="bank">
                                                    Bank
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block font-medium text-xs px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                                    Failed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #004
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user54.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            Walter White
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            walterwhite@gmail.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $3124
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Pro
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/skrill.svg" alt="skrill">
                                                    Skrill
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block font-medium text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                                    Completed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    #005
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user40.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-semibold inline-block mb-px">
                                                            David Carlen
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            davidcarlen@gmail.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    $2137
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    Basic
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center gap-[8px] text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                    <img src="/assets/images/payment-method/paypal.svg" alt="paypal">
                                                    Paypal
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0">
                                                <span class="inline-block font-medium text-xs px-[9px] text-primary-700 border border-primary-300 bg-primary-100 dark:bg-[#15203c] dark:border-[#172036] text-sm rounded-[100px]">
                                                    Pending
                                                </span>
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

                    <!-- Upgrade Plans -->
                    <div class="trezo-card p-[20px] md:p-[25px] rounded-md" style="background: linear-gradient(164deg, #B95232 3.1%, #EB6D5C 99.22%);">
                        <div class="trezo-card-content md:py-[30px] mx-auto md:max-w-[209px]">
                            <h3 class="!text-white !text-lg md:!text-xl !leading-[1.3] !mb-[16px]">
                                Have A Team More Than 10 Members?
                            </h3>
                            <a href="#" target="_blank" class="inline-block rounded-md bg-gray-900 text-white transition-all text-[15px] md:text-md font-medium py-[6px] px-[16.5px] hover:bg-gray-800 mb-[15px] md:mb-[30px]">
                                Upgrade Plans
                            </a>
                            <img src="/assets/images/paper.png" class="mx-auto" alt="paper-image">
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Users -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Users
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
                            <ul>
                                <li class="flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                    <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                        <img src="/assets/images/users/user60.jpg" alt="user-image" class="rounded-full w-[33px]">
                                        <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[2px] border-white dark:border-[#0c1427]"></span>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Johhna Loren
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            Admin
                                        </span>
                                    </div>
                                </li>
                                <li class="flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                    <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                        <img src="/assets/images/users/user61.jpg" alt="user-image" class="rounded-full w-[33px]">
                                        <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[2px] border-white dark:border-[#0c1427]"></span>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Zinia Watson
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            Moderator
                                        </span>
                                    </div>
                                </li>
                                <li class="flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                    <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                        <img src="/assets/images/users/user62.jpg" alt="user-image" class="rounded-full w-[33px]">
                                        <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[2px] border-white dark:border-[#0c1427]"></span>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Angela Carter
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            Editor
                                        </span>
                                    </div>
                                </li>
                                <li class="flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                    <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                        <img src="/assets/images/users/user63.jpg" alt="user-image" class="rounded-full w-[33px]">
                                        <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-gray-400 border-[2px] border-white dark:border-[#0c1427]"></span>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Skyler White
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            Admin
                                        </span>
                                    </div>
                                </li>
                                <li class="flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                    <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                        <img src="/assets/images/users/user64.jpg" alt="user-image" class="rounded-full w-[33px]">
                                        <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-success-500 border-[2px] border-white dark:border-[#0c1427]"></span>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Jane Ronan
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            Editor
                                        </span>
                                    </div>
                                </li>
                                <li class="flex items-center gap-[12px] py-[10.5px] border-b first:border-t border-primary-50 dark:border-[#172036]">
                                    <div class="relative ltr:pr-[2px] rtl:pl-[2px] pb-[2px]">
                                        <img src="/assets/images/users/user65.jpg" alt="user-image" class="rounded-full w-[33px]">
                                        <span class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[12px] h-[12px] rounded-full bg-gray-400 border-[2px] border-white dark:border-[#0c1427]"></span>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-gray-900 dark:text-gray-400">
                                            Viktor James
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            Editor
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Product Trade Conditions -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Product Trade Conditions
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
                            <div class="-mt-[20px] ltr:-ml-[13px] rtl:-mr-[13px] mb-[5px]">
                                <div id="saasProductTradeCondition"></div>
                            </div>
                            <div class="flex items-center">
                                <div class="ltr:border-r rtl:border-l border-gray-100 dark:border-[#172036] ltr:last:border-r-0 rtl:last:border-l-0 ltr:pr-[30px] rtl:pl-[30px] ltr:mr-[30px] rtl:ml-[30px] ltr:last:pr-0 rtl:last:pl-0 ltr:last:mr-0 rtl:last:ml-0">
                                    <span class="block mb-[7px]">
                                        Forecast Hours
                                    </span>
                                    <div class="flex items-center gap-[10px]">
                                        <h3 class="!leading-none !text-xl !mb-0">
                                            144h
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            +5.4%
                                        </span>
                                    </div>
                                </div>
                                <div class="ltr:border-r rtl:border-l border-gray-100 dark:border-[#172036] ltr:last:border-r-0 rtl:last:border-l-0 ltr:pr-[30px] rtl:pl-[30px] ltr:mr-[30px] rtl:ml-[30px] ltr:last:pr-0 rtl:last:pl-0 ltr:last:mr-0 rtl:last:ml-0">
                                    <span class="block mb-[7px]">
                                        Workflow Hours
                                    </span>
                                    <div class="flex items-center gap-[10px]">
                                        <h3 class="!leading-none !text-xl !mb-0">
                                            120h
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-orange-700 border border-orange-300 bg-orange-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            -3.2%
                                        </span>
                                    </div>
                                </div>
                                <div class="ltr:border-r rtl:border-l border-gray-100 dark:border-[#172036] ltr:last:border-r-0 rtl:last:border-l-0 ltr:pr-[30px] rtl:pl-[30px] ltr:mr-[30px] rtl:ml-[30px] ltr:last:pr-0 rtl:last:pl-0 ltr:last:mr-0 rtl:last:ml-0">
                                    <span class="block mb-[7px]">
                                        Forcast Income
                                    </span>
                                    <div class="flex items-center gap-[10px]">
                                        <h3 class="!leading-none !text-xl !mb-0">
                                            $350K
                                        </h3>
                                        <span class="inline-block text-xs py-px px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                            +3.9%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
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
                                        <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
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
                            <div class="-mb-[20px] ltr:-ml-[13px] rtl:-mr-[13px]">
                                <div id="saasGrossRevenueChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Sales By Country -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Sales By Country
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

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
