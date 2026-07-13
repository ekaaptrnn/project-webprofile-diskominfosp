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
                    Compose
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
                        Compose
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
                                    <a href="#" class="flex items-center justify-between relative ltr:pl-[30px] rtl:pr-[30px] text-black dark:text-white transition-all hover:text-primary-500">
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

                    <!-- Compose -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[15px] md:pb-[20px]">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-md !font-semibold">
                                    New Message
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <form>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            To
                                        </label>
                                        <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                            <option selected>
                                                Select
                                            </option>
                                            <option value="1">
                                                james&#64;trezo.com
                                            </option>
                                            <option value="2">
                                                andy&#64;trezo.com
                                            </option>
                                            <option value="3">
                                                mateo&#64;trezo.com
                                            </option>
                                            <option value="4">
                                                luca&#64;trezo.com
                                            </option>
                                            <option value="5">
                                                tomato&#64;trezo.com
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Cc
                                        </label>
                                        <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                            <option selected>
                                                Select
                                            </option>
                                            <option value="1">
                                                james&#64;trezo.com
                                            </option>
                                            <option value="2">
                                                andy&#64;trezo.com
                                            </option>
                                            <option value="3">
                                                mateo&#64;trezo.com
                                            </option>
                                            <option value="4">
                                                luca&#64;trezo.com
                                            </option>
                                            <option value="5">
                                                tomato&#64;trezo.com
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Bcc
                                        </label>
                                        <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                            <option selected>
                                                Select
                                            </option>
                                            <option value="1">
                                                james&#64;trezo.com
                                            </option>
                                            <option value="2">
                                                andy&#64;trezo.com
                                            </option>
                                            <option value="3">
                                                mateo&#64;trezo.com
                                            </option>
                                            <option value="4">
                                                luca&#64;trezo.com
                                            </option>
                                            <option value="5">
                                                tomato&#64;trezo.com
                                            </option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Subject
                                        </label>
                                        <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Write your subject...">
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label class="mb-[10px] text-black dark:text-white font-medium block">
                                            Your Email
                                        </label>
                                        <div id="richTextEditor" class="!h-[232px]"></div>
                                    </div>
                                </div>
                                <div class="mt-[20px] md:mt-[25px] sm:flex items-center justify-between">
                                    <div class="flex items-center gap-[10px] md:gap-[15px]">
                                        <button type="submit" class="inline-block font-semibold md:text-md bg-primary-500 text-white transition-all hover:bg-primary-600 rounded-md py-[8px] px-[15px] md:px-[25px] md:mr-[4px]">
                                            Send
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                text_fields_alt
                                            </i>
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                attach_file
                                            </i>
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                link
                                            </i>
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                mood
                                            </i>
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                add_to_drive
                                            </i>
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                add_photo_alternate
                                            </i>
                                        </button>
                                        <button type="button" class="inline-block relative top-[2px] transition-all hover:text-primary-500">
                                            <i class="material-symbols-outlined !text-lg !md:text-[20px]">
                                                ink_pen
                                            </i>
                                        </button>
                                    </div>
                                    <button class="inline-block relative text-danger-500 mt-[12px] sm:mt-0">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            delete
                                        </i>
                                    </button>
                                </div>
                            </form>
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
