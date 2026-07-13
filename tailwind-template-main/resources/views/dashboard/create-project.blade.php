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
                    Create Project
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
                        Create Project
                    </li>
                </ol>
            </div>

            <!-- Create Project -->
            <form>
                <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project Name
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. Project CyberSphere">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project ID
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. #854">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Start Date
                                </label>
                                <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    End Date
                                </label>
                                <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project Description
                                </label>
                                <div id="richTextEditor" class="!h-[179px]"></div>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Budget
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="E.g. $90">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Priority Status
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                    <option selected>
                                        Select
                                    </option>
                                    <option value="1">
                                        In Progress
                                    </option>
                                    <option value="2">
                                        Pending
                                    </option>
                                    <option value="3">
                                        Completed
                                    </option>
                                    <option value="4">
                                        Not Started
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Categories
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                    <option selected>
                                        Select
                                    </option>
                                    <option value="1">
                                        Book
                                    </option>
                                    <option value="2">
                                        Watch
                                    </option>
                                    <option value="3">
                                        Electronics
                                    </option>
                                    <option value="4">
                                        Sports
                                    </option>
                                    <option value="5">
                                        Fashion
                                    </option>
                                    <option value="6">
                                        Jewellery
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project Manager
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                    <option selected>
                                        Select
                                    </option>
                                    <option value="1">
                                        Walter Frazier
                                    </option>
                                    <option value="2">
                                        Kimberly Anderson
                                    </option>
                                    <option value="3">
                                        Roscoe Guerrero
                                    </option>
                                    <option value="4">
                                        Robert Stewart
                                    </option>
                                    <option value="5">
                                        Dustin Fritch
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Team Members
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                    <option selected>
                                        Select
                                    </option>
                                    <option value="1">
                                        Sarah Johnson
                                    </option>
                                    <option value="2">
                                        Michael Smith
                                    </option>
                                    <option value="3">
                                        Emily Brown
                                    </option>
                                    <option value="4">
                                        Jason Lee
                                    </option>
                                    <option value="5">
                                        Ashley Davis
                                    </option>
                                    <option value="6">
                                        Mark Thompson
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project Tags
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                    <option selected>
                                        Select
                                    </option>
                                    <option value="1">
                                        Book
                                    </option>
                                    <option value="2">
                                        Watch
                                    </option>
                                    <option value="3">
                                        Electronics
                                    </option>
                                    <option value="4">
                                        Sports
                                    </option>
                                    <option value="5">
                                        Fashion
                                    </option>
                                    <option value="6">
                                        Jewellery
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Project Preview Image
                                </label>
                                <div id="fileUploader">
                                    <div class="relative flex items-center justify-center overflow-hidden rounded-md py-[88px] px-[20px] border border-gray-200 dark:border-[#172036]">
                                        <div class="flex items-center justify-center">
                                            <div class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="ri-upload-2-line"></i>
                                            </div>
                                            <p class="!leading-[1.5]">
                                                <strong class="text-black dark:text-white">Click to upload</strong><br> you file here
                                            </p>
                                        </div>
                                        <input type="file" id="fileInput" class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer">
                                    </div>
                                    <ul id="fileList"></ul>
                                </div>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Attached File
                                </label>
                                <div id="fileUploader2">
                                    <div class="relative flex items-center justify-center overflow-hidden rounded-md py-[88px] px-[20px] border border-gray-200 dark:border-[#172036]">
                                        <div class="flex items-center justify-center">
                                            <div class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="ri-upload-2-line"></i>
                                            </div>
                                            <p class="!leading-[1.5]">
                                                <strong class="text-black dark:text-white">Click to upload</strong><br> you file here
                                            </p>
                                        </div>
                                        <input type="file" id="fileInput2" class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer">
                                    </div>
                                    <ul id="fileList2"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-[20px] md:mt-[25px]">
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
                                Cancel
                            </button>
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                        add
                                    </i>
                                    Create Project
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
