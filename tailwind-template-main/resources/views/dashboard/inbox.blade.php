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
                    Inbox
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
                        Apps
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Email
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Inbox
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Sidebar -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <form class="relative mb-[20px]">
                                <label class="absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white top-1/2 -translate-y-1/2">
                                    <i class="material-symbols-outlined !text-lg">
                                        search
                                    </i>
                                </label>
                                <input type="text" class="block w-full rounded-md text-black dark:text-white bg-gray-50 dark:bg-[#15203c] border border-gray-50 dark:border-[#15203c] focus:border-primary-500 h-[40px] outline-0 transition-all text-xs placeholder:text-gray-500 dark:placeholder:text-gray-400 ltr:pl-[39px] rtl:pr-[39px] ltr:pr-[15px] rtl:pl-[15px]" placeholder="Search">
                            </form>
                            <a href="/dashboard/compose" class="block w-full bg-primary-500 text-white rounded-md md:text-md px-[22px] py-[12px] text-center font-medium transition-all hover:bg-primary-600">
                                <span class="inline-block ltr:pl-[29px] rtl:pr-[29px] relative">
                                    <i class="material-symbols-outlined absolute !text-[20px] ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                        edit
                                    </i>
                                    Compose
                                </span>
                            </a>
                            <ul class="my-[20px] md:my-[25px]">
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-primary-500 dark:text-white transition-all hover:text-primary-500 font-medium">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            inbox
                                        </i>
                                        Inbox
                                        <span class="block font-normal text-xs text-gray-500 dark:text-gray-400">
                                            10
                                        </span>
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            star_rate
                                        </i>
                                        Starred
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            alarm
                                        </i>
                                        Snoozed
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            send
                                        </i>
                                        Sent
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            draft
                                        </i>
                                        Drafts
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            bookmark
                                        </i>
                                        Important
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            auto_read_pause
                                        </i>
                                        Chats
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            schedule_send
                                        </i>
                                        Scheduled
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            forward_to_inbox
                                        </i>
                                        All Mail
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            live_help
                                        </i>
                                        Spam
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            delete
                                        </i>
                                        Trash
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            account_circle
                                        </i>
                                        Personal
                                    </a>
                                </li>
                                <li class="mb-[13px] md:mb-[16px] last:mb-0">
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            trip
                                        </i>
                                        Company
                                    </a>
                                </li>
                            </ul>
                            <button type="button" class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white">
                                <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                        add
                                    </i>
                                    Add New Label
                                </span>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Inbox -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[15px] md:mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-subtitle flex items-center">
                                <div class="form-check relative top-[1px]">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="trezo-card-dropdown relative ltr:ml-[2px] rtl:mr-[2px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-[25px] rtl:md:ml-[25px]">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[25px] leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                        <i class="material-symbols-outlined !text-lg">
                                            arrow_drop_down
                                        </i>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                All
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                None
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Read
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Unread
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Starred
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Unstarred
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <button type="button" class="inline-block transition-all leading-none hover:text-primary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                    <i class="material-symbols-outlined !text-lg">
                                        archive
                                    </i>
                                </button>
                                <button type="button" class="inline-block transition-all leading-none hover:text-primary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                    <i class="material-symbols-outlined !text-lg">
                                        help_clinic
                                    </i>
                                </button>
                                <button type="button" class="inline-block transition-all leading-none hover:text-primary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                    <i class="material-symbols-outlined !text-lg">
                                        delete
                                    </i>
                                </button>
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-black dark:text-white leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                        <i class="material-symbols-outlined !text-lg">
                                            more_vert
                                        </i>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Mark as unread
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Snooze
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Add star
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Mark as important
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Mark as not important
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Forward as attachment
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Filter
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Mute
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content relative">
                            <ul>
                                <li class="inline-block ltr:mr-[35px] rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                    <a href="/dashboard/inbox" class="relative inline-block font-medium pb-[9px] md:pb-[14px] transition-all text-primary-500">
                                        <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-px md:mt-0">
                                                inbox
                                            </i>
                                            Primary
                                        </span>
                                        <span class="absolute left-0 right-0 bottom-0 h-[2px] bg-primary-500"></span>
                                    </a>
                                </li>
                                <li class="inline-block ltr:mr-[35px] rtl:ml-[35px] ltr:last:mr-0 rtl:last:ml-0">
                                    <a href="/dashboard/promotions" class="relative inline-block font-medium pb-[9px] md:pb-[14px] transition-all hover:text-primary-500">
                                        <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                            <i class="material-symbols-outlined !text-lg absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-px md:mt-0">
                                                shoppingmode
                                            </i>
                                            Promotions
                                        </span>
                                        <span class="absolute left-0 right-0 bottom-0 h-[2px] bg-primary-500 hidden"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Google
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                2-Step Verification Turn Off <span class="text-gray-500 dark:text-gray-400">- Integer nec arcu ac nisi...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                3:36 PM
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Facebook
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Friend Request <span class="text-gray-500 dark:text-gray-400">- Sed in libero eget lorem fermentum...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                9:25 AM
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                LinkedIn
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Travel Information <span class="text-gray-500 dark:text-gray-400">- Vivamus vestibulum ligula in mauris...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 25
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Ethan Parker
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Leave Application <span class="text-gray-500 dark:text-gray-400">- Integer nec arcu ac nisi...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 22
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Dribbble
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Design Inspiration <span class="text-gray-500 dark:text-gray-400">- Sed in libero eget lorem fermentum...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 21
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Instagram
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Training Schedule <span class="text-gray-500 dark:text-gray-400">- Vivamus vestibulum ligula in mauris...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 21
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Isabella Cooper
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Internal Auditor <span class="text-gray-500 dark:text-gray-400">- Sed in libero eget lorem fermentum...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 19
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Google
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Password Changed <span class="text-gray-500 dark:text-gray-400">- Integer nec arcu ac nisi...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 17
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Olivia Rodriguez
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Virtual Training <span class="text-gray-500 dark:text-gray-400">- Vivamus vestibulum ligula in mauris...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 15
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                YouTube
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                New Subscriber <span class="text-gray-500 dark:text-gray-400">- Sed in libero eget lorem fermentum...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 12
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="form-check relative top-[2px]">
                                                        <input type="checkbox" class="cursor-pointer">
                                                    </div>
                                                    <button type="button" class="ltr:ml-[15px] rtl:mr-[15px] leading-none text-lg">
                                                        <i class="ri-star-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="font-medium text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Google
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="text-black dark:text-white relative ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Security Alert <span class="text-gray-500 dark:text-gray-400">- Vivamus vestibulum ligula in mauris...</span>
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                            <td class="relative ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[13px] md:py-[15.1px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Jun 10
                                                <a href="/dashboard/read" class="absolute top-0 left-0 right-0 bottom-0 z-[1]"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex items-center md:absolute -top-[48px] ltr:right-0 rtl:left-0 mt-[15px] md:mt-0">
                                <p class="!mb-0 text-sm">
                                    1 – 11 of 100
                                </p>
                                <ol class="ltr:ml-[10px] rtl:mr-[10px]">
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
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
