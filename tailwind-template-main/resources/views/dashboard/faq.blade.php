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
                    FAQ's
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
                        FAQ's
                    </li>
                </ol>
            </div>

            <!-- FAQ's -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content py-[10px] md:py-[25px]">
                    <div class="text-center mx-auto md:max-w-[550px] mb-[25px] md:mb-[35px]">
                        <h3 class="!mb-[10px] md:!mb-[12px] !text-lg md:!text-xl">
                            Frequently Asked Questions
                        </h3>
                        <p class="!leading-[1.7]">
                            Trezo offers customization options to tailor the platform to your team's unique requirements. You can customize workflows, templates, and dashboards to align with your processes.
                        </p>
                    </div>
                    <div class="toc-accordion mx-auto max-w-[738px]" id="tablesOfContentAccordion">
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button open text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                What is Trezo?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px]" style="display: block;">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                What features does Trezo offer?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                                <ul class="list-disc ltr:pl-[17px] rtl:pr-[17px]">
                                    <li class="text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0">
                                        Pellentesque viverra lorem malesuada nunc tristique sapien.
                                    </li>
                                    <li class="text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0">
                                        Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.
                                    </li>
                                    <li class="text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0">
                                        Tellus non morbi nascetur cursus etiam facilisis mi.
                                    </li>
                                    <li class="text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0">
                                        Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                How can Trezo benefit my team?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Is Trezo suitable for small businesses?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Can I customize Trezo to fit my team's specific needs?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Is Trezo cloud-based or on-premises?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Does Trezo integrate with other tools?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                How secure is Trezo?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Can I try Trezo before purchasing?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                What type of customer support does Trezo provide?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                How do I get started with Trezo?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Does Trezo offer training for new users?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Is Trezo GDPR compliant?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Does Trezo offer a mobile app?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                How does billing work for Trezo?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Can I cancel my Trezo subscription at any time?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Can I track time spent on tasks with Trezo?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Does Trezo offer recurring task capabilities?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Does Trezo offer Gantt chart functionality?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
                            </div>
                        </div>
                        <div class="toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
                            <button class="toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative" type="button">
                                Can I generate custom reports in Trezo?
                                <i class="ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]"></i>
                            </button>
                            <div class="toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden">
                                <p class="text-gray-500 dark:text-gray-400 !leading-[1.7]">
                                    Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
                                </p>
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
