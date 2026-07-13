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
        <!-- Light/Dark Mode Button -->
        <button type="button" class="light-dark-toggle leading-none inline-block transition-all text-[#fe7a36] absolute top-[20px] md:top-[25px] ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px]" id="light-dark-toggle">
            <i class="material-symbols-outlined !text-[20px] md:!text-[22px]">
                light_mode
            </i>
        </button>
        <!-- End Light/Dark Mode Button -->

        <!-- Not Found -->
        <div class="bg-white dark:bg-[#0a0e19] py-[30px] h-screen overflow-x-hidden">
            <div class="w-full h-full table">
                <div class="table-cell align-middle">
                    <div class="mx-auto max-w-[960px] text-center">
                        <img src="/assets/images/error.png" class="inline-block" alt="error-image">
                        <h4 class="!text-[19px] md:!text-[21px] mt-[25px] md:mt-[33px] !mb-[13px]">
                            Looks like we did not find this page, please try again later.
                        </h4>
                        <p>
                            But no worries! Our team is looking ever where while you wait safely.
                        </p>
                        <a href="/dashboard" class="inline-block font-medium rounded-md md:text-md mt-[2px] md:mt-[10px] py-[12px] px-[25px] text-white bg-primary-500 transition-all hover:bg-primary-400">
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Not Found -->

        @include('partials.front.scripts')
    </body>
</html>
