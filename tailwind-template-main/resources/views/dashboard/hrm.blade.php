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
            <div class="trezo-card mb-[25px]">
                <div class="trezo-card-content lg:flex justify-between items-center">
                    <div>
                        <h5 class="!mb-[6px] md:!mb-[3px] !font-semibold !text-[20px]">
                            Welcome Back, <span class="text-primary-500">Olivia!</span>
                        </h5>
                        <p>
                            Monitor and manage employee performance, attendance and more in one place.
                        </p>
                    </div>
                    <div class="flex items-center gap-[10px] mt-[12px] lg:mt-0">
                        <button type="button" class="flex gap-[4px] items-center text-purple-700 bg-purple-100 dark:bg-[#15203c] rounded-[4px] py-[4.5px] px-[10px] md:px-[12.5px] transition-all hover:bg-purple-200">
                            <img src="/assets/images/icons/crown.svg" alt="crown">
                            Plan Upgrade
                        </button>
                        <button type="button" class="flex gap-[4px] items-center text-orange-700 bg-orange-100 dark:bg-[#15203c] rounded-[4px] py-[4.5px] px-[10px] md:px-[12.5px] transition-all hover:bg-orange-200">
                            <img src="/assets/images/icons/file-download.svg" alt="file-download">
                            Export Reports
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- Total Employees -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[30px] rounded-md">
                    <div class="trezo-card-content relative">
                        <div class="flex items-center gap-[12px]">
                            <div class="bg-primary-600 rounded-[4px] text-white w-[44px] h-[44px] flex items-center justify-center">
                                <i class="material-symbols-outlined">
                                    group
                                </i>
                            </div>
                            <div>
                                <span class="block">
                                    Total Employees
                                </span>
                                <h5 class="!mb-0 mt-[2px] !text-[20px] !font-semibold">
                                    15,720
                                </h5>
                            </div>
                        </div>
                        <div class="mt-[32px] flex items-center gap-[7px]">
                            <div class="bg-success-100 dark:bg-[#15203c] text-success-700 rounded-[4px] w-[26px] h-[26px] flex items-center justify-center text-lg">
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                            <div class="text-gray-600 dark:text-gray-400">
                                <span class="font-medium text-gray-700 dark:text-gray-400">+12%</span> last year
                            </div>
                        </div>
                        <div class="absolute -bottom-[20px] ltr:-right-[10px] rtl:-left-[10px] max-w-[125px]">
                            <div id="hrmTotalEmployeesChart"></div>
                        </div>
                    </div>
                </div>

                <!-- Resigned Employees -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[30px] rounded-md">
                    <div class="trezo-card-content relative">
                        <div class="flex items-center gap-[12px]">
                            <div class="bg-orange-600 rounded-[4px] text-white w-[44px] h-[44px] flex items-center justify-center">
                                <i class="material-symbols-outlined">
                                    person_remove
                                </i>
                            </div>
                            <div>
                                <span class="block">
                                    Resigned Employees
                                </span>
                                <h5 class="!mb-0 mt-[2px] !text-[20px] !font-semibold">
                                    318
                                </h5>
                            </div>
                        </div>
                        <div class="mt-[32px] flex items-center gap-[7px]">
                            <div class="bg-orange-100 dark:bg-[#15203c] text-orange-700 rounded-[4px] w-[26px] h-[26px] flex items-center justify-center text-lg">
                                <i class="ri-arrow-right-down-line"></i>
                            </div>
                            <div class="text-gray-600 dark:text-gray-400">
                                <span class="font-medium text-gray-700 dark:text-gray-400">-5%</span> last year
                            </div>
                        </div>
                        <div class="absolute -bottom-[25px] ltr:-right-[10px] rtl:-left-[10px] max-w-[125px]">
                            <div id="hrmResignedEmployeesChart"></div>
                        </div>
                    </div>
                </div>

                <!-- New Employees -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[30px] rounded-md">
                    <div class="trezo-card-content relative">
                        <div class="flex items-center gap-[12px]">
                            <div class="bg-purple-600 rounded-[4px] text-white w-[44px] h-[44px] flex items-center justify-center">
                                <i class="material-symbols-outlined">
                                    person_add
                                </i>
                            </div>
                            <div>
                                <span class="block">
                                    New Employees
                                </span>
                                <h5 class="!mb-0 mt-[2px] !text-[20px] !font-semibold">
                                    824
                                </h5>
                            </div>
                        </div>
                        <div class="mt-[32px] flex items-center gap-[7px]">
                            <div class="bg-success-100 dark:bg-[#15203c] text-success-700 rounded-[4px] w-[26px] h-[26px] flex items-center justify-center text-lg">
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                            <div class="text-gray-600 dark:text-gray-400">
                                <span class="font-medium text-gray-700 dark:text-gray-400">+10%</span> last year
                            </div>
                        </div>
                        <div class="absolute -bottom-[10px] ltr:-right-[18px] rtl:-left-[18px] max-w-[125px]">
                            <div id="hrmNewEmployeesChart"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Employee Attendance Trends -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Employee Attendance Trends
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[12px] sm:mt-0">
                                <button type="button" class="rounded-md inline-block transition-all py-[3.5px] px-[15px] bg-[#F6F7F9] dark:bg-[#0a0e19] border border-gray-100 dark:border-[#172036] hover:border-primary-500 hover:bg-primary-500 hover:text-white">
                                    <span class="inline-block relative ltr:pl-[24px] rtl:pr-[24px]">
                                        <i class="ri-calendar-line absolute text-[16px] top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0"></i>
                                        July 01 - July 31, 2025
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <ul>
                                <li class="md:inline-block mb-[7px] md:mb-0">
                                    Avg. Daily Attend: <span class="font-semibold ltr:2xl:ml-[6px] rtl:2xl:mr-[6px]">320</span>
                                </li>
                                <li class="hidden md:inline-block mb-[7px] md:mb-0">
                                    <div class="w-[1px] h-[10px] bg-[#D5D9E2] dark:bg-dark mx-[12px] lg:mx-[8px] xl:mx-[15px] 2xl:mx-[21px]"></div>
                                </li>
                                <li class="md:inline-block mb-[7px] md:mb-0">
                                    High. Attend: <span class="font-semibold ltr:2xl:ml-[6px] rtl:2xl:mr-[6px]">340</span> (October 5th)
                                </li>
                                <li class="hidden md:inline-block mb-[7px] md:mb-0">
                                    <div class="w-[1px] h-[10px] bg-[#D5D9E2] dark:bg-dark mx-[12px] lg:mx-[8px] xl:mx-[15px] 2xl:mx-[21px]"></div>
                                </li>
                                <li class="md:inline-block mb-[7px] md:mb-0">
                                    Low. Attend: <span class="font-semibold ltr:2xl:ml-[6px] rtl:2xl:mr-[6px]">290</span> (October 1st)
                                </li>
                            </ul>
                            <div class="ltr:-ml-[15px] rtl:-mr-[15px] -mb-[25px]">
                                <div id="hrmEmployeeAttendanceTrendsChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Employee Work Format -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] !pb-0 rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Employee Work Format
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[22px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                        <i class="ri-more-2-fill"></i>
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
                            <div class="lg:mt-[43px]">
                                <div id="hrmEmployeeWorkFormatChart"></div>
                            </div>
                            <div class="mt-[10px] md:mt-[15px] lg:mt-[35px] -mx-[20px] md:-mx-[25px]">
                                <div class="table-responsive overflow-x-auto">
                                    <table class="w-full">
                                        <tbody class="text-black dark:text-white">
                                            <tr>
                                                <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[8px]">
                                                        <div class="bg-orange-500 w-[8px] h-[8px]"></div>
                                                        Remote
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <span class="text-success-600 inline-block relative ltr:pr-[24px] rtl:pl-[24px]">
                                                        34%
                                                        <i class="material-symbols-outlined absolute ltr:right-0 rtl:left-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                            trending_up
                                                        </i>
                                                    </span>
                                                </td>
                                                <td class="font-bold ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    120
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[8px]">
                                                        <div class="bg-primary-500 w-[8px] h-[8px]"></div>
                                                        In-office
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <span class="text-danger-600 inline-block relative ltr:pr-[24px] rtl:pl-[24px]">
                                                        46%
                                                        <i class="material-symbols-outlined absolute ltr:right-0 rtl:left-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                            trending_down
                                                        </i>
                                                    </span>
                                                </td>
                                                <td class="font-bold ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    160
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[8px]">
                                                        <div class="bg-success-500 w-[8px] h-[8px]"></div>
                                                        Hybrid
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <span class="text-success-600 inline-block relative ltr:pr-[24px] rtl:pl-[24px]">
                                                        15%
                                                        <i class="material-symbols-outlined absolute ltr:right-0 rtl:left-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                            trending_up
                                                        </i>
                                                    </span>
                                                </td>
                                                <td class="font-bold ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <div class="flex items-center gap-[8px]">
                                                        <div class="bg-purple-500 w-[8px] h-[8px]"></div>
                                                        Shift
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    <span class="text-danger-600 inline-block relative ltr:pr-[24px] rtl:pl-[24px]">
                                                        5%
                                                        <i class="material-symbols-outlined absolute ltr:right-0 rtl:left-0 !text-[20px] top-1/2 -translate-y-1/2">
                                                            trending_down
                                                        </i>
                                                    </span>
                                                </td>
                                                <td class="font-bold ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] ltr:last:text-right rtl:last:text-left">
                                                    20
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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Employee Salary -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Employee Salary
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[22px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                        <i class="ri-more-2-fill"></i>
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
                            <div class="flex items-center gap-[12px]">
                                <div class="flex items-center justify-center bg-primary-100 dark:bg-[#15203c] rounded-[4px] w-[42px] h-[42px]">
                                    <img src="/assets/images/icons/total-payroll.svg" alt="total-payroll">
                                </div>
                                <div>
                                    <span class="block">
                                        Total Payroll
                                    </span>
                                    <h5 class="!mb-0 mt-[2px] !text-[20px] !font-semibold">
                                        $450,000
                                    </h5>
                                </div>
                            </div>
                            <div class="xl:mt-[5px] xl:mb-[10px] w-full">
                                <div id="hrmEmployeeSalaryChart"></div>
                            </div>
                            <div class="sm:flex items-center gap-[20px] 2xl:gap-[30px]">
                                <div class="flex items-center gap-[12px]">
                                    <div class="flex items-center justify-center bg-success-100 dark:bg-[#15203c] rounded-[4px] w-[42px] h-[42px]">
                                        <img src="/assets/images/icons/salary-paid.svg" alt="salary-paid">
                                    </div>
                                    <div>
                                        <span class="block">
                                            Salary Paid
                                        </span>
                                        <h5 class="!mb-0 mt-[2px] !text-[20px] !font-semibold">
                                            $395k
                                        </h5>
                                    </div>
                                </div>
                                <div class="flex items-center gap-[12px] mt-[15px] sm:mt-0">
                                    <div class="flex items-center justify-center bg-orange-100 dark:bg-[#15203c] rounded-[4px] w-[42px] h-[42px]">
                                        <img src="/assets/images/icons/salary-pending.svg" alt="salary-pending">
                                    </div>
                                    <div>
                                        <span class="block">
                                            Salary Pending
                                        </span>
                                        <h5 class="!mb-0 mt-[2px] !text-[20px] !font-semibold">
                                            $60k
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">

                    <!-- Employee Leave Request -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Employee Leave Request
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            This Month
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
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap">
                                                Employee
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap">
                                                Leave Type
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap">
                                                Days
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap">
                                                Status
                                            </th>
                                            <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user42.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            John Doe
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Marketing
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Vacation
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                3
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block font-medium bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm text-xs">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user41.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Jane Smith
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            HR
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Sick Leave
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                2
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-purple-700 rounded-sm text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user43.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Alex Johnson
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Developer
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Maternity Leave
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                4
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block font-medium bg-danger-100 dark:bg-[#15203c] text-danger-700 rounded-sm text-xs">
                                                    Rejected
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user44.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Emily Davis
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            UX Designer
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Vacation
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                2
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block font-medium bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm text-xs">
                                                    Approved
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user45.jpg" class="inline-block rounded-full" alt="product-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Michael Brown
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Finance
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Personal Leave
                                            </td>
                                            <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                1
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-purple-700 rounded-sm text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
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
            </div>

            <!-- Employee List -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0 !font-semibold">
                            Employee List
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle flex items-center mt-[15px] sm:mt-0">
                        <form class="relative w-[225px] sm:w-[265px] ltr:mr-[10px] rtl:ml-[10px] ltr:sm:mr-[15px] rtl:sm:ml-[15px]">
                            <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                <i class="material-symbols-outlined !text-[20px]">
                                    search
                                </i>
                            </label>
                            <input type="text" placeholder="Search for a name...." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400" id="dataTableSearchInput">
                        </form>
                        <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[22px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                <i class="ri-more-2-fill"></i>
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
                <div class="trezo-card-content -mx-[20px] md:-mx-[25px]" id="dataTable">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="id">
                                        ID
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="employee">
                                        Employee
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="department">
                                        Department
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="position">
                                        Position
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="joiningDate">
                                        Joining Date
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="salary">
                                        Salary
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="status">
                                        Status
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-normal border-t border-gray-100 dark:border-[#172036] ltr:text-left rtl:text-right px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 whitespace-nowrap cursor-pointer relative" data-column="action">
                                        Action
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        EMP001
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user36.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div>
                                                <span class="font-medium inline-block mb-px">
                                                    Olivia Turner
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    olivia@gmail.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Marketing
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Marketing Lead
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Jan 15, 2020
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $85,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block font-medium bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm text-xs">
                                            Active
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        EMP002
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user37.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div>
                                                <span class="font-medium inline-block mb-px">
                                                    Liam Bennett
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    liam@gmail.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Human Resources
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        HR Manager
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Mar 10, 2021
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $75,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block font-medium bg-purple-100 dark:bg-[#15203c] text-purple-700 rounded-sm text-xs">
                                            On Leave
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        EMP003
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user38.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div>
                                                <span class="font-medium inline-block mb-px">
                                                    Sophia Myers
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    sophia@gmail.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        IT
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Software Engineer
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Feb 22, 2019
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $95,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block font-medium bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm text-xs">
                                            Active
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        EMP004
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user39.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div>
                                                <span class="font-medium inline-block mb-px">
                                                    Ethan Collins
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    ethan@gmail.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Sales
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Sales Manager
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Apr 12, 2022
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $90,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block font-medium bg-success-100 dark:bg-[#15203c] text-success-700 rounded-sm text-xs">
                                            Active
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        EMP005
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[10px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user40.jpg" class="inline-block rounded-full" alt="product-image">
                                            </div>
                                            <div>
                                                <span class="font-medium inline-block mb-px">
                                                    Isabella Reed
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    isabella@gmail.com
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Finance
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Financial Analyst
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        Aug 05, 2020
                                    </td>
                                    <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        $80,000
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block font-medium bg-danger-100 dark:bg-[#15203c] text-danger-700 rounded-sm text-xs">
                                            Resigned
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none custom-tooltip" id="customTooltip" data-text="View">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Edit">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none custom-tooltip" id="customTooltip" data-text="Delete">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="noResultsMessage" class="hidden my-[10px] px-[20px] md:px-[25px]">
                        No results found.
                    </div>
                    <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
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

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
