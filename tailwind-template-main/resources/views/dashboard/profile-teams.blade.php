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
                    Teams
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
                        Profile
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Teams
                    </li>
                </ol>
            </div>

            <!-- Teams -->
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
                                    <span class="block xl:text-md font-medium mt-[2px]">
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
                    <a href="/dashboard/user-profile" class="block py-[8.5px] px-[15px] font-medium rounded-md text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white">
                        Profile
                    </a>
                </li>
                <li class="inline-block mx-[3px]">
                    <a href="/dashboard/profile-teams" class="block py-[8.5px] px-[15px] font-medium rounded-md text-white bg-primary-500 border border-primary-500">
                        Teams
                    </a>
                </li>
                <li class="inline-block mx-[3px]">
                    <a href="/dashboard/profile-projects" class="block py-[8.5px] px-[15px] font-medium rounded-md text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white">
                        Projects
                    </a>
                </li>
            </ul>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user11.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Ava Turner
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                Project Management
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user15.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user16.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user17.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <div class="rounded-full w-[40px] h-[40px] font-medium text-xs border-[2px] border-gray-100 dark:border-[#172036] bg-primary-500 text-white flex items-center justify-center -mx-[6px]">
                                    +4
                                </div>
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    85%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 85%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user12.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Ethan Parker
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-secondary-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                eCommerce Theme
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user6.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user7.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user8.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    45%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 45%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user13.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Isabella Lee
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-success-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                Shopify Theme Dev
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user10.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user11.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    70%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 70%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user14.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Thompson Torres
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-orange-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                Oito - HTML
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user30.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user29.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user28.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    90%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 90%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user15.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Lucas Lyon
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-primary-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                Tanus - Template
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user25.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user26.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user27.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    75%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 75%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user16.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Morgan Sturges
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-danger-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                Delft - TypeScript
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user24.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    65%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 65%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user17.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Sophia McNeel
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-primary-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                Trezo - Angular
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user21.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user22.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user23.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    90%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 90%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="/assets/images/users/user18.jpg" alt="user-image" class="w-[65px] h-[65px] rounded-full border-[2px] border-gray-100 dark:border-[#172036]">
                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                    <span class="text-md inline-block mb-px font-medium text-black dark:text-white">
                                        Rodriguez Meade
                                    </span>
                                    <span class="block">
                                        Team Leader
                                    </span>
                                </div>
                            </div>
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
                        </div>
                        <div class="text-center mt-[15px]">
                            <span class="inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-black dark:text-white rounded-full px-[15px] py-[4.5px] mb-[15px]">
                                eLearniv - React
                            </span>
                            <span class="block mb-[8px]">
                                Team Members
                            </span>
                            <div class="flex items-center justify-center">
                                <img src="/assets/images/users/user19.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                                <img src="/assets/images/users/user20.jpg" alt="user-image" class="rounded-full w-[40px] h-[40px] border-[2px] border-gray-100 dark:border-[#172036] -mx-[6px]">
                            </div>
                        </div>
                        <div class="mt-[18px] mb-[20px] md:mb-[25px] lg:mb-[30px]">
                            <div class="flex items-center justify-between">
                                <span class="block font-medium mb-[8px]">
                                    Progress
                                </span>
                                <span class="block font-medium mb-[8px]">
                                    80%
                                </span>
                            </div>
                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 80%;"></div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="block w-full rounded-md text-center font-medium border border-primary-500 py-[8.5px] px-[15px] text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
