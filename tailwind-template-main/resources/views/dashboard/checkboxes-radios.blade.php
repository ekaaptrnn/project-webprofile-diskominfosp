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
                    Checkboxes & Radios
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
                        Checkboxes & Radios
                    </li>
                </ol>
            </div>
            
            <!-- Input -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Checkbox
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="form-check flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="checkbox" class="cursor-pointer" id="defaultCheckbox">
                            <label for="defaultCheckbox" class="cursor-pointer">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="checkbox" checked class="cursor-pointer" id="checkedCheckbox">
                            <label for="checkedCheckbox" class="cursor-pointer">
                                Checked checkbox
                            </label>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicCheckboxDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicCheckboxDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicCheckbox" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicCheckbox">
&lt;div class=&quot;form-check flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot; id=&quot;defaultCheckbox&quot;&gt;
    &lt;label for=&quot;defaultCheckbox&quot; class=&quot;cursor-pointer&quot;&gt;
        Default checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;checkbox&quot; checked class=&quot;cursor-pointer&quot; id=&quot;checkedCheckbox&quot;&gt;
    &lt;label for=&quot;checkedCheckbox&quot; class=&quot;cursor-pointer&quot;&gt;
        Checked checkbox
    &lt;/label&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Disabled Checkbox
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="form-check flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="checkbox" id="disabledCheckbox" disabled>
                            <label for="disabledCheckbox">
                                Disabled checkbox
                            </label>
                        </div>
                        <div class="form-check flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="checkbox" checked id="disabledCheckedCheckbox" disabled>
                            <label for="disabledCheckedCheckbox">
                                Disabled checked checkbox
                            </label>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="disabledCheckboxDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="disabledCheckboxDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#disabledCheckbox" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="disabledCheckbox">
&lt;div class=&quot;form-check flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;checkbox&quot; id=&quot;disabledCheckbox&quot; disabled&gt;
    &lt;label for=&quot;disabledCheckbox&quot;&gt;
        Disabled checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;checkbox&quot; checked id=&quot;disabledCheckedCheckbox&quot; disabled&gt;
    &lt;label for=&quot;disabledCheckedCheckbox&quot;&gt;
        Disabled checked checkbox
    &lt;/label&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Radios
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="form-radio flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="radio" class="cursor-pointer" name="flexRadioDefault" id="flexRadioDefault1">
                            <label for="flexRadioDefault1" class="cursor-pointer">
                                Default radio
                            </label>
                        </div>
                        <div class="form-radio flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="radio" checked class="cursor-pointer" name="flexRadioDefault" id="flexRadioDefault2">
                            <label for="flexRadioDefault2" class="cursor-pointer">
                                Default checked radio
                            </label>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicRadiosDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicRadiosDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicRadios" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicRadios">
&lt;div class=&quot;form-radio flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;radio&quot; class=&quot;cursor-pointer&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault1&quot;&gt;
    &lt;label for=&quot;flexRadioDefault1&quot; class=&quot;cursor-pointer&quot;&gt;
        Default radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-radio flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;radio&quot; checked class=&quot;cursor-pointer&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault2&quot;&gt;
    &lt;label for=&quot;flexRadioDefault2&quot; class=&quot;cursor-pointer&quot;&gt;
        Default checked radio
    &lt;/label&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Disabled Radios
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="form-radio flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="radio" name="disabledFlexRadioDefault" id="disabledFlexRadioDefault1" disabled>
                            <label for="disabledFlexRadioDefault1">
                                Disabled radio
                            </label>
                        </div>
                        <div class="form-radio flex items-center gap-[8px] mb-[10px] last:mb-0">
                            <input type="radio" checked name="disabledFlexRadioDefault" id="disabledFlexRadioDefault2" disabled>
                            <label for="disabledFlexRadioDefault2">
                                Disabled checked radio
                            </label>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="disabledRadiosDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="disabledRadiosDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#disabledRadios" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="disabledRadios">
&lt;div class=&quot;form-radio flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;radio&quot; name=&quot;disabledFlexRadioDefault&quot; id=&quot;disabledFlexRadioDefault1&quot; disabled&gt;
    &lt;label for=&quot;disabledFlexRadioDefault1&quot;&gt;
        Disabled radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-radio flex items-center gap-[8px] mb-[10px] last:mb-0&quot;&gt;
    &lt;input type=&quot;radio&quot; checked name=&quot;disabledFlexRadioDefault&quot; id=&quot;disabledFlexRadioDefault2&quot; disabled&gt;
    &lt;label for=&quot;disabledFlexRadioDefault2&quot;&gt;
        Disabled checked radio
    &lt;/label&gt;
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
