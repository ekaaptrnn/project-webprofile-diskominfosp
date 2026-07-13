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

            <!-- Welcome -->
            <div
                class="trezo-card pt-[25px] md:pt-[8px] px-[20px] md:px-[35px] lg:px-[50px] ltr:2xl:pl-[105px] rtl:2xl:pr-[105px] ltr:2xl:pr-[80px] rtl:2xl:pl-[80px] rounded-md relative z-[1]"
                style="background: linear-gradient(272deg, #1F64F1 31.27%, #123A8B 98.4%);"
            >
                <div class="trezo-card-content">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="md:pt-[40px] text-center ltr:md:text-left rtl:md:text-right">
                            <span class="block text-white text-base md:text-lg mb-[6px] lg:mb-[4px]">
                                Good Morning
                            </span>
                            <h1 class="!mb-[10px] !text-xl md:!text-2xl !font-black !text-white">
                                Dr. Olivia John
                            </h1>
                            <span class="inline-block relative text-white text-xs uppercase ltr:pl-[20px] rtl:pr-[20px] mb-[9px]">
                                <img src="/assets/images/icons/heart.png" class="absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2" alt="heart">
                                CARDIO SPECIALIST
                            </span>
                            <p class="text-gray-300">
                                Today you have <span class="text-white">15</span> Consultations and <span class="text-white">12</span> Operations.
                            </p>
                        </div>
                        <div class="text-center mt-[15px] md:mt-0 ltr:md:text-right rtl:md:text-left">
                            <img src="/assets/images/main-doctor.png" class="inline-block" alt="doctor-image">
                        </div>
                    </div>
                </div>
                <div class="absolute ltr:right-0 rtl:left-0 bottom-0 -z-[1] rtl:-scale-x-100">
                    <img src="/assets/images/line.png" alt="line">
                </div>
                <div class="hidden md:block absolute top-[60px] ltr:right-[40px] rtl:left-[40px] ltr:lg:right-[85px] rtl:lg:left-[85px] -z-[1] rtl:-scale-x-100">
                    <img src="/assets/images/star.png" alt="star">
                </div>
            </div>

            <div class="lg:px-[30px] 2xl:px-[80px] mt-[25px] lg:-mt-[25px] relative z-[1]">

                <!-- Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px] mb-[25px]">
                    
                    <!-- Appointments -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex justify-between">
                            <div>
                                <span class="block">
                                    Appointments
                                </span>
                                <h2 class="!text-xl md:!text-2xl !font-black mt-[5px] !mb-[8px]">
                                    32
                                </h2>
                                <span class="inline-block text-xs rounded-[30px] py-px px-[10px] border border-orange-300 text-danger-500 bg-orange-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                    -0.04%
                                </span>
                            </div>
                            <div class="mt-[5px]">
                                <img src="/assets/images/icons/add-event.svg" alt="add-event">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Patients -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex justify-between">
                            <div>
                                <span class="block">
                                    Patients
                                </span>
                                <h2 class="!text-xl md:!text-2xl !font-black mt-[5px] !mb-[8px]">
                                    334
                                </h2>
                                <span class="inline-block text-xs rounded-[30px] py-px px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                    +7%
                                </span>
                            </div>
                            <div class="mt-[5px]">
                                <img src="/assets/images/icons/examination.svg" alt="examination">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Operations -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex justify-between">
                            <div>
                                <span class="block">
                                    Operations
                                </span>
                                <h2 class="!text-xl md:!text-2xl !font-black mt-[5px] !mb-[8px]">
                                    12
                                </h2>
                                <span class="inline-block text-xs rounded-[30px] py-px px-[10px] border border-success-300 text-success-700 bg-success-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                    +5.4%
                                </span>
                            </div>
                            <div class="mt-[5px]">
                                <img src="/assets/images/icons/scissors.svg" alt="scissors">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Earnings -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-content flex justify-between">
                            <div>
                                <span class="block">
                                    Earnings
                                </span>
                                <h2 class="!text-xl md:!text-2xl !font-black mt-[5px] !mb-[8px]">
                                    $312
                                </h2>
                                <span class="inline-block text-xs rounded-[30px] py-px px-[10px] border border-orange-300 text-danger-500 bg-orange-100 dark:border-[#15203c] dark:bg-[#15203c]">
                                    -1.4%
                                </span>
                            </div>
                            <div class="mt-[5px]">
                                <img src="/assets/images/icons/money-bag.svg" alt="money-bag">
                            </div>
                        </div>
                    </div>
    
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                    <div class="lg:col-span-2">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-[25px] mb-[25px]">

                            <!-- Patient Retention -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Patient Retention
                                        </h5>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[26px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                <i class="ri-more-fill"></i>
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
                                    <div class="-mt-[22px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px]">
                                        <div id="doctorPatientRetentionChart"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Patient Distribution -->
                            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                    <div class="trezo-card-title">
                                        <h5 class="!mb-0">
                                            Patient Distribution
                                        </h5>
                                    </div>
                                    <div class="trezo-card-subtitle">
                                        <div class="trezo-card-dropdown relative">
                                            <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#F5F7F8] bg-[#F5F7F8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                    Weekly
                                                    <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
                                                </span>
                                            </button>
                                            <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Weekly
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Monthly
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                        Yearly
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="trezo-card-content">
                                    <div class="-mt-[9px]">
                                        <div id="doctorPatientDistributionChart"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Upgrade Plan -->
                        <div
                            class="trezo-card py-[20px] md:py-[18.5px] px-[20px] md:px-[25px] rounded-md mb-[25px]"
                            style="background: linear-gradient(90deg, #4936F5 0%, #4737D6 100%);"
                        >
                            <div class="trezo-card-content">
                                <div class="grid grid-cols-1 sm:grid-cols-2 items-center gap-[15px]">
                                    <div class="text-center ltr:sm:text-left rtl:sm:text-right">
                                        <h3 class="!mb-0 !text-white !font-semibold max-w-[250px] !leading-[1.5] !text-lg md:!text-[20px]">
                                            Upgrade Plan To Manage 20K+ Patients
                                        </h3>
                                    </div>
                                    <div class="text-center ltr:sm:text-right rtl:sm:text-left">
                                        <img src="/assets/images/users.png" class="inline-block" alt="users-image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Income vs Expense -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Income vs Expense
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#F5F7F8] bg-[#F5F7F8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                This Week
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
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
                                <div class="-mt-[22px] ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px]">
                                    <div id="doctorIncomeVsExpenseChart"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="lg:col-span-1">

                        <!-- Today's Schedule -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[22px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Today's Schedule
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div id="workingScheduleCalendar">
                                    <div class="header flex items-center justify-between mb-[20px]">
                                        <button id="prevBtn" class="transition-all text-black bg-[#E6EFF2] dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
                                            <i class="material-symbols-outlined">
                                                chevron_left
                                            </i>
                                        </button>
                                        <span id="monthYear" class="block font-medium text-black dark:text-white"></span>
                                        <button id="nextBtn" class="transition-all text-black bg-[#E6EFF2] dark:text-white dark:bg-[#172036] flex items-center justify-center rounded-full w-[30px] h-[30px] hover:bg-primary-500 hover:text-white">
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
                                <div class="border-top border-[1px] border-gray-100 dark:border-[#172036] border-dashed mt-[10px] mb-[20px]"></div>
                                <div class="schedule-list h-[540px] overflow-y-scroll ltr:-mr-[20px] ltr:md:-mr-[25px] rtl:-ml-[20px] rtl:md:-ml-[25px] ltr:pr-[20px] ltr:md:pr-[25px] rtl:pl-[20px] rtl:md:pl-[25px]">
                                    <div class="p-[20px] md:p-[25px] rounded-md bg-primary-100 dark:bg-[#172036] relative z-[1] mt-[12px] first:mt-0">
                                        <span class="block text-black dark:text-white font-semibold">
                                            10:00 AM
                                        </span>
                                        <p class="mt-[3px] !mb-[9px]">
                                            Appointment With Cardiac Patient
                                        </p>
                                        <div class="flex items-center gap-[5px]">
                                            <img src="/assets/images/users/user1.jpg" alt="user-image" class="rounded-full w-[24px] border-[1px] border-white dark:border-black">
                                            <span class="block font-medium">
                                                Jonathon Ronan
                                            </span>
                                        </div>
                                        <div class="mt-[15px] flex items-center justify-between">
                                            <button type="button" class="inline-block font-medium py-[5.5px] px-[16px] bg-white dark:bg-[#0C1427] rounded-md text-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                                View Details
                                            </button>
                                            <button type="button" class="flex items-center justify-center rounded-full bg-white dark:bg-[#0C1427] text-primary-500 transition-all hover:bg-primary-500 hover:text-white w-[28px] h-[28px]">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                        </div>
                                        <div class="absolute -z-[1] ltr:right-0 rtl:left-0 top-0 rtl:-scale-x-100 dark:opacity-[0.2]">
                                            <img src="/assets/images/cut-circle.png" alt="cut-circle">
                                        </div>
                                    </div>
                                    <div class="p-[20px] md:p-[25px] rounded-md bg-secondary-100 dark:bg-[#172036] relative z-[1] mt-[12px] first:mt-0">
                                        <span class="block text-black dark:text-white font-semibold">
                                            12:00 PM
                                        </span>
                                        <p class="mt-[3px] !mb-[9px]">
                                            Major Cardiac Surgery of the patient
                                        </p>
                                        <div class="flex items-center gap-[5px]">
                                            <img src="/assets/images/users/user2.jpg" alt="user-image" class="rounded-full w-[24px] border-[1px] border-white dark:border-black">
                                            <span class="block font-medium">
                                                Walter White
                                            </span>
                                        </div>
                                        <div class="mt-[15px] flex items-center justify-between">
                                            <button type="button" class="inline-block font-medium py-[5.5px] px-[16px] bg-white dark:bg-[#0C1427] rounded-md text-secondary-500 transition-all hover:bg-secondary-500 hover:text-white">
                                                View Details
                                            </button>
                                            <button type="button" class="flex items-center justify-center rounded-full bg-white dark:bg-[#0C1427] text-secondary-500 transition-all hover:bg-secondary-500 hover:text-white w-[28px] h-[28px]">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                        </div>
                                        <div class="absolute -z-[1] ltr:right-0 rtl:left-0 top-0 rtl:-scale-x-100 dark:opacity-[0.2]">
                                            <img src="/assets/images/cut-circle.png" alt="cut-circle">
                                        </div>
                                    </div>
                                    <div class="p-[20px] md:p-[25px] rounded-md bg-purple-100 dark:bg-[#172036] relative z-[1] mt-[12px] first:mt-0">
                                        <span class="block text-black dark:text-white font-semibold">
                                            02:00 PM
                                        </span>
                                        <p class="mt-[3px] !mb-[9px]">
                                            Board Meeting With
                                        </p>
                                        <div class="flex items-center gap-[5px]">
                                            <img src="/assets/images/users/user3.jpg" alt="user-image" class="rounded-full w-[24px] border-[1px] border-white dark:border-black">
                                            <span class="block font-medium">
                                                Jessy Pinkman
                                            </span>
                                        </div>
                                        <div class="mt-[15px] flex items-center justify-between">
                                            <button type="button" class="inline-block font-medium py-[5.5px] px-[16px] bg-white dark:bg-[#0C1427] rounded-md text-purple-500 transition-all hover:bg-purple-500 hover:text-white">
                                                View Details
                                            </button>
                                            <button type="button" class="flex items-center justify-center rounded-full bg-white dark:bg-[#0C1427] text-purple-500 transition-all hover:bg-purple-500 hover:text-white w-[28px] h-[28px]">
                                                <i class="ri-notification-2-line"></i>
                                            </button>
                                        </div>
                                        <div class="absolute -z-[1] ltr:right-0 rtl:left-0 top-0 rtl:-scale-x-100 dark:opacity-[0.2]">
                                            <img src="/assets/images/cut-circle.png" alt="cut-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                    
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px] mb-[25px]">
                    <div class="lg:col-span-3">

                        <!-- My Recent Patients -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        My Recent Patients
                                    </h5>
                                </div>
                                <div class="trezo-card-subtitle">
                                    <div class="trezo-card-dropdown relative">
                                        <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-[#F5F7F8] bg-[#F5F7F8] dark:bg-[#0a0e19] py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                            <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                                This Week
                                                <i class="ri-arrow-down-s-line text-lg absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
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
                                <div class="table-responsive overflow-x-auto">
                                    <table class="w-full">
                                        <thead>
                                            <tr>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[9px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    ID
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[9px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    Patient Name
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[9px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    Disease
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[9px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    Payment Status
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[9px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    Status
                                                </th>
                                                <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[9px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0 ltr:last:text-right rtl:last:text-left"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black dark:text-white">
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        #001
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[40px]">
                                                            <img src="/assets/images/users/user33.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-px">
                                                                Johhna Loren
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                loren123@gmail.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Heart Attack
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Paid
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Completed
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="trezo-card-dropdown relative">
                                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-add-fill text-primary-500"></i>
                                                                    View
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-multi-image-line text-primary-500"></i>
                                                                    Edit
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-dropbox-line text-primary-500"></i>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        #002
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[40px]">
                                                            <img src="/assets/images/users/user34.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-px">
                                                                Skyler White
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                skyqueen@gmail.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Chest Pain
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Paid
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="inline-block text-xs px-[9px] text-purple-700 border border-purple-300 bg-purple-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="trezo-card-dropdown relative">
                                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-add-fill text-primary-500"></i>
                                                                    View
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-multi-image-line text-primary-500"></i>
                                                                    Edit
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-dropbox-line text-primary-500"></i>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        #003
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[40px]">
                                                            <img src="/assets/images/users/user35.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-px">
                                                                Jonathon Watson
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                jona2134@gmail.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Breathing Issue
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Unpaid
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="inline-block text-xs px-[9px] text-danger-700 border border-danger-300 bg-danger-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Failed
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="trezo-card-dropdown relative">
                                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md bottom-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-add-fill text-primary-500"></i>
                                                                    View
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-multi-image-line text-primary-500"></i>
                                                                    Edit
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-dropbox-line text-primary-500"></i>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        #004
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[40px]">
                                                            <img src="/assets/images/users/user36.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-px">
                                                                Walter White
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                puzzleworld@gmail.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Heart Surgery
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Paid
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="inline-block text-xs px-[9px] text-success-700 border border-success-300 bg-success-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Completed
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="trezo-card-dropdown relative">
                                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md bottom-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-add-fill text-primary-500"></i>
                                                                    View
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-multi-image-line text-primary-500"></i>
                                                                    Edit
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-dropbox-line text-primary-500"></i>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        #005
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="rounded-full w-[40px]">
                                                            <img src="/assets/images/users/user37.jpg" class="inline-block rounded-full" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-px">
                                                                David Carlen
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                liveslong@gmail.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        CVD
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                                        Unpaid
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <span class="inline-block text-xs px-[9px] text-purple-700 border border-purple-300 bg-purple-100 dark:bg-[#15203c] dark:border-[#15203c] text-sm rounded-[100px]">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[9.5px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="trezo-card-dropdown relative">
                                                        <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                            <i class="ri-more-2-fill"></i>
                                                        </button>
                                                        <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md bottom-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-add-fill text-primary-500"></i>
                                                                    View
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-multi-image-line text-primary-500"></i>
                                                                    Edit
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                    <i class="ri-dropbox-line text-primary-500"></i>
                                                                    Delete
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pt-[9px] sm:flex sm:items-center justify-between">
                                    <p class="!mb-0 text-xs">
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

                        <!-- Recent Lab Reports -->
                        <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Recent Lab Reports
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="table-responsive overflow-x-auto">
                                    <table class="w-full">
                                        <tbody class="text-black dark:text-white">
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="w-[28px]">
                                                            <img src="/assets/images/icons/pdf.png" class="inline-block" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-[3px]">
                                                                Blood Report.pdf
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                submitted by <span class="text-black dark:text-white">Andrew</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <button type="button" class="lh-1 inline-block text-primary-500 text-[20px]">
                                                        <i class="ri-download-2-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="w-[28px]">
                                                            <img src="/assets/images/icons/jpg.png" class="inline-block" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-[3px]">
                                                                X-ray Report.jpg
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                submitted by <span class="text-black dark:text-white">Joanna</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <button type="button" class="lh-1 inline-block text-primary-500 text-[20px]">
                                                        <i class="ri-download-2-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="w-[28px]">
                                                            <img src="/assets/images/icons/pdf.png" class="inline-block" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-[3px]">
                                                                Creatinine Report.pdf
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                submitted by <span class="text-black dark:text-white">David</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <button type="button" class="lh-1 inline-block text-primary-500 text-[20px]">
                                                        <i class="ri-download-2-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="w-[28px]">
                                                            <img src="/assets/images/icons/pdf.png" class="inline-block" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-[3px]">
                                                                Blood Report
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                submitted by <span class="text-black dark:text-white">Zinia</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <button type="button" class="lh-1 inline-block text-primary-500 text-[20px]">
                                                        <i class="ri-download-2-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="w-[28px]">
                                                            <img src="/assets/images/icons/doc.png" class="inline-block" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-[3px]">
                                                                ECG Report.doc
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                submitted by <span class="text-black dark:text-white">Bella</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <button type="button" class="lh-1 inline-block text-primary-500 text-[20px]">
                                                        <i class="ri-download-2-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[10px]">
                                                        <div class="w-[28px]">
                                                            <img src="/assets/images/icons/pdf.png" class="inline-block" alt="user-image">
                                                        </div>
                                                        <div>
                                                            <span class="font-semibold inline-block mb-[3px]">
                                                                Blood Report
                                                            </span>
                                                            <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                                submitted by <span class="text-black dark:text-white">Jonathon</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[11px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 ltr:last:text-right rtl:last:text-left">
                                                    <button type="button" class="lh-1 inline-block text-primary-500 text-[20px]">
                                                        <i class="ri-download-2-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
