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
                    Tabs
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
                        Tabs
                    </li>
                </ol>
            </div>

            <!-- Tabs -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Basic Tabs
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="trezo-tabs" id="trezo-tabs">
                            <ul class="navs mb-[20px] border-b border-gray-100 dark:border-[#172036]">
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]">
                                    <button type="button" data-tab="tab1" class="nav-link active block pb-[8px] transition-all relative font-medium">
                                        Tab 1
                                    </button>
                                </li>
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]">
                                    <button type="button" data-tab="tab2" class="nav-link block pb-[8px] transition-all relative font-medium">
                                        Tab 2
                                    </button>
                                </li>
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]">
                                    <button type="button" data-tab="tab3" class="nav-link block pb-[8px] transition-all relative font-medium">
                                        Tab 3
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <p>
                                        Tab 1 - Hello World!
                                    </p>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <p>
                                        Tab 2 - Hello World!
                                    </p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <p>
                                        Tab 3 - Hello World!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicTabsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicTabsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicTabs" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicTabs">
&lt;div class=&quot;trezo-tabs&quot; id=&quot;trezoTabs&quot;&gt;
    &lt;ul class=&quot;navs mb-[20px] border-b border-gray-100 dark:border-[#172036]&quot;&gt;
        &lt;li class=&quot;nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]&quot;&gt;
            &lt;button type=&quot;button&quot; data-tab=&quot;tab1&quot; class=&quot;nav-link active block pb-[8px] transition-all relative font-medium&quot;&gt;
                Tab 1
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]&quot;&gt;
            &lt;button type=&quot;button&quot; data-tab=&quot;tab2&quot; class=&quot;nav-link block pb-[8px] transition-all relative font-medium&quot;&gt;
                Tab 2
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]&quot;&gt;
            &lt;button type=&quot;button&quot; data-tab=&quot;tab3&quot; class=&quot;nav-link block pb-[8px] transition-all relative font-medium&quot;&gt;
                Tab 3
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;tab-content&quot;&gt;
        &lt;div class=&quot;tab-pane active&quot; id=&quot;tab1&quot;&gt;
            &lt;p&gt;
                Tab 1 - Hello World!
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tab-pane&quot; id=&quot;tab2&quot;&gt;
            &lt;p&gt;
                Tab 2 - Hello World!
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tab-pane&quot; id=&quot;tab3&quot;&gt;
            &lt;p&gt;
                Tab 3 - Hello World!
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
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
                                Icon Tabs
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="trezo-tabs" id="trezo-tabs">
                            <ul class="navs mb-[20px] border-b border-gray-100 dark:border-[#172036]">
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]">
                                    <button type="button" data-tab="iconTab1" class="nav-link active flex items-center gap-[4px] pb-[8px] transition-all relative font-medium">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            home
                                        </i>
                                        Tab 1
                                    </button>
                                </li>
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]">
                                    <button type="button" data-tab="iconTab2" class="nav-link flex items-center gap-[4px] pb-[8px] transition-all relative font-medium">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            home
                                        </i>
                                        Tab 2
                                    </button>
                                </li>
                                <li class="nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]">
                                    <button type="button" data-tab="iconTab3" class="nav-link flex items-center gap-[4px] pb-[8px] transition-all relative font-medium">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            home
                                        </i>
                                        Tab 3
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="iconTab1">
                                    <p>
                                        Icon Tab 1 - Hello World!
                                    </p>
                                </div>
                                <div class="tab-pane" id="iconTab2">
                                    <p>
                                        Icon Tab 2 - Hello World!
                                    </p>
                                </div>
                                <div class="tab-pane" id="iconTab3">
                                    <p>
                                        Icon Tab 3 - Hello World!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="iconTabsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="iconTabsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#iconTabs" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="iconTabs">
&lt;div class=&quot;trezo-tabs&quot; id=&quot;trezo-tabs&quot;&gt;
    &lt;ul class=&quot;navs mb-[20px] border-b border-gray-100 dark:border-[#172036]&quot;&gt;
        &lt;li class=&quot;nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]&quot;&gt;
            &lt;button type=&quot;button&quot; data-tab=&quot;iconTab1&quot; class=&quot;nav-link active flex items-center gap-[4px] pb-[8px] transition-all relative font-medium&quot;&gt;
                &lt;i class=&quot;material-symbols-outlined !text-[20px]&quot;&gt;
                    home
                &lt;/i&gt;
                Tab 1
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]&quot;&gt;
            &lt;button type=&quot;button&quot; data-tab=&quot;iconTab2&quot; class=&quot;nav-link flex items-center gap-[4px] pb-[8px] transition-all relative font-medium&quot;&gt;
                &lt;i class=&quot;material-symbols-outlined !text-[20px]&quot;&gt;
                    home
                &lt;/i&gt;
                Tab 2
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item inline-block ltr:mr-[20px] rtl:ml-[20px]&quot;&gt;
            &lt;button type=&quot;button&quot; data-tab=&quot;iconTab3&quot; class=&quot;nav-link flex items-center gap-[4px] pb-[8px] transition-all relative font-medium&quot;&gt;
                &lt;i class=&quot;material-symbols-outlined !text-[20px]&quot;&gt;
                    home
                &lt;/i&gt;
                Tab 3
            &lt;/button&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class=&quot;tab-content&quot;&gt;
        &lt;div class=&quot;tab-pane active&quot; id=&quot;iconTab1&quot;&gt;
            &lt;p&gt;
                Icon Tab 1 - Hello World!
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tab-pane&quot; id=&quot;iconTab2&quot;&gt;
            &lt;p&gt;
                Icon Tab 2 - Hello World!
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;div class=&quot;tab-pane&quot; id=&quot;iconTab3&quot;&gt;
            &lt;p&gt;
                Icon Tab 3 - Hello World!
            &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
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
