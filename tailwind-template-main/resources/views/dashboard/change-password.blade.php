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
                    Change Password
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
                        Settings
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Change Password
                    </li>
                </ol>
            </div>

            <!-- Settings -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <ul class="mb-[10px]">
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/settings" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Account Settings
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/change-password" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all bg-primary-500 text-white">
                                Change Password
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/connections" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Connections
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/privacy-policy" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Privacy Policy
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/terms-conditions" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Terms & Conditions
                            </a>
                        </li>
                    </ul>
                    <form>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div class="relative" id="passwordHideShow">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Old Password
                                </label>
                                <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password" placeholder="Type password">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500" id="toggleButton" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <div class="relative" id="passwordHideShow2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    New Password
                                </label>
                                <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password2" placeholder="Type password">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500" id="toggleButton2" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                            <div class="sm:col-span-2 relative" id="passwordHideShow3">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Confirm Password
                                </label>
                                <input type="password" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" id="password3" placeholder="Type password">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500" id="toggleButton3" type="button">
                                    <i class="ri-eye-off-line"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mt-[20px] md:mt-[25px]">
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Change Password
                                </span>
                            </button>
                            <a href="/forgot-password" class="inline-block text-danger-500 ltr:ml-[23px] rtl:mr-[23px]">
                                Forgot Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
