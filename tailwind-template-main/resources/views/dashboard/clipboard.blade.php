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
                    Clipboard
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
                        Clipboard
                    </li>
                </ol>
            </div>

            <!-- Clipboard -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Copy Value
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="copyValueClipboardDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="copyValueClipboardDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#copyValueClipboard" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="copyValueClipboard">
&lt;div class=&quot;relative&quot; id=&quot;copyClipboard&quot;&gt;
&lt;input type=&quot;text&quot; id=&quot;copyClipboardInput1&quot; class=&quot;h-[55px] rounded-md text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[20px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; value=&quot;#annual90conference2025&quot;&gt;
&lt;button class=&quot;copyClipboardButton absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[14px] transition-all hover:text-primary-500&quot; data-input=&quot;copyClipboardInput1&quot; type=&quot;button&quot;&gt;
    &lt;i class=&quot;ri-file-copy-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="relative" id="copyClipboard">
                            <input type="text" id="copyClipboardInput1" class="h-[55px] rounded-md text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[20px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="#annual90conference2025">
                            <button class="copyClipboardButton absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[14px] transition-all hover:text-primary-500" data-input="copyClipboardInput1" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Cut Value
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="cutValueClipboardDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="cutValueClipboardDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#cutValueClipboard" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[10px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="cutValueClipboard">
&lt;div class=&quot;relative&quot; id=&quot;cutClipboard&quot;&gt;
&lt;input type=&quot;text&quot; id=&quot;cutClipboardInput1&quot; class=&quot;h-[55px] rounded-md text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[20px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; value=&quot;#annual90conference2025&quot;&gt;
&lt;button class=&quot;cutClipboardButton absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[14px] transition-all hover:text-primary-500&quot; data-input=&quot;cutClipboardInput1&quot; type=&quot;button&quot;&gt;
    &lt;i class=&quot;ri-scissors-line&quot;&gt;&lt;/i&gt;
&lt;/button&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                        <div class="mt-[15px]"></div>
                        <div class="relative" id="cutClipboard">
                            <input type="text" id="cutClipboardInput1" class="h-[55px] rounded-md text-gray-500 dark:text-gray-400 border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[20px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" value="#annual90conference2025">
                            <button class="cutClipboardButton absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[14px] transition-all hover:text-primary-500" data-input="cutClipboardInput1" type="button">
                                <i class="ri-scissors-line"></i>
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
