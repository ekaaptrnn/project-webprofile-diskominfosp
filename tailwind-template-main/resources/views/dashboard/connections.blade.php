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
                    Connections
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
                        Connections
                    </li>
                </ol>
            </div>

            <!-- Connections -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content">
                    <ul class="mb-[10px]">
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/settings" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Account Settings
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/change-password" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                Change Password
                            </a>
                        </li>
                        <li class="inline-block mb-[15px] ltr:mr-[11px] rtl:ml-[11px] ltr:last:mr-0 rtl:last:ml-0">
                            <a href="/dashboard/connections" class="block rounded-md font-medium py-[8.5px] px-[15px] text-primary-500 border border-primary-500 transition-all bg-primary-500 text-white">
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
                    <h5 class="!mb-[22px]">
                        Connected Accounts
                    </h5>
                    <ul>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/google.svg" class="w-[40px]" alt="google">
                                <div>
                                    <span class="block text-black dark:text-white font-semibold">
                                        Google
                                    </span>
                                    <span class="block mt-[3px]">
                                        Calendar and Contacts
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/slack.svg" class="w-[40px]" alt="slack">
                                <div>
                                    <span class="block text-black dark:text-white font-semibold">
                                        Slack
                                    </span>
                                    <span class="block mt-[3px]">
                                        Communications
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/github.svg" class="w-[40px]" alt="github">
                                <div>
                                    <span class="block text-black dark:text-white font-semibold">
                                        GitHub
                                    </span>
                                    <span class="block mt-[3px]">
                                        Manage your Git repositories
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/mailchimp.svg" class="w-[40px]" alt="mailchimp">
                                <div>
                                    <span class="block text-black dark:text-white font-semibold">
                                        Mailchimp
                                    </span>
                                    <span class="block mt-[3px]">
                                        Email marketing service
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/figma.svg" class="w-[40px]" alt="figma">
                                <div>
                                    <span class="block text-black dark:text-white font-semibold">
                                        Figma
                                    </span>
                                    <span class="block mt-[3px]">
                                        Design
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                    </ul>
                    <div class="border-t border-gray-100 dark:border-[#172036] my-[20px] md:my-[25px]"></div>
                    <h5 class="!mb-[22px]">
                        Social Accounts
                    </h5>
                    <ul>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/facebook.svg" class="w-[40px]" alt="facebook">
                                <span class="block text-black dark:text-white font-semibold">
                                    Facebook
                                </span>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/twitter.svg" class="w-[40px]" alt="twitter">
                                <span class="block text-black dark:text-white font-semibold">
                                    X
                                </span>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/instagram.svg" class="w-[40px]" alt="instagram">
                                <span class="block text-black dark:text-white font-semibold">
                                    Instagram
                                </span>
                            </div>
                            <button type="button" class="inline-block">
                                Not Connected
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/dribbble.svg" class="w-[40px]" alt="dribbble">
                                <span class="block text-black dark:text-white font-semibold">
                                    Dribbble
                                </span>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                        <li class="flex items-center justify-between mb-[20px] last:mb-0">
                            <div class="flex items-center gap-[15px]">
                                <img src="/assets/images/socials/behance.svg" class="w-[40px]" alt="behance">
                                <span class="block text-black dark:text-white font-semibold">
                                    Behance
                                </span>
                            </div>
                            <button type="button" class="inline-block transition-all text-primary-500 hover:underline">
                                Click to Disconnect
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
