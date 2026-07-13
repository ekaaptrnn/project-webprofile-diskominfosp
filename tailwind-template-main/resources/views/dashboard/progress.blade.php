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
                    Progress
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
                        Progress
                    </li>
                </ol>
            </div>

            <!-- Progress -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Overview
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="overviewProgressDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="overviewProgressDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#overviewProgress" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="overviewProgress">
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md&quot; style=&quot;width: 90%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md&quot; style=&quot;width: 85%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-success-500 rounded-md&quot; style=&quot;width: 80%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-info-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-info-500 rounded-md&quot; style=&quot;width: 70%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-warning-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-warning-500 rounded-md&quot; style=&quot;width: 60%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md&quot; style=&quot;width: 40%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-gray-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-dark rounded-md&quot; style=&quot;width: 20%;&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 90%;"></div>
                        </div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md" style="width: 85%;"></div>
                        </div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md" style="width: 80%;"></div>
                        </div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-info-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-info-500 rounded-md" style="width: 70%;"></div>
                        </div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-warning-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-warning-500 rounded-md" style="width: 60%;"></div>
                        </div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md" style="width: 40%;"></div>
                        </div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-gray-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-dark rounded-md" style="width: 20%;"></div>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Labels
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="percentageProgressDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="percentageProgressDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#percentageProgress" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="percentageProgress">
&lt;div class=&quot;flex w-full h-[13px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;text-center flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 90%;&quot;&gt;
        90%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;text-center flex w-full h-[13px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 85%;&quot;&gt;
        85%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;text-center flex w-full h-[13px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-success-500 rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 80%;&quot;&gt;
        80%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;text-center flex w-full h-[13px] overflow-hidden rounded-md bg-info-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-info-500 rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 70%;&quot;&gt;
        70%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;text-center flex w-full h-[13px] overflow-hidden rounded-md bg-warning-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-warning-500 rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 60%;&quot;&gt;
        60%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;text-center flex w-full h-[13px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 40%;&quot;&gt;
        40%
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;text-center flex w-full h-[13px] overflow-hidden rounded-md bg-gray-50 dark:bg-[#172036] mb-[15px] last:mb-0&quot;&gt;
    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-dark rounded-md text-white text-[10px] font-medium&quot; style=&quot;width: 20%;&quot;&gt;
        20%
    &lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="flex w-full h-[13px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="text-center flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md text-white text-[10px] font-medium" style="width: 90%;">
                                90%
                            </div>
                        </div>
                        <div class="text-center flex w-full h-[13px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md text-white text-[10px] font-medium" style="width: 85%;">
                                85%
                            </div>
                        </div>
                        <div class="text-center flex w-full h-[13px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md text-white text-[10px] font-medium" style="width: 80%;">
                                80%
                            </div>
                        </div>
                        <div class="text-center flex w-full h-[13px] overflow-hidden rounded-md bg-info-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-info-500 rounded-md text-white text-[10px] font-medium" style="width: 70%;">
                                70%
                            </div>
                        </div>
                        <div class="text-center flex w-full h-[13px] overflow-hidden rounded-md bg-warning-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-warning-500 rounded-md text-white text-[10px] font-medium" style="width: 60%;">
                                60%
                            </div>
                        </div>
                        <div class="text-center flex w-full h-[13px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md text-white text-[10px] font-medium" style="width: 40%;">
                                40%
                            </div>
                        </div>
                        <div class="text-center flex w-full h-[13px] overflow-hidden rounded-md bg-gray-50 dark:bg-[#172036] mb-[15px] last:mb-0">
                            <div class="flex flex-col justify-center overflow-hidden bg-dark rounded-md text-white text-[10px] font-medium" style="width: 20%;">
                                20%
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
