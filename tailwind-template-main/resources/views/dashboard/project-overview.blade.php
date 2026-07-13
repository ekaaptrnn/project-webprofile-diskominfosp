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
                    Project Overview
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
                        Project Management
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Project Overview
                    </li>
                </ol>
            </div>
            
            <!-- Project Overview -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-[25px] mb-[25px]">
                <div class="grid grid-cols-1 gap-[25px]">

                    <!-- Development -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Shopify Theme Development
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="bg-primary-500 rounded-md mb-[12px] pt-[20px] md:pt-[25px] px-[20px] md:px-[25px] pb-[18px]">
                                <div class="md:flex items-center justify-between">
                                    <div class="flex items-center mt-[15px] first:mt-0 md:mt-0">
                                        <div class="w-[45px] h-[45px] rounded-full bg-primary-600 text-white flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                for_you
                                            </i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <span class="block text-white">
                                                Client
                                            </span>
                                            <span class="font-semibold text-white block text-md">
                                                Innovatech
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-[15px] first:mt-0 md:mt-0">
                                        <div class="w-[45px] h-[45px] rounded-full bg-primary-600 text-white flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                attach_money
                                            </i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <span class="block text-white">
                                                Budget
                                            </span>
                                            <span class="font-semibold text-white block text-md">
                                                $25,500
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-[15px] first:mt-0 md:mt-0">
                                        <div class="w-[45px] h-[45px] rounded-full bg-primary-600 text-white flex items-center justify-center">
                                            <i class="material-symbols-outlined">
                                                pace
                                            </i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <span class="block text-white">
                                                Duration
                                            </span>
                                            <span class="font-semibold text-white block text-md">
                                                360 hrs
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex w-full h-[7px] overflow-hidden rounded-md bg-gray-200 mt-[20px] mb-[8px]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-orange-400 rounded-md" style="width: 60%;"></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="block text-white">
                                        Progress
                                    </span>
                                    <span class="block text-white">
                                        60%
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="block">
                                    Project Started: 01 Mar 2025
                                </span>
                                <span class="block">
                                    Project Deadline: 25 Jun 2025
                                </span>
                            </div>
                            <span class="block text-black dark:text-white mb-[8px] mt-[20px] font-bold">
                                Project Details
                            </span>
                            <p class="!leading-[1.7]">
                                Vestibulum euismod nisi vitae orci placerat, vitae vehicula eros dictum. Phasellus ut pharetra felis. Nulla facilisi. Nullam congue semper nunc, at sodales magna laoreet id. Nullam et lacus vitae ligula pretium suscipit. Fusce nec viverra enim. Sed feugiat gravida nibh sit amet suscipit. Integer tempor sapien eget metus lacinia, nec finibus lacus tincidunt. Sed sodales tellus nec metus aliquam, nec dignissim arcu lobortis.
                            </p>
                            <ul class="list-disc ltr:pl-[22px] rtl:pr-[22px]">
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Outline the boundaries and deliverables of the project.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    List team members, their roles, and responsibilities.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Specify the technology stack and tools to be used for development.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Break down the project into manageable phases or sprints.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Outline the design phase, including wireframing, prototyping
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Outline the boundaries and deliverables of the project.
                                </li>
                                <li class="!leading-[1.7] mb-[4px] last:mb-0">
                                    Specify the technology stack and tools to be used for development.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Activity
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content pt-[10px] pb-[25px]">
                            <div class="relative">
                                <span class="block absolute top-0 bottom-0 ltr:left-[6px] rtl:right-[6px] ltr:md:left-[98px] rtl:md:right-[98px] mt-[5px] ltr:border-l rtl:border-r border-dashed border-gray-100 dark:border-[#172036]"></span>
                                <div class="relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[132px] rtl:md:pr-[132px] mb-[25px] md:mb-[30px] last:mb-0">
                                    <span class="block absolute top-[3px] ltr:left-0 rtl:right-0 ltr:md:left-[93px] rtl:md:right-[93px] w-[12px] h-[12px] rounded-full bg-success-500"></span>
                                    <span class="md:absolute md:top-0 ltr:md:left-[5px] rtl:md:right-[5px] text-sm block mb-[10px] md:mb-0">
                                        Just now
                                    </span>
                                    <span class="mb-[10px] block text-black dark:text-white font-medium">
                                        Weekly Stand-Up Meetings:
                                    </span>
                                    <p class="md:max-w-[500px] text-sm !leading-[1.7] !mb-[11px]">
                                        We continued our weekly stand-up meetings where team members provided updates on their current tasks, discussed any roadblocks, and coordinated efforts for the week ahead.
                                    </p>
                                    <span class="block text-sm">
                                        By:
                                        <span class="text-primary-500">
                                            Olivia Rodriguez
                                        </span>
                                    </span>
                                </div>
                                <div class="relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[132px] rtl:md:pr-[132px] mb-[25px] md:mb-[30px] last:mb-0">
                                    <span class="block absolute top-[3px] ltr:left-0 rtl:right-0 ltr:md:left-[93px] rtl:md:right-[93px] w-[12px] h-[12px] rounded-full bg-orange-500"></span>
                                    <span class="md:absolute md:top-0 ltr:md:left-[5px] rtl:md:right-[5px] text-sm block mb-[10px] md:mb-0">
                                        1 day ago
                                    </span>
                                    <span class="mb-[10px] block text-black dark:text-white font-medium">
                                        Project Kickoff Session:
                                    </span>
                                    <p class="md:max-w-[500px] text-sm !leading-[1.7] !mb-[11px]">
                                        The session included introductions, a review of project goals and objectives, and initial planning discussions.
                                    </p>
                                    <span class="block text-sm">
                                        By:
                                        <span class="text-primary-500">
                                            Isabella Cooper
                                        </span>
                                    </span>
                                </div>
                                <div class="relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[132px] rtl:md:pr-[132px] mb-[25px] md:mb-[30px] last:mb-0">
                                    <span class="block absolute top-[3px] ltr:left-0 rtl:right-0 ltr:md:left-[93px] rtl:md:right-[93px] w-[12px] h-[12px] rounded-full bg-purple-500"></span>
                                    <span class="md:absolute md:top-0 ltr:md:left-[5px] rtl:md:right-[5px] text-sm block mb-[10px] md:mb-0">
                                        2 days ago
                                    </span>
                                    <span class="mb-[10px] block text-black dark:text-white font-medium">
                                        Team Building Workshop:
                                    </span>
                                    <p class="md:max-w-[500px] text-sm !leading-[1.7] !mb-[11px]">
                                        Last Friday, we conducted a team building workshop focused on improving communication and collaboration among team members. Activities included team challenges, icebreakers, and open discussions.
                                    </p>
                                    <span class="block text-sm">
                                        By:
                                        <span class="text-primary-500">
                                            Lucas Morgan
                                        </span>
                                    </span>
                                </div>
                                <div class="relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[132px] rtl:md:pr-[132px] mb-[25px] md:mb-[30px] last:mb-0">
                                    <span class="block absolute top-[3px] ltr:left-0 rtl:right-0 ltr:md:left-[93px] rtl:md:right-[93px] w-[12px] h-[12px] rounded-full bg-secondary-500"></span>
                                    <span class="md:absolute md:top-0 ltr:md:left-[5px] rtl:md:right-[5px] text-sm block mb-[10px] md:mb-0">
                                        3 days ago
                                    </span>
                                    <span class="mb-[10px] block text-black dark:text-white font-medium">
                                        Lunch and Learn Session:
                                    </span>
                                    <p class="md:max-w-[500px] text-sm !leading-[1.7] !mb-[11px]">
                                        We organized a lunch and learn session on March 15th where a guest speaker from the industry discussed emerging trends in our field. It was an insightful session that sparked valuable discussions among team members.
                                    </p>
                                    <span class="block text-sm">
                                        By:
                                        <span class="text-primary-500">
                                            Ethan Parker
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 gap-[25px]">

                    <!-- Project Roadmap -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Project Roadmap
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mt-[26px] -mb-[25px] ltr:-ml-[10px] rtl:-mr-[10px]">
                                <div id="pmProjectsRoadmapChart"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Overview -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Project Overview
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">
                                <div class="bg-primary-50 dark:bg-[#15203c] rounded-md py-[22px] px-[20px]">
                                    <div class="flex items-center">
                                        <div class="text-primary-500 leading-none ltr:mr-[10px] rtl:ml-[10px]">
                                            <i class="material-symbols-outlined !text-5xl">
                                                history_toggle_off
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Total Hours
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                102
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Hours this week
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
                                                local_cafe
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Total Cup of Coffee
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                89
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Coffee this week
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
                                                door_open
                                            </i>
                                        </div>
                                        <div>
                                            <span class="block">
                                                Total Days
                                            </span>
                                            <h5 class="!mb-0 !text-[20px] mt-[2px]">
                                                54
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[15px] sm:mt-[25px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Days this week
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
                                                55+
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="mt-[14px] flex items-center justify-between">
                                        <span class="block text-sm">
                                            Hard Worker
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

                    <!-- Team Members -->
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

                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- To Do List -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    To Do List
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[15px] sm:mt-0">
                                <form class="relative sm:w-[265px]">
                                    <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            search
                                        </i>
                                    </label>
                                    <input type="text" placeholder="Search here....." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400">
                                </form>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                ID
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Task Title
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Assigned To
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Due Date
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Priority
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Status
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #854
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Network Infrastructure
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Oliver Clark
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    30 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    High
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Finished
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
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #853
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Cloud Migration
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Ethan Baker
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    25 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    Low
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                    Pending
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
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #852
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Website Revamp
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Sophia Carter
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    20 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    Medium
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    In Progress
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
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #851
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Mobile Application
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Ava Cooper
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    15 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    High
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Finished
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
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #850
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    System Deployment
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Isabella Evans
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    10 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    Low
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                    Cancelled
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
                            <div class="px-[25px] pt-[12px] md:pt-[15px] ltr:text-right rtl:text-left">
                                <button type="button" class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white" id="add-new-popup-toggle">
                                    <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                            add
                                        </i>
                                        Add New Task
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Tasks Overview -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Tasks Overview
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
                            <div id="pmTasksOverviewChart"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
            @include('partials.dashboard.task_form')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
