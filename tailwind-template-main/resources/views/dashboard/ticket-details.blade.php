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
                    Ticket Details
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
                        HelpDesk
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Tickets
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Ticket Details
                    </li>
                </ol>
            </div>
            
            <!-- Ticket Details -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        ID
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Ticket Title
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Requester
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Assigned To
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Created Date
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
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #JAN-854
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/ticket-details" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Network Infrastructure
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Walter Frazier
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Oliver Clark
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            20 Apr 2025
                                        </span>
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
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Ticket Description -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <h6 class="!text-[15px] [&:not(:first-child)]:mt-[20px]">
                                Ticket Description
                            </h6>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <h6 class="!text-[15px] [&:not(:first-child)]:mt-[20px]">
                                Network Infrastructure for Trezo
                            </h6>
                            <ul class="list-disc my-[15px] ltr:pl-[32px] rtl:pr-[32px]">
                                <li class="leading-[1.8] mb-[5px] last:mb-0">
                                    Login Issues
                                </li>
                                <li class="leading-[1.8] mb-[5px] last:mb-0">
                                    Cloud Migration
                                </li>
                                <li class="leading-[1.8] mb-[5px] last:mb-0">
                                    Website Revamp
                                </li>
                                <li class="leading-[1.8] mb-[5px] last:mb-0">
                                    Mobile Application
                                </li>
                                <li class="leading-[1.8] mb-[5px] last:mb-0">
                                    System Deployment
                                </li>
                            </ul>
                            <h6 class="!text-[15px] [&:not(:first-child)]:mt-[20px]">
                                Here is the Code:
                            </h6>
                            <code class="p-[15px] md:p-[20px] block mt-[15px] bg-[#f5f2f0] dark:bg-[#15203c] text-[.875em] break-words text-[#d63384]">
                                &lt;<span class="text-[#905] ltr:mr-[5px] rtl:ml-[5px]">span</span><span class="text-[#690]">class</span>=<span class="text-[#07a]">&quot;material-symbols-outlined&quot;</span>&gt;search&lt;/<span class="text-[#905]">span</span>&gt;
                            </code>
                        </div>
                    </div>

                    <!-- Ticket Comments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <ul>
                                <li class="border-b border-gray-100 dark:border-[#172036] mb-[20px] md:mb-[25px] pb-[20px] md:pb-[25px] ltr:pl-[20px] rtl:pr-[20px] ltr:md:pl-[25px] rtl:md:pr-[25px] ltr:first:pl-0 rtl:first:pr-0 first:border-primary-500 last:border-0 last:pb-0 last:mb-0">
                                    <div class="sm:flex items-center gap-[15px] mb-[12px]">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user6.jpg" width="30" height="30" alt="user-image" class="rounded-full ltr:mr-[10px] rtl:ml-[10px]">
                                            <span class="block font-medium text-primary-500">
                                                Ponsiano
                                            </span>
                                        </div>
                                        <span class="block my-[10px] sm:my-0">
                                            a day ago
                                        </span>
                                        <span class="inline-block bg-primary-500 text-white rounded-[4px] py-[2px] px-[8px] font-medium text-xs">
                                            #BD0JL0G6
                                        </span>
                                    </div>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                    <h6 class="text-[15px] mb-[12px]">
                                        Screenshots
                                    </h6>
                                    <div class="-mb-[15px]">
                                        <img src="/assets/images/courses/course1.jpg" alt="screenshot-image" class="rounded-md inline-block w-[80px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px] ltr:last:mr-0 rtl:last:ml-0">
                                    </div>
                                </li>
                                <li class="border-b border-gray-100 dark:border-[#172036] mb-[20px] md:mb-[25px] pb-[20px] md:pb-[25px] ltr:pl-[20px] rtl:pr-[20px] ltr:md:pl-[25px] rtl:md:pr-[25px] ltr:first:pl-0 rtl:first:pr-0 first:border-primary-500 last:border-0 last:pb-0 last:mb-0">
                                    <div class="sm:flex items-center gap-[15px] mb-[12px]">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user7.jpg" width="30" height="30" alt="user-image" class="rounded-full ltr:mr-[10px] rtl:ml-[10px]">
                                            <span class="block font-medium text-danger-500">
                                                Zelxa
                                            </span>
                                        </div>
                                        <span class="block my-[10px] sm:my-0">
                                            18 hours ago
                                        </span>
                                        <span class="inline-block bg-secondary-500 text-white rounded-[4px] py-[2px] px-[8px] font-medium text-xs">
                                            Support Staff
                                        </span>
                                    </div>
                                    <p>
                                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                    <h6 class="text-[15px] mb-[12px]">
                                        Screenshots
                                    </h6>
                                    <div class="-mb-[15px]">
                                        <img src="/assets/images/products/product1.jpg" alt="screenshot-image" class="rounded-md inline-block w-[80px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px] ltr:last:mr-0 rtl:last:ml-0">
                                        <img src="/assets/images/products/product2.jpg" alt="screenshot-image" class="rounded-md inline-block w-[80px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px] ltr:last:mr-0 rtl:last:ml-0">
                                    </div>
                                </li>
                                <li class="border-b border-gray-100 dark:border-[#172036] mb-[20px] md:mb-[25px] pb-[20px] md:pb-[25px] ltr:pl-[20px] rtl:pr-[20px] ltr:md:pl-[25px] rtl:md:pr-[25px] ltr:first:pl-0 rtl:first:pr-0 first:border-primary-500 last:border-0 last:pb-0 last:mb-0">
                                    <div class="sm:flex items-center gap-[15px] mb-[12px]">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user6.jpg" width="30" height="30" alt="user-image" class="rounded-full ltr:mr-[10px] rtl:ml-[10px]">
                                            <span class="block font-medium text-primary-500">
                                                Ponsiano
                                            </span>
                                        </div>
                                        <span class="block my-[10px] sm:my-0">
                                            12 hours ago
                                        </span>
                                    </div>
                                    <p>
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                    </p>
                                </li>
                                <li class="border-b border-gray-100 dark:border-[#172036] mb-[20px] md:mb-[25px] pb-[20px] md:pb-[25px] ltr:pl-[20px] rtl:pr-[20px] ltr:md:pl-[25px] rtl:md:pr-[25px] ltr:first:pl-0 rtl:first:pr-0 first:border-primary-500 last:border-0 last:pb-0 last:mb-0">
                                    <div class="sm:flex items-center gap-[15px] mb-[12px]">
                                        <div class="flex items-center">
                                            <img src="/assets/images/users/user7.jpg" width="30" height="30" alt="user-image" class="rounded-full ltr:mr-[10px] rtl:ml-[10px]">
                                            <span class="block font-medium text-danger-500">
                                                Zelxa
                                            </span>
                                        </div>
                                        <span class="block my-[10px] sm:my-0">
                                            05 hours ago
                                        </span>
                                        <span class="inline-block bg-secondary-500 text-white rounded-[4px] py-[2px] px-[8px] font-medium text-xs">
                                            Support Staff
                                        </span>
                                    </div>
                                    <p>
                                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation.
                                    </p>
                                </li>
                            </ul>
                            <form class="mt-[20px] md:mt-[25px]">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Post A Reply
                                </label>
                                <div id="richTextEditor" class="!h-[179px]"></div>
                                <div class="mt-[20px] md:mt-[25px]">
                                    <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400 ltr:mr-[15px] rtl:ml-[15px]">
                                        Save As Draft
                                    </button>
                                    <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                        <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                            <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                                send
                                            </i>
                                            Submit Now
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Attachments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Attachments
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <ul>
                                <li class="rounded-md flex justify-between items-center bg-gray-50 dark:bg-[#15203c] p-[15px] mb-[10px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="bg-white dark:bg-[#0c1427] text-primary-500 rounded-full text-center leading-[40px] text-[22px] w-[40px] h-[40px]">
                                            <i class="ri-file-warning-line"></i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <h6 class="!text-base !mb-[3px] !font-medium">
                                                Project_attachment_1.zip
                                            </h6>
                                            <span class="block text-sm">
                                                3.25 MB
                                            </span>
                                        </div>
                                    </div>
                                    <button type="button" class="leading-none text-primary-500 text-[22px]">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </li>
                                <li class="rounded-md flex justify-between items-center bg-gray-50 dark:bg-[#15203c] p-[15px] mb-[10px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="bg-white dark:bg-[#0c1427] text-primary-500 rounded-full text-center leading-[40px] text-[22px] w-[40px] h-[40px]">
                                            <i class="ri-file-warning-line"></i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <h6 class="!text-base !mb-[3px] !font-medium">
                                                Project_attachment_2.zip
                                            </h6>
                                            <span class="block text-sm">
                                                5.12 MB
                                            </span>
                                        </div>
                                    </div>
                                    <button type="button" class="leading-none text-primary-500 text-[22px]">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </li>
                                <li class="rounded-md flex justify-between items-center bg-gray-50 dark:bg-[#15203c] p-[15px] mb-[10px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="bg-white dark:bg-[#0c1427] text-primary-500 rounded-full text-center leading-[40px] text-[22px] w-[40px] h-[40px]">
                                            <i class="ri-file-warning-line"></i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <h6 class="!text-base !mb-[3px] !font-medium">
                                                Project_attachment_3.zip
                                            </h6>
                                            <span class="block text-sm">
                                                5.12 MB
                                            </span>
                                        </div>
                                    </div>
                                    <button type="button" class="leading-none text-primary-500 text-[22px]">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </li>
                                <li class="rounded-md flex justify-between items-center bg-gray-50 dark:bg-[#15203c] p-[15px] mb-[10px] last:mb-0">
                                    <div class="flex items-center">
                                        <div class="bg-white dark:bg-[#0c1427] text-primary-500 rounded-full text-center leading-[40px] text-[22px] w-[40px] h-[40px]">
                                            <i class="ri-file-warning-line"></i>
                                        </div>
                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                            <h6 class="!text-base !mb-[3px] !font-medium">
                                                Project_attachment_4.zip
                                            </h6>
                                            <span class="block text-sm">
                                                3.43 MB
                                            </span>
                                        </div>
                                    </div>
                                    <button type="button" class="leading-none text-primary-500 text-[22px]">
                                        <i class="ri-download-2-line"></i>
                                    </button>
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
