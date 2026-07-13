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
                    Modal
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
                        Modal
                    </li>
                </ol>
            </div>

            <!-- Modal -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Live Demo
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button class="inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400" type="button" id="add-new-popup-toggle">
                            Launch Demo Modal
                        </button>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="basicModalDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="basicModalDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#basicModal" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="basicModal">
&lt;button class=&quot;inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400&quot; type=&quot;button&quot; id=&quot;add-new-popup-toggle&quot;&gt;
    Launch Demo Modal
&lt;/button&gt;

&lt;div class=&quot;add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto&quot; id=&quot;add-new-popup&quot;&gt;
    &lt;div class=&quot;popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto&quot;&gt;
        &lt;div class=&quot;trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md&quot;&gt;
            &lt;div class=&quot;trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md&quot;&gt;
                &lt;div class=&quot;trezo-card-title&quot;&gt;
                    &lt;h5 class=&quot;mb-0&quot;&gt;
                        Modal Title
                    &lt;/h5&gt;
                &lt;/div&gt;
                &lt;div class=&quot;trezo-card-subtitle&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500&quot; id=&quot;add-new-popup-toggle&quot;&gt;
                        &lt;i class=&quot;ri-close-fill&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;trezo-card-content pb-[20px] md:pb-[25px]&quot;&gt;
                .....
            &lt;/div&gt;
            &lt;div class=&quot;trezo-card-footer flex items-center justify-between -mx-[20px] md:-mx-[25px] px-[20px] md:px-[25px] pt-[20px] md:pt-[25px] border-t border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;button class=&quot;inline-block py-[10px] px-[30px] bg-danger-500 text-white transition-all hover:bg-danger-400 rounded-md border border-danger-500 hover:border-danger-400&quot; type=&quot;button&quot; id=&quot;add-new-popup-toggle&quot;&gt;
                    Close
                &lt;/button&gt;
                &lt;button class=&quot;inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400 ltr:mr-[11px] rtl:ml-[11px] mb-[15px]&quot; type=&quot;button&quot;&gt;
                    Save Changes
                &lt;/button&gt;
            &lt;/div&gt;
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
                                Scrolling Long Content
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <button class="inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400" type="button" id="scrollingLongContentModalToggle">
                            Launch Demo Modal
                        </button>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="scrollingLongContentDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="scrollingLongContentDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#scrollingLongContent" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="scrollingLongContent">
&lt;button class=&quot;inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400&quot; type=&quot;button&quot; id=&quot;scrollingLongContentModalToggle&quot;&gt;
    Launch Demo Modal
&lt;/button&gt;

&lt;div class=&quot;add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto&quot; id=&quot;scrollingLongContentModal&quot;&gt;
    &lt;div class=&quot;popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto&quot;&gt;
        &lt;div class=&quot;trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md&quot;&gt;
            &lt;div class=&quot;trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md&quot;&gt;
                &lt;div class=&quot;trezo-card-title&quot;&gt;
                    &lt;h5 class=&quot;mb-0&quot;&gt;
                        Modal Title
                    &lt;/h5&gt;
                &lt;/div&gt;
                &lt;div class=&quot;trezo-card-subtitle&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500&quot; id=&quot;scrollingLongContentModalToggle&quot;&gt;
                        &lt;i class=&quot;ri-close-fill&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;trezo-card-content pb-[20px] md:pb-[25px]&quot;&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
                &lt;p&gt;
                    This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class=&quot;trezo-card-footer flex items-center justify-between -mx-[20px] md:-mx-[25px] px-[20px] md:px-[25px] pt-[20px] md:pt-[25px] border-t border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;button class=&quot;inline-block py-[10px] px-[30px] bg-danger-500 text-white transition-all hover:bg-danger-400 rounded-md border border-danger-500 hover:border-danger-400&quot; type=&quot;button&quot; id=&quot;scrollingLongContentModalToggle&quot;&gt;
                    Close
                &lt;/button&gt;
                &lt;button class=&quot;inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400 ltr:mr-[11px] rtl:ml-[11px] mb-[15px]&quot; type=&quot;button&quot;&gt;
                    Save Changes
                &lt;/button&gt;
            &lt;/div&gt;
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

        <!-- Live Demo -->
        <div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="add-new-popup">
            <div class="popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto">
                <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Modal Title
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="add-new-popup-toggle">
                                <i class="ri-close-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="trezo-card-content pb-[20px] md:pb-[25px]">
                        .....
                    </div>
                    <div class="trezo-card-footer flex items-center justify-between -mx-[20px] md:-mx-[25px] px-[20px] md:px-[25px] pt-[20px] md:pt-[25px] border-t border-gray-100 dark:border-[#172036]">
                        <button class="inline-block py-[10px] px-[30px] bg-danger-500 text-white transition-all hover:bg-danger-400 rounded-md border border-danger-500 hover:border-danger-400" type="button" id="add-new-popup-toggle">
                            Close
                        </button>
                        <button class="inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400 ltr:mr-[11px] rtl:ml-[11px] mb-[15px]" type="button">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scrolling Long Content Modal -->
        <div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="scrollingLongContentModal">
            <div class="popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto">
                <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Modal Title
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="scrollingLongContentModalToggle">
                                <i class="ri-close-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="trezo-card-content pb-[20px] md:pb-[25px]">
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                        <p>
                            This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the predefined max-height of modal, content will be cropped and scrollable within the modal.
                        </p>
                    </div>
                    <div class="trezo-card-footer flex items-center justify-between -mx-[20px] md:-mx-[25px] px-[20px] md:px-[25px] pt-[20px] md:pt-[25px] border-t border-gray-100 dark:border-[#172036]">
                        <button class="inline-block py-[10px] px-[30px] bg-danger-500 text-white transition-all hover:bg-danger-400 rounded-md border border-danger-500 hover:border-danger-400" type="button" id="scrollingLongContentModalToggle">
                            Close
                        </button>
                        <button class="inline-block py-[10px] px-[30px] bg-primary-500 text-white transition-all hover:bg-primary-400 rounded-md border border-primary-500 hover:border-primary-400 ltr:mr-[11px] rtl:ml-[11px] mb-[15px]" type="button">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.front.scripts')
    </body>
</html>
