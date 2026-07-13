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
                    Pagination
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
                        Pagination
                    </li>
                </ol>
            </div>

            <!-- Pagination -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="flex items-center justify-between">
                            <p class="!mb-0 text-sm">
                                Items per pages: <strong>5</strong>
                            </p>
                            <div class="flex items-center">
                                <p class="!mb-0 text-sm">
                                    1 – 5 of 10
                                </p>
                                <ol class="ltr:ml-[10px] rtl:mr-[10px]">
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            <span class="opacity-0">
                                                0
                                            </span>
                                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                chevron_left
                                            </i>
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            <span class="opacity-0">
                                                0
                                            </span>
                                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                chevron_right
                                            </i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicPaginationDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicPaginationDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicPagination" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicPagination">
&lt;div class=&quot;flex items-center justify-between&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        Items per pages: &lt;strong&gt;5&lt;/strong&gt;
    &lt;/p&gt;
    &lt;div class=&quot;flex items-center&quot;&gt;
        &lt;p class=&quot;mb-0 text-sm&quot;&gt;
            1 – 5 of 10
        &lt;/p&gt;
        &lt;ol class=&quot;ltr:ml-[10px] rtl:mr-[10px]&quot;&gt;
            &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                    &lt;span class=&quot;opacity-0&quot;&gt;
                        0
                    &lt;/span&gt;
                    &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                        chevron_left
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                    &lt;span class=&quot;opacity-0&quot;&gt;
                        0
                    &lt;/span&gt;
                    &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                        chevron_right
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-content">
                        <div class="sm:flex sm:items-center justify-between">
                            <p class="!mb-0">
                                Showing 9 of 36 results
                            </p>
                            <ol class="mt-[10px] sm:mt-0">
                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                    <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <span class="opacity-0">
                                            0
                                        </span>
                                        <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                            chevron_left
                                        </i>
                                    </a>
                                </li>
                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                    <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                        1
                                    </a>
                                </li>
                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                    <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        2
                                    </a>
                                </li>
                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                    <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        3
                                    </a>
                                </li>
                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                    <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        4
                                    </a>
                                </li>
                                <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                    <a href="#" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                        <span class="opacity-0">
                                            0
                                        </span>
                                        <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                            chevron_right
                                        </i>
                                    </a>
                                </li>
                            </ol>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="advancePaginationDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="advancePaginationDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#advancePagination" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="advancePagination">
&lt;div class=&quot;sm:flex sm:items-center justify-between&quot;&gt;
    &lt;p class=&quot;mb-0&quot;&gt;
        Showing 9 of 36 results
    &lt;/p&gt;
    &lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_left
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
                1
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                2
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                3
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                4
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;#&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_right
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;
</code>
</pre>
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
