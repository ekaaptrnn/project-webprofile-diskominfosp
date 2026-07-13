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
                    Accordion
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
                        UI Elements
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Accordion
                    </li>
                </ol>
            </div>

            <!-- Accordion -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicAccordionDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicAccordionDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicAccordion" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicAccordion">
&lt;div class=&quot;toc-accordion&quot; id=&quot;tablesOfContentAccordion&quot;&gt;
    &lt;div class=&quot;toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0&quot;&gt;
        &lt;button class=&quot;toc-accordion-button open text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative&quot; type=&quot;button&quot;&gt;
            What is Trezo?
            &lt;i class=&quot;ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class=&quot;toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px]&quot; style=&quot;display: block;&quot;&gt;
            &lt;p class=&quot;text-gray-500 dark:text-gray-400 !leading-[1.7]&quot;&gt;
                Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0&quot;&gt;
        &lt;button class=&quot;toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative&quot; type=&quot;button&quot;&gt;
            What features does Trezo offer?
            &lt;i class=&quot;ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class=&quot;toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden&quot;&gt;
            &lt;p class=&quot;text-gray-500 dark:text-gray-400 !leading-[1.7]&quot;&gt;
                Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
            &lt;/p&gt;
            &lt;ul class=&quot;list-disc ltr:pl-[17px] rtl:pr-[17px]&quot;&gt;
                &lt;li class=&quot;text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0&quot;&gt;
                    Pellentesque viverra lorem malesuada nunc tristique sapien.
                &lt;/li&gt;
                &lt;li class=&quot;text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0&quot;&gt;
                    Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.
                &lt;/li&gt;
                &lt;li class=&quot;text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0&quot;&gt;
                    Tellus non morbi nascetur cursus etiam facilisis mi.
                &lt;/li&gt;
                &lt;li class=&quot;text-gray-500 dark:text-gray-400 leading-[1.6] mb-[7px] last:mb-0&quot;&gt;
                    Imperdiet sit hendrerit tincidunt bibendum donec adipiscing.
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0&quot;&gt;
        &lt;button class=&quot;toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative&quot; type=&quot;button&quot;&gt;
            How can Trezo benefit my team?
            &lt;i class=&quot;ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class=&quot;toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden&quot;&gt;
            &lt;p class=&quot;text-gray-500 dark:text-gray-400 !leading-[1.7]&quot;&gt;
                Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0&quot;&gt;
        &lt;button class=&quot;toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative&quot; type=&quot;button&quot;&gt;
            Is Trezo suitable for small businesses?
            &lt;i class=&quot;ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class=&quot;toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden&quot;&gt;
            &lt;p class=&quot;text-gray-500 dark:text-gray-400 !leading-[1.7]&quot;&gt;
                Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0&quot;&gt;
        &lt;button class=&quot;toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative&quot; type=&quot;button&quot;&gt;
            Can I customize Trezo to fit my team&#39;s specific needs?
            &lt;i class=&quot;ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class=&quot;toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden&quot;&gt;
            &lt;p class=&quot;text-gray-500 dark:text-gray-400 !leading-[1.7]&quot;&gt;
                Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;toc-accordion-item bg-gray-50 dark:bg-[#15203c] rounded-md text-black dark:text-white mb-[15px] last:mb-0&quot;&gt;
        &lt;button class=&quot;toc-accordion-button text-base md:text-[15px] lg:text-md py-[13px] px-[20px] md:px-[25px] block w-full ltr:text-left rtl:text-right font-medium relative&quot; type=&quot;button&quot;&gt;
            Is Trezo cloud-based or on-premises?
            &lt;i class=&quot;ri-arrow-down-s-line absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] md:ltr:right-[25px] md:rtl:left-[25px] text-[20px]&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
        &lt;div class=&quot;toc-accordion-collapse px-[20px] md:px-[25px] pb-[20px] hidden&quot;&gt;
            &lt;p class=&quot;text-gray-500 dark:text-gray-400 !leading-[1.7]&quot;&gt;
                Trezo is a comprehensive project management software designed to help teams streamline their workflow, collaborate effectively, and achieve project success.
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="toc-accordion" id="tablesOfContentAccordion">
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
