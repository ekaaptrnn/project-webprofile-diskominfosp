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
                    Pricing
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
                        Pricing
                    </li>
                </ol>
            </div>

            <!-- Pricing -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content md:p-[10px] md:max-w-[500px]">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
                            <div class="relative ltr:sm:mr-[45px] rtl:sm:ml-[45px] ltr:sm:border-r rtl:sm:border-l border-gray-100 dark:border-[#172036]">
                                <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                                    Standard
                                </span>
                                <div class="font-medium text-black dark:text-white text-4xl mt-[15px] mb-[15px] md:mb-[25px] -tracking-[1px] leading-none">
                                    $89<span class="font-normal tracking-normal text-xl">.99</span>
                                </div>
                                <p class="font-medium">
                                    For individual user
                                </p>
                                <button type="button" class="inline-block rounded-md font-medium transition-all md:text-md md:mt-[5px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                                    <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                        <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            arrow_forward_ios
                                        </i>
                                        Buy Now
                                    </span>
                                </button>
                                <div class="inline-block rounded-md bg-orange-600 text-white top-0 md:-top-[20px] ltr:right-0 ltr:md:-right-[35px] rtl:left-0 rtl:md:-left-[35px] py-[6px] px-[14px] absolute text-xs -rotate-[10.156deg]">
                                    Most Popular
                                </div>
                            </div>
                            <ul class="md:ltr:-ml-[25px] md:rtl:-mr-[25px]">
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Advanced Dashboard
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Task Management
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    File Storage (5GB)
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Email Integration
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Mobile App Access
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Custom Branding
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content md:p-[10px] md:max-w-[500px]">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
                            <div class="relative ltr:sm:mr-[45px] rtl:sm:ml-[45px] ltr:sm:border-r rtl:sm:border-l border-gray-100 dark:border-[#172036]">
                                <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                                    Premium
                                </span>
                                <div class="font-medium text-black dark:text-white text-4xl mt-[15px] mb-[15px] md:mb-[25px] -tracking-[1px] leading-none">
                                    $119<span class="font-normal tracking-normal text-xl">.99</span>
                                </div>
                                <p class="font-medium">
                                    For team of 10 users
                                </p>
                                <button type="button" class="inline-block rounded-md font-medium transition-all md:text-md md:mt-[5px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                                    <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                        <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            arrow_forward_ios
                                        </i>
                                        Buy Now
                                    </span>
                                </button>
                            </div>
                            <ul class="md:ltr:-ml-[25px] md:rtl:-mr-[25px]">
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Customizable Dashboard
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Task Management
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    File Storage (Unlimited)
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Custom Reporting
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    24/7 Premium Support
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    White-label Solution
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Breadcrumb -->
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    Pricing Style - 2
                </h5>
            </div>

            <!-- Pricing -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md text-center">
                    <div class="trezo-card-content relative md:py-[10px] md:px-[10px]">
                        <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                            Basic
                        </span>
                        <div class="leading-none text-4xl text-black dark:text-white my-[15px] md:my-[17px] font-medium -tracking-[1px]">
                            $29
                            <span class="text-md text-gray-500 dark:text-gray-400 font-normal tracking-normal">
                                / per month
                            </span>
                        </div>
                        <p class="font-medium">
                            For individual user
                        </p>
                        <button type="button" class="block w-full rounded-md font-medium transition-all md:text-md mt-[20px] md:mt-[20px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    arrow_forward_ios
                                </i>
                                Buy Now
                            </span>
                        </button>
                        <ul class="mt-[20px] md:mt-[28px] ltr:text-left rtl:text-right">
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Basic Dashboard
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Task Management
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                File Storage (5GB)
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Basic Reporting
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Email Integration
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Basic Support
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md text-center">
                    <div class="trezo-card-content relative md:py-[10px] md:px-[10px]">
                        <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                            Standard
                        </span>
                        <div class="leading-none text-4xl text-black dark:text-white my-[15px] md:my-[17px] font-medium -tracking-[1px]">
                            $49
                            <span class="text-md text-gray-500 dark:text-gray-400 font-normal tracking-normal">
                                / per month
                            </span>
                        </div>
                        <p class="font-medium">
                            For team of 10 users
                        </p>
                        <button type="button" class="block w-full rounded-md font-medium transition-all md:text-md mt-[20px] md:mt-[20px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    arrow_forward_ios
                                </i>
                                Buy Now
                            </span>
                        </button>
                        <ul class="mt-[20px] md:mt-[28px] ltr:text-left rtl:text-right">
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Advanced Dashboard
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Task Management
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                File Storage (10GB)
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Advanced Reporting
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Email Integration
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Priority Support
                            </li>
                        </ul>
                        <div class="absolute -top-[9px] ltr:-right-[17px] rtl:-left-[17px]">
                            <img src="/assets/images/icons/star-popular.svg" alt="popular-image">
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md text-center">
                    <div class="trezo-card-content relative md:py-[10px] md:px-[10px]">
                        <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                            Premium
                        </span>
                        <div class="leading-none text-4xl text-black dark:text-white my-[15px] md:my-[17px] font-medium -tracking-[1px]">
                            $79
                            <span class="text-md text-gray-500 dark:text-gray-400 font-normal tracking-normal">
                                / per month
                            </span>
                        </div>
                        <p class="font-medium">
                            For team of 15 users
                        </p>
                        <button type="button" class="block w-full rounded-md font-medium transition-all md:text-md mt-[20px] md:mt-[20px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    arrow_forward_ios
                                </i>
                                Buy Now
                            </span>
                        </button>
                        <ul class="mt-[20px] md:mt-[28px] ltr:text-left rtl:text-right">
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Customizable Dashboard
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Task Management
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                File Storage (Unlimited)
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Custom Reporting
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                Email Integration
                            </li>
                            <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                    check
                                </i>
                                24/7 Premium Support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Breadcrumb -->
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    Pricing Style - 3
                </h5>
            </div>

            <!-- Pricing -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md text-center">
                <div class="trezo-card-content py-[25px]">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                        <div class="md:px-[25px] relative">
                            <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                                Basic
                            </span>
                            <div class="leading-none text-4xl text-black dark:text-white my-[15px] md:my-[17px] font-medium -tracking-[1px]">
                                $29
                                <span class="text-md text-gray-500 dark:text-gray-400 font-normal tracking-normal">
                                    / per month
                                </span>
                            </div>
                            <p class="font-medium">
                                For individual user
                            </p>
                            <button type="button" class="block w-full rounded-md font-medium transition-all md:text-md mt-[20px] md:mt-[20px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                    <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        arrow_forward_ios
                                    </i>
                                    Buy Now
                                </span>
                            </button>
                            <ul class="mt-[20px] md:mt-[28px] ltr:text-left rtl:text-right">
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Basic Dashboard
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Task Management
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    File Storage (5GB)
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Basic Reporting
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Email Integration
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Basic Support
                                </li>
                            </ul>
                            <div class="absolute top-0 bottom-0 ltr:-right-[10px] rtl:-left-[10px] border-r border-gray-100 dark:border-[#172036] border-dashed hidden sm:block"></div>
                        </div>
                        <div class="md:px-[25px] relative">
                            <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                                Standard
                            </span>
                            <div class="leading-none text-4xl text-black dark:text-white my-[15px] md:my-[17px] font-medium -tracking-[1px]">
                                $49
                                <span class="text-md text-gray-500 dark:text-gray-400 font-normal tracking-normal">
                                    / per month
                                </span>
                            </div>
                            <p class="font-medium">
                                For team of 10 users
                            </p>
                            <button type="button" class="block w-full rounded-md font-medium transition-all md:text-md mt-[20px] md:mt-[20px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                    <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        arrow_forward_ios
                                    </i>
                                    Buy Now
                                </span>
                            </button>
                            <ul class="mt-[20px] md:mt-[28px] ltr:text-left rtl:text-right">
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Advanced Dashboard
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Task Management
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    File Storage (10GB)
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Advanced Reporting
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Email Integration
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Priority Support
                                </li>
                            </ul>
                            <div class="absolute -top-[15px] ltr:right-[10px] rtl:left-[10px]">
                                <img src="/assets/images/icons/star-popular.svg" alt="popular-image">
                            </div>
                            <div class="absolute top-0 bottom-0 ltr:-right-[10px] rtl:-left-[10px] border-r border-gray-100 dark:border-[#172036] border-dashed hidden md:block"></div>
                        </div>
                        <div class="md:px-[25px] relative">
                            <span class="inline-block text-gray-400 rounded-md py-[6.5px] px-[17.3px] border border-gray-100 dark:border-[#172036]">
                                Premium
                            </span>
                            <div class="leading-none text-4xl text-black dark:text-white my-[15px] md:my-[17px] font-medium -tracking-[1px]">
                                $79
                                <span class="text-md text-gray-500 dark:text-gray-400 font-normal tracking-normal">
                                    / per month
                                </span>
                            </div>
                            <p class="font-medium">
                                For team of 15 users
                            </p>
                            <button type="button" class="block w-full rounded-md font-medium transition-all md:text-md mt-[20px] md:mt-[20px] py-[12px] px-[20px] text-white bg-primary-500 hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                    <i class="material-symbols-outlined !text-md absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        arrow_forward_ios
                                    </i>
                                    Buy Now
                                </span>
                            </button>
                            <ul class="mt-[20px] md:mt-[28px] ltr:text-left rtl:text-right">
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Customizable Dashboard
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Task Management
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    File Storage (Unlimited)
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Custom Reporting
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Email Integration
                                </li>
                                <li class="relative ltr:pl-[30px] ltr:md:pl-[38px] rtl:pr-[30px] rtl:md:pr-[38px] mb-[15px] last:mb-0">
                                    <i class="material-symbols-outlined text-success-600 absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    24/7 Premium Support
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
