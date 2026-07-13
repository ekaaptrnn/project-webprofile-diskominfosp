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
                    Input
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
                        Forms
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Input
                    </li>
                </ol>
            </div>
            
            <!-- Input -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Example
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Example Input
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="name@example.com">
                        </div>
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Example Textarea
                            </label>
                            <textarea class="h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="It makes me feel..."></textarea>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="exampleInputDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="exampleInputDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#exampleInput" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="exampleInput">
&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Example Input
&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;name@example.com&quot;&gt;

&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Example Textarea
&lt;/label&gt;
&lt;textarea class=&quot;h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;It makes me feel...&quot;&gt;&lt;/textarea&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Sizing
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <input type="text" class="h-[60px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="name@example.com">
                        </div>
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="name@example.com">
                        </div>
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <input type="text" class="h-[45px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="name@example.com">
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="sizingInputDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="sizingInputDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#sizingInput" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="sizingInput">
&lt;input type=&quot;text&quot; class=&quot;h-[60px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;name@example.com&quot;&gt;

&lt;input type=&quot;text&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;name@example.com&quot;&gt;

&lt;input type=&quot;text&quot; class=&quot;h-[45px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;name@example.com&quot;&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Form Text
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Password
                            </label>
                            <input type="password" class="h-[60px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                            <p class="mt-[10px] text-xs">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </p>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="formTextInputDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="formTextInputDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#formTextInput" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="formTextInput">
&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Password
&lt;/label&gt;
&lt;input type=&quot;password&quot; class=&quot;h-[60px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot;&gt;
&lt;p class=&quot;mt-[10px] text-xs&quot;&gt;
    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
&lt;/p&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Disabled
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 disabled:bg-gray-50 dark:disabled:bg-dark" placeholder="Disabled input" disabled>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="disabledInputDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="disabledInputDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#disabledInput" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="disabledInput">
&lt;input type=&quot;text&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 disabled:bg-gray-50 dark:disabled:bg-dark&quot; placeholder=&quot;Disabled input&quot; disabled&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                File Input
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Default file input example
                            </label>
                            <input type="file" class="rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] py-[15px] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 cursor-pointer">
                        </div>
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Multiple files input example
                            </label>
                            <input type="file" multiple class="rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] py-[15px] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 cursor-pointer">
                        </div>
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Disabled file input example
                            </label>
                            <input type="file" class="rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] py-[15px] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 disabled:bg-gray-50 dark:disabled:bg-dark" disabled>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="fileInputDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="fileInputDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#fileInput" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="fileInput">
&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Default file input example
&lt;/label&gt;
&lt;input type=&quot;file&quot; class=&quot;rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] py-[15px] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 cursor-pointer&quot;&gt;

&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Multiple files input example
&lt;/label&gt;
&lt;input type=&quot;file&quot; multiple class=&quot;rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] py-[15px] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 cursor-pointer&quot;&gt;

&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Disabled file input example
&lt;/label&gt;
&lt;input type=&quot;file&quot; class=&quot;rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] py-[15px] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500 disabled:bg-gray-50 dark:disabled:bg-dark&quot; disabled&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Datalists
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="mb-[20px] md:mb-[25px] last:mb-0">
                            <label class="mb-[12px] font-medium block">
                                Datalist example
                            </label>
                            <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Type to search..." list="datalistOptions" id="exampleDataList">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="datalistsInputDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="datalistsInputDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#datalistsInput" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="datalistsInput">
&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Datalist example
&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;Type to search...&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
    &lt;option value=&quot;San Francisco&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;Seattle&quot;&gt;
    &lt;option value=&quot;Los Angeles&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
&lt;/datalist&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Breadcrumb -->
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    Select
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
                        Forms
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Select
                    </li>
                </ol>
            </div>
            
            <!-- Select -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Default
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="defaultSelectDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="defaultSelectDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#defaultSelect" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="defaultSelect">
&lt;select class=&quot;h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Disabled
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <select class="h-[55px] rounded-md border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[13px] block w-full outline-0 transition-all focus:border-primary-500 disabled:bg-gray-50 dark:disabled:bg-dark" disabled>
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="disabledSelectDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="disabledSelectDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#disabledSelect" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="disabledSelect">
&lt;label class=&quot;mb-[12px] font-medium block&quot;&gt;
    Datalist example
&lt;/label&gt;
&lt;input type=&quot;text&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;Type to search...&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot;&gt;
&lt;datalist id=&quot;datalistOptions&quot;&gt;
    &lt;option value=&quot;San Francisco&quot;&gt;
    &lt;option value=&quot;New York&quot;&gt;
    &lt;option value=&quot;Seattle&quot;&gt;
    &lt;option value=&quot;Los Angeles&quot;&gt;
    &lt;option value=&quot;Chicago&quot;&gt;
&lt;/datalist&gt;
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
