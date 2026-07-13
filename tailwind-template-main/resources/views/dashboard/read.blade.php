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
                    Read
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
                        Read
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

                    <!-- Read -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between border-b border-gray-100 dark:border-[#172036] pb-[15px] md:pb-[19px]">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !text-md !font-semibold">
                                    Sales Review Meeting
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle flex items-center gap-[10px] md:gap-[15px] mt-[12px] sm:mt-0">
                                <button type="button" class="transition-all hover:text-primary-500 relative top-px">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        archive
                                    </i>
                                </button>
                                <button type="button" class="transition-all hover:text-primary-500 relative top-px">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        help_clinic
                                    </i>
                                </button>
                                <button type="button" class="transition-all hover:text-primary-500 relative top-px">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        delete
                                    </i>
                                </button>
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] leading-none text-black dark:text-white hover:text-primary-500" id="dropdownToggleBtn">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            more_vert
                                        </i>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        reply
                                                    </i>
                                                    Reply
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        redo
                                                    </i>
                                                    Forward
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        print
                                                    </i>
                                                    Print
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        download
                                                    </i>
                                                    Download
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        mark_email_unread
                                                    </i>
                                                    Mark as unread
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        info
                                                    </i>
                                                    Report Spam
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        delete
                                                    </i>
                                                    Delete
                                                </span>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                <span class="inline-block relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-[20px]">
                                                        block
                                                    </i>
                                                    Block Sarah
                                                </span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="sm:flex items-center justify-between mb-[20px] md:mb-[25px]">
                                <div class="flex items-center">
                                    <img src="/assets/images/users/user31.jpg" alt="user-image" class="rounded-full w-[45px]">
                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                        <span class="block text-black dark:text-white font-semibold">
                                            Sarah Smith
                                        </span>
                                        <span class="block text-xs mt-[3px]">
                                            sarah@trezo.com
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center mt-[15px] sm:mt-0">
                                    <button type="button" class="inline-block relative sm:top-px leading-none ltr:mr-[10px] rtl:ml-[10px] transition-all hover:text-primary-500">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            grade
                                        </i>
                                    </button>
                                    <span class="block">
                                        26 March 2025
                                    </span>
                                </div>
                            </div>
                            <div class="md:ltr:pl-[57px] md:rtl:pr-[57px]">
                                <span class="mb-[20px] md:mb-[25px] font-semibold text-black dark:text-white block">
                                    Subject: Re: Quarterly Sales Review Meeting
                                </span>
                                <span class="text-black dark:text-white block font-medium mb-[20px] md:mb-[25px]">
                                    Hi Smith,
                                </span>
                                <p class="!mb-[20px] !last:mb-0">
                                    Great, I'll go ahead and send out the calendar invite shortly.
                                </p>
                                <p class="!mb-[20px] !last:mb-0">
                                    Regarding the agenda, I think your suggestions are spot on. I'll add them to the agenda and circulate it to everyone before the meeting so they can come prepared.
                                </p>
                                <p class="!mb-[20px] !last:mb-0">
                                    In addition to our current initiatives, I believe it would be advantageous to have a concise yet comprehensive update on any new products or promotions that are scheduled to launch in the next quarter. This information will not only keep us informed but also assist in aligning our strategies with upcoming opportunities.
                                </p>
                                <p class="!mb-[20px] !last:mb-0">
                                    Let me know if you think that's a valuable addition to the agenda.
                                </p>
                                <div class="mt-[50px]">
                                    <span class="block text-black dark:text-white font-medium mb-[5px]">
                                        Best regards,
                                    </span>
                                    <span class="block text-black dark:text-white font-medium">
                                        Olivia Parker
                                    </span>
                                </div>
                            </div>
                            <div class="border-t border-gray-100 dark:border-[#172036] mt-[20px] md:mt-[25px] pt-[20px] md:pt-[25px] md:ltr:pl-[57px] md:rtl:pr-[57px]">
                                <button class="inline-block font-semibold md:text-md py-[7px] px-[25px] border border-primary-500 ltr:mr-[15px] rtl:ml-[15px] transition-all rounded-md text-white bg-primary-500 hover:bg-primary-400 hover:border-primary-400" type="submit">
                                    Reply
                                </button>
                                <button class="inline-block font-semibold md:text-md py-[7px] px-[25px] border border-primary-500 ltr:mr-[15px] rtl:ml-[15px] transition-all rounded-md text-primary-500 hover:bg-primary-500 hover:text-white" type="submit">
                                    Forward
                                </button>
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
