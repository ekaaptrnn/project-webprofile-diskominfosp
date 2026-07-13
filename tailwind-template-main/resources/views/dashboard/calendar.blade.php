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
                    Calendar
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
                        Apps
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Calendar
                    </li>
                </ol>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Calendar -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content relative">
                            <div id="fullCalendar"></div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Working Schedule -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Working Schedule
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content relative">
                            <div id="workingScheduleCalendar">
                                <div class="header flex items-center justify-between mb-[20px]">
                                    <button id="prevBtn" class="transition-all text-black bg-gray-100 dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                        <i class="material-symbols-outlined">
                                            chevron_left
                                        </i>
                                    </button>
                                    <span id="monthYear" class="block font-medium text-black dark:text-white"></span>
                                    <button id="nextBtn" class="transition-all text-black bg-gray-100 dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                        <i class="material-symbols-outlined">
                                            chevron_right
                                        </i>
                                    </button>
                                </div>
                                <div class="calendar grid grid-cols-7 text-center">
                                    <!-- Days of the week -->
                                    <div class="days">Sun</div>
                                    <div class="days">Mon</div>
                                    <div class="days">Tue</div>
                                    <div class="days">Wed</div>
                                    <div class="days">Thu</div>
                                    <div class="days">Fri</div>
                                    <div class="days">Sat</div>
                                    <!-- Dates will be injected here by JavaScript -->
                                </div>
                            </div>
                            <div class="mt-[19px] relative" id="upcomingEventsSlides">
                                <span class="block mb-[14px] font-medium">
                                    Upcoming Events:
                                </span>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                                <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                                <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                    Pythons Unleashed: A Development Expedition
                                                </h6>
                                                <span class="text-xs">
                                                    <span class="text-primary-500">
                                                        15 April 2025
                                                    </span>
                                                    - 12.00 PM - 6.00 PM 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                                <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                                <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                    Pythons Unleashed: A Development Expedition
                                                </h6>
                                                <span class="text-xs">
                                                    <span class="text-primary-500">
                                                        15 April 2025
                                                    </span>
                                                    - 12.00 PM - 6.00 PM 
                                                </span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="relative ltr:pl-[14px] rtl:pr-[14px]">
                                                <div class="absolute ltr:left-0 rtl:right-0 top-[4px] w-[7px] h-[7px] rounded-sm bg-primary-500"></div>
                                                <h6 class="!text-sm !mb-[5px] !font-semibold">
                                                    Pythons Unleashed: A Development Expedition
                                                </h6>
                                                <span class="text-xs">
                                                    <span class="text-primary-500">
                                                        15 April 2025
                                                    </span>
                                                    - 12.00 PM - 6.00 PM 
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="ltr:text-right rtl:text-left">
                                <button type="button" class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white mt-[20px] md:mt-[25px]" id="add-new-popup-toggle">
                                    <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                            add
                                        </i>
                                        Add New Event
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
            @include('partials.dashboard.add_event_modal')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
