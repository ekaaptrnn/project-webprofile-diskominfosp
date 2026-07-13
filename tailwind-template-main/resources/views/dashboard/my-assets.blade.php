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
                    Assets
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
                        File Manager
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Assets
                    </li>
                </ol>
            </div>

            <!-- Assets -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Sidebar -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content">
                            <form class="relative mb-[20px] md:mb-[27px]">
                                <input type="text" class="block w-full rounded-md text-black dark:text-white px-[15px] bg-gray-50 dark:bg-[#15203c] border border-gray-50 dark:border-[#15203c] focus:border-primary-500 h-[44px] outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400" placeholder="Search here.....">
                                <button class="absolute text-primary-500 mt-px ltr:right-[15px] rtl:left-[15px] top-1/2 -translate-y-1/2 hover:text-primary-400">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        search
                                    </i>
                                </button>
                            </form>
                            <ul class="mb-[20px] md:mb-[25px]">
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="/dashboard/my-drive" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-primary-500 hover:text-primary-500">
                                        <i class="material-symbols-outlined absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            drive_eta
                                        </i>
                                        My Drive
                                        <span class="text-sm font-normal block text-gray-500 dark:text-gray-400">
                                            4
                                        </span>
                                    </a>
                                    <ul class="ltr:pl-[28px] rtl:pr-[28px] mt-[15px] md:mt-[17px] mb-[17px] md:mb-[21px]">
                                        <li class="font-normal mb-[12px] md:mb-[14px] last:mb-0">
                                            <a href="/dashboard/my-assets" class="inline-block relative transition-all hover:text-primary-500 ltr:pl-[15px] rtl:pr-[15px] text-primary-500">
                                                <span class="ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[6px] h-[6px] rounded-full absolute border border-primary-500"></span>
                                                Assets
                                            </a>
                                        </li>
                                        <li class="font-normal mb-[12px] md:mb-[14px] last:mb-0">
                                            <a href="/dashboard/my-projects" class="inline-block relative transition-all hover:text-primary-500 ltr:pl-[15px] rtl:pr-[15px]">
                                                <span class="ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[6px] h-[6px] rounded-full absolute border border-primary-500"></span>
                                                Projects
                                            </a>
                                        </li>
                                        <li class="font-normal mb-[12px] md:mb-[14px] last:mb-0">
                                            <a href="/dashboard/my-personal" class="inline-block relative transition-all hover:text-primary-500 ltr:pl-[15px] rtl:pr-[15px]">
                                                <span class="ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[6px] h-[6px] rounded-full absolute border border-primary-500"></span>
                                                Personal
                                            </a>
                                        </li>
                                        <li class="font-normal mb-[12px] md:mb-[14px] last:mb-0">
                                            <a href="/dashboard/my-applications" class="inline-block relative transition-all hover:text-primary-500 ltr:pl-[15px] rtl:pr-[15px]">
                                                <span class="ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 w-[6px] h-[6px] rounded-full absolute border border-primary-500"></span>
                                                Applications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="/dashboard/my-documents" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-black dark:text-white hover:text-primary-500">
                                        <i class="material-symbols-outlined text-success-600 absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            description
                                        </i>
                                        Documents
                                    </a>
                                </li>
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="/dashboard/my-media" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-black dark:text-white hover:text-primary-500">
                                        <i class="material-symbols-outlined text-info-400 absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            perm_media
                                        </i>
                                        Media
                                    </a>
                                </li>
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="/dashboard/my-recent" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-black dark:text-white hover:text-primary-500">
                                        <i class="material-symbols-outlined text-purple-500 absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            schedule
                                        </i>
                                        Recent
                                    </a>
                                </li>
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="/dashboard/my-important" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-black dark:text-white hover:text-primary-500">
                                        <i class="material-symbols-outlined text-warning-500 absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            grade
                                        </i>
                                        Important
                                    </a>
                                </li>
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="#" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-black dark:text-white hover:text-primary-500">
                                        <i class="material-symbols-outlined text-secondary-500 absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            report_gmailerrorred
                                        </i>
                                        Spam
                                        <span class="text-sm font-normal block text-gray-500 dark:text-gray-400">
                                            10
                                        </span>
                                    </a>
                                </li>
                                <li class="font-medium mb-[15px] md:mb-[19px] last:mb-0">
                                    <a href="#" class="relative flex items-center justify-between ltr:pl-[28px] rtl:pr-[28px] transition-all text-black dark:text-white hover:text-primary-500">
                                        <i class="material-symbols-outlined text-danger-500 absolute !text-lg ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-[.5px]">
                                            delete
                                        </i>
                                        Trash
                                        <span class="text-sm font-normal block text-gray-500 dark:text-gray-400">
                                            15
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="border-t border-gray-100 dark:border-[#172036] -mx-[20px] md:-mx-[25px] px-[20px] md:px-[25px] pt-[20px] md:pt-[25px]">
                                <h6 class="!mb-[11px] !text-[15px]">
                                    Storage Status
                                </h6>
                                <span class="block text-sm ">
                                    % 50 GB used of 100 GB
                                </span>
                                <div class="mt-[11px] flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-[25px]">
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-primary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Projects
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        159 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        4.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-secondary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Documents
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        522 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        5.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-success-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Media
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        995 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        7.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-danger-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Applications
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        39 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        3.8 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-warning-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        ET Template
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        75 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        2.2 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-info-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        React Template
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        357 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        8.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-purple-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Material UI
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        159 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        4.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-black dark:text-white ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        WP Themes
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        522 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        5.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-danger-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Personal Photos
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        995 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        7.5 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-primary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Mobile Apps
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        39 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        3.8 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-secondary-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Important Files
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        75 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        2.2 GB
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="form-check">
                                    <input type="checkbox" class="cursor-pointer">
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center">
                                    <div class="leading-none text-warning-500 ltr:mr-[10px] rtl:ml-[10px]">
                                        <i class="material-symbols-outlined !text-[45px]">
                                            folder_open
                                        </i>
                                    </div>
                                    <h6 class="!mb-0 !text-[15px]">
                                        Angular Template
                                    </h6>
                                </div>
                                <div class="mt-[20px] md:mt-[30px] lg:mt-[40px] flex items-center justify-between">
                                    <div class="block text-sm text-black dark:text-white">
                                        357 Files
                                    </div>
                                    <div class="block text-sm text-black dark:text-white">
                                        8.5 GB
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
