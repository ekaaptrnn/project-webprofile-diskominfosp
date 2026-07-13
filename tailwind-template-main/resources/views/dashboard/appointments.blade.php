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
                    Appointments
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
                        Doctor
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Appointments
                    </li>
                </ol>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Today's Schedule -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Today's Schedule
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
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
                        </div>
                    </div>

                    <!-- Add A Schedule -->
                    <button type="button" class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-primary-500 text-white hover:bg-primary-400" id="add-new-popup-toggle">
                        <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                            <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                add
                            </i>
                            Add A Schedule
                        </span>
                    </button>

                </div>
                <div class="lg:col-span-2">

                    <!-- Today's Appointments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Today's Appointments
                                </h5>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="p-[20px] rounded-md relative z-[1] bg-primary-50 dark:bg-[#172036] ltr:ml-[40px] rtl:mr-[40px] mb-[20px] last:mb-0">
                                <div class="absolute ltr:-left-[40px] rtl:-right-[40px] top-1/2 -translate-y-1/2">
                                    <img src="/assets/images/icons/done.svg" alt="done">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-[12px] mb-[7px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                10:00 AM
                                            </span>
                                        </div>
                                        <p class="!mb-[12px]">
                                            Appointment With Cardiac Patient
                                        </p>
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/users/user32.jpg" alt="user-image" class="rounded-full w-[30px] border border-white dark:border-dark">
                                            <span class="block text-[13px] text-black dark:text-white font-semibold">
                                                Jonathon Ronan
                                            </span>
                                        </div>
                                    </div>
                                    <button class="inline-block py-[6.5px] px-[17px] font-medium transition-all bg-white dark:bg-dark text-primary-500 rounded-md hover:bg-primary-500 hover:text-white" type="button">
                                        View Details
                                    </button>
                                </div>
                                <div class="absolute ltr:-left-[28px] rtl:-right-[28px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                <img src="/assets/images/icons/vector.png" class="absolute top-0 -z-[1] left-0 right-0 text-center mx-auto dark:opacity-[0.2]" alt="vector">
                            </div>
                            <div class="p-[20px] rounded-md relative z-[1] bg-info-50 dark:bg-[#172036] ltr:ml-[40px] rtl:mr-[40px] mb-[20px] last:mb-0">
                                <div class="absolute ltr:-left-[40px] rtl:-right-[40px] top-1/2 -translate-y-1/2">
                                    <img src="/assets/images/icons/done.svg" alt="done">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-[12px] mb-[7px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                12:00 PM
                                            </span>
                                        </div>
                                        <p class="!mb-[12px]">
                                            Board Meeting With
                                        </p>
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/users/user33.jpg" alt="user-image" class="rounded-full w-[30px] border border-white dark:border-dark">
                                            <span class="block text-[13px] text-black dark:text-white font-semibold">
                                                Jessy Pinkman
                                            </span>
                                        </div>
                                    </div>
                                    <button class="inline-block py-[6.5px] px-[17px] font-medium transition-all bg-white dark:bg-dark text-info-500 rounded-md hover:bg-info-500 hover:text-white" type="button">
                                        View Details
                                    </button>
                                </div>
                                <div class="-mt-[20px] absolute ltr:-left-[28px] rtl:-right-[28px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                <img src="/assets/images/icons/vector.png" class="absolute top-0 -z-[1] left-0 right-0 text-center mx-auto dark:opacity-[0.2]" alt="vector">
                            </div>
                            <div class="p-[20px] rounded-md relative z-[1] bg-secondary-50 dark:bg-[#172036] ltr:ml-[40px] rtl:mr-[40px] mb-[20px] last:mb-0">
                                <div class="absolute ltr:-left-[40px] rtl:-right-[40px] top-1/2 -translate-y-1/2">
                                    <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-[12px] mb-[7px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                02:00 PM
                                            </span>
                                            <button class="flex items-center justify-center bg-secondary-500 text-white transition-all rounded-full w-[28px] h-[28px]" type="button">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                            <span class="inline-block text-xs px-[9px] text-secondary-500 font-medium bg-white dark:bg-dark text-sm rounded-[100px]">
                                                Upcoming
                                            </span>
                                        </div>
                                        <p class="!mb-[12px]">
                                            Major Cardiac Surgery of the Patient
                                        </p>
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/users/user34.jpg" alt="user-image" class="rounded-full w-[30px] border border-white dark:border-dark">
                                            <span class="block text-[13px] text-black dark:text-white font-semibold">
                                                Walter White
                                            </span>
                                        </div>
                                    </div>
                                    <button class="inline-block py-[6.5px] px-[17px] font-medium transition-all bg-white dark:bg-dark text-secondary-500 rounded-md hover:bg-secondary-500 hover:text-white" type="button">
                                        View Details
                                    </button>
                                </div>
                                <div class="-mt-[20px] absolute ltr:-left-[28px] rtl:-right-[28px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                <img src="/assets/images/icons/vector.png" class="absolute top-0 -z-[1] left-0 right-0 text-center mx-auto dark:opacity-[0.2]" alt="vector">
                            </div>
                            <div class="p-[20px] rounded-md relative z-[1] bg-primary-50 dark:bg-[#172036] ltr:ml-[40px] rtl:mr-[40px] mb-[20px] last:mb-0">
                                <div class="absolute ltr:-left-[40px] rtl:-right-[40px] top-1/2 -translate-y-1/2">
                                    <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-[12px] mb-[7px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                03:00 PM
                                            </span>
                                            <button class="flex items-center justify-center bg-primary-500 text-white transition-all rounded-full w-[28px] h-[28px]" type="button">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                            <span class="inline-block text-xs px-[9px] text-primary-500 font-medium bg-white dark:bg-dark text-sm rounded-[100px]">
                                                Upcoming
                                            </span>
                                        </div>
                                        <p class="!mb-[12px]">
                                            Appointment With Cardiac Patient
                                        </p>
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/users/user32.jpg" alt="user-image" class="rounded-full w-[30px] border border-white dark:border-dark">
                                            <span class="block text-[13px] text-black dark:text-white font-semibold">
                                                Jonathon Ronan
                                            </span>
                                        </div>
                                    </div>
                                    <button class="inline-block py-[6.5px] px-[17px] font-medium transition-all bg-white dark:bg-dark text-primary-500 rounded-md hover:bg-primary-500 hover:text-white" type="button">
                                        View Details
                                    </button>
                                </div>
                                <div class="-mt-[20px] absolute ltr:-left-[28px] rtl:-right-[28px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                <img src="/assets/images/icons/vector.png" class="absolute top-0 -z-[1] left-0 right-0 text-center mx-auto dark:opacity-[0.2]" alt="vector">
                            </div>
                            <div class="p-[20px] rounded-md relative z-[1] bg-info-50 dark:bg-[#172036] ltr:ml-[40px] rtl:mr-[40px] mb-[20px] last:mb-0">
                                <div class="absolute ltr:-left-[40px] rtl:-right-[40px] top-1/2 -translate-y-1/2">
                                    <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-[12px] mb-[7px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                04:00 PM
                                            </span>
                                            <button class="flex items-center justify-center bg-info-500 text-white transition-all rounded-full w-[28px] h-[28px]" type="button">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                            <span class="inline-block text-xs px-[9px] text-info-500 font-medium bg-white dark:bg-dark text-sm rounded-[100px]">
                                                Upcoming
                                            </span>
                                        </div>
                                        <p class="!mb-[12px]">
                                            Board Meeting With
                                        </p>
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/users/user33.jpg" alt="user-image" class="rounded-full w-[30px] border border-white dark:border-dark">
                                            <span class="block text-[13px] text-black dark:text-white font-semibold">
                                                Jessy Pinkman
                                            </span>
                                        </div>
                                    </div>
                                    <button class="inline-block py-[6.5px] px-[17px] font-medium transition-all bg-white dark:bg-dark text-info-500 rounded-md hover:bg-info-500 hover:text-white" type="button">
                                        View Details
                                    </button>
                                </div>
                                <div class="-mt-[20px] absolute ltr:-left-[28px] rtl:-right-[28px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                <img src="/assets/images/icons/vector.png" class="absolute top-0 -z-[1] left-0 right-0 text-center mx-auto dark:opacity-[0.2]" alt="vector">
                            </div>
                            <div class="p-[20px] rounded-md relative z-[1] bg-secondary-50 dark:bg-[#172036] ltr:ml-[40px] rtl:mr-[40px] mb-[20px] last:mb-0">
                                <div class="absolute ltr:-left-[40px] rtl:-right-[40px] top-1/2 -translate-y-1/2">
                                    <img src="/assets/images/icons/not-done.svg" alt="not-done">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="flex items-center gap-[12px] mb-[7px]">
                                            <span class="block text-black dark:text-white font-semibold">
                                                05:00 PM
                                            </span>
                                            <button class="flex items-center justify-center bg-secondary-500 text-white transition-all rounded-full w-[28px] h-[28px]" type="button">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                            <span class="inline-block text-xs px-[9px] text-secondary-500 font-medium bg-white dark:bg-dark text-sm rounded-[100px]">
                                                Upcoming
                                            </span>
                                        </div>
                                        <p class="!mb-[12px]">
                                            Major Cardiac Surgery of the Patient
                                        </p>
                                        <div class="flex items-center gap-[8px]">
                                            <img src="/assets/images/users/user34.jpg" alt="user-image" class="rounded-full w-[30px] border border-white dark:border-dark">
                                            <span class="block text-[13px] text-black dark:text-white font-semibold">
                                                Walter White
                                            </span>
                                        </div>
                                    </div>
                                    <button class="inline-block py-[6.5px] px-[17px] font-medium transition-all bg-white dark:bg-dark text-secondary-500 rounded-md hover:bg-secondary-500 hover:text-white" type="button">
                                        View Details
                                    </button>
                                </div>
                                <div class="-mt-[20px] absolute ltr:-left-[28px] rtl:-right-[28px] top-0 bottom-0 w-[1px] bg-gray-100 dark:bg-[#172036] -z-[1]"></div>
                                <img src="/assets/images/icons/vector.png" class="absolute top-0 -z-[1] left-0 right-0 text-center mx-auto dark:opacity-[0.2]" alt="vector">
                            </div>
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
