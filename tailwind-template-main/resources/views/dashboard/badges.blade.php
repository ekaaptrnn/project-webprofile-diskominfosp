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
                    Badges
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
                        Badges
                    </li>
                </ol>
            </div>

            <!-- Badges -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Headings
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="headingsBadgesDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="headingsBadgesDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#headingsBadges" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="headingsBadges">
&lt;h1&gt;
    Example heading
    &lt;span class=&quot;bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal&quot;&gt;
        New
    &lt;/span&gt;
&lt;/h1&gt;
&lt;h2&gt;
    Example heading
    &lt;span class=&quot;bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal&quot;&gt;
        New
    &lt;/span&gt;
&lt;/h2&gt;
&lt;h3&gt;
    Example heading
    &lt;span class=&quot;bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal&quot;&gt;
        New
    &lt;/span&gt;
&lt;/h3&gt;
&lt;h4&gt;
    Example heading
    &lt;span class=&quot;bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal&quot;&gt;
        New
    &lt;/span&gt;
&lt;/h4&gt;
&lt;h5&gt;
    Example heading
    &lt;span class=&quot;bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal&quot;&gt;
        New
    &lt;/span&gt;
&lt;/h5&gt;
&lt;h6&gt;
    Example heading
    &lt;span class=&quot;bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal&quot;&gt;
        New
    &lt;/span&gt;
&lt;/h6&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <h1>
                            Example heading
                            <span class="bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal">
                                New
                            </span>
                        </h1>
                        <h2>
                            Example heading
                            <span class="bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal">
                                New
                            </span>
                        </h2>
                        <h3>
                            Example heading
                            <span class="bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal">
                                New
                            </span>
                        </h3>
                        <h4>
                            Example heading
                            <span class="bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal">
                                New
                            </span>
                        </h4>
                        <h5>
                            Example heading
                            <span class="bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal">
                                New
                            </span>
                        </h5>
                        <h6>
                            Example heading
                            <span class="bg-primary-500 text-white rounded-md py-[.35em] px-[.65em] inline-block font-normal">
                                New
                            </span>
                        </h6>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[15px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Pill Badges
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content mb-[5px] md:mb-[10px] lg:mb-[15px]">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="pillBadgesDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="pillBadgesDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#pillBadges" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="pillBadges">
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-primary-500 bg-primary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Primary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-secondary-500 bg-secondary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Secondary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-success-500 bg-success-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Success
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-danger-500 bg-danger-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Danger
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-warning-500 bg-warning-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Warning
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-info-500 bg-info-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Info
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-dark border border-gray-50 bg-gray-50 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Light
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-dark bg-dark text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Dark
&lt;/span&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px]"></div>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-primary-500 bg-primary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Primary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-secondary-500 bg-secondary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Secondary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-success-500 bg-success-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Success
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-danger-500 bg-danger-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Danger
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-warning-500 bg-warning-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Warning
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-info-500 bg-info-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Info
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-dark border border-gray-50 bg-gray-50 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Light
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-dark bg-dark text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Dark
                        </span>
                    </div>
                    <div class="trezo-card-header mb-[15px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Outline Pill Badges
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content mb-[5px] md:mb-[10px] lg:mb-[15px]">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="outlinePillBadgesDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="outlinePillBadgesDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#outlinePillBadges" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="outlinePillBadges">
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-primary-500 border border-primary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Primary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-secondary-500 border border-secondary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Secondary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-success-500 border border-success-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Success
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-danger-500 border border-danger-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Danger
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-warning-500 border border-warning-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Warning
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-info-500 border border-info-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Info
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] border border-gray-100 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Light
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-dark border border-dark text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Dark
&lt;/span&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px]"></div>
                        <span class="inline-block px-[15px] py-[3px] text-primary-500 border border-primary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Primary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-secondary-500 border border-secondary-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Secondary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-success-500 border border-success-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Success
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-danger-500 border border-danger-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Danger
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-warning-500 border border-warning-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Warning
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-info-500 border border-info-500 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Info
                        </span>
                        <span class="inline-block px-[15px] py-[3px] border border-gray-100 text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Light
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-dark border border-dark text-xs rounded-[100px] ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Dark
                        </span>
                    </div>
                    <div class="trezo-card-header mb-[15px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Outline Badges
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content mb-[5px] md:mb-[10px] lg:mb-[15px]">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="outlineBadgesDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="outlineBadgesDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#outlineBadges" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="outlineBadges">
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-primary-500 border border-primary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Primary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-secondary-500 border border-secondary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Secondary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-success-500 border border-success-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Success
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-danger-500 border border-danger-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Danger
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-warning-500 border border-warning-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Warning
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-info-500 border border-info-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Info
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] border border-gray-100 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Light
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-dark border border-dark text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Dark
&lt;/span&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <span class="inline-block px-[15px] py-[3px] text-primary-500 border border-primary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Primary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-secondary-500 border border-secondary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Secondary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-success-500 border border-success-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Success
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-danger-500 border border-danger-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Danger
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-warning-500 border border-warning-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Warning
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-info-500 border border-info-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Info
                        </span>
                        <span class="inline-block px-[15px] py-[3px] border border-gray-100 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Light
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-dark border border-dark text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Dark
                        </span>
                    </div>
                    <div class="trezo-card-header mb-[15px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Background Colors
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="backgroundColorsBadgesDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="backgroundColorsBadgesDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#backgroundColorsBadges" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="backgroundColorsBadges">
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-primary-500 bg-primary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Primary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-secondary-500 bg-secondary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Secondary
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-success-500 bg-success-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Success
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-danger-500 bg-danger-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Danger
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-warning-500 bg-warning-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Warning
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-info-500 bg-info-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Info
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-dark border border-gray-50 bg-gray-50 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Light
&lt;/span&gt;
&lt;span class=&quot;inline-block px-[15px] py-[3px] text-white border border-dark bg-dark text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]&quot;&gt;
    Dark
&lt;/span&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-primary-500 bg-primary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Primary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-secondary-500 bg-secondary-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Secondary
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-success-500 bg-success-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Success
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-danger-500 bg-danger-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Danger
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-warning-500 bg-warning-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Warning
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-info-500 bg-info-500 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Info
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-dark border border-gray-50 bg-gray-50 text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Light
                        </span>
                        <span class="inline-block px-[15px] py-[3px] text-white border border-dark bg-dark text-xs rounded-md ltr:mr-[10px] rtl:ml-[10px] mb-[15px]">
                            Dark
                        </span>
                    </div>
                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
