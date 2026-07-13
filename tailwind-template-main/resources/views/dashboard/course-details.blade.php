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
                    Course Details
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
                        LMS
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Courses
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Course Details
                    </li>
                </ol>
            </div>
            
            <!-- Course Details -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Course
                        </h5>
                    </div>
                </div>
                <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        ID
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Course Name
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Category
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Instructor
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Enrolled
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Start Date
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        End Date
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Price
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #854
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/course-details" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Cybersecurity Awareness
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Technology
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Oliver Khan
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            180
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            25 Mar 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            25 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            $49.99
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                            <i class="material-symbols-outlined !text-md">
                                                edit
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tables Of Content -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Tables Of Content
                        </h5>
                    </div>
                </div>
                <div class="trezo-card-content">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] items-center">
                        <div class="lg:col-span-2">
                            <div class="2xl:ltr:pr-[120px] 2xl:rtl:pl-[120px]">
                                <div class="toc-accordion" id="tablesOfContentAccordion">
                                    <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[10px] last:mb-0">
                                        <button class="toc-accordion-button open text-base md:text-[15px] py-[19px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-semibold relative" type="button">
                                            Introduction to Cybersecurity
                                            <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                                        </button>
                                        <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[18px]" style="display: block;">
                                            <ul>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            info
                                                        </i>
                                                        Course Introduction
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 24s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            play_circle
                                                        </i>
                                                        Cyber Security Introduction
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        0m 46s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            list
                                                        </i>
                                                        What is Cyber Security and the CIA Triad
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        3m 32s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Threat Actors: Who are They?
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 2s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            hotel_class
                                                        </i>
                                                        Types of Threat Actors
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 13s
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[10px] last:mb-0">
                                        <button class="toc-accordion-button text-base md:text-[15px] py-[19px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-semibold relative" type="button">
                                            Secure Networking
                                            <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                                        </button>
                                        <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[18px] hidden">
                                            <ul>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            info
                                                        </i>
                                                        Network Security Introduction
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 24s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            play_circle
                                                        </i>
                                                        Introduction to Wired and Wireless Networks
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 13s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            list
                                                        </i>
                                                        Wired Network Vulnerabilities and How to Protect Wired Networks
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        3m 32s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Wireless Network Vulnerabilities and How to Protect Wireless Networks
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 2s
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[10px] last:mb-0">
                                        <button class="toc-accordion-button text-base md:text-[15px] py-[19px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-semibold relative" type="button">
                                            Secure E-Mail
                                            <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                                        </button>
                                        <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[18px] hidden">
                                            <ul>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            info
                                                        </i>
                                                        E-Mail Security Introduction
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 24s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            play_circle
                                                        </i>
                                                        E-Mail: Overview and Importance
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 13s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            list
                                                        </i>
                                                        Phishing: Techniques, Implications and How to Spot
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        3m 32s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Understanding E-Mail Headers for Verification
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 2s
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[10px] last:mb-0">
                                        <button class="toc-accordion-button text-base md:text-[15px] py-[19px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-semibold relative" type="button">
                                            Secure Internet Browsing
                                            <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                                        </button>
                                        <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[18px] hidden">
                                            <ul>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            info
                                                        </i>
                                                        Internet Security Introduction
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 24s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            play_circle
                                                        </i>
                                                        Exploring Web-Based Threats
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        0m 46s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            list
                                                        </i>
                                                        Typo Squatting: Risks and Mitigation
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        3m 32s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Watering Hole Attacks: Tactics and Countermeasures
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 2s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Secure Browsing Best Practices
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 13s
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[10px] last:mb-0">
                                        <button class="toc-accordion-button text-base md:text-[15px] py-[19px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-semibold relative" type="button">
                                            Device Security & Password Management
                                            <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                                        </button>
                                        <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[18px] hidden">
                                            <ul>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            info
                                                        </i>
                                                        Device Security Introduction
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 24s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            play_circle
                                                        </i>
                                                        Securing Computers, Laptops, and Mobile Devices
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 13s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            list
                                                        </i>
                                                        Password Best Practices
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        3m 32s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Multi-Factor Authentication (MFA)
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 2s
                                                    </span>
                                                </li>
                                                <li class="border-b border-gray-100 sm:flex items-center justify-between py-[12px] md:py-[15px] dark:border-[#1c2846] first:pt-0 last:border-0 last:pb-0">
                                                    <a href="javascript:void(0);" class="relative inline-block text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 ltr:pl-[27px] rtl:pr-[27px]">
                                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-[20px] -mt-[.5px] text-primary-500 top-1/2 -translate-y-1/2">
                                                            star
                                                        </i>
                                                        Keeping Devices Up-to-Date
                                                    </a>
                                                    <span class="block text-gray-500 dark:text-gray-400 mt-[10px] sm:mt-0">
                                                        2m 13s
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-1">
                            <div class="bg-primary-500 rounded-md text-center py-[30px] md:py-[50px] px-[20px] md:px-[30px] 2xl:ltr:-ml-[30px] 2xl:rtl:-mr-[30px] 2xl:ltr:mr-[85px] 2xl:rtl:ml-[85px]">
                                <h4 class="!mb-[10px] !text-white !text-lg md:!text-[21px]">
                                    Unlock Library
                                </h4>
                                <p class="!mb-[20px] last:!mb-0 text-[#e3eaef]">
                                    Get access to all videos in the library
                                </p>
                                <a href="/sign-up" class="inline-block rounded-md font-medium md:text-md py-[11px] md:py-[13px] px-[22px] mb-[15px] text-white bg-[#ffffff14] transition-all hover:bg-white hover:text-black">
                                    Sign Up - Only $120/mo
                                </a>
                                <p class="!mb-[20px] last:!mb-0 text-[#e3eaef]">
                                    Have an account? <a href="/sign-in" class="text-white">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-3">

                    <!-- Course Instructor -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Course Instructor
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user7.jpg" alt="user-image" class="rounded-full w-[100px]">
                                <div class="ltr:ml-[15px] rtl:mr-[15px]">
                                    <span class="block text-black dark:text-white text-[17px] mb-[2px] font-medium">
                                        Aliva Cohen
                                    </span>
                                    <span class="block">
                                        aliva@trezo.com
                                    </span>
                                </div>
                            </div>
                            <span class="text-black dark:text-white font-medium block mb-[7px] mt-[22px]">
                                Course Description
                            </span>
                            <p>
                                This course is designed for beginners who want to learn the fundamentals of the Python programming language. The course covers basic syntax, data types, control structures, and an introduction to object-oriented programming. Participants will have hands-on coding exercises to reinforce their learning.
                            </p>
                            <span class="text-black dark:text-white font-medium block mb-[7px] mt-[22px]">
                                Course Schedule
                            </span>
                            <p>
                                Start Date: 01 August 2025
                                <br>
                                End Date: 30 December 2025
                            </p>
                            <span class="text-black dark:text-white font-medium block mb-[7px] mt-[22px]">
                                Status
                            </span>
                            <p>
                                The course is currently in progress. Students are actively engaged in the learning materials, and the instructor is providing guidance and support.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">
                    
                    <!-- Enrolled Students -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Enrolled Students
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-auto h-[426px]">
                                <table class="w-full">
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                ID
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Name
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Email
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-1217
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user13.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Olivia Clark
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                olivia@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-1364
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user16.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Ava Turner
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                ava@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-2951
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user17.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Lucas Morgan
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                lucas@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-7342
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user18.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Isabella Cooper
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                isabella@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-1217
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user13.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Olivia Clark
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                olivia@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-1364
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user16.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Ava Turner
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                ava@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-2951
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user17.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Lucas Morgan
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                lucas@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-7342
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user18.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Isabella Cooper
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                isabella@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-1217
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user13.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Olivia Clark
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                olivia@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-1364
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user16.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Ava Turner
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                ava@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-2951
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user17.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Lucas Morgan
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                lucas@trezo.com
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                #A-7342
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <img src="/assets/images/users/user18.jpg" class="inline-block rounded-full w-[44px]" alt="product-image">
                                                    <span class="font-medium inline-block ltr:ml-[12px] rtl:mr-[12px]">
                                                        Isabella Cooper
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                isabella@trezo.com
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Overall Reviews -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-[25px] items-center gap-[25px]">
                        <div class="md:col-span-2">
                            <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 85%;"></div>
                                </div>
                                <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                    359
                                </span>
                            </div>
                            <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                </div>
                                <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                </div>
                                <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                    208
                                </span>
                            </div>
                            <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                </div>
                                <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 35%;"></div>
                                </div>
                                <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                    124
                                </span>
                            </div>
                            <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                </div>
                                <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 15%;"></div>
                                </div>
                                <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                    89
                                </span>
                            </div>
                            <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                </div>
                                <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 5%;"></div>
                                </div>
                                <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                    4
                                </span>
                            </div>
                        </div>
                        <div class="md:col-span-1">
                            <div class="text-center">
                                <h3 class="!mb-[7px] !leading-none !text-5xl">
                                    4.28
                                </h3>
                                <div class="flex items-center justify-center mb-[10px] text-[#ee8336] text-[30px] gap-[4px]">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                </div>
                                <span class="block">
                                    of 3250 Reviews
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Manage Reviews -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Manage Reviews
                        </h5>
                    </div>
                </div>
                <div class="trezo-card-content">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        ID
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Reviewer
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Review
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Date
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Status
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        #999
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Olivia Clark
                                                </span>
                                                <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                    olivia@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <p class="mt-[10px] w-[350px]">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="block">
                                            17 Dec 2025
                                        </span>
                                        <span class="block">
                                            08:30 PM
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                <i class="material-symbols-outlined !text-md">
                                                    download_done
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                <i class="material-symbols-outlined !text-md">
                                                    reply
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
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        #998
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="/assets/images/users/user7.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Zephyr Zing
                                                </span>
                                                <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                    zephyr@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-fill"></i>
                                        </div>
                                        <p class="mt-[10px] w-[350px]">
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                        </p>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="block">
                                            16 Dec 2025
                                        </span>
                                        <span class="block">
                                            10:11 PM
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                <i class="material-symbols-outlined !text-md">
                                                    download_done
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                <i class="material-symbols-outlined !text-md">
                                                    reply
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
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        #997
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="/assets/images/users/user8.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Nova Nectar
                                                </span>
                                                <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                    nova@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                        </div>
                                        <p class="mt-[10px] w-[350px]">
                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                        </p>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="block">
                                            15 Dec 2025
                                        </span>
                                        <span class="block">
                                            11:11 AM
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                <i class="material-symbols-outlined !text-md">
                                                    download_done
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                <i class="material-symbols-outlined !text-md">
                                                    reply
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
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        #996
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="/assets/images/users/user9.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Isabella Chang
                                                </span>
                                                <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                    isabella@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-half-fill"></i>
                                        <i class="ri-star-line"></i>
                                        </div>
                                        <p class="mt-[10px] w-[350px]">
                                            It was popularised in the 1960s with the release of letraset sheets containing lorem ipsum passages, and more recently with desktop publishing.
                                        </p>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="block">
                                            17 Dec 2025
                                        </span>
                                        <span class="block">
                                            08:30 PM
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                <i class="material-symbols-outlined !text-md">
                                                    download_done
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                <i class="material-symbols-outlined !text-md">
                                                    reply
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
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        #995
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px] rounded-full">
                                                <img src="/assets/images/users/user10.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Alina Bennett
                                                </span>
                                                <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                    alina@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <p class="mt-[10px] w-[350px]">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                        </p>
                                    </td>
                                    <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="block">
                                            17 Dec 2025
                                        </span>
                                        <span class="block">
                                            08:30 PM
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                            Published
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                <i class="material-symbols-outlined !text-md">
                                                    download_done
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                <i class="material-symbols-outlined !text-md">
                                                    reply
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
                    <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-sm">
                            Showing 5 of 36 results
                        </p>
                        <ol class="mt-[10px] sm:mt-0">
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="/dashboard/course-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    <span class="opacity-0">
                                        0
                                    </span>
                                    <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                        chevron_left
                                    </i>
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="/dashboard/course-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                    1
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="/dashboard/course-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    2
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="/dashboard/course-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    3
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="/dashboard/course-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                    4
                                </a>
                            </li>
                            <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                <a href="/dashboard/course-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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
