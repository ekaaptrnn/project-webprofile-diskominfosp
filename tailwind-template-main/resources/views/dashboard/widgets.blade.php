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
                    Widgets
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
                        Widgets
                    </li>
                </ol>
            </div>
            
            <!-- Widgets -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content relative">
                        <span class="block">
                            Revenue Growth
                        </span>
                        <h5 class="!mb-0 mt-[3px] !text-[20px]">
                            $32,420
                        </h5>
                        <div class="absolute -top-[28px] ltr:-right-[9px] rtl:-left-[9px] max-w-[120px]">
                            <div id="crmRevenueGrowthChart"></div>
                        </div>
                        <div class="mt-[25px] md:mt-[34px] flex items-center justify-between">
                            <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-xl">
                                +10%
                            </span>
                            <span class="block text-sm">
                                Last 7 days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content relative">
                        <span class="block">
                            Lead Conversion
                        </span>
                        <h5 class="!mb-0 mt-[3px] !text-[20px]">
                            48.79%
                        </h5>
                        <div class="absolute -top-[28px] ltr:-right-[9px] rtl:-left-[9px] max-w-[120px]">
                            <div id="crmLeadConversionChart"></div>
                        </div>
                        <div class="mt-[25px] md:mt-[34px] flex items-center justify-between">
                            <span class="inline-block text-sm text-danger-700 py-[1px] px-[8.3px] border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-xl">
                                -15%
                            </span>
                            <span class="block text-sm">
                                Last 30 days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content relative">
                        <span class="block">
                            Total Orders
                        </span>
                        <h5 class="!mb-0 mt-[3px] !text-[20px]">
                            $72,458
                        </h5>
                        <div class="absolute -top-[28px] ltr:-right-[9px] rtl:-left-[9px] max-w-[120px]">
                            <div id="crmTotalOrdersChart"></div>
                        </div>
                        <div class="mt-[25px] md:mt-[34px] flex items-center justify-between">
                            <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-xl">
                                +25%
                            </span>
                            <span class="block text-sm">
                                Last 90 days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content relative">
                        <span class="block">
                            Annual Profit
                        </span>
                        <h5 class="!mb-0 mt-[3px] !text-[20px]">
                            $879.6k
                        </h5>
                        <div class="absolute -top-[28px] ltr:-right-[9px] rtl:-left-[9px] max-w-[120px]">
                            <div id="crmAnnualProfitChart"></div>
                        </div>
                        <div class="mt-[25px] md:mt-[34px] flex items-center justify-between">
                            <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] rounded-xl">
                                +30%
                            </span>
                            <span class="block text-sm">
                                Last 12 months
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Tickets Resolved
                        </span>
                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                            2.4k
                        </h5>
                        <div class="-mt-[14px] -mb-[15px]">
                            <div id="helpDeskTicketsResolvedChart"></div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="block">
                                This Month
                            </span>
                            <span class="leading-none text-success-500">
                                <i class="material-symbols-outlined !text-[20px]">
                                    trending_up
                                </i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Tickets In Progress
                        </span>
                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                            1.35k
                        </h5>
                        <div class="-mt-[14px] -mb-[15px]">
                            <div id="helpDeskTicketsInProgressChart"></div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="block">
                                This Month
                            </span>
                            <span class="leading-none text-danger-500">
                                <i class="material-symbols-outlined !text-[20px]">
                                    trending_down
                                </i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Tickets Due
                        </span>
                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                            980
                        </h5>
                        <div class="-mt-[14px] -mb-[15px]">
                            <div id="helpDeskTicketsDueChart"></div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="block">
                                This Month
                            </span>
                            <span class="leading-none text-danger-500">
                                <i class="material-symbols-outlined !text-[20px]">
                                    trending_down
                                </i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <span class="block">
                            Tickets New Open
                        </span>
                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                            3.25k
                        </h5>
                        <div class="-mt-[14px] -mb-[15px]">
                            <div id="helpDeskTicketsNewOpenChart"></div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="block">
                                This Month
                            </span>
                            <span class="leading-none text-success-500">
                                <i class="material-symbols-outlined !text-[20px]">
                                    trending_up
                                </i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 2xl:grid-cols-2 gap-[25px] mb-[25px]">
                <div class="trezo-card p-[20px] md:p-[25px] rounded-md" style="background: linear-gradient(81deg, #605DFF 3.39%, #9747FF 93.3%);">
                    <div class="trezo-card-content relative sm:ltr:pr-[250px] sm:rtl:pl-[250px]">
                        <div class="md:py-[25px]">
                            <h5 class="!mb-[5px] md:!mb-px !font-semibold !text-white">
                                Welcome Back, <span class="text-orange-100">Olivia!</span>
                            </h5>
                            <p class="text-white">
                                Your progress this week is Awesome.
                            </p>
                            <div class="md:mt-[35px] md:flex items-center">
                                <div class="mt-[20px] md:mt-0 flex items-center md:ltr:mr-[35px] md:rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                    <div class="w-[42px] h-[42px] ltr:mr-[12px] rtl:ml-[12px] bg-danger-200 text-danger-500 rounded-md flex items-center justify-center">
                                        <i class="material-symbols-outlined">
                                            airplay
                                        </i>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-white text-md">
                                            75h
                                        </span>
                                        <span class="block text-gray-200">
                                            Hours Spent
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-[20px] md:mt-0 flex items-center md:ltr:mr-[35px] md:rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                    <div class="w-[42px] h-[42px] ltr:mr-[12px] rtl:ml-[12px] bg-success-100 text-success-600 rounded-md flex items-center justify-center">
                                        <i class="material-symbols-outlined">
                                            local_library
                                        </i>
                                    </div>
                                    <div>
                                        <span class="block font-semibold text-white text-md">
                                            15
                                        </span>
                                        <span class="block text-gray-200">
                                            Courses Completed
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sm:absolute sm:top-1/2 sm:-translate-y-1/2 sm:ltr:-right-[15px] sm:rtl:-left-[15px] sm:-mt-[8px] sm:max-w-[285px]">
                            <img src="/assets/images/online-learning.gif" alt="online-learning-image">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-[25px]">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <span class="block">
                                Total Courses
                            </span>
                            <h5 class="!text-[20px] mt-[3px] !mb-0">
                                45.6k
                            </h5>
                            <div class="flex items-center justify-center mx-auto text-secondary-500 bg-secondary-100 dark:bg-[#15203c] w-[77px] h-[77px] my-[15px] rounded-full">
                                <i class="material-symbols-outlined !text-[32px]">
                                    auto_stories
                                </i>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="block">
                                    This Month
                                </span>
                                <span class="leading-none text-success-600">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        trending_up
                                    </i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <span class="block">
                                Total Enrolled
                            </span>
                            <h5 class="!text-[20px] mt-[3px] !mb-0">
                                75k+
                            </h5>
                            <div class="flex items-center justify-center mx-auto text-purple-500 bg-purple-100 dark:bg-[#15203c] w-[77px] h-[77px] my-[15px] rounded-full">
                                <i class="material-symbols-outlined !text-[32px]">
                                    collections_bookmark
                                </i>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="block">
                                    This Month
                                </span>
                                <span class="leading-none text-danger-500">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        trending_down
                                    </i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <span class="block">
                                Total Mentors
                            </span>
                            <h5 class="!text-[20px] mt-[3px] !mb-0">
                                1.5k
                            </h5>
                            <div class="flex items-center justify-center mx-auto text-orange-500 bg-orange-100 dark:bg-[#15203c] w-[77px] h-[77px] my-[15px] rounded-full">
                                <i class="material-symbols-outlined !text-[32px]">
                                    group
                                </i>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="block">
                                    This Month
                                </span>
                                <span class="leading-none text-success-600">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        trending_up
                                    </i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="block">
                                    Total Orders
                                </span>
                                <span class="inline-block px-[8.3px] py-[1px] text-orange-700 border border-orange-200 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm ltr:ml-[10px] rtl:mr-[10px] rounded-[100px]">
                                    -7.6%
                                </span>
                            </div>
                            <span class="block text-sm">
                                Last 7 days
                            </span>
                        </div>
                        <h5 class="!text-lg md:!text-[20px] !mb-0 mt-[4px]">
                            $72,458
                        </h5>
                        <div class="mx-auto max-w-[150px] -mt-[10px] -mb-[10px] md:-mt-[25px] md:-mb-[16px]">
                            <div id="ecommerceTotalOrdersChart"></div>
                        </div>
                        <ul>
                            <li class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[9px] last:mb-0">
                                <span class="inline-block bg-primary-500 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"></span>
                                <span class="block">
                                    Completed
                                </span>
                                <span class="block">
                                    62%
                                </span>
                            </li>
                            <li class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[9px] last:mb-0">
                                <span class="inline-block bg-primary-200 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"></span>
                                <span class="block">
                                    Pending
                                </span>
                                <span class="block">
                                    38%
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="block">
                                    Total Customers
                                </span>
                                <span class="inline-block px-[8.3px] py-[1px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm ltr:ml-[10px] rtl:mr-[10px] rounded-[100px]">
                                    +5.4
                                </span>
                            </div>
                            <span class="block text-sm">
                                Last 7 days
                            </span>
                        </div>
                        <h5 class="!text-lg md:!text-[20px] !mb-0 mt-[4px]">
                            1,528
                        </h5>
                        <div class="mx-auto max-w-[300px] -mt-[33px] -mb-[20px]">
                            <div id="ecommerceTotalCustomersChart"></div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="block">
                                1 June
                            </span>
                            <span class="block">
                                7 June
                            </span>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <span class="block">
                                    Total Revenue
                                </span>
                                <span class="inline-block px-[8.3px] py-[1px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm ltr:ml-[10px] rtl:mr-[10px] rounded-[100px]">
                                    +10%
                                </span>
                            </div>
                            <span class="block text-sm">
                                Last 30 days
                            </span>
                        </div>
                        <h5 class="!text-lg md:!text-[20px] !mb-0 mt-[4px]">
                            $165,458
                        </h5>
                        <div class="mx-auto max-w-[200px] -mt-[20px] -mb-[10px] md:-mt-[23px] md:-mb-[16px]">
                            <div id="ecommerceTotalRevenueChart"></div>
                        </div>
                        <ul>
                            <li class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[9px] last:mb-0">
                                <span class="inline-block bg-primary-500 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"></span>
                                <span class="block">
                                    Fashion
                                </span>
                                <span class="block">
                                    75%
                                </span>
                            </li>
                            <li class="text-sm ltr:pl-[30px] rtl:pr-[30px] flex justify-between relative mb-[9px] last:mb-0">
                                <span class="inline-block bg-primary-200 ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 w-[20px] h-[5px] rounded-md"></span>
                                <span class="block">
                                    Others
                                </span>
                                <span class="block">
                                    25%
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 2xl:grid-cols-2 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Projects Overview
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
                            <div class="bg-primary-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                <div class="flex items-center">
                                    <div class="text-primary-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-5xl">
                                            folder_open
                                        </i>
                                    </div>
                                    <div>
                                        <span class="block">
                                            Total Projects
                                        </span>
                                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                            1235
                                        </h5>
                                    </div>
                                </div>
                                <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                    <span class="block text-sm">
                                        Projects this month
                                    </span>
                                    <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-dark dark:border-dark rounded-xl">
                                        +10%
                                    </span>
                                </div>
                            </div>
                            <div class="bg-orange-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                <div class="flex items-center">
                                    <div class="text-orange-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-5xl">
                                            stacks
                                        </i>
                                    </div>
                                    <div>
                                        <span class="block">
                                            Active Projects
                                        </span>
                                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                            425
                                        </h5>
                                    </div>
                                </div>
                                <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                    <span class="block text-sm">
                                        Projects this month
                                    </span>
                                    <span class="inline-block text-sm text-success-700 py-[1px] px-[8.3px] border border-success-300 bg-success-100 dark:bg-dark dark:border-dark rounded-xl">
                                        +5.75%
                                    </span>
                                </div>
                            </div>
                            <div class="bg-success-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                <div class="flex items-center">
                                    <div class="text-success-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-5xl">
                                            assignment_turned_in
                                        </i>
                                    </div>
                                    <div>
                                        <span class="block">
                                            Finished Projects
                                        </span>
                                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                            135
                                        </h5>
                                    </div>
                                </div>
                                <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                    <span class="block text-sm">
                                        Projects this month
                                    </span>
                                    <span class="inline-block text-sm text-danger-700 py-[1px] px-[8.3px] border border-danger-300 bg-danger-100 dark:bg-dark dark:border-dark rounded-xl">
                                        -15%
                                    </span>
                                </div>
                            </div>
                            <div class="bg-purple-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                <div class="flex items-center">
                                    <div class="text-purple-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-5xl">
                                            group
                                        </i>
                                    </div>
                                    <div>
                                        <span class="block">
                                            Team Members
                                        </span>
                                        <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                            65+
                                        </h5>
                                    </div>
                                </div>
                                <div class="mt-[14px] flex items-center justify-between">
                                    <span class="block text-sm">
                                        Projects this month
                                    </span>
                                    <div class="flex items-center">
                                        <img src="/assets/images/users/user15.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                        <img src="/assets/images/users/user14.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                        <img src="/assets/images/users/user13.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                        <img src="/assets/images/users/user12.jpg" class="rounded-full inline-block w-[34px] h-[34px] ltr:-mr-[14px] rtl:-ml-[14px] border border-white dark:border-dark" alt="user-image">
                                        <span class="w-[34px] h-[34px] rounded-full border border-white dark:border-dark bg-primary-500 text-white font-medium flex items-center justify-center text-xs">
                                            +55
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Projects Roadmap
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
                    <div class="trezo-card-content">
                        <div class="-mt-[26px] -mb-[25px] ltr:-ml-[10px] rtl:-mr-[10px]">
                            <div id="pmProjectsRoadmapChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Courses Sales
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        This Month
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
                    <div class="trezo-card-content h-[225px] relative pt-[20px]">
                        <div class="flex items-center z-[2] relative">
                            <h5 class="!mb-0 !text-[20px]">
                                $57.2k
                            </h5>
                            <span class="inline-block text-sm text-success-700 ltr:ml-[15px] rtl:mr-[15px] px-[8.3px] py-[3px] rounded-full border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c]">
                                +10%
                            </span>
                        </div>
                        <div class="absolute left-0 right-0 -bottom-[61px] -ml-[37px] -mr-[35px]">
                            <div id="lmsCoursesSalesChart"></div>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Time Spent
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
                    <div class="trezo-card-content">
                        <div class="-mt-[20px] ltr:-ml-[12px] rtl:-mr-[12px] -mb-[20px]">
                            <div id="lmsTimeSpentChart"></div>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-secondary-500 p-[20px] md:p-[25px] rounded-md relative overflow-hidden z-[2]">
                    <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !text-white">
                                Our Top Courses
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content relative" id="ourTopCoursesSlides">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex items-center">
                                        <div class="w-[120px] rounded-md shrink">
                                            <img src="/assets/images/courses/course1.jpg" alt="course-image" class="rounded-md">
                                        </div>
                                        <div class="grow-0 ltr:ml-[15px] rtl:mr-[15px]">
                                            <span class="block text-white">
                                                Basic Python
                                            </span>
                                            <div class="font-semibold text-white text-[20px] mt-[3px]">
                                                $35.99
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-[10px]">
                                        <span class="block font-semibold text-white text-md mb-[2px]">
                                            Course content
                                        </span>
                                        <ul class="text-white">
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                <span class="top-1/2 -translate-y-1/2 absolute w-[4px] h-[4px] ltr:-right-[11px] rtl:-left-[11px] mt-px rounded-full bg-white"></span>
                                                10 sections
                                            </li>
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                <span class="top-1/2 -translate-y-1/2 absolute w-[4px] h-[4px] ltr:-right-[11px] rtl:-left-[11px] mt-px rounded-full bg-white"></span>
                                                45 lectures
                                            </li>
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                25h 50m
                                            </li>
                                        </ul>
                                        <div class="ltr:text-right rtl:text-left">
                                            <a href="/dashboard/course-details" class="inline-block rounded-md mt-[18px] px-[13px] py-[6px] text-white border border-white transition-all hover:bg-white hover:text-black">
                                                <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                                        add
                                                    </i>
                                                    View Details
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex items-center">
                                        <div class="w-[120px] rounded-md shrink">
                                            <img src="/assets/images/courses/course2.jpg" alt="course-image" class="rounded-md">
                                        </div>
                                        <div class="grow-0 ltr:ml-[15px] rtl:mr-[15px]">
                                            <span class="block text-white">
                                                HTML Developer
                                            </span>
                                            <div class="font-semibold text-white text-[20px] mt-[3px]">
                                                $49.99
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-[10px]">
                                        <span class="block font-semibold text-white text-md mb-[2px]">
                                            Course content
                                        </span>
                                        <ul class="text-white">
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                <span class="top-1/2 -translate-y-1/2 absolute w-[4px] h-[4px] ltr:-right-[11px] rtl:-left-[11px] mt-px rounded-full bg-white"></span>
                                                12 sections
                                            </li>
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                <span class="top-1/2 -translate-y-1/2 absolute w-[4px] h-[4px] ltr:-right-[11px] rtl:-left-[11px] mt-px rounded-full bg-white"></span>
                                                54 lectures
                                            </li>
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                35h 40m
                                            </li>
                                        </ul>
                                        <div class="ltr:text-right rtl:text-left">
                                            <a href="/dashboard/course-details" class="inline-block rounded-md mt-[18px] px-[13px] py-[6px] text-white border border-white transition-all hover:bg-white hover:text-black">
                                                <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                                        add
                                                    </i>
                                                    View Details
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex items-center">
                                        <div class="w-[120px] rounded-md shrink">
                                            <img src="/assets/images/courses/course3.jpg" alt="course-image" class="rounded-md">
                                        </div>
                                        <div class="grow-0 ltr:ml-[15px] rtl:mr-[15px]">
                                            <span class="block text-white">
                                                Basic Angular
                                            </span>
                                            <div class="font-semibold text-white text-[20px] mt-[3px]">
                                                $55.99
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-[10px]">
                                        <span class="block font-semibold text-white text-md mb-[2px]">
                                            Course content
                                        </span>
                                        <ul class="text-white">
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                <span class="top-1/2 -translate-y-1/2 absolute w-[4px] h-[4px] ltr:-right-[11px] rtl:-left-[11px] mt-px rounded-full bg-white"></span>
                                                12 sections
                                            </li>
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                <span class="top-1/2 -translate-y-1/2 absolute w-[4px] h-[4px] ltr:-right-[11px] rtl:-left-[11px] mt-px rounded-full bg-white"></span>
                                                48 lectures
                                            </li>
                                            <li class="inline-block relative ltr:mr-[13px] rtl:ml-[13px] ltr:last:mr-0 last:rtl:ml-0">
                                                29h 30m
                                            </li>
                                        </ul>
                                        <div class="ltr:text-right rtl:text-left">
                                            <a href="/dashboard/course-details" class="inline-block rounded-md mt-[18px] px-[13px] py-[6px] text-white border border-white transition-all hover:bg-white hover:text-black">
                                                <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                                    <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                                        add
                                                    </i>
                                                    View Details
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="absolute -top-[80px] -z-[1] ltr:-right-[80px] rtl:-left-[80px] w-[169px] h-[169px] rounded-full bg-secondary-600"></div>
                    <div class="absolute -top-[75px] -z-[2] ltr:-right-[75px] rtl:-left-[75px] w-[169px] h-[169px] rounded-full bg-secondary-400"></div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Projects Analysis
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Last 7 Days
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
                    <div class="trezo-card-content">
                        <div class="-mt-[5px] -mb-[20px] ltr:-ml-[12px] rtl:-mr-[12px]">
                            <div id="pmProjectsAnalysisChart"></div>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Team Members
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
                    <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                        <div class="table-responsive overflow-x-auto without-border">
                            <table class="w-full">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Name
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Tasks
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center">
                                                <div class="rounded-full w-[44px]">
                                                    <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="font-medium inline-block">
                                                        Alex Davis
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400">
                                                        Head of HR
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                55
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 55%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center">
                                                <div class="rounded-full w-[44px]">
                                                    <img src="/assets/images/users/user7.jpg" class="inline-block rounded-full" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="font-medium inline-block">
                                                        Laura Martinez
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400">
                                                        laura@trezo.com
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                125
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md" style="width: 70%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center">
                                                <div class="rounded-full w-[44px]">
                                                    <img src="/assets/images/users/user8.jpg" class="inline-block rounded-full" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="font-medium inline-block">
                                                        Mark Thompson
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400">
                                                        mark@trezo.com
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                78
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-purple-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-purple-500 rounded-md" style="width: 30%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center">
                                                <div class="rounded-full w-[44px]">
                                                    <img src="/assets/images/users/user9.jpg" class="inline-block rounded-full" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="font-medium inline-block">
                                                        Rachel White
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400">
                                                        rachel@trezo.com
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                95
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md" style="width: 90%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center">
                                                <div class="rounded-full w-[44px]">
                                                    <img src="/assets/images/users/user10.jpg" class="inline-block rounded-full" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="font-medium inline-block">
                                                        Kevin Lee
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400">
                                                        kevin@trezo.com
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                134
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md" style="width: 50%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Working Schedule
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content relative">
                        <div id="workingScheduleCalendar">
                            <div class="header flex items-center justify-between mb-[20px]">
                                <button id="prevBtn" class="transition-all text-black bg-gray-100 dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined">
                                        chevron_left
                                    </i>
                                </button>
                                <span id="monthYear" class="block font-medium text-black dark:text-white"></span>
                                <button id="nextBtn" class="transition-all text-black bg-gray-100 dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined">
                                        chevron_right
                                    </i>
                                </button>
                            </div>
                            <div class="calendar grid grid-cols-7 text-center">
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
                        <div class="mt-[19px] relative" id="upcomingEventsSlides">
                            <span class="block mb-[14px] font-medium">
                                Upcoming Events:
                            </span>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                            <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                            <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                Pythons Unleashed: A Development Expedition
                                            </h6>
                                            <span class="text-xs">
                                                <span class="text-primary-500">
                                                    15 April 2025
                                                </span>
                                                - 12.00 PM - 6.00 PM 
                                            </span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                            <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                            <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                Pythons Unleashed: A Development Expedition
                                            </h6>
                                            <span class="text-xs">
                                                <span class="text-primary-500">
                                                    15 April 2025
                                                </span>
                                                - 12.00 PM - 6.00 PM 
                                            </span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                            <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                            <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                Pythons Unleashed: A Development Expedition
                                            </h6>
                                            <span class="text-xs">
                                                <span class="text-primary-500">
                                                    15 April 2025
                                                </span>
                                                - 12.00 PM - 6.00 PM 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
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
