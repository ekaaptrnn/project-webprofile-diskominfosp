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
                    Settings
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
                </ol>
            </div>

            <!-- Settings -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <ul class="mb-[10px]">
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/settings" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all bg-primary-500 text-white">
                                Account Settings
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/change-password" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
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
                        <h5 class="!text-lg !mb-[6px]">
                            Profile
                        </h5>
                        <p class="!mb-[20px] md:!mb-[25px]">
                            Update your photo and personal details here.
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    First Name
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="Olivia">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Last Name
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="John">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Email Address
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="olivia@trezo.com">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Phone Number
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="+1 444 555 6699">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Address
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="84 S. Arrowhead Court Branford">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Country
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-black dark:text-white">
                                    <option>
                                        Select
                                    </option>
                                    <option value="1">
                                        Switzerland
                                    </option>
                                    <option value="2">
                                        New Zealand
                                    </option>
                                    <option value="3">
                                        Germany
                                    </option>
                                    <option value="4">
                                        United States
                                    </option>
                                    <option value="5">
                                        Japan
                                    </option>
                                    <option value="6" selected>
                                        Netherlands
                                    </option>
                                    <option value="7">
                                        Sweden
                                    </option>
                                    <option value="8">
                                        Canada
                                    </option>
                                    <option value="9">
                                        United Kingdom
                                    </option>
                                    <option value="10">
                                        Australia
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Date Of Birth
                                </label>
                                <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="1987-01-08">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Gender
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-black dark:text-white">
                                    <option>
                                        Select
                                    </option>
                                    <option value="1" selected>
                                        Male
                                    </option>
                                    <option value="2">
                                        Female
                                    </option>
                                    <option value="3">
                                        Custom
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Your Skills
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-black dark:text-white">
                                    <option>
                                        Select
                                    </option>
                                    <option value="1" selected>
                                        Leadership
                                    </option>
                                    <option value="2">
                                        Project Management
                                    </option>
                                    <option value="3">
                                        Data Analysis
                                    </option>
                                    <option value="4">
                                        Teamwork
                                    </option>
                                    <option value="5">
                                        Web Development
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Your Profession
                                </label>
                                <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500 text-black dark:text-white">
                                    <option>
                                        Select
                                    </option>
                                    <option value="1" selected>
                                        Financial Manager
                                    </option>
                                    <option value="2">
                                        IT Manager
                                    </option>
                                    <option value="3">
                                        Software Developer
                                    </option>
                                    <option value="4">
                                        Physician Assistant
                                    </option>
                                    <option value="5">
                                        Data Scientist
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Company Name
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="Trezo Admin">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Company Website
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="http://website.com/">
                            </div>
                            <div class="sm:col-span-2">
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Add Your Bio
                                </label>
                                <textarea class="h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="It makes me feel..."></textarea>
                            </div>
                        </div>
                        <h5 class="!text-lg !mb-[6px] mt-[20px] md:mt-[25px]">
                            Profile
                        </h5>
                        <p class="!mb-[20px] md:!mb-[25px]">
                            This will be displayed on your profile.
                        </p>
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
                        <h5 class="!text-lg !mb-[20px] mt-[20px] md:mt-[25px]">
                            Socials Profile
                        </h5>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    Facebook
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="https://www.facebook.com/">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    X
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="https://x.com/">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    LinkedIn
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="https://www.linkedin.com/">
                            </div>
                            <div>
                                <label class="mb-[10px] text-black dark:text-white font-medium block">
                                    YouTube
                                </label>
                                <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="https://www.youtube.com/">
                            </div>
                        </div>
                        <div class="mt-[20px] md:mt-[25px]">
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
                                Cancel
                            </button>
                            <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400">
                                <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                    <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                        check
                                    </i>
                                    Update Profile
                                </span>
                            </button>
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
