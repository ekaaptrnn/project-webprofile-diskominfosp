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
                    Avatars
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
                        Avatars
                    </li>
                </ol>
            </div>

            <!-- Avatars -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Image Size Rounded-Circle
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="flex items-center gap-[15px]">
                            <img src="/assets/images/admin.png" alt="admin-image" class="rounded-full w-[130px] h-[130px]">
                            <img src="/assets/images/admin.png" alt="admin-image" class="rounded-full w-[110px] h-[110px]">
                            <img src="/assets/images/admin.png" alt="admin-image" class="rounded-full w-[90px] h-[90px]">
                            <img src="/assets/images/admin.png" alt="admin-image" class="rounded-full w-[70px] h-[70px]">
                            <img src="/assets/images/admin.png" alt="admin-image" class="rounded-full w-[50px] h-[50px]">
                        </div>
                        <div class="mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="imageSizeRoundedCircleDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="imageSizeRoundedCircleDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#imageSizeRoundedCircle" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="imageSizeRoundedCircle">
&lt;img src=&quot;/assets/images/admin.png&quot; alt=&quot;admin-image&quot; class=&quot;rounded-full w-[130px] h-[130px]&quot;&gt;
&lt;img src=&quot;/assets/images/admin.png&quot; alt=&quot;admin-image&quot; class=&quot;rounded-full w-[110px] h-[110px]&quot;&gt;
&lt;img src=&quot;/assets/images/admin.png&quot; alt=&quot;admin-image&quot; class=&quot;rounded-full w-[90px] h-[90px]&quot;&gt;
&lt;img src=&quot;/assets/images/admin.png&quot; alt=&quot;admin-image&quot; class=&quot;rounded-full w-[70px] h-[70px]&quot;&gt;
&lt;img src=&quot;/assets/images/admin.png&quot; alt=&quot;admin-image&quot; class=&quot;rounded-full w-[50px] h-[50px]&quot;&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Image Size Square-Circle
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="flex items-center gap-[15px]">
                            <img src="/assets/images/blue-man.jpg" alt="admin-image" class="rounded-md w-[130px] h-[130px]">
                            <img src="/assets/images/blue-man.jpg" alt="admin-image" class="rounded-md w-[110px] h-[110px]">
                            <img src="/assets/images/blue-man.jpg" alt="admin-image" class="rounded-md w-[90px] h-[90px]">
                            <img src="/assets/images/blue-man.jpg" alt="admin-image" class="rounded-md w-[70px] h-[70px]">
                            <img src="/assets/images/blue-man.jpg" alt="admin-image" class="rounded-md w-[50px] h-[50px]">
                        </div>
                        <div class="mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="imageSizeRoundedSquareDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="imageSizeRoundedSquareDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#imageSizeSquareCircle" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="imageSizeSquareCircle">
&lt;img src=&quot;/assets/images/blue-man.jpg&quot; alt=&quot;admin-image&quot; class=&quot;rounded-md w-[130px] h-[130px]&quot;&gt;
&lt;img src=&quot;/assets/images/blue-man.jpg&quot; alt=&quot;admin-image&quot; class=&quot;rounded-md w-[110px] h-[110px]&quot;&gt;
&lt;img src=&quot;/assets/images/blue-man.jpg&quot; alt=&quot;admin-image&quot; class=&quot;rounded-md w-[90px] h-[90px]&quot;&gt;
&lt;img src=&quot;/assets/images/blue-man.jpg&quot; alt=&quot;admin-image&quot; class=&quot;rounded-md w-[70px] h-[70px]&quot;&gt;
&lt;img src=&quot;/assets/images/blue-man.jpg&quot; alt=&quot;admin-image&quot; class=&quot;rounded-md w-[50px] h-[50px]&quot;&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Avatar Size Rounded-Circle
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="flex items-center gap-[15px]">
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[25px] h-[130px] w-[130px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[20px] h-[110px] w-[110px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[18px] h-[90px] w-[90px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[16px] h-[70px] w-[70px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] h-[45px] w-[45px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold">
                                Ab
                            </div>
                        </div>
                        <div class="mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="avatarSizeRoundedCircleDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="avatarSizeRoundedCircleDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#avatarSizeRoundedCircle" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="avatarSizeRoundedCircle">
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[25px] h-[130px] w-[130px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[20px] h-[110px] w-[110px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[18px] h-[90px] w-[90px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[16px] h-[70px] w-[70px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] h-[45px] w-[45px] flex items-center justify-center text-primary-500 rounded-full text-center font-bold&quot;&gt;
    Ab
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
                                Avatar Size Square-Circle
                            </h5>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <div class="flex items-center gap-[15px]">
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[25px] h-[130px] w-[130px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[20px] h-[110px] w-[110px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[18px] h-[90px] w-[90px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] text-[16px] h-[70px] w-[70px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold">
                                Ab
                            </div>
                            <div class="bg-[#f5f7f8] dark:bg-[#15203c] h-[45px] w-[45px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold">
                                Ab
                            </div>
                        </div>
                        <div class="mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="avatarSizeSquareCircleDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="avatarSizeSquareCircleDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#avatarSizeSquareCircle" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="avatarSizeSquareCircle">
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[25px] h-[130px] w-[130px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[20px] h-[110px] w-[110px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[18px] h-[90px] w-[90px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] text-[16px] h-[70px] w-[70px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold&quot;&gt;
    Ab
&lt;/div&gt;
&lt;div class=&quot;bg-[#f5f7f8] dark:bg-[#15203c] h-[45px] w-[45px] flex items-center justify-center text-primary-500 rounded-md text-center font-bold&quot;&gt;
    Ab
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
