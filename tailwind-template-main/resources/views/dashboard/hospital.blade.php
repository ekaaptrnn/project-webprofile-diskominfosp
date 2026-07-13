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

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Welcome -->
                    <div class="trezo-card bg-primary-600 mb-[25px] p-[20px] md:p-[25px] rounded-md relative z-[1]">
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 sm:grid-cols-5 gap-[25px]">
                                <div class="sm:col-span-3">
                                    <h3 class="!text-[20px] !mb-[2px] !text-white">
                                        Hi, <span class="text-orange-100">Dr. Olivia!</span>
                                    </h3>
                                    <p class="text-white">
                                        Your schedule today
                                    </p>
                                    <div class="info flex items-center mt-[20px] sm:mt-[60px] md:mt-[76px]">
                                        <div class="flex items-center ltr:mr-[30px] rtl:ml-[30px] ltr:last:mr-0] rtl:ml-0">
                                            <div class="bg-orange-100 text-orange-500 flex items-center justify-center rounded-md w-[42px] h-[42px] ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="material-symbols-outlined">
                                                    airplay
                                                </i>
                                            </div>
                                            <div>
                                                <span class="block text-lg text-white font-semibold">
                                                    320
                                                </span>
                                                <span class="block text-gray-200">
                                                    Patients
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center ltr:mr-[30px] rtl:ml-[30px] ltr:last:mr-0] rtl:ml-0">
                                            <div class="bg-purple-100 text-purple-500 flex items-center justify-center rounded-md w-[42px] h-[42px] ltr:mr-[12px] rtl:ml-[12px]">
                                                <i class="material-symbols-outlined">
                                                    local_library
                                                </i>
                                            </div>
                                            <div>
                                                <span class="block text-lg text-white font-semibold">
                                                    18
                                                </span>
                                                <span class="block text-gray-200">
                                                    Surgeries
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="text-center">
                                        <img src="/assets/images/female-doctor.png" class="inline-block" alt="female-doctor">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="/assets/images/icons/vector1.png" class="absolute ltr:right-0 rtl:left-0 -z-[1] top-0" alt="vector-image">
                        <img src="/assets/images/icons/vector2.png" class="absolute ltr:right-0 rtl:left-0 -z-[1] bottom-0" alt="vector-image">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-[25px]">

                        <!-- Overall Visitors -->
                        <div class="trezo-card bg-purple-200 dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md relative">
                            <div class="trezo-card-content pb-[81px]">
                                <span class="block">
                                    Overall Visitors
                                </span>
                                <h3 class="!mb-0 flex items-center !font-medium !text-xl mt-[11px]">
                                    45,745
                                    <span class="relative font-medium text-xs inline-block text-success-700 bg-success-100 dark:bg-[#15203c] border border-success-300 dark:border-[#15203c] py-[1.5px] ltr:pl-[22px] rtl:pr-[22px] ltr:pr-[10px] rtl:pl-[10px] rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                                        <i class="ri-arrow-up-fill absolute ltr:left-[6px] rtl:right-[6px] text-base top-1/2 -translate-y-1/2 mt-px"></i>
                                        7%
                                    </span>
                                </h3>
                                <div class="absolute -bottom-[42px] md:-bottom-[37px] ltr:-left-[12px] rtl:-right-[12px] ltr:-right-[10px] rtl:-left-[10px]">
                                    <div id="hospitalOverallVisitorsChart"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Patients Last 7 Days -->
                        <div class="trezo-card bg-orange-100 dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md relative">
                            <div class="trezo-card-content pb-[81px]">
                                <span class="block">
                                    Patients Last 7 Days
                                </span>
                                <h3 class="!mb-0 flex items-center !font-medium !text-xl mt-[11px]">
                                    768
                                    <span class="relative font-medium text-xs inline-block text-danger-700 bg-danger-200 dark:bg-[#15203c] border border-danger-300 dark:border-[#15203c] py-[1.5px] ltr:pl-[22px] rtl:pr-[22px] ltr:pr-[10px] rtl:pl-[10px] rounded-full ltr:ml-[10px] rtl:mr-[10px]">
                                        <i class="ri-arrow-down-fill absolute ltr:left-[6px] rtl:right-[6px] text-base top-1/2 -translate-y-1/2 mt-px"></i>
                                        3%
                                    </span>
                                </h3>
                                <div class="absolute -bottom-[5px] left-0 right-0">
                                    <div id="hospitalPatientsLast7DaysChart"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="lg:col-span-3">
                    
                    <!-- Patient Admissions & Discharges -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Patient Admissions & Discharges
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[10px] sm:mt-0">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Last Week
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Day
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Week
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Month
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Year
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mb-[15px] ltr:-ml-[15px] rtl:-mr-[15px] -mt-[5px]">
                                <div id="hospitalPatientAdmissionsDischargesChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Emergency Room Visits -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Emergency Room Visits
                                </h5>
                                <p class="mt-px">
                                    ER based on patient visits
                                </p>
                            </div>
                            <div class="trezo-card-subtitle mt-[10px] sm:mt-0">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Last Week
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Day
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Week
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Month
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Year
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="-mt-[30px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px]">
                                <div id="hospitalEmergencyRoomVisitsChart"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px]">
                        <div class="lg:col-span-1">

                            <!-- Critical Patients -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] md:px-[20px] rounded-md relative">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <p class="!mb-[2px]">
                                            Critical Patients
                                        </p>
                                        <h5 class="!mb-0">
                                            780
                                        </h5>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <div class="absolute top-[100px] left-[10px] right-[10px]">
                                        <div id="hospitalCriticalPatientsChart"></div>
                                    </div>
                                    <ul class="mt-[162px]">
                                        <li class="relative text-sm ltr:pl-[18px] rtl:pr-[18px] mb-[10px] last:mb-0">
                                            <span class="block absolute ltr:left-0 rtl:right-0 w-[12px] h-[2px] bg-primary-500 top-1/2 -translate-y-1/2"></span>
                                            Cardiology:
                                            <span class="text-black dark:text-white font-semibold">
                                                280
                                            </span>
                                        </li>
                                        <li class="relative text-sm ltr:pl-[18px] rtl:pr-[18px] mb-[10px] last:mb-0">
                                            <span class="block absolute ltr:left-0 rtl:right-0 w-[12px] h-[2px] bg-orange-500 top-1/2 -translate-y-1/2"></span>
                                            Orthopedics:
                                            <span class="text-black dark:text-white font-semibold">
                                                600
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <div class="lg:col-span-2">

                            <!-- Bed Occupancy Rate -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Bed Occupancy Rate
                                        </h5>
                                        <p class="mt-px">
                                            Currently occupied vs. available
                                        </p>
                                    </div>
                                    <div class="trezo-card-subtitle mt-[10px] sm:mt-0">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                    Today
                                                    <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                                </span>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Last Day
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Last Week
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Last Month
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Last Year
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[20px] md:gap-[25px] items-center">
                                        <ul>
                                            <li class="flex items-center mb-[20px] md:mb-[25px] last:mb-0">
                                                <div class="flex items-center justify-center rounded-md bg-secondary-100 dark:bg-[#15203c] text-secondary-500 w-[42px] h-[42px] ltr:mr-[10px] rtl:ml-[10px]">
                                                    <i class="material-symbols-outlined">
                                                        airplay
                                                    </i>
                                                </div>
                                                <div>
                                                    <h3 class="!text-lg !mb-px">
                                                        1,275
                                                    </h3>
                                                    <span class="block">
                                                        Total Beds
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="flex items-center mb-[20px] md:mb-[25px] last:mb-0">
                                                <div class="flex items-center justify-center rounded-md bg-purple-100 dark:bg-[#15203c] text-purple-500 w-[42px] h-[42px] ltr:mr-[10px] rtl:ml-[10px]">
                                                    <i class="material-symbols-outlined">
                                                        bed
                                                    </i>
                                                </div>
                                                <div>
                                                    <h3 class="!text-lg !mb-px">
                                                        825
                                                    </h3>
                                                    <span class="block">
                                                        Occupied Beds
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="flex items-center mb-[20px] md:mb-[25px] last:mb-0">
                                                <div class="flex items-center justify-center rounded-md bg-success-100 dark:bg-[#15203c] text-success-500 w-[42px] h-[42px] ltr:mr-[10px] rtl:ml-[10px]">
                                                    <i class="material-symbols-outlined">
                                                        featured_seasonal_and_gifts
                                                    </i>
                                                </div>
                                                <div>
                                                    <h3 class="!text-lg !mb-px">
                                                        450
                                                    </h3>
                                                    <span class="block">
                                                        Available Beds
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text-center">
                                            <div id="hospitalBedOccupancyRateChart"></div>
                                            <p class="text-xs mx-auto !leading-[1.6] max-w-[189px]">
                                                The donut or pie chart representing the occupancy rate.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Patient Appointments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Patient Appointments
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[10px] sm:mt-0">
                                <button type="button" class="rounded-md inline-block transition-all py-[3.5px] px-[17px] border border-gray-100 dark:border-[#172036] hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                                    <span class="inline-block relative ltr:pl-[26px] rtl:pr-[26px]">
                                        <i class="ri-calendar-line absolute text-lg top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                        Oct 01 - Oct 31, 2025
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Patient Name
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Date
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Time
                                            </th>
                                            <th class="font-medium text-xs ltr:text-left rtl:text-right px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Assigned
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Department
                                            </th>
                                            <th class="font-medium text-xs ltr:text-right rtl:text-left px-[14px] pb-[7px] whitespace-nowrap ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                John Doe
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Sep 12, 2025
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                10:30 AM
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[34px]">
                                                        <img src="/assets/images/users/user11.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Dr. Sarah
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Cardiology
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    Confirmed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Jane Smith
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Sep 11, 2025
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                11:00 AM
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[34px]">
                                                        <img src="/assets/images/users/user32.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Dr. Mark
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Pediatrics
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Rescheduled
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Robert Clark
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Sep 10, 2025
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                12:00 PM
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[34px]">
                                                        <img src="/assets/images/users/user33.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Dr. Emily
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Orthopedics
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                    Cancelled
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Linda Green
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Sep 09, 2025
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                9:30 AM
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[34px]">
                                                        <img src="/assets/images/users/user34.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Dr. Adam
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Dermatology
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    Confirmed
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Michael White
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Sep 08, 2025
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                2:00 PM
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[34px]">
                                                        <img src="/assets/images/users/user35.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Dr. Rebecca
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                Surgery
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[14px] ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:last:pl-0 py-[6px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-purple-100 dark:bg-[#15203c] text-purple-700 rounded-sm font-medium text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pt-[9px] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
                                    Showing 5 of 36 results
                                </p>
                                <ol class="mt-[10px] sm:mt-0">
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            <span class="opacity-0">
                                                0
                                            </span>
                                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                chevron_left
                                            </i>
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                            1
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            2
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            3
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                            4
                                        </a>
                                    </li>
                                    <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                        <a href="javascript:void(0);" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Schedule Appointment -->
                    <div class="trezo-card bg-purple-700 p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content text-center">
                            <h3 class="!text-[20px] md:!text-xl !mb-[9px] !text-white !font-semibold">
                                Schedule Appointment
                            </h3>
                            <p class="mx-auto max-w-[275px] !leading-[1.6] !mb-[23px] text-white">
                                Quickly schedule an appointment for a patient with any available doctor.
                            </p>
                            <img src="/assets/images/doctor.png" alt="doctor-image" class="d-block mx-auto">
                            <a href="javascript:void(0);" class="inline-block bg-primary-500 text-white rounded-md md:text-md mt-[25px] py-[6px] px-[17px] font-medium transition-all hover:bg-primary-600">
                                Book Appointment
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Patient by Age -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Patient by Age
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            Last Week
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Day
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Week
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Month
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Last Year
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div id="hospitalPatientByAgeChart"></div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Hospital Earnings -->
                    <div class="trezo-card bg-orange-50 dark:bg-[#16223e] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Hospital Earnings
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            This Week
                                            <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2"></i>
                                        </span>
                                    </button>
                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                This Day
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                This Week
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                This Month
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                This Year
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="grid grid-cols-1 lg:grid-cols-5 gap-[20px] md:gap-[25px] items-center">
                                <div class="lg:col-span-2">
                                    <div class="text-center lg:my-[8.5px] lg:ltr:-mr-[8px] lg:rtl:-ml-[8px]">
                                        <img class="inline-block" src="/assets/images/hospital.png" alt="hospital-image">
                                    </div>
                                </div>
                                <div class="lg:col-span-3">
                                    <div class="md:ltr:pl-[15px] md:rtl:pr-[15px]">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-[15px] md:gap-[25px] mb-[15px] md:mb-[25px]">
                                            <div class="bg-white dark:bg-[#0c1427] rounded-md py-[17.5px] px-[20px] md:px-[25px]">
                                                <h3 class="!text-xl !font-medium !mb-[5px]">
                                                    $120,000
                                                </h3>
                                                <div class="flex items-center">
                                                    <span class="block">
                                                        Total Profit
                                                    </span>
                                                    <span class="relative font-medium inline-block ltr:ml-[8px] rtl:mr-[8px] text-xs ltr:pl-[15px] rtl:pr-[15px] text-danger-500">
                                                        <i class="ri-arrow-down-fill absolute text-base top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                                        5%
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="bg-white dark:bg-[#0c1427] rounded-md py-[17.5px] px-[20px] md:px-[25px]">
                                                <h3 class="!text-xl !font-medium !mb-[5px]">
                                                    $80,000
                                                </h3>
                                                <div class="flex items-center">
                                                    <span class="block">
                                                        Total Costs
                                                    </span>
                                                    <span class="relative font-medium inline-block ltr:ml-[8px] rtl:mr-[8px] text-xs ltr:pl-[15px] rtl:pr-[15px] text-success-600">
                                                        <i class="ri-arrow-up-fill absolute text-base top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                                        3%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-white dark:bg-[#0c1427] rounded-md relative p-[20px] md:p-[25px] mb-[15px]">
                                            <h3 class="!font-medium !text-xl !mb-[5px]">
                                                $900,000
                                                <span class="relative inline-block -top-[4px] text-xs ltr:pl-[15px] rtl:pr-[15px] text-success-600">
                                                    <i class="ri-arrow-up-fill absolute text-base top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                                    12%
                                                </span>
                                            </h3>
                                            <span class="block">
                                                Total Earnings
                                            </span>
                                            <div class="left-0 right-0 h-[15px] -bottom-[15px] opacity-[.65] absolute bg-white dark:bg-[#0c1427] mx-[25px] rounded-b-md"></div>
                                            <div class="absolute top-1/2 -translate-y-1/2 ltr:right-[20px] rtl:left-[20px] max-w-[150px]">
                                                <div id="hospitalTotalEarningsChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
