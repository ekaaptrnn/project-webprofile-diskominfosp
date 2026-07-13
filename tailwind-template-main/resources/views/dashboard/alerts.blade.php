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
                    Alerts
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
                        Alerts
                    </li>
                </ol>
            </div>

            <!-- Alerts -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Basic Alerts
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicAlertsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicAlertsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicAlerts" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicAlerts">
&lt;div class=&quot;py-[1rem] px-[1rem] text-primary-500 bg-primary-50 border border-primary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple primary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-secondary-500 bg-secondary-50 border border-secondary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple secondary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-success-500 bg-success-50 border border-success-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple success alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-danger-500 bg-danger-50 border border-danger-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple danger alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-warning-500 bg-warning-50 border border-warning-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple warning alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-info-500 bg-info-50 border border-info-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple info alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-gray-500 bg-gray-50 border border-gray-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md&quot;&gt;
    A simple light alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-dark bg-[#ced4da] border border-[#adb5bd] dark:bg-[#15203c] dark:border-[#15203c] dark:text-white rounded-md&quot;&gt;
    A simple dark alert—check it out!
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="py-[1rem] px-[1rem] text-primary-500 bg-primary-50 border border-primary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple primary alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-secondary-500 bg-secondary-50 border border-secondary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-success-500 bg-success-50 border border-success-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple success alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-danger-500 bg-danger-50 border border-danger-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple danger alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-warning-500 bg-warning-50 border border-warning-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple warning alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-info-500 bg-info-50 border border-info-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple info alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-gray-500 bg-gray-50 border border-gray-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md">
                            A simple light alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-dark bg-[#ced4da] border border-[#adb5bd] dark:bg-[#15203c] dark:border-[#15203c] dark:text-white rounded-md">
                            A simple dark alert—check it out!
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                BG Color Alerts
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="bgColorAlertsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="bgColorAlertsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#bgColorAlerts" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="bgColorAlerts">
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-primary-500 border border-primary-500 rounded-md&quot;&gt;
    A simple primary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-secondary-500 border border-secondary-500 rounded-md&quot;&gt;
    A simple secondary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-success-500 border border-success-500 rounded-md&quot;&gt;
    A simple success alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-danger-500 border border-danger-500 rounded-md&quot;&gt;
    A simple danger alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-warning-500 border border-warning-500 rounded-md&quot;&gt;
    A simple warning alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-info-500 border border-info-500 rounded-md&quot;&gt;
    A simple info alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-gray-500 bg-[#f8f9fa] border border-[#f8f9fa] rounded-md&quot;&gt;
    A simple light alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-dark border border-dark rounded-md&quot;&gt;
    A simple dark alert—check it out!
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-primary-500 border border-primary-500 rounded-md">
                            A simple primary alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-secondary-500 border border-secondary-500 rounded-md">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-success-500 border border-success-500 rounded-md">
                            A simple success alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-danger-500 border border-danger-500 rounded-md">
                            A simple danger alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-warning-500 border border-warning-500 rounded-md">
                            A simple warning alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-info-500 border border-info-500 rounded-md">
                            A simple info alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-gray-500 bg-[#f8f9fa] border border-[#f8f9fa] rounded-md">
                            A simple light alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-dark border border-dark rounded-md">
                            A simple dark alert—check it out!
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Alerts with Icon
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="alertsWithIconDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="alertsWithIconDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#alertsWithIcon" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="alertsWithIcon">
&lt;div class=&quot;py-[1rem] px-[1rem] text-primary-500 bg-primary-50 border border-primary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center gap-[5px]&quot;&gt;
    &lt;i class=&quot;ri-home-2-line text-[20px]&quot;&gt;&lt;/i&gt;
    A simple primary alert—check it out!
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="py-[1rem] px-[1rem] text-primary-500 bg-primary-50 border border-primary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center gap-[5px]">
                            <i class="ri-home-2-line text-[20px]"></i>
                            A simple primary alert—check it out!
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                BG Color Alerts with Icon
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="bgColorAlertsWithIconDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="bgColorAlertsWithIconDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#bgColorAlertsWithIcon" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="bgColorAlertsWithIcon">
&lt;div class=&quot;py-[1rem] px-[1rem] text-white bg-primary-500 border border-primary-500 rounded-md flex items-center gap-[5px]&quot;&gt;
    &lt;i class=&quot;ri-home-2-line text-[20px]&quot;&gt;&lt;/i&gt;
    A simple primary alert—check it out!
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="py-[1rem] px-[1rem] text-white bg-primary-500 border border-primary-500 rounded-md flex items-center gap-[5px]">
                            <i class="ri-home-2-line text-[20px]"></i>
                            A simple primary alert—check it out!
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Outline Alerts
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="outlineAlertsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="outlineAlertsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#outlineAlerts" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="outlineAlerts">
&lt;div class=&quot;py-[1rem] px-[1rem] text-primary-500 border border-primary-500 rounded-md&quot;&gt;
    A simple primary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-secondary-500 border border-secondary-500 rounded-md&quot;&gt;
    A simple secondary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-success-500 border border-success-500 rounded-md&quot;&gt;
    A simple success alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-danger-500 border border-danger-500 rounded-md&quot;&gt;
    A simple danger alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-warning-500 border border-warning-500 rounded-md&quot;&gt;
    A simple warning alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-info-500 border border-info-500 rounded-md&quot;&gt;
    A simple info alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-gray-500 border border-gray-100 rounded-md&quot;&gt;
    A simple light alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;py-[1rem] px-[1rem] text-dark border border-dark rounded-md&quot;&gt;
    A simple dark alert—check it out!
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="py-[1rem] px-[1rem] text-primary-500 border border-primary-500 rounded-md">
                            A simple primary alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-secondary-500 border border-secondary-500 rounded-md">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-success-500 border border-success-500 rounded-md">
                            A simple success alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-danger-500 border border-danger-500 rounded-md">
                            A simple danger alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-warning-500 border border-warning-500 rounded-md">
                            A simple warning alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-info-500 border border-info-500 rounded-md">
                            A simple info alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-gray-500 border border-gray-100 rounded-md">
                            A simple light alert—check it out!
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="py-[1rem] px-[1rem] text-dark border border-dark rounded-md">
                            A simple dark alert—check it out!
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Dismissing Alerts
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="dismissingAlertsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="dismissingAlertsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#dismissingAlerts" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="dismissingAlerts">
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-primary-500 bg-primary-50 border border-primary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple primary alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-secondary-500 bg-secondary-50 border border-secondary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple secondary alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-success-500 bg-success-50 border border-success-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple success alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-danger-500 bg-danger-50 border border-danger-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple danger alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-warning-500 bg-warning-50 border border-warning-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple warning alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-info-500 bg-info-50 border border-info-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple info alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-gray-500 bg-gray-50 border border-gray-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple light alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
&lt;div class=&quot;alert py-[1rem] px-[1rem] text-dark bg-[#ced4da] border border-[#adb5bd] dark:bg-[#15203c] dark:border-[#15203c] dark:text-white rounded-md flex items-center justify-between&quot; id=&quot;dismissingAlert&quot;&gt;
    A simple dark alert—check it out!
    &lt;button class=&quot;leading-none text-[20px] close-btn&quot;&gt;
        &lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
    &lt;/button&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-primary-500 bg-primary-50 border border-primary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple primary alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-secondary-500 bg-secondary-50 border border-secondary-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple secondary alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-success-500 bg-success-50 border border-success-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple success alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-danger-500 bg-danger-50 border border-danger-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple danger alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-warning-500 bg-warning-50 border border-warning-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple warning alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-info-500 bg-info-50 border border-info-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple info alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-gray-500 bg-gray-50 border border-gray-200 dark:bg-[#15203c] dark:border-[#15203c] rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple light alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="alert py-[1rem] px-[1rem] text-dark bg-[#ced4da] border border-[#adb5bd] dark:bg-[#15203c] dark:border-[#15203c] dark:text-white rounded-md flex items-center justify-between" id="dismissingAlert">
                            A simple dark alert—check it out!
                            <button class="leading-none text-[20px] close-btn">
                                <i class="ri-close-line"></i>
                            </button>
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
