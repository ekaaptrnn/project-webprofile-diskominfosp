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
                    Profile
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
                        Social
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Profile
                    </li>
                </ol>
            </div>

            <!-- Profile -->
            <div class="grid grid-cols-1 2xl:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="2xl:col-span-3">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <div class="relative rounded-t-md">
                                <img src="/assets/images/profile-cover.jpg" alt="cover-image" class="rounded-t-md">
                                <button type="button" class="rounded-md md:text-white border md:border-white inline-block md:absolute ltr:md:right-[28px] rtl:md:left-[28px] bottom-[28px] py-[8.5px] px-[16px] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white mt-[20px] ltr:ml-[20px] rtl:mr-[20px] md:mt-[20px] ltr:md:ml-[20px] rtl:md:mr-[20px]">
                                    Update Cover Photo
                                </button>
                            </div>
                            <div class="px-[20px] md:px-[30px] pb-[20px] md:pb-[45px] mt-[20px] md:-mt-[60px]">
                                <div class="md:flex items-end justify-between">
                                    <div class="md:flex items-end">
                                        <div class="relative w-[160px]">
                                            <img src="/assets/images/profile.jpg" alt="profile-image" class="rounded-full border-[2px] border-white dark:border-[#0c1427]">
                                            <img src="/assets/images/icons/verified.svg" alt="verified" class="absolute bottom-[11px] ltr:-right-[7px] rtl:-left-[7px]">
                                        </div>
                                        <div class="ltr:md:ml-[30px] rtl:md:mr-[30px] mt-[12px] md:mt-0">
                                            <span class="block text-lg md:text-[20px] lg:text-xl text-black dark:text-white font-bold">
                                                Alice Johnson
                                            </span>
                                            <span class="block xl:text-md font-medium mt-[2px] md:mt-0">
                                                Product Designer
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-[5px] md:mt-0">
                                        <button type="button" class="inline-block rounded-md font-medium lg:text-md border border-gray-100 dark:border-[#172036] py-[11px] px-[27px] transition-all hover:border-primary-500 mt-[10px] ltr:mr-[8px] rtl:ml-[8px] ltr:last:mr-0 rtl:last:ml-0">
                                            <span class="flex items-center">
                                                <i class="material-symbols-outlined !text-[20px] ltr:mr-[8px] rtl:ml-[8px]">
                                                    edit
                                                </i>
                                                Edit
                                            </span>
                                        </button>
                                        <button type="button" class="inline-block rounded-md font-medium lg:text-md bg-primary-500 border border-primary-500 text-white py-[11px] px-[27px] transition-all hover:bg-primary-400 hover:border-primary-400 mt-[10px] ltr:mr-[8px] rtl:ml-[8px] ltr:last:mr-0 rtl:last:ml-0">
                                            <span class="flex items-center">
                                                <i class="material-symbols-outlined !text-[20px] ltr:mr-[8px] rtl:ml-[8px]">
                                                    share
                                                </i>
                                                Share
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="mb-[25px] text-center">
                        <li class="inline-block mx-[3px]">
                            <a href="/dashboard/social-profile" class="block py-[8.5px] px-[15px] font-medium rounded-md text-white bg-primary-500 border border-primary-500">
                                Timeline
                            </a>
                        </li>
                        <li class="inline-block mx-[3px]">
                            <a href="/dashboard/social-about" class="block py-[8.5px] px-[15px] font-medium rounded-md text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white">
                                About
                            </a>
                        </li>
                        <li class="inline-block mx-[3px]">
                            <a href="/dashboard/social-activity" class="block py-[8.5px] px-[15px] font-medium rounded-md text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white">
                                Activity
                            </a>
                        </li>
                    </ul>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px]">
                        <div class="lg:col-span-1 order-2 lg:order-1">
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Friends
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
                                <div class="trezo-card-content">
                                    <form class="relative mb-[20px]">
                                        <label class="absolute ltr:left-[13px] rtl:right-[13px] mt-[2px] top-1/2 -translate-y-1/2">
                                            <i class="material-symbols-outlined !text-[20px]">
                                                search
                                            </i>
                                        </label>
                                        <input type="text" class="block w-full rounded-md text-black dark:text-white bg-gray-50 dark:bg-[#15203c] border border-gray-50 dark:border-[#15203c] focus:border-primary-500 h-[44px] outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 ltr:pl-[37px] rtl:pr-[37px] ltr:pr-[15px] rtl:pl-[15px]" placeholder="Search...">
                                    </form>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user7.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Carolyn Barnes
                                                </span>
                                                <span class="block mt-[2px]">
                                                    barnes@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user6.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-success-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Marcia Baker
                                                </span>
                                                <span class="block mt-[2px]">
                                                    baker@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user8.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-success-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Donna Miller
                                                </span>
                                                <span class="block mt-[2px]">
                                                    miller@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user9.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Barbara Cross
                                                </span>
                                                <span class="block mt-[2px]">
                                                    cross@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user10.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Rebecca Block
                                                </span>
                                                <span class="block mt-[2px]">
                                                    block@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user11.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Ramiro McCarty
                                                </span>
                                                <span class="block mt-[2px]">
                                                    mccarty@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user12.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-success-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Robert Fairweather
                                                </span>
                                                <span class="block mt-[2px]">
                                                    fairweather@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user13.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Marcelino Haddock
                                                </span>
                                                <span class="block mt-[2px]">
                                                    haddock@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user14.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Thomas Wilson
                                                </span>
                                                <span class="block mt-[2px]">
                                                    wilson@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <div class="relative w-[45px]">
                                                <img src="/assets/images/users/user15.jpg" alt="user-image" class="rounded-full">
                                                <span class="absolute w-[10px] h-[10px] rounded-full bottom-[4px] border-[2px] border-white dark:border-[#0c1427] bg-danger-500 ltr:-right-[2px] rtl:-left-[2px]"></span>
                                            </div>
                                            <div class="ltr:ml-[13px] rtl:mr-[13px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Nathaniel Hulsey
                                                </span>
                                                <span class="block mt-[2px]">
                                                    hulsey@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-2 order-1 lg:order-2">
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px] last:mb-0">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Create Post
                                        </h5>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <textarea class="h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="It makes me feel..."></textarea>
                                    <div class="sm:flex items-center mt-[20px] md:mt-[25px] gap-[25px]">
                                        <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[27px] bg-primary-500 text-white hover:bg-primary-400">
                                            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                                <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                    send
                                                </i>
                                                Publish Post
                                            </span>
                                        </button>
                                        <div class="flex items-center gap-[15px] mt-[15px] sm:mt-0">
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    sentiment_satisfied
                                                </i>
                                            </button>
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    attach_file
                                                </i>
                                            </button>
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    mic_none
                                                </i>
                                            </button>
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    image
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mb-[25px] last:mb-0">
                                <div class="trezo-card-header pb-[18px] mb-[20px] flex items-center justify-between border-b border-gray-100 dark:border-[#172036]">
                                    <div class="trezo-card-title flex items-center">
                                        <img src="/assets/images/users/user6.jpg" alt="user-image" class="rounded-full w-[50px]">
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                Cynthia Baggett
                                            </span>
                                            <span class="block mt-[2px]">
                                                05 mins ago
                                            </span>
                                        </div>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Save Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Hide Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Report Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Block Cynthia
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                    <p>
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions.
                                    </p>
                                    <div class="sm:flex items-center gap-[30px] mt-[20px] py-[15px] border-y border-gray-100 dark:border-[#172036]">
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                thumb_up
                                            </i>
                                            10 Likes
                                        </button>
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                chat_bubble_outline
                                            </i>
                                            0 Comments
                                        </button>
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                share
                                            </i>
                                            0 Share
                                        </button>
                                    </div>
                                    <div class="mt-[20px] md:flex items-center gap-[20px]">
                                        <div class="w-[55px]">
                                            <img src="/assets/images/profile.jpg" alt="profile-image" class="rounded-full">
                                        </div>
                                        <div class="relative mt-[15px] md:mt-0 md:ltr:pr-[70px] md:rtl:pl-[70px] flex-auto">
                                            <input type="text" class="block w-full rounded-md bg-white dark:bg-[#0c1427] px-[17px] h-[55px] text-black dark:text-white placeholder:text-gray-500 dark:text-gray-400 outline-0 border border-gray-200 dark:border-[#172036]" placeholder="Type something....">
                                            <button type="submit" class="md:absolute flex items-center justify-center ltr:right-0 rtl:left-0 rounded-sm transition-all bg-primary-500 text-white hover:bg-primary-400 md:top-1/2 md:-translate-y-1/2 w-[55px] h-[55px] mt-[15px] md:mt-0">
                                                <i class="material-symbols-outlined">
                                                    send
                                                </i>
                                            </button>
                                        </div>
                                        <div class="flex items-center gap-[15px] mt-[15px] sm:mt-0">
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    sentiment_satisfied
                                                </i>
                                            </button>
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    attach_file
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mb-[25px] last:mb-0">
                                <div class="trezo-card-header pb-[18px] mb-[20px] flex items-center justify-between border-b border-gray-100 dark:border-[#172036]">
                                    <div class="trezo-card-title flex items-center">
                                        <img src="/assets/images/users/user7.jpg" alt="user-image" class="rounded-full w-[50px]">
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                Douglas Hairston
                                            </span>
                                            <span class="block mt-[2px]">
                                                1 hour ago
                                            </span>
                                        </div>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Save Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Hide Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Report Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Block Douglas
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <p>
                                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of lorem ipsum.
                                    </p>
                                    <div class="sm:flex items-center gap-[30px] mt-[20px] py-[15px] border-y border-gray-100 dark:border-[#172036]">
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                thumb_up
                                            </i>
                                            42 Likes
                                        </button>
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                chat_bubble_outline
                                            </i>
                                            2 Comments
                                        </button>
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                share
                                            </i>
                                            1 Share
                                        </button>
                                    </div>
                                    <div class="mt-[20px] md:flex items-center gap-[20px]">
                                        <div class="w-[55px]">
                                            <img src="/assets/images/profile.jpg" alt="profile-image" class="rounded-full">
                                        </div>
                                        <div class="relative mt-[15px] md:mt-0 md:ltr:pr-[70px] md:rtl:pl-[70px] flex-auto">
                                            <input type="text" class="block w-full rounded-md bg-white dark:bg-[#0c1427] px-[17px] h-[55px] text-black dark:text-white placeholder:text-gray-500 dark:text-gray-400 outline-0 border border-gray-200 dark:border-[#172036]" placeholder="Type something....">
                                            <button type="submit" class="md:absolute flex items-center justify-center ltr:right-0 rtl:left-0 rounded-sm transition-all bg-primary-500 text-white hover:bg-primary-400 md:top-1/2 md:-translate-y-1/2 w-[55px] h-[55px] mt-[15px] md:mt-0">
                                                <i class="material-symbols-outlined">
                                                    send
                                                </i>
                                            </button>
                                        </div>
                                        <div class="flex items-center gap-[15px] mt-[15px] sm:mt-0">
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    sentiment_satisfied
                                                </i>
                                            </button>
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    attach_file
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mb-[25px] last:mb-0">
                                <div class="trezo-card-header pb-[18px] mb-[20px] flex items-center justify-between border-b border-gray-100 dark:border-[#172036]">
                                    <div class="trezo-card-title flex items-center">
                                        <img src="/assets/images/users/user8.jpg" alt="user-image" class="rounded-full w-[50px]">
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                Olivia John
                                            </span>
                                            <span class="block mt-[2px]">
                                                1 day ago
                                            </span>
                                        </div>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Save Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Hide Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Report Post
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Block Olivia
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <div class="sm:flex items-center gap-[30px] mt-[20px] py-[15px] border-y border-gray-100 dark:border-[#172036]">
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                thumb_up
                                            </i>
                                            100 Likes
                                        </button>
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                chat_bubble_outline
                                            </i>
                                            16 Comments
                                        </button>
                                        <button type="button" class="block relative ltr:pl-[25px] rtl:pr-[25px] transition-all hover:text-primary-500 mt-[10px] first:mt-0 sm:mt-0">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                                share
                                            </i>
                                            5 Share
                                        </button>
                                    </div>
                                    <div class="mt-[20px] md:flex items-center gap-[20px]">
                                        <div class="w-[55px]">
                                            <img src="/assets/images/profile.jpg" alt="profile-image" class="rounded-full">
                                        </div>
                                        <div class="relative mt-[15px] md:mt-0 md:ltr:pr-[70px] md:rtl:pl-[70px] flex-auto">
                                            <input type="text" class="block w-full rounded-md bg-white dark:bg-[#0c1427] px-[17px] h-[55px] text-black dark:text-white placeholder:text-gray-500 dark:text-gray-400 outline-0 border border-gray-200 dark:border-[#172036]" placeholder="Type something....">
                                            <button type="submit" class="md:absolute flex items-center justify-center ltr:right-0 rtl:left-0 rounded-sm transition-all bg-primary-500 text-white hover:bg-primary-400 md:top-1/2 md:-translate-y-1/2 w-[55px] h-[55px] mt-[15px] md:mt-0">
                                                <i class="material-symbols-outlined">
                                                    send
                                                </i>
                                            </button>
                                        </div>
                                        <div class="flex items-center gap-[15px] mt-[15px] sm:mt-0">
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    sentiment_satisfied
                                                </i>
                                            </button>
                                            <button type="button" class="transition-all hover:text-primary-500">
                                                <i class="material-symbols-outlined !text-[20px]">
                                                    attach_file
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:col-span-1">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
                        <div class="2xl:col-span-2">
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Profile Intro
                                        </h5>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <div class="flex items-center">
                                        <img src="/assets/images/profile.jpg" alt="user-image" class="rounded-full w-[75px]">
                                        <div class="ltr:ml-[15px] rtl:mr-[15px]">
                                            <span class="block text-black dark:text-white text-[17px] font-semibold">
                                                Alice Johnson
                                            </span>
                                            <span class="block">
                                                johnson@trezo.com
                                            </span>
                                        </div>
                                    </div>
                                    <span class="text-black dark:text-white font-semibold block mb-[5px] mt-[16px]">
                                        About Me
                                    </span>
                                    <p>
                                        Molestie tincidunt ut consequat a urna tortor. Vitae velit ac nisl velit mauris placerat nisi placerat. Pellentesque viverra lorem malesuada nunc tristique sapien. Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.
                                    </p>
                                    <span class="text-black dark:text-white font-semibold block mb-[11px]">
                                        Social Profile
                                    </span>
                                    <div class="flex items-center gap-[7px]">
                                        <a href="#" class="inline-block relative text-center rounded-full w-[28px] h-[28px] text-white bg-[#3a559f]" target="_blank">
                                            <i class="ri-facebook-fill absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </a>
                                        <a href="#" class="inline-block relative text-center rounded-full w-[28px] h-[28px] text-white bg-[#03a9f4]" target="_blank">
                                            <i class="ri-twitter-x-fill absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </a>
                                        <a href="#" class="inline-block relative text-center rounded-full w-[28px] h-[28px] text-white bg-[#007ab9]" target="_blank">
                                            <i class="ri-linkedin-fill absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </a>
                                        <a href="#" class="inline-block relative text-center rounded-full w-[28px] h-[28px] text-white bg-[#2196f3]" target="_blank">
                                            <i class="ri-mail-fill absolute left-0 right-0 top-1/2 -translate-y-1/2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:col-span-2">
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Followers
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
                                <div class="trezo-card-content">
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user6.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Salvatore Dewall
                                                </span>
                                                <span class="block mt-[2px]">
                                                    dewall@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user7.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Alina Smith
                                                </span>
                                                <span class="block mt-[2px]">
                                                    smith@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user8.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Russell Colon
                                                </span>
                                                <span class="block mt-[2px]">
                                                    colon@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user9.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Leslie Shadle
                                                </span>
                                                <span class="block mt-[2px]">
                                                    shadle@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user10.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Raymond Nguyen
                                                </span>
                                                <span class="block mt-[2px]">
                                                    nguyen@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:col-span-2">
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Following
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
                                <div class="trezo-card-content">
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user11.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Lenore Crum
                                                </span>
                                                <span class="block mt-[2px]">
                                                    crum@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user12.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Paul Bartlett
                                                </span>
                                                <span class="block mt-[2px]">
                                                    bartlett@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user13.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Nikki Lowe
                                                </span>
                                                <span class="block mt-[2px]">
                                                    lowe@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user14.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Milton Laskowski
                                                </span>
                                                <span class="block mt-[2px]">
                                                    laskowski@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                    <div class="flex items-center justify-between mb-[15px] pb-[15px] border-b border-gray-100 dark:border-[#172036] last:border-none last:pb-0 last:mb-0">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user15.jpg" alt="user-image" class="rounded-full w-[42px]">
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block text-black dark:text-white font-medium">
                                                    Ethel Hillen
                                                </span>
                                                <span class="block mt-[2px]">
                                                    hillen@trezo.com
                                                </span>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="flex items-center justify-center w-[36px] h-[36px] rounded-full border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined !text-lg">
                                                arrow_outward
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:col-span-2">
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Photos
                                        </h5>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <div class="grid grid-cols-3 gap-[10px]">
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product6.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product7.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product8.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product9.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product10.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product11.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product12.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product13.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                        <a href="#" class="block rounded-md">
                                            <img src="/assets/images/products/product14.jpg" alt="photo-image" class="rounded-md">
                                        </a>
                                    </div>
                                </div>
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
