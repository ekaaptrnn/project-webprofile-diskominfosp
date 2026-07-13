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
        @include('partials.front.light_dark_btn')
        @include('partials.front.navigation')

        <!-- Page Banner -->
            <div class="pt-[125px] md:pt-[145px] lg:pt-[185px] xl:pt-[195px] text-center">
                <div class="container 2xl:max-w-[1320px] mx-auto px-[12px] relative z-[1]">
                    <h1 class="!mb-0 !leading-[1.2] !text-[32px] md:!text-[40px] lg:!text-[50px] xl:!text-[60px] -tracking-[.5px] md:-tracking-[1px] xl:-tracking-[1.5px]">
                        Frequently Asked Questions
                    </h1>
                    <div class="absolute bottom-0 -z-[1] ltr:-right-[30px] rtl:-left-[30px] blur-[250px]">
                        <img src="/assets/images/front-pages/shape3.png" alt="shape3">
                    </div>
                    <div class="absolute -top-[220px] -z-[1] ltr:-left-[50px] rtl:-right-[50px] blur-[150px]">
                        <img src="/assets/images/front-pages/shape5.png" alt="shape3">
                    </div>
                </div>
            </div>
            <!-- End Page Banner -->
            
            <!-- FAQ -->
            <div class="relative z-[2] pt-[60px] md:pt-[80px] lg:pt-[100px] xl:pt-[150px]">
                <div class="container 2xl:max-w-[1320px] mx-auto px-[12px]">
                    <div class="mx-auto text-center lg:max-w-[650px] lg:max-w-[810px] xl:max-w-[850px] mb-[35px] md:mb-[50px] lg:mb-[65px] xl:mb-[90px]">
                        <div class="inline-block relative mt-[10px] mb-[20px]">
                            <span class="absolute top-[4.5px] w-[5px] h-[5px] ltr:-left-[3.6px] rtl:-right-[3.6px] bg-purple-600 -rotate-[6.536deg]"></span>
                            <span class="absolute -top-[9.5px] w-[5px] h-[5px] ltr:right-0 rtl:left-0 bg-purple-600 -rotate-[6.536deg]"></span>
                            <span class="inline-block relative text-purple-600 border border-purple-600 py-[5.5px] px-[17.2px] -rotate-[6.536deg]">
                                FAQ's
                                <span class="absolute -bottom-[2.5px] w-[5px] h-[5px] ltr:-left-[3.5px] rtl:-right-[3.5px] bg-purple-600 -rotate-[6.536deg]"></span>
                                <span class="absolute -bottom-[2.5px] w-[5px] h-[5px] ltr:-right-[3.5px] rtl:-left-[3.5px] bg-purple-600 -rotate-[6.536deg]"></span>
                            </span>
                        </div>
                        <h2 class="!mb-0 !text-[24px] md:!text-[28px] lg:!text-[34px] xl:!text-[36px] -tracking-[.5px] md:-tracking-[.6px] lg:-tracking-[.8px] xl:-tracking-[1px] !leading-[1.2]">
                            Do You Have Questions? We Have Answers (Well, Most of the Time!)
                        </h2>
                    </div>
                    <div class="toc-accordion mx-auto md:max-w-[738px]" id="tablesOfContentAccordion">
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                        <div class="toc-accordion-item bg-white dark:bg-[#0c1427] rounded-md text-black dark:text-white mb-[15px] last:mb-0">
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
                    </div>
                </div>
            </div>
            <!-- End FAQ -->
            
            <!-- CTA -->
            <div class="py-[60px] md:py-[80px] lg:py-[100px] xl:py-[150px]">
                <div class="container md:max-w-[960px] 2xl:max-w-[1320px] mx-auto px-[12px] relative z-[1]">
                    <div class="text-center mx-auto md:max-w-[680px] lg:max-w-[830px]">
                        <h2 class="!text-[28px] md:!text-[36px] lg:!text-[45px] xl:!text-[48px] !mb-[13px] md:!mb-[20px] lg:!mb-[25px] xl:!mb-[35px] -tracking-[.5px] md:-tracking-[.8px] lg:-tracking-[1.2px] xl:-tracking-[1.5px] !leading-[1.2]">
                            Unlock a world of possibilities with Trezo Dashboard.
                        </h2>
                        <p class="mx-auto !leading-[1.6] md:max-w-[650px] lg:max-w-[680px] xl:max-w-[740px] md:text-[15px] lg:text-[16px] xl:text-lg xl:tracking-[.2px]">
                            Experience the difference with Trezo Dashboard. Sign up for a free trial today and see how our intuitive platform can revolutionize your data analysis process.
                        </p>
                        <a href="/" class="inline-block lg:text-[15px] xl:text-[16px] mt-[5px] md:mt-[10px] lg:mt-[20px] xl:mt-[30px] py-[12px] px-[17px] bg-purple-600 text-white rounded-md transition-all font-medium hover:bg-purple-500">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[29px] rtl:md:pr-[29px]">
                                <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] md:!text-[24px]">
                                    person
                                </i>
                                Get started - It is free
                            </span>
                        </a>
                    </div>
                    <div class="absolute ltr:left-[10px] rtl:right-[10px] -top-[200px] -z-[1] blur-[150px]">
                        <img src="/assets/images/front-pages/shape1.png" alt="shape1">
                    </div>
                    <div class="absolute ltr:right-[25px] rtl:left-[25px] top-[150px] -z-[1] blur-[125px] hidden md:block">
                        <img src="/assets/images/front-pages/shape2.png" alt="shape1">
                    </div>
                </div>
            </div>
            <!-- End CTA -->

        @include('partials.front.footer')
        @include('partials.front.scripts')
    </body>
</html>
