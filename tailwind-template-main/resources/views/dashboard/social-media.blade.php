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

            <div class="grid grid-cols-1 xl:grid-cols-2 gap-[25px] mb-[25px]">

                <!-- Stats -->
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-[25px]">

                    <!-- Instagram Followers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <img src="/assets/images/icons/instagram3.svg" alt="instagram">
                            <h3 class="!font-medium !text-2xl md:!text-3xl lg:!text-4xl -tracking-[1px] mt-[16px] !-mb-[2px]">
                                345k
                            </h3>
                            <span class="block">
                                Followers
                            </span>
                            <div class="flex items-center gap-[5px] mt-[15px] md:mt-[20px]">
                                <span class="block text-xs">
                                    This month
                                </span>
                                <span class="inline-block text-xs rounded-[4px] bg-success-100 dark:bg-[#15203c] text-success-700 ltr:pl-[19px] rtl:pr-[19px] ltr:pr-[5px] rtl:pl-[5px] relative">
                                    <i class="ri-arrow-up-line absolute ltr:left-[5px] rtl:right-[5px] top-1/2 -translate-y-1/2"></i>
                                    3.5%
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- LinkedIn Followers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <img src="/assets/images/icons/linkedin3.svg" alt="linkedin">
                            <h3 class="!font-medium !text-2xl md:!text-3xl lg:!text-4xl -tracking-[1px] mt-[16px] !-mb-[2px]">
                                56.3k
                            </h3>
                            <span class="block">
                                Followers
                            </span>
                            <div class="flex items-center gap-[5px] mt-[15px] md:mt-[20px]">
                                <span class="block text-xs">
                                    This month
                                </span>
                                <span class="inline-block text-xs rounded-[4px] bg-danger-100 dark:bg-[#15203c] text-danger-700 ltr:pl-[19px] rtl:pr-[19px] ltr:pr-[5px] rtl:pl-[5px] relative">
                                    <i class="ri-arrow-down-line absolute ltr:left-[5px] rtl:right-[5px] top-1/2 -translate-y-1/2"></i>
                                    2.1%
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- TikTok Followers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <img src="/assets/images/icons/tiktok.svg" alt="tiktok">
                            <h3 class="!font-medium !text-2xl md:!text-3xl lg:!text-4xl -tracking-[1px] mt-[16px] !-mb-[2px]">
                                132k
                            </h3>
                            <span class="block">
                                Followers
                            </span>
                            <div class="flex items-center gap-[5px] mt-[15px] md:mt-[20px]">
                                <span class="block text-xs">
                                    This month
                                </span>
                                <span class="inline-block text-xs rounded-[4px] bg-success-100 dark:bg-[#15203c] text-success-700 ltr:pl-[19px] rtl:pr-[19px] ltr:pr-[5px] rtl:pl-[5px] relative">
                                    <i class="ri-arrow-up-line absolute ltr:left-[5px] rtl:right-[5px] top-1/2 -translate-y-1/2"></i>
                                    6.3%
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Facebook Followers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <img src="/assets/images/icons/facebook4.svg" alt="facebook">
                            <h3 class="!font-medium !text-2xl md:!text-3xl lg:!text-4xl -tracking-[1px] mt-[16px] !-mb-[2px]">
                                98.5k
                            </h3>
                            <span class="block">
                                Followers
                            </span>
                            <div class="flex items-center gap-[5px] mt-[15px] md:mt-[20px]">
                                <span class="block text-xs">
                                    This month
                                </span>
                                <span class="inline-block text-xs rounded-[4px] bg-success-100 dark:bg-[#15203c] text-success-700 ltr:pl-[19px] rtl:pr-[19px] ltr:pr-[5px] rtl:pl-[5px] relative">
                                    <i class="ri-arrow-up-line absolute ltr:left-[5px] rtl:right-[5px] top-1/2 -translate-y-1/2"></i>
                                    2.6%
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- X Followers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <img src="/assets/images/icons/x.svg" alt="x">
                            <h3 class="!font-medium !text-2xl md:!text-3xl lg:!text-4xl -tracking-[1px] mt-[16px] !-mb-[2px]">
                                75.2k
                            </h3>
                            <span class="block">
                                Followers
                            </span>
                            <div class="flex items-center gap-[5px] mt-[15px] md:mt-[20px]">
                                <span class="block text-xs">
                                    This month
                                </span>
                                <span class="inline-block text-xs rounded-[4px] bg-success-100 dark:bg-[#15203c] text-success-700 ltr:pl-[19px] rtl:pr-[19px] ltr:pr-[5px] rtl:pl-[5px] relative">
                                    <i class="ri-arrow-up-line absolute ltr:left-[5px] rtl:right-[5px] top-1/2 -translate-y-1/2"></i>
                                    3.5%
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- YouTube Subscribers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <img src="/assets/images/icons/youtube.svg" alt="youtube">
                            <h3 class="!font-medium !text-2xl md:!text-3xl lg:!text-4xl -tracking-[1px] mt-[16px] !-mb-[2px]">
                                84.7k
                            </h3>
                            <span class="block">
                                Subscribers
                            </span>
                            <div class="flex items-center gap-[5px] mt-[15px] md:mt-[20px]">
                                <span class="block text-xs">
                                    This month
                                </span>
                                <span class="inline-block text-xs rounded-[4px] bg-danger-100 dark:bg-[#15203c] text-danger-700 ltr:pl-[19px] rtl:pr-[19px] ltr:pr-[5px] rtl:pl-[5px] relative">
                                    <i class="ri-arrow-down-line absolute ltr:left-[5px] rtl:right-[5px] top-1/2 -translate-y-1/2"></i>
                                    5.2%
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- LinkedIn Net Followers -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header sm:mb-[15px] sm:flex items-center justify-between">
                        <div class="trezo-card-title mb-[10px] sm:mb-0">
                            <h5 class="!mb-[3px] md:!mb-0 !text-lg md:!text-[20px]">
                                LinkedIn Net Followers
                            </h5>
                            <p>
                                Net followers growth: <span class="text-primary-500">+275</span>
                            </p>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Last Week
                                        <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                    </span>
                                </button>
                                <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Day
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Week
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Month
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                            Last Year
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <ul class="sm:flex items-center gap-[25px] md:gap-[35px] lg:gap-[50px]">
                            <li class="inline-block mt-[15px] sm:mt-0 ltr:mr-[15px] rtl:ml-[15px] ltr:sm:mr-0 rtl:sm:ml-0">
                                <span class="block font-medium text-black">
                                    56,100
                                </span>
                                <span class="block mt-px text-xs">
                                    Starting Followers
                                </span>
                            </li>
                            <li class="inline-block mt-[15px] sm:mt-0 ltr:mr-[15px] rtl:ml-[15px] ltr:sm:mr-0 rtl:sm:ml-0">
                                <span class="block font-medium text-black">
                                    300
                                </span>
                                <span class="block mt-px text-xs">
                                    New Followers
                                </span>
                            </li>
                            <li class="inline-block mt-[15px] sm:mt-0 ltr:mr-[15px] rtl:ml-[15px] ltr:sm:mr-0 rtl:sm:ml-0">
                                <span class="block font-medium text-black">
                                    25
                                </span>
                                <span class="block mt-px text-xs">
                                    Unfollows
                                </span>
                            </li>
                            <li class="inline-block mt-[15px] sm:mt-0 ltr:mr-[15px] rtl:ml-[15px] ltr:sm:mr-0 rtl:sm:ml-0">
                                <span class="block font-medium text-black">
                                    56,375
                                </span>
                                <span class="block mt-px text-xs">
                                    Ending Followers
                                </span>
                            </li>
                        </ul>
                        <div class="-mb-[25px] ltr:-ml-[15px] rtl:-mr-[15px] ltr:-mr-[10px] rtl:ml-[10px]">
                            <div id="linkedinNetFollowersChart"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- Suggestions -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-[3px] md:!mb-0 !text-lg md:!text-[20px]">
                                Suggestions
                            </h5>
                            <p>
                                People may you know
                            </p>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
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
                    <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                        <ul>
                            <li class="flex items-center justify-between mb-[10.7px] pb-[10.7px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user40.jpg" class="rounded-full w-[44px]" alt="user-image">
                                    <div>
                                        <span class="block text-black dark:text-white font-medium">
                                            Sophia Adams
                                        </span>
                                        <span class="text-xs">
                                            12 mutual friends
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[5px]">
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-danger-200 dark:border-[#172036] text-orange-500 text-md transition-all hover:bg-orange-500 hover:text-white hover:border-orange-500">
                                        <i class="ri-delete-bin-7-line"></i>
                                    </button>
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-primary-200 dark:border-[#172036] text-primary-500 text-md transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <i class="ri-user-add-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10.7px] pb-[10.7px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user37.jpg" class="rounded-full w-[44px]" alt="user-image">
                                    <div>
                                        <span class="block text-black dark:text-white font-medium">
                                            Liam Roberts
                                        </span>
                                        <span class="text-xs">
                                            8 mutual friends
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[5px]">
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-danger-200 dark:border-[#172036] text-orange-500 text-md transition-all hover:bg-orange-500 hover:text-white hover:border-orange-500">
                                        <i class="ri-delete-bin-7-line"></i>
                                    </button>
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-primary-200 dark:border-[#172036] text-primary-500 text-md transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <i class="ri-user-add-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10.7px] pb-[10.7px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user54.jpg" class="rounded-full w-[44px]" alt="user-image">
                                    <div>
                                        <span class="block text-black dark:text-white font-medium">
                                            Olivia Martinez
                                        </span>
                                        <span class="text-xs">
                                            15 mutual friends
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[5px]">
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-danger-200 dark:border-[#172036] text-orange-500 text-md transition-all hover:bg-orange-500 hover:text-white hover:border-orange-500">
                                        <i class="ri-delete-bin-7-line"></i>
                                    </button>
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-primary-200 dark:border-[#172036] text-primary-500 text-md transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <i class="ri-user-add-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10.7px] pb-[10.7px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user41.jpg" class="rounded-full w-[44px]" alt="user-image">
                                    <div>
                                        <span class="block text-black dark:text-white font-medium">
                                            Ethan Clarke
                                        </span>
                                        <span class="text-xs">
                                            10 mutual friends
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[5px]">
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-danger-200 dark:border-[#172036] text-orange-500 text-md transition-all hover:bg-orange-500 hover:text-white hover:border-orange-500">
                                        <i class="ri-delete-bin-7-line"></i>
                                    </button>
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-primary-200 dark:border-[#172036] text-primary-500 text-md transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <i class="ri-user-add-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10.7px] pb-[10.7px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user43.jpg" class="rounded-full w-[44px]" alt="user-image">
                                    <div>
                                        <span class="block text-black dark:text-white font-medium">
                                            Isabella Cruz
                                        </span>
                                        <span class="text-xs">
                                            7 mutual friends
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[5px]">
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-danger-200 dark:border-[#172036] text-orange-500 text-md transition-all hover:bg-orange-500 hover:text-white hover:border-orange-500">
                                        <i class="ri-delete-bin-7-line"></i>
                                    </button>
                                    <button type="button" class="flex items-center justify-center w-[34px] h-[34px] rounded-full border border-primary-200 dark:border-[#172036] text-primary-500 text-md transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <i class="ri-user-add-line"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Followers by Gender -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-[3px] md:!mb-0 !text-lg md:!text-[20px]">
                                Followers by Gender
                            </h5>
                            <p>
                                Understand your audience better!
                            </p>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
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
                        <div class="text-center">
                            <span class="block text-md text-black dark:text-white font-medium">
                                54,500
                            </span>
                            <span class="block text-xs">
                                Total Followers
                            </span>
                        </div>
                        <div class="mt-[15px] mb-[13px]">
                            <div id="followersByGenderChart"></div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex gap-[10px]">
                                <div class="bg-primary-500 w-[10px] h-[10px] rounded-full"></div>
                                <div>
                                    <span class="block font-medium text-black dark:text-white -mt-[5.3px]">
                                        55%
                                    </span>
                                    <span class="block text-xs">
                                        Male Followers
                                    </span>
                                </div>
                            </div>
                            <div class="flex gap-[10px]">
                                <div class="bg-purple-500 w-[10px] h-[10px] rounded-full"></div>
                                <div>
                                    <span class="block font-medium text-black dark:text-white -mt-[5.3px]">
                                        45%
                                    </span>
                                    <span class="block text-xs">
                                        Female Followers
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- Recent Instagram Followers -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-[3px] md:!mb-0 !text-lg md:!text-[20px]">
                                Recent Instagram Followers
                            </h5>
                            <p>
                                Check out your latest followers
                            </p>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
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
                    <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                        <ul>
                            <li class="flex items-center justify-between mb-[10px] pb-[10px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user69.jpg" class="rounded-full w-[34px]" alt="user-image">
                                    <span class="block text-black dark:text-white font-medium">
                                        Mason Lee
                                    </span>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <button type="button" class="inline-block text-xs text-primary-600 bg-primary-50 dark:bg-[#15203c] rounded-[4px] py-[3.5px] px-[10px] transition-all hover:bg-primary-600 hover:text-white">
                                        Follow Back
                                    </button>
                                    <button type="button" class="flex items-center justify-center rounded-[4px] w-[25px] h-[25px] bg-purple-100 dark:bg-[#15203c] text-purple-600 transition-all hover:bg-purple-600 hover:text-white">
                                        <i class="ri-message-2-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10px] pb-[10px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user70.jpg" class="rounded-full w-[34px]" alt="user-image">
                                    <span class="block text-black dark:text-white font-medium">
                                        Mia Patel
                                    </span>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <button type="button" class="inline-block text-xs text-primary-600 bg-primary-50 dark:bg-[#15203c] rounded-[4px] py-[3.5px] px-[10px] transition-all hover:bg-primary-600 hover:text-white">
                                        Follow Back
                                    </button>
                                    <button type="button" class="flex items-center justify-center rounded-[4px] w-[25px] h-[25px] bg-purple-100 dark:bg-[#15203c] text-purple-600 transition-all hover:bg-purple-600 hover:text-white">
                                        <i class="ri-message-2-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10px] pb-[10px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user71.jpg" class="rounded-full w-[34px]" alt="user-image">
                                    <span class="block text-black dark:text-white font-medium">
                                        James Nguyen
                                    </span>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <button type="button" class="inline-block text-xs text-primary-600 bg-primary-50 dark:bg-[#15203c] rounded-[4px] py-[3.5px] px-[10px] transition-all hover:bg-primary-600 hover:text-white">
                                        Follow Back
                                    </button>
                                    <button type="button" class="flex items-center justify-center rounded-[4px] w-[25px] h-[25px] bg-purple-100 dark:bg-[#15203c] text-purple-600 transition-all hover:bg-purple-600 hover:text-white">
                                        <i class="ri-message-2-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10px] pb-[10px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user72.jpg" class="rounded-full w-[34px]" alt="user-image">
                                    <span class="block text-black dark:text-white font-medium">
                                        Benjamin Kim
                                    </span>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <button type="button" class="inline-block text-xs text-primary-600 bg-primary-50 dark:bg-[#15203c] rounded-[4px] py-[3.5px] px-[10px] transition-all hover:bg-primary-600 hover:text-white">
                                        Follow Back
                                    </button>
                                    <button type="button" class="flex items-center justify-center rounded-[4px] w-[25px] h-[25px] bg-purple-100 dark:bg-[#15203c] text-purple-600 transition-all hover:bg-purple-600 hover:text-white">
                                        <i class="ri-message-2-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10px] pb-[10px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user73.jpg" class="rounded-full w-[34px]" alt="user-image">
                                    <span class="block text-black dark:text-white font-medium">
                                        Elijah Watson
                                    </span>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <button type="button" class="inline-block text-xs text-primary-600 bg-primary-50 dark:bg-[#15203c] rounded-[4px] py-[3.5px] px-[10px] transition-all hover:bg-primary-600 hover:text-white">
                                        Follow Back
                                    </button>
                                    <button type="button" class="flex items-center justify-center rounded-[4px] w-[25px] h-[25px] bg-purple-100 dark:bg-[#15203c] text-purple-600 transition-all hover:bg-purple-600 hover:text-white">
                                        <i class="ri-message-2-line"></i>
                                    </button>
                                </div>
                            </li>
                            <li class="flex items-center justify-between mb-[10px] pb-[10px] border-b border-gray-50 dark:border-[#172036] px-[20px] md:px-[25px] last:border-b-[0] last:pb-0 last:mb-0">
                                <div class="flex items-center gap-[10px]">
                                    <img src="/assets/images/users/user74.jpg" class="rounded-full w-[34px]" alt="user-image">
                                    <span class="block text-black dark:text-white font-medium">
                                        Daniel Flores
                                    </span>
                                </div>
                                <div class="flex items-center gap-[10px]">
                                    <button type="button" class="inline-block text-xs text-primary-600 bg-primary-50 dark:bg-[#15203c] rounded-[4px] py-[3.5px] px-[10px] transition-all hover:bg-primary-600 hover:text-white">
                                        Follow Back
                                    </button>
                                    <button type="button" class="flex items-center justify-center rounded-[4px] w-[25px] h-[25px] bg-purple-100 dark:bg-[#15203c] text-purple-600 transition-all hover:bg-purple-600 hover:text-white">
                                        <i class="ri-message-2-line"></i>
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Facebook Campaign Overview -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] sm:flex items-center justify-between">
                            <div class="trezo-card-title mb-[10px] sm:mb-0">
                                <h5 class="!mb-[3px] md:!mb-0 !text-lg md:!text-[20px]">
                                    Facebook Campaign Overview
                                </h5>
                                <p>
                                    Track campaign success at a glance!
                                </p>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
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
                            <span class="font-medium md:text-md relative ltr:pl-[22px] rtl:pr-[22px] text-black dark:text-white">
                                <i class="ri-bookmark-line absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 text-danger-500 text-lg"></i>
                                Summer Sale Boost
                            </span>
                            <div class="relative">
                                <div class="ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px] mt-[5px] ltr:md:pr-[150px] rtl:md:pl-[150px]">
                                    <div id="facebookCampaignOverviewChart"></div>
                                </div>
                                <div class="mt-[20px] md:mt-0 md:absolute ltr:right-0 rtl:left-0 md:top-1/2 md:-translate-y-1/2">
                                    <div class="flex gap-[9px] mb-[20px] md:mb-[25px] last:mb-0">
                                        <div class="bg-primary-500 w-[10px] h-[10px] rounded-full"></div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white -mt-[5.3px]">
                                                45,000
                                            </span>
                                            <span class="block text-xs">
                                                Impressions
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex gap-[9px] mb-[20px] md:mb-[25px] last:mb-0">
                                        <div class="bg-success-500 w-[10px] h-[10px] rounded-full"></div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white -mt-[5.3px]">
                                                4,200
                                            </span>
                                            <span class="block text-xs">
                                                Clicks
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex gap-[9px] mb-[20px] md:mb-[25px] last:mb-0">
                                        <div class="bg-orange-500 w-[10px] h-[10px] rounded-full"></div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white -mt-[5.3px]">
                                                9.3%
                                            </span>
                                            <span class="block text-xs">
                                                CTR
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex gap-[9px] mb-[20px] md:mb-[25px] last:mb-0">
                                        <div class="bg-purple-500 w-[10px] h-[10px] rounded-full"></div>
                                        <div>
                                            <span class="block font-medium text-black dark:text-white -mt-[5.3px]">
                                                $5.50
                                            </span>
                                            <span class="block text-xs">
                                                Cost Per Conversion
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Upgrade Plan -->
                    <div class="trezo-card text-center bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content py-[5px]">
                            <h3 class="!font-medium !mb-[10px] !text-lg md:!text-xl">
                                Upgrade Your Plan!
                            </h3>
                            <p class="mx-auto !leading-[1.5] md:max-w-[275px] !mb-[20px] md:!mb-[25px]">
                                Access advanced features, enhanced support, and exclusive tools designed to help you achieve more.
                            </p>
                            <img src="/assets/images/girl-with-dog.png" class="mx-auto" alt="girl-with-dog">
                            <a href="#" class="inline-block mt-[5px] md:mt-[10px] px-[25px] py-[10px] md:text-md font-medium bg-primary-500 text-white transition-all rounded-[] hover:bg-primary-400 rounded-md">
                                <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                    <i class="ri-fire-fill ltr:left-0 rtl:right-0 text-lg md:text-[20px] absolute top-1/2 -translate-y-1/2"></i>
                                    Upgrade Plan
                                </span>
                            </a>
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
