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
                    Tables
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
                        Tables
                    </li>
                </ol>
            </div>

            <!-- Data Table -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Data Table
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle sm:flex sm:items-center">
                        <form class="relative sm:w-[320px] mt-[13px] sm:mt-0">
                            <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                <i class="material-symbols-outlined !text-[20px]">
                                    search
                                </i>
                            </label>
                            <input type="text" placeholder="Search here....." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400" id="dataTableSearchInput">
                        </form>
                    </div>
                </div>
                <div class="trezo-card-content" id="dataTable">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md cursor-pointer relative" data-column="id">
                                        ID
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md cursor-pointer relative" data-column="name">
                                        Name
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md cursor-pointer relative" data-column="age">
                                        Age
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md cursor-pointer relative" data-column="city">
                                        City
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md cursor-pointer relative" data-column="country">
                                        Country
                                        <i class="ri-expand-up-down-fill text-gray-500 dark:text-gray-400"></i>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        1
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        John Doe
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        25
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        New York
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        USA
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        2
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Jane Smith
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        30
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        London
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        UK
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        3
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Samuel Green
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        22
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Toronto
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Canada
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        4
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Emily Brown
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        27
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Sydney
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Australia
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        5
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Michael Johnson
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        29
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Auckland
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        New Zealand
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        6
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Sarah White
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        24
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Chicago
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        USA
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        7
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        William Blac
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        35
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Vancouver
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Canada
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        8
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Olivia Green
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        31
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Manchester
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        UK
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        9
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        David Brown
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        28
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Melbourne
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Australia
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        10
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Amy Blue
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        26
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Wellington
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        New Zealand
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="noResultsMessage" class="hidden mt-[20px]">No results found.</div>
                </div>
            </div>
            
            <!-- Tables -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]" id="clickToSeeCode">
                    
                <!-- Top Selling Products -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Top Selling Products
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Today
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
                        <div class="table-responsive overflow-x-auto">
                            <table class="w-full">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                            Product
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                            Price
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                            Order
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                            Stock
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tr-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                            Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/products/product1.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <a href="/dashboard/product-details" class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500">
                                                        Smart Band
                                                    </a>
                                                    <span class="block text-sm text-gray-500 dark:text-gray-400">
                                                        08 Jun 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $35.00
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            75
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            750
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $2,625
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/products/product2.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <a href="/dashboard/product-details" class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500">
                                                        Headphone
                                                    </a>
                                                    <span class="block text-sm text-gray-500 dark:text-gray-400">
                                                        07 Jun 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $49.00
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            25
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            825
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $1,225
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/products/product3.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <a href="/dashboard/product-details" class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500">
                                                        iPhone 15 Plus
                                                    </a>
                                                    <span class="block text-sm text-gray-500 dark:text-gray-400">
                                                        06 Jun 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $99.00
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            55
                                        </td>
                                        <td class="text-danger-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            Stock Out
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $5,445
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/products/product4.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <a href="/dashboard/product-details" class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500">
                                                        Bluetooth Speaker
                                                    </a>
                                                    <span class="block text-sm text-gray-500 dark:text-gray-400">
                                                        05 Jun 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $59.00
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            40
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            535
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $2,360
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/products/product5.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <a href="/dashboard/product-details" class="font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500">
                                                        Airbuds 2nd Gen
                                                    </a>
                                                    <span class="block text-sm text-gray-500 dark:text-gray-400">
                                                        04 Jun 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $79.00
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            56
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            460
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $4,424
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
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
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="topSellingProductsTableDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="topSellingProductsTableDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#topSellingProductsTable" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="topSellingProductsTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
&lt;table class=&quot;w-full&quot;&gt;
    &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md&quot;&gt;
                Product
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md&quot;&gt;
                Price
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md&quot;&gt;
                Order
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md&quot;&gt;
                Stock
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tr-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md&quot;&gt;
                Amount
            &lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/products/product1.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;a href=&quot;/dashboard/product-details&quot; class=&quot;font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500&quot;&gt;
                            Smart Band
                        &lt;/a&gt;
                        &lt;span class=&quot;block text-sm text-gray-500 dark:text-gray-400&quot;&gt;
                            08 Jun 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $35.00
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                75
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                750
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $2,625
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/products/product2.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;a href=&quot;/dashboard/product-details&quot; class=&quot;font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500&quot;&gt;
                            Headphone
                        &lt;/a&gt;
                        &lt;span class=&quot;block text-sm text-gray-500 dark:text-gray-400&quot;&gt;
                            07 Jun 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $49.00
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                25
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                825
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $1,225
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/products/product3.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;a href=&quot;/dashboard/product-details&quot; class=&quot;font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500&quot;&gt;
                            iPhone 15 Plus
                        &lt;/a&gt;
                        &lt;span class=&quot;block text-sm text-gray-500 dark:text-gray-400&quot;&gt;
                            06 Jun 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $99.00
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                55
            &lt;/td&gt;
            &lt;td class=&quot;text-danger-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                Stock Out
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $5,445
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/products/product4.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;a href=&quot;/dashboard/product-details&quot; class=&quot;font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500&quot;&gt;
                            Bluetooth Speaker
                        &lt;/a&gt;
                        &lt;span class=&quot;block text-sm text-gray-500 dark:text-gray-400&quot;&gt;
                            05 Jun 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $59.00
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                40
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                535
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $2,360
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/products/product5.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;a href=&quot;/dashboard/product-details&quot; class=&quot;font-medium inline-block text-[14px] md:text-[15px] transition-all hover:text-primary-500&quot;&gt;
                            Airbuds 2nd Gen
                        &lt;/a&gt;
                        &lt;span class=&quot;block text-sm text-gray-500 dark:text-gray-400&quot;&gt;
                            04 Jun 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $79.00
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                56
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                460
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $4,424
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between&quot;&gt;
&lt;p class=&quot;mb-0 text-sm&quot;&gt;
    Showing 5 of 36 results
&lt;/p&gt;
&lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            &lt;span class=&quot;opacity-0&quot;&gt;
                0
            &lt;/span&gt;
            &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                chevron_left
            &lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
            1
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            2
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            3
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            4
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            &lt;span class=&quot;opacity-0&quot;&gt;
                0
            &lt;/span&gt;
            &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                chevron_right
            &lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Recent Orders
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle sm:flex sm:items-center">
                            <form class="relative sm:w-[240px] ltr:sm:mr-[20px] rtl:sm:ml-[20px] my-[13px] sm:my-0">
                                <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        search
                                    </i>
                                </label>
                                <input type="text" placeholder="Search here....." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400">
                            </form>
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block rounded-md border border-gray-100 py-[5px] md:py-[6.5px] px-[12px] md:px-[19px] transition-all hover:bg-gray-50 dark:border-[#172036] dark:hover:bg-[#0a0e19]" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        Show All
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
                        <div class="table-responsive overflow-x-auto">
                            <table class="w-full">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                            Order ID
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                            Customer
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                            Created
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                            Total
                                        </th>
                                        <th class="font-medium text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tr-md">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            #JAN-2345
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/users/user1.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="block font-medium">
                                                        Sarah Johnson
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            12 Jun 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $10,490
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                Shipped
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            #JAN-1323
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/users/user2.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="block font-medium">
                                                        Michael Smith
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            11 Jun 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $6,575
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                Confirmed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            #DEC-1234
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/users/user3.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="block font-medium">
                                                        Emily Brown
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            10 Jun 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $12,870
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            #DEC-3567
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/users/user4.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="block font-medium">
                                                        Jason Lee
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            09 Jun 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $7,895
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <span class="px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                Shipped
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            #DEC-1098
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <div class="flex items-center">
                                                <div class="rounded-md w-[40px]">
                                                    <img src="/assets/images/users/user5.jpg" class="inline-block rounded-md" alt="product-image">
                                                </div>
                                                <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                    <span class="block font-medium">
                                                        Ashley Davis
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            08 Jun 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            $4,680
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                            <span class="px-[8px] py-[3px] inline-block bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                Rejected
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
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
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="recentOrdersTableDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="recentOrdersTableDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#recentOrdersTable" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="recentOrdersTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
&lt;table class=&quot;w-full&quot;&gt;
    &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md&quot;&gt;
                Order ID
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md&quot;&gt;
                Customer
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md&quot;&gt;
                Created
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md&quot;&gt;
                Total
            &lt;/th&gt;
            &lt;th class=&quot;font-medium text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tr-md&quot;&gt;
                Status
            &lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                #JAN-2345
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/users/user1.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Sarah Johnson
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                12 Jun 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $10,490
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                    Shipped
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                #JAN-1323
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/users/user2.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Michael Smith
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                11 Jun 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $6,575
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                    Confirmed
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                #DEC-1234
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/users/user3.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Emily Brown
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                10 Jun 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $12,870
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs&quot;&gt;
                    Pending
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                #DEC-3567
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/users/user4.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Jason Lee
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                09 Jun 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $7,895
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-100 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                    Shipped
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                #DEC-1098
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;rounded-md w-[40px]&quot;&gt;
                        &lt;img src=&quot;/assets/images/users/user5.jpg&quot; class=&quot;inline-block rounded-md&quot; alt=&quot;product-image&quot;&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Ashley Davis
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                08 Jun 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                $4,680
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-danger-100 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs&quot;&gt;
                    Rejected
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between&quot;&gt;
&lt;p class=&quot;mb-0 text-sm&quot;&gt;
    Showing 5 of 36 results
&lt;/p&gt;
&lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            &lt;span class=&quot;opacity-0&quot;&gt;
                0
            &lt;/span&gt;
            &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                chevron_left
            &lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
            1
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            2
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            3
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            4
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            &lt;span class=&quot;opacity-0&quot;&gt;
                0
            &lt;/span&gt;
            &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                chevron_right
            &lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>

            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-1">

                    <!-- Top Performers -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Top Performers
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
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user6.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Alex Davis
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            alex@trezo.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                        arrow_outward
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user7.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Laura Martinez
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            laura@trezo.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                        arrow_outward
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user8.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Mark Thompson
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            mark@trezo.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                        arrow_outward
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user9.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Rachel White
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            rachel@trezo.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                        arrow_outward
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user10.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Kevin Lee
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            kevin@trezo.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                                <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                        arrow_outward
                                                    </i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex items-center justify-between mt-[17px]">
                                <p class="!mb-0 text-sm">
                                    Items per pages: <strong>5</strong>
                                </p>
                                <div class="flex items-center">
                                    <p class="!mb-0 text-sm">
                                        1 – 5 of 10
                                    </p>
                                    <ol class="ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0">
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
                            <div class="mt-[15px] md:mt-[20px]"></div>
                            <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="topPerformersTableDiv">
                                Click to See Code:
                            </button>
                            <div class="relative click-to-show-hide-code" id="topPerformersTableDiv">
                                <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#topPerformersTable" type="button">
                                    <i class="ri-file-copy-line"></i>
                                </button>
    <pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
    <code class="language-markup" id="topPerformersTable">
    &lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
    &lt;table class=&quot;w-full&quot;&gt;
        &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user6.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Alex Davis
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                alex@trezo.com
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                        &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                            arrow_outward
                        &lt;/i&gt;
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user7.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Laura Martinez
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                laura@trezo.com
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                        &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                            arrow_outward
                        &lt;/i&gt;
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user8.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Mark Thompson
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                mark@trezo.com
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                        &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                            arrow_outward
                        &lt;/i&gt;
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user9.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Rachel White
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                rachel@trezo.com
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                        &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                            arrow_outward
                        &lt;/i&gt;
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user10.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Kevin Lee
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                kevin@trezo.com
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                        &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                            arrow_outward
                        &lt;/i&gt;
                    &lt;/a&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
    &lt;/div&gt;
    &lt;div class=&quot;flex items-center justify-between mt-[17px]&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        Items per pages: &lt;strong&gt;5&lt;/strong&gt;
    &lt;/p&gt;
    &lt;div class=&quot;flex items-center&quot;&gt;
        &lt;p class=&quot;mb-0 text-sm&quot;&gt;
            1 – 5 of 10
        &lt;/p&gt;
        &lt;ol class=&quot;ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0&quot;&gt;
            &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                    &lt;span class=&quot;opacity-0&quot;&gt;
                        0
                    &lt;/span&gt;
                    &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                        chevron_left
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                    &lt;span class=&quot;opacity-0&quot;&gt;
                        0
                    &lt;/span&gt;
                    &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                        chevron_right
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    </code>
    </pre>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2">
                    
                    <!-- Recent Leads -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Leads
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <div class="trezo-card-dropdown relative">
                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                        <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                            This Day
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
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Customer
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Email
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Source
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Status
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user11.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            David Brown
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                david@trezo.com
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Organic
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Confirmed
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user12.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Sarah Miller
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                sarah@trezo.com
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Social
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user13.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Michael Wilson
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                micheal@trezo.com
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Website
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    In Progress
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user14.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Amanda Clark
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                amanda@trezo.com
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Paid
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Confirmed
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            delete
                                                        </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user15.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                        <span class="block font-medium">
                                                            Jennifer Taylor
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                taylor@trezo.com
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Others
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                    Rejected
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[9px]">
                                                    <button type="button" class="text-primary-500 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            visibility
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                        <i class="material-symbols-outlined !text-md">
                                                            edit
                                                        </i>
                                                    </button>
                                                    <button type="button" class="text-danger-500 leading-none">
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
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="recentLeadsTableDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="recentLeadsTableDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#recentLeadsTable" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
    <pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
    <code class="language-markup" id="recentLeadsTable">
    &lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
    &lt;table class=&quot;w-full&quot;&gt;
        &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Customer
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Email
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Source
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Status
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Action
                &lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user11.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                David Brown
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    david@trezo.com
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Organic
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                        Confirmed
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user12.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Sarah Miller
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    sarah@trezo.com
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Social
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs&quot;&gt;
                        Pending
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user13.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Michael Wilson
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    micheal@trezo.com
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Website
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                        In Progress
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user14.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Amanda Clark
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    amanda@trezo.com
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Paid
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                        Confirmed
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user15.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Jennifer Taylor
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    taylor@trezo.com
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Others
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs&quot;&gt;
                        Rejected
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
    &lt;/div&gt;
    &lt;div class=&quot;px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        Showing 5 of 36 results
    &lt;/p&gt;
    &lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_left
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
                1
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                2
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                3
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                4
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_right
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
    &lt;/div&gt;
    </code>
    </pre>
                        </div>
                    </div>

                </div>
            </div>

            <!-- All Projects -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            All Projects
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
                <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        ID
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Project Name
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Client
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Assignees
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Budget
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Start Date
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        End Date
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Status
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #854
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/project-overview" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Project CyberSphere
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        NovaTech Solutions
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user15.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user11.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user6.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user9.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center dark:border-dark">
                                                +10
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            $4,500
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            25 Mar 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            25 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Finished
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #853
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/project-overview" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Digital Oasis Initiative
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        AlphaWave Innovations
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user7.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user8.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user9.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center dark:border-dark">
                                                +04
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            $6,800
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            20 Mar 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            20 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                            In Progress
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #852
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/project-overview" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            CloudScape Evolution
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        InnovateIQ Inc.
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user10.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user12.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center dark:border-dark">
                                                +07
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            $2,500
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            15 Mar 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            15 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-purple-50 dark:bg-[#15203c] text-purple-500 rounded-sm font-medium text-xs">
                                            Pending
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #851
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/project-overview" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            Data Dynamo Drive
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        BlueSky Technologies
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user13.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user14.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user15.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user12.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center dark:border-dark">
                                                +15
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            $7,500
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            10 Mar 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            10 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                            In Progress	
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #850
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <a href="/dashboard/project-overview" class="inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500">
                                            QuantumLeap Quest
                                        </a>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        NexGen Systems
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user7.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user9.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white dark:border-dark">
                                                <img alt="user-image" class="rounded-full" src="/assets/images/users/user6.jpg" />
                                            </div>
                                            <div class="w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center dark:border-dark">
                                                +03
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            $3,400
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            05 Mar 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            05 Apr 2025
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                            Finished
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
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
                <div class="mt-[15px] md:mt-[20px]"></div>
                <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="allProjectsTableDiv">
                    Click to See Code:
                </button>
                <div class="relative click-to-show-hide-code" id="allProjectsTableDiv">
                    <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#allProjectsTable" type="button">
                        <i class="ri-file-copy-line"></i>
                    </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="allProjectsTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
    &lt;table class=&quot;w-full&quot;&gt;
        &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    ID
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Project Name
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Client
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Assignees
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Budget
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Start Date
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    End Date
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Status
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Action
                &lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #854
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;a href=&quot;/dashboard/project-overview&quot; class=&quot;inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500&quot;&gt;
                        Project CyberSphere
                    &lt;/a&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    NovaTech Solutions
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user15.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user11.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user6.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user9.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center&quot;&gt;
                            +10
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        $4,500
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        25 Mar 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        25 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                        Finished
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #853
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;a href=&quot;/dashboard/project-overview&quot; class=&quot;inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500&quot;&gt;
                        Digital Oasis Initiative
                    &lt;/a&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    AlphaWave Innovations
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user7.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user8.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user9.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center&quot;&gt;
                            +04
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        $6,800
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        20 Mar 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        20 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs&quot;&gt;
                        In Progress
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #852
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;a href=&quot;/dashboard/project-overview&quot; class=&quot;inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500&quot;&gt;
                        CloudScape Evolution
                    &lt;/a&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    InnovateIQ Inc.
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user10.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user12.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center&quot;&gt;
                            +07
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        $2,500
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        15 Mar 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        15 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-purple-50 dark:bg-[#15203c] text-purple-500 rounded-sm font-medium text-xs&quot;&gt;
                        Pending
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #851
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;a href=&quot;/dashboard/project-overview&quot; class=&quot;inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500&quot;&gt;
                        Data Dynamo Drive
                    &lt;/a&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    BlueSky Technologies
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user13.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user14.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user15.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user12.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center&quot;&gt;
                            +15
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        $7,500
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        10 Mar 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        10 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs&quot;&gt;
                        In Progress	
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #850
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;a href=&quot;/dashboard/project-overview&quot; class=&quot;inline-block font-medium transition-all text-gray-500 dark:text-gray-400 hover:text-primary-500&quot;&gt;
                        QuantumLeap Quest
                    &lt;/a&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    NexGen Systems
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user7.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user9.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] rounded-full ltr:-mr-[13px] rtl:-ml-[13px] border border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; class=&quot;rounded-full&quot; src=&quot;/assets/images/users/user6.jpg&quot; /&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;w-[34px] h-[34px] text-xs rounded-full border border-white bg-primary-500 text-white font-medium flex items-center justify-center&quot;&gt;
                            +03
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        $3,400
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        05 Mar 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        05 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                        Finished
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        Showing 5 of 36 results
    &lt;/p&gt;
    &lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_left
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
                1
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                2
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                3
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                4
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_right
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;
</code>
</pre>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-[25px] mb-[25px]">

                <!-- My Tasks -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                My Tasks
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <div class="trezo-card-dropdown relative">
                                <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                    <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                        All Tasks
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
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            <div class="form-check relative top-[2px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Project Name
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Deadline
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="form-check relative top-[2px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <a href="#" class="font-medium transition-all hover:text-primary-500">
                                                Web Development
                                            </a>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            10 Jan 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="form-check relative top-[2px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <a href="#" class="font-medium transition-all hover:text-primary-500">
                                                UX/UI Design
                                            </a>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            05 Feb 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                In Progress
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="form-check relative top-[2px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <a href="#" class="font-medium transition-all hover:text-primary-500">
                                                React Development
                                            </a>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            28 Mar 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                Cancelled
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="form-check relative top-[2px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <a href="#" class="font-medium transition-all hover:text-primary-500">
                                                Python Research
                                            </a>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            09 Mar 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                Pending
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="form-check relative top-[2px]">
                                                <input type="checkbox" class="cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <a href="#" class="font-medium transition-all hover:text-primary-500">
                                                Web Development
                                            </a>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            10 Jan 2025
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
                            <p class="!mb-0 text-sm">
                                Showing 4 of 36 results
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
                    <div class="mt-[15px] md:mt-[20px]"></div>
                    <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="myTasksTableDiv">
                        Click to See Code:
                    </button>
                    <div class="relative click-to-show-hide-code" id="myTasksTableDiv">
                        <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#myTasksTable" type="button">
                            <i class="ri-file-copy-line"></i>
                        </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="myTasksTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
&lt;table class=&quot;w-full&quot;&gt;
    &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                &lt;/div&gt;
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                Project Name
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                Deadline
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                Status
            &lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;font-medium transition-all hover:text-primary-500&quot;&gt;
                    Web Development
                &lt;/a&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                10 Jan 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                    Completed
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;font-medium transition-all hover:text-primary-500&quot;&gt;
                    UX/UI Design
                &lt;/a&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                05 Feb 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                    In Progress
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;font-medium transition-all hover:text-primary-500&quot;&gt;
                    React Development
                &lt;/a&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                28 Mar 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs&quot;&gt;
                    Cancelled
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;font-medium transition-all hover:text-primary-500&quot;&gt;
                    Python Research
                &lt;/a&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                09 Mar 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs&quot;&gt;
                    Pending
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                    &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;a href=&quot;#&quot; class=&quot;font-medium transition-all hover:text-primary-500&quot;&gt;
                    Web Development
                &lt;/a&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                10 Jan 2025
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                    Completed
                &lt;/span&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between&quot;&gt;
&lt;p class=&quot;mb-0 text-sm&quot;&gt;
    Showing 4 of 36 results
&lt;/p&gt;
&lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            &lt;span class=&quot;opacity-0&quot;&gt;
                0
            &lt;/span&gt;
            &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                chevron_left
            &lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
            1
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            2
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            3
        &lt;/a&gt;
    &lt;/li&gt;
    &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
        &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
            &lt;span class=&quot;opacity-0&quot;&gt;
                0
            &lt;/span&gt;
            &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                chevron_right
            &lt;/i&gt;
        &lt;/a&gt;
    &lt;/li&gt;
&lt;/ol&gt;
&lt;/div&gt;
</code>
</pre>
                    </div>
                </div>

                <!-- Student's Progress -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Student's Progress
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
                    <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                        <div class="table-responsive overflow-x-auto">
                            <table class="w-full">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Name
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Course Name
                                        </th>
                                        <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium">
                                            Olivia Clark
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                Web Design
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 55%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium">
                                            Alexander Garcia
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                Python Dev
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-success-500 rounded-md" style="width: 70%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium">
                                            Chloe Lewis
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                Front-end
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-purple-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-purple-500 rounded-md" style="width: 30%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium">
                                            Ava Turner
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                Back-end
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md" style="width: 90%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium">
                                            Ryan Flores
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                Data Analytics
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md" style="width: 50%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium">
                                            John Doe
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <span class="text-gray-500 dark:text-gray-400">
                                                Plugin Dev
                                            </span>
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-purple-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-purple-500 rounded-md" style="width: 50%;"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
                            <p class="!mb-0 text-sm">
                                Items per pages: <strong>6</strong>
                            </p>
                            <div class="flex items-center">
                                <p class="!mb-0 text-sm">
                                    1 – 6 of 10
                                </p>
                                <ol class="ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0">
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
                    <div class="mt-[15px] md:mt-[20px]"></div>
                    <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="studentsProgressTableDiv">
                        Click to See Code:
                    </button>
                    <div class="relative click-to-show-hide-code" id="studentsProgressTableDiv">
                        <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#studentsProgressTable" type="button">
                            <i class="ri-file-copy-line"></i>
                        </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="studentsProgressTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
&lt;table class=&quot;w-full&quot;&gt;
    &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                Name
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                Course Name
            &lt;/th&gt;
            &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                Status
            &lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium&quot;&gt;
                Olivia Clark
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                    Web Design
                &lt;/span&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md&quot; style=&quot;width: 55%;&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium&quot;&gt;
                Alexander Garcia
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                    Python Dev
                &lt;/span&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;flex w-full h-[4px] overflow-hidden rounded-md bg-success-50 dark:bg-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-success-500 rounded-md&quot; style=&quot;width: 70%;&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium&quot;&gt;
                Chloe Lewis
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                    Front-end
                &lt;/span&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;flex w-full h-[4px] overflow-hidden rounded-md bg-purple-50 dark:bg-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-purple-500 rounded-md&quot; style=&quot;width: 30%;&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium&quot;&gt;
                Ava Turner
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                    Back-end
                &lt;/span&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;flex w-full h-[4px] overflow-hidden rounded-md bg-danger-50 dark:bg-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-danger-500 rounded-md&quot; style=&quot;width: 90%;&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium&quot;&gt;
                Ryan Flores
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                    Data Analytics
                &lt;/span&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;flex w-full h-[4px] overflow-hidden rounded-md bg-secondary-50 dark:bg-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-secondary-500 rounded-md&quot; style=&quot;width: 50%;&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036] font-medium&quot;&gt;
                John Doe
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                    Plugin Dev
                &lt;/span&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[13px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                &lt;div class=&quot;flex w-full h-[4px] overflow-hidden rounded-md bg-purple-50 dark:bg-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex flex-col justify-center overflow-hidden bg-purple-500 rounded-md&quot; style=&quot;width: 50%;&quot;&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between&quot;&gt;
&lt;p class=&quot;mb-0 text-sm&quot;&gt;
    Items per pages: &lt;strong&gt;6&lt;/strong&gt;
&lt;/p&gt;
&lt;div class=&quot;flex items-center&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        1 – 6 of 10
    &lt;/p&gt;
    &lt;ol class=&quot;ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0&quot;&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_left
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_right
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                    </div>
                </div>

                <!-- Group Lessons -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Group Lessons
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
                        <div class="table-responsive overflow-x-auto">
                            <table class="w-full">
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user20.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user21.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user6.jpg" class="rounded-full">
                                                    </div>
                                                </div>
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="block font-medium">
                                                        Digital Marketing
                                                    </span>
                                                    <span class="block mt-[5px] text-gray-500 dark:text-gray-400">
                                                        15 March 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                    arrow_outward
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user22.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user23.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user24.jpg" class="rounded-full">
                                                    </div>
                                                </div>
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="block font-medium">
                                                        Web Development
                                                    </span>
                                                    <span class="block mt-[5px] text-gray-500 dark:text-gray-400">
                                                        10 March 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                    arrow_outward
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user25.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user26.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user27.jpg" class="rounded-full">
                                                    </div>
                                                </div>
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="block font-medium">
                                                        UX/UI Design
                                                    </span>
                                                    <span class="block mt-[5px] text-gray-500 dark:text-gray-400">
                                                        05 March 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                    arrow_outward
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user28.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user29.jpg" class="rounded-full">
                                                    </div>
                                                    <div class="rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white dark:border-dark">
                                                        <img alt="user-image" src="/assets/images/users/user30.jpg" class="rounded-full">
                                                    </div>
                                                </div>
                                                <div class="ltr:ml-[10px] rtl:mr-[10px]">
                                                    <span class="block font-medium">
                                                        Content Writer
                                                    </span>
                                                    <span class="block mt-[5px] text-gray-500 dark:text-gray-400">
                                                        02 March 2025
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0">
                                            <a href="javascript:void(0);" class="inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                                <i class="material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2">
                                                    arrow_outward
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="sm:flex sm:items-center justify-between mt-[17px]">
                            <p class="!mb-0 text-sm">
                                Items per pages: <strong>5</strong>
                            </p>
                            <div class="flex items-center">
                                <p class="!mb-0 text-sm">
                                    1 – 4 of 10
                                </p>
                                <ol class="ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0">
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
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="groupLessonsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="groupLessonsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#groupLessons" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="groupLessons">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
&lt;table class=&quot;w-full&quot;&gt;
    &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user20.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user21.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user6.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[10px] rtl:mr-[10px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Digital Marketing
                        &lt;/span&gt;
                        &lt;span class=&quot;block mt-[5px] text-gray-500 dark:text-gray-400&quot;&gt;
                            15 March 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                    &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                        arrow_outward
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user22.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user23.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user24.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[10px] rtl:mr-[10px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Web Development
                        &lt;/span&gt;
                        &lt;span class=&quot;block mt-[5px] text-gray-500 dark:text-gray-400&quot;&gt;
                            10 March 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                    &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                        arrow_outward
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user25.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user26.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user27.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[10px] rtl:mr-[10px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            UX/UI Design
                        &lt;/span&gt;
                        &lt;span class=&quot;block mt-[5px] text-gray-500 dark:text-gray-400&quot;&gt;
                            05 March 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                    &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                        arrow_outward
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;div class=&quot;flex items-center&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user28.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user29.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;rounded-full w-[45px] h-[45px] text-xs ltr:-mr-[21px] rtl:-ml-[21px] ltr:last:mr-0 rtl:last:ml-0 border-[2px] border-white&quot;&gt;
                            &lt;img alt=&quot;user-image&quot; src=&quot;/assets/images/users/user30.jpg&quot; class=&quot;rounded-full&quot;&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;ltr:ml-[10px] rtl:mr-[10px]&quot;&gt;
                        &lt;span class=&quot;block font-medium&quot;&gt;
                            Content Writer
                        &lt;/span&gt;
                        &lt;span class=&quot;block mt-[5px] text-gray-500 dark:text-gray-400&quot;&gt;
                            02 March 2025
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/td&gt;
            &lt;td class=&quot;ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[17px] border-b border-gray-100 dark:border-[#172036] ltr:first:pl-0 ltr:last:pr-0 rtl:first:pr-0 rtl:last:pl-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;inline-block relative w-[36px] h-[36px] text-center text-gray-500 dark:text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white&quot;&gt;
                    &lt;i class=&quot;material-symbols-outlined absolute left-0 right-0 !text-lg top-1/2 -translate-y-1/2&quot;&gt;
                        arrow_outward
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;sm:flex sm:items-center justify-between mt-[17px]&quot;&gt;
&lt;p class=&quot;mb-0 text-sm&quot;&gt;
    Items per pages: &lt;strong&gt;5&lt;/strong&gt;
&lt;/p&gt;
&lt;div class=&quot;flex items-center&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        1 – 4 of 10
    &lt;/p&gt;
    &lt;ol class=&quot;ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0&quot;&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_left
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_right
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                </div>
                    
            </div>

            <!-- Performance of Agents -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Performance of Agents
                        </h5>
                    </div>
                    <div class="trezo-card-subtitle">
                        <div class="trezo-card-dropdown relative">
                            <button type="button" class="trezo-card-dropdown-btn inline-block transition-all hover:text-primary-500" id="dropdownToggleBtn">
                                <span class="inline-block relative ltr:pr-[17px] ltr:md:pr-[20px] rtl:pl-[17px] rtl:ml:pr-[20px]">
                                    Last 30 Days
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
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        ID
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Agent Name
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Total Tickets
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Open Tickets
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Resolved Tickets
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Avg. Resolution Time
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Satisfaction Rate
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #854
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Oliver Khan
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            230
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            20
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            75
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            2.5 hours
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="rounded-full relative w-[40px] h-[40px]">
                                            <!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ -->
                                            <svg width="50" height="50" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                                <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                                <circle r="90" cx="100" cy="100" stroke="#605DFF" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="113px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                            </svg>
                                            <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                                80%
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #853
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user13.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Ava Cooper
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            180
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            16
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            35
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            1.4 hours
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="rounded-full relative w-[40px] h-[40px]">
                                            <svg width="50" height="50" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                                <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                                <circle r="90" cx="100" cy="100" stroke="#AD63F6" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="141px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                            </svg>
                                            <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                                75%
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #852
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user14.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Isabella Evans
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            150
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            35
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            45
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            3.2 hours
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="rounded-full relative w-[40px] h-[40px]">
                                            <svg width="50" height="50" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                                <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                                <circle r="90" cx="100" cy="100" stroke="#25B003" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="113px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                            </svg>
                                            <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                                80%
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #851
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user15.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Mia Hughes
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            75
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            86
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            4.5 hours
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="rounded-full relative w-[40px] h-[40px]">
                                            <svg width="50" height="50" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                                <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                                <circle r="90" cx="100" cy="100" stroke="#3584FC" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="0px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                            </svg>
                                            <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                                100%
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #850
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user16.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Noah Mitchell
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            320
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            90
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            10
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            3.8 hours
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="rounded-full relative w-[40px] h-[40px]">
                                            <svg width="50" height="50" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                                <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                                <circle r="90" cx="100" cy="100" stroke="#FD5812" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="0px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                            </svg>
                                            <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                                100%
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    delete
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            #849
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center">
                                            <div class="rounded-full w-[40px]">
                                                <img src="/assets/images/users/user17.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <span class="block font-medium">
                                                    Sophia Carter
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            120
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            55
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            20
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <span class="text-gray-500 dark:text-gray-400">
                                            5.3 hours
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="rounded-full relative w-[40px] h-[40px]">
                                            <svg width="50" height="50" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" class="relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]" style="transform:rotate(-90deg)">
                                                <circle r="90" cx="100" cy="100" fill="transparent" stroke="transparent" stroke-width="16px" stroke-dasharray="565.48px" stroke-dashoffset="0"></circle>
                                                <circle r="90" cx="100" cy="100" stroke="#605DFF" stroke-width="16px" stroke-linecap="round" stroke-dashoffset="226px" fill="transparent" stroke-dasharray="565.48px"></circle>
                                            </svg>
                                            <span class="block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute">
                                                60%
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                        <div class="flex items-center gap-[9px]">
                                            <button type="button" class="text-primary-500 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    visibility
                                                </i>
                                            </button>
                                            <button type="button" class="text-gray-500 dark:text-gray-400 leading-none">
                                                <i class="material-symbols-outlined !text-md">
                                                    edit
                                                </i>
                                            </button>
                                            <button type="button" class="text-danger-500 leading-none">
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
                            Showing 6 of 36 results
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
                <div class="mt-[15px] md:mt-[20px]"></div>
                <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="performanceOfAgentsTableDiv">
                    Click to See Code:
                </button>
                <div class="relative click-to-show-hide-code" id="performanceOfAgentsTableDiv">
                    <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#performanceOfAgentsTable" type="button">
                        <i class="ri-file-copy-line"></i>
                    </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="performanceOfAgentsTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
    &lt;table class=&quot;w-full&quot;&gt;
        &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    ID
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Agent Name
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Total Tickets
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Open Tickets
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Resolved Tickets
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Avg. Resolution Time
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Satisfaction Rate
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Action
                &lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #854
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user6.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Oliver Khan
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        230
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        20
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        75
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        2.5 hours
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;rounded-full relative w-[40px] h-[40px]&quot;&gt;
                        &lt;!-- Create Here: https://nikitahl.github.io/svg-circle-progress-generator/ --&gt;
                        &lt;svg width=&quot;50&quot; height=&quot;50&quot; viewBox=&quot;-25 -25 250 250&quot; version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]&quot; style=&quot;transform:rotate(-90deg)&quot;&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; fill=&quot;transparent&quot; stroke=&quot;transparent&quot; stroke-width=&quot;16px&quot; stroke-dasharray=&quot;565.48px&quot; stroke-dashoffset=&quot;0&quot;&gt;&lt;/circle&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; stroke=&quot;#605DFF&quot; stroke-width=&quot;16px&quot; stroke-linecap=&quot;round&quot; stroke-dashoffset=&quot;113px&quot; fill=&quot;transparent&quot; stroke-dasharray=&quot;565.48px&quot;&gt;&lt;/circle&gt;
                        &lt;/svg&gt;
                        &lt;span class=&quot;block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute&quot;&gt;
                            80%
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #853
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user13.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Ava Cooper
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        180
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        16
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        35
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        1.4 hours
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;rounded-full relative w-[40px] h-[40px]&quot;&gt;
                        &lt;svg width=&quot;50&quot; height=&quot;50&quot; viewBox=&quot;-25 -25 250 250&quot; version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]&quot; style=&quot;transform:rotate(-90deg)&quot;&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; fill=&quot;transparent&quot; stroke=&quot;transparent&quot; stroke-width=&quot;16px&quot; stroke-dasharray=&quot;565.48px&quot; stroke-dashoffset=&quot;0&quot;&gt;&lt;/circle&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; stroke=&quot;#AD63F6&quot; stroke-width=&quot;16px&quot; stroke-linecap=&quot;round&quot; stroke-dashoffset=&quot;141px&quot; fill=&quot;transparent&quot; stroke-dasharray=&quot;565.48px&quot;&gt;&lt;/circle&gt;
                        &lt;/svg&gt;
                        &lt;span class=&quot;block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute&quot;&gt;
                            75%
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #852
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user14.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Isabella Evans
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        150
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        35
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        45
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        3.2 hours
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;rounded-full relative w-[40px] h-[40px]&quot;&gt;
                        &lt;svg width=&quot;50&quot; height=&quot;50&quot; viewBox=&quot;-25 -25 250 250&quot; version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]&quot; style=&quot;transform:rotate(-90deg)&quot;&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; fill=&quot;transparent&quot; stroke=&quot;transparent&quot; stroke-width=&quot;16px&quot; stroke-dasharray=&quot;565.48px&quot; stroke-dashoffset=&quot;0&quot;&gt;&lt;/circle&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; stroke=&quot;#25B003&quot; stroke-width=&quot;16px&quot; stroke-linecap=&quot;round&quot; stroke-dashoffset=&quot;113px&quot; fill=&quot;transparent&quot; stroke-dasharray=&quot;565.48px&quot;&gt;&lt;/circle&gt;
                        &lt;/svg&gt;
                        &lt;span class=&quot;block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute&quot;&gt;
                            80%
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #851
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user15.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Mia Hughes
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        75
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        86
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        25
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        4.5 hours
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;rounded-full relative w-[40px] h-[40px]&quot;&gt;
                        &lt;svg width=&quot;50&quot; height=&quot;50&quot; viewBox=&quot;-25 -25 250 250&quot; version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]&quot; style=&quot;transform:rotate(-90deg)&quot;&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; fill=&quot;transparent&quot; stroke=&quot;transparent&quot; stroke-width=&quot;16px&quot; stroke-dasharray=&quot;565.48px&quot; stroke-dashoffset=&quot;0&quot;&gt;&lt;/circle&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; stroke=&quot;#3584FC&quot; stroke-width=&quot;16px&quot; stroke-linecap=&quot;round&quot; stroke-dashoffset=&quot;0px&quot; fill=&quot;transparent&quot; stroke-dasharray=&quot;565.48px&quot;&gt;&lt;/circle&gt;
                        &lt;/svg&gt;
                        &lt;span class=&quot;block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute&quot;&gt;
                            100%
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #850
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user16.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Noah Mitchell
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        320
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        90
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        10
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        3.8 hours
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;rounded-full relative w-[40px] h-[40px]&quot;&gt;
                        &lt;svg width=&quot;50&quot; height=&quot;50&quot; viewBox=&quot;-25 -25 250 250&quot; version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]&quot; style=&quot;transform:rotate(-90deg)&quot;&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; fill=&quot;transparent&quot; stroke=&quot;transparent&quot; stroke-width=&quot;16px&quot; stroke-dasharray=&quot;565.48px&quot; stroke-dashoffset=&quot;0&quot;&gt;&lt;/circle&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; stroke=&quot;#FD5812&quot; stroke-width=&quot;16px&quot; stroke-linecap=&quot;round&quot; stroke-dashoffset=&quot;0px&quot; fill=&quot;transparent&quot; stroke-dasharray=&quot;565.48px&quot;&gt;&lt;/circle&gt;
                        &lt;/svg&gt;
                        &lt;span class=&quot;block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute&quot;&gt;
                            100%
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #849
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;rounded-full w-[40px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user17.jpg&quot; class=&quot;inline-block rounded-full&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;ltr:ml-[12px] rtl:mr-[12px]&quot;&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Sophia Carter
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        120
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        55
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        20
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        5.3 hours
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;rounded-full relative w-[40px] h-[40px]&quot;&gt;
                        &lt;svg width=&quot;50&quot; height=&quot;50&quot; viewBox=&quot;-25 -25 250 250&quot; version=&quot;1.1&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; class=&quot;relative -top-[5px] ltr:-left-[5px] rtl:-right-[5px]&quot; style=&quot;transform:rotate(-90deg)&quot;&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; fill=&quot;transparent&quot; stroke=&quot;transparent&quot; stroke-width=&quot;16px&quot; stroke-dasharray=&quot;565.48px&quot; stroke-dashoffset=&quot;0&quot;&gt;&lt;/circle&gt;
                            &lt;circle r=&quot;90&quot; cx=&quot;100&quot; cy=&quot;100&quot; stroke=&quot;#605DFF&quot; stroke-width=&quot;16px&quot; stroke-linecap=&quot;round&quot; stroke-dashoffset=&quot;226px&quot; fill=&quot;transparent&quot; stroke-dasharray=&quot;565.48px&quot;&gt;&lt;/circle&gt;
                        &lt;/svg&gt;
                        &lt;span class=&quot;block text-gray-500 dark:text-gray-400 top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 text-[10px] absolute&quot;&gt;
                            60%
                        &lt;/span&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        Showing 6 of 36 results
    &lt;/p&gt;
    &lt;ol class=&quot;mt-[10px] sm:mt-0&quot;&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_left
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white&quot;&gt;
                1
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                2
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                3
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                4
            &lt;/a&gt;
        &lt;/li&gt;
        &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
            &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                &lt;span class=&quot;opacity-0&quot;&gt;
                    0
                &lt;/span&gt;
                &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                    chevron_right
                &lt;/i&gt;
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ol&gt;
&lt;/div&gt;
</code>
</pre>
                </div>
            </div>

            <div class="grid lg:grid-cols-5 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Recent Customer Ratings -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    Recent Customer Ratings
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
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Name
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Date
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Ratings
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user13.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Olivia Clark
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            Big Data
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    28 April 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="text-[15px] leading-none text-orange-400">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user16.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Ava Turner
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            UX/UI
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    25 April 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="text-[15px] leading-none text-orange-400">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user17.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Lucas Morgan
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            Developer
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    23 April 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="text-[15px] leading-none text-orange-400">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user18.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Isabella Cooper
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            Designer
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    20 April 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="text-[15px] leading-none text-orange-400">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center">
                                                    <div class="w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]">
                                                        <img src="/assets/images/users/user16.jpg" class="rounded-full inline-block" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="block font-medium">
                                                            Ethan Parker
                                                        </span>
                                                        <span class="text-gray-500 dark:text-gray-400 block mt-px">
                                                            Python
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    15 April 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="text-[15px] leading-none text-orange-400">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between">
                                <p class="!mb-0 text-sm">
                                    Items per pages: <strong>5</strong>
                                </p>
                                <div class="flex items-center">
                                    <p class="!mb-0 text-sm">
                                        1 – 5 of 10
                                    </p>
                                    <ol class="ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0">
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
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="recentCustomerRatingsDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="recentCustomerRatingsDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#recentCustomerRatings" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="recentCustomerRatings">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
    &lt;table class=&quot;w-full&quot;&gt;
        &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Name
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Date
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Ratings
                &lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user13.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Olivia Clark
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                Big Data
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        28 April 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;text-[15px] leading-none text-orange-400&quot;&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user16.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Ava Turner
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                UX/UI
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        25 April 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;text-[15px] leading-none text-orange-400&quot;&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-half-fill&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user17.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Lucas Morgan
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                Developer
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        23 April 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;text-[15px] leading-none text-orange-400&quot;&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-line&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user18.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Isabella Cooper
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                Designer
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        20 April 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;text-[15px] leading-none text-orange-400&quot;&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-half-fill&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center&quot;&gt;
                        &lt;div class=&quot;w-[44px] h-[44px] ltr:mr-[12px] rtl:ml-[12px]&quot;&gt;
                            &lt;img src=&quot;/assets/images/users/user16.jpg&quot; class=&quot;rounded-full inline-block&quot; alt=&quot;user-image&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class=&quot;block font-medium&quot;&gt;
                                Ethan Parker
                            &lt;/span&gt;
                            &lt;span class=&quot;text-gray-500 dark:text-gray-400 block mt-px&quot;&gt;
                                Python
                            &lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        15 April 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;text-[15px] leading-none text-orange-400&quot;&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                        &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[20px] md:px-[25px] pt-[12px] md:pt-[14px] sm:flex sm:items-center justify-between&quot;&gt;
    &lt;p class=&quot;mb-0 text-sm&quot;&gt;
        Items per pages: &lt;strong&gt;5&lt;/strong&gt;
    &lt;/p&gt;
    &lt;div class=&quot;flex items-center&quot;&gt;
        &lt;p class=&quot;mb-0 text-sm&quot;&gt;
            1 – 5 of 10
        &lt;/p&gt;
        &lt;ol class=&quot;ltr:ml-[10px] rtl:mr-[10px] mt-[10px] sm:mt-0&quot;&gt;
            &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                    &lt;span class=&quot;opacity-0&quot;&gt;
                        0
                    &lt;/span&gt;
                    &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                        chevron_left
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0&quot;&gt;
                &lt;a href=&quot;javascript:void(0);&quot; class=&quot;w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500&quot;&gt;
                    &lt;span class=&quot;opacity-0&quot;&gt;
                        0
                    &lt;/span&gt;
                    &lt;i class=&quot;material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2&quot;&gt;
                        chevron_right
                    &lt;/i&gt;
                &lt;/a&gt;
            &lt;/li&gt;
        &lt;/ol&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-3">

                    <!-- To Do List -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0">
                                    To Do List
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle mt-[15px] sm:mt-0">
                                <form class="relative sm:w-[265px]">
                                    <label class="leading-none absolute ltr:left-[13px] rtl:right-[13px] text-black dark:text-white mt-px top-1/2 -translate-y-1/2">
                                        <i class="material-symbols-outlined !text-[20px]">
                                            search
                                        </i>
                                    </label>
                                    <input type="text" placeholder="Search here....." class="bg-gray-50 border border-gray-50 h-[36px] text-xs rounded-md w-full block text-black pt-[11px] pb-[12px] ltr:pl-[38px] rtl:pr-[38px] ltr:pr-[13px] ltr:md:pr-[16px] rtl:pl-[13px] rtl:md:pl-[16px] placeholder:text-gray-500 outline-0 dark:bg-[#15203c] dark:text-white dark:border-[#15203c] dark:placeholder:text-gray-400">
                                </form>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="table-responsive overflow-x-auto">
                                <table class="w-full">
                                    <thead class="text-black dark:text-white">
                                        <tr>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                ID
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Task Title
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Assigned To
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Due Date
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Priority
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Status
                                            </th>
                                            <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #854
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Network Infrastructure
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Oliver Clark
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    30 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    High
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Finished
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #853
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Cloud Migration
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Ethan Baker
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    25 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    Low
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs">
                                                    Pending
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #852
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Website Revamp
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Sophia Carter
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    20 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    Medium
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs">
                                                    In Progress
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #851
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    Mobile Application
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Ava Cooper
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    15 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    High
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                    Finished
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <div class="form-check relative top-[2px]">
                                                    <input type="checkbox" class="cursor-pointer">
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    #850
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                                    System Deployment
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                Isabella Evans
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    10 Apr 2025
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="text-gray-500 dark:text-gray-400">
                                                    Low
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                                <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                    Cancelled
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                            <div class="px-[25px] pt-[12px] md:pt-[15px] ltr:text-right rtl:text-left">
                                <button type="button" class="inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white" id="add-new-popup-toggle">
                                    <span class="inline-block relative ltr:pl-[22px] rtl:pr-[22px]">
                                        <i class="material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2">
                                            add
                                        </i>
                                        Add New Task
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="mt-[15px] md:mt-[20px]"></div>
                        <button type="button" class="clickToSeeCodeBtn inline-block text-black dark:text-white font-semibold" data-target="toDoListTableDiv">
                            Click to See Code:
                        </button>
                        <div class="relative click-to-show-hide-code" id="toDoListTableDiv">
                            <button class="absolute text-lg ltr:right-[20px] rtl:left-[20px] top-[20px] transition-all text-primary-500 copy-btn w-[35px] h-[35px] inline-block border border-primary-500 bg-white rounded-sm dark:bg-[#0c1427]" data-clipboard-target="#toDoListTable" type="button">
                                <i class="ri-file-copy-line"></i>
                            </button>
<pre class="line-numbers !mt-[15px] !py-0 !px-[20px] md:!px-[25px] mb-0">
<code class="language-markup" id="toDoListTable">
&lt;div class=&quot;table-responsive overflow-x-auto&quot;&gt;
    &lt;table class=&quot;w-full&quot;&gt;
        &lt;thead class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    ID
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Task Title
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Assigned To
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Due Date
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Priority
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Status
                &lt;/th&gt;
                &lt;th class=&quot;font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-primary-50 dark:bg-[#15203c] whitespace-nowrap&quot;&gt;
                    Action
                &lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody class=&quot;text-black dark:text-white&quot;&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #854
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;block font-medium text-gray-500 dark:text-gray-400&quot;&gt;
                        Network Infrastructure
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Oliver Clark
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        30 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        High
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                        Finished
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;View&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Edit&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Delete&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #853
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;block font-medium text-gray-500 dark:text-gray-400&quot;&gt;
                        Cloud Migration
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Ethan Baker
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        25 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        Low
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-warning-50 dark:bg-[#15203c] text-warning-700 rounded-sm font-medium text-xs&quot;&gt;
                        Pending
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;View&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Edit&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Delete&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #852
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;block font-medium text-gray-500 dark:text-gray-400&quot;&gt;
                        Website Revamp
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Sophia Carter
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        20 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        Medium
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-success-50 dark:bg-[#15203c] text-success-600 rounded-sm font-medium text-xs&quot;&gt;
                        In Progress
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;View&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Edit&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Delete&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #851
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;block font-medium text-gray-500 dark:text-gray-400&quot;&gt;
                        Mobile Application
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Ava Cooper
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        15 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        High
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs&quot;&gt;
                        Finished
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;View&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Edit&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Delete&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;form-check relative top-[2px]&quot;&gt;
                        &lt;input type=&quot;checkbox&quot; class=&quot;cursor-pointer&quot;&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        #850
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;block font-medium text-gray-500 dark:text-gray-400&quot;&gt;
                        System Deployment
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    Isabella Evans
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        10 Apr 2025
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;text-gray-500 dark:text-gray-400&quot;&gt;
                        Low
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;span class=&quot;px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs&quot;&gt;
                        Cancelled
                    &lt;/span&gt;
                &lt;/td&gt;
                &lt;td class=&quot;ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]&quot;&gt;
                    &lt;div class=&quot;flex items-center gap-[9px]&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-primary-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;View&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                visibility
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-gray-500 dark:text-gray-400 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Edit&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                edit
                            &lt;/i&gt;
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;text-danger-500 leading-none custom-tooltip&quot; id=&quot;customTooltip&quot; data-text=&quot;Delete&quot;&gt;
                            &lt;i class=&quot;material-symbols-outlined !text-md&quot;&gt;
                                delete
                            &lt;/i&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
&lt;div class=&quot;px-[25px] pt-[12px] md:pt-[15px] ltr:text-right rtl:text-left&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;inline-block transition-all rounded-md font-medium px-[13px] py-[6px] text-primary-500 border border-primary-500 hover:bg-primary-500 hover:text-white&quot; id=&quot;add-new-popup-toggle&quot;&gt;
        &lt;span class=&quot;inline-block relative ltr:pl-[22px] rtl:pr-[22px]&quot;&gt;
            &lt;i class=&quot;material-symbols-outlined !text-[22px] absolute ltr:-left-[4px] rtl:-right-[4px] top-1/2 -translate-y-1/2&quot;&gt;
                add
            &lt;/i&gt;
            Add New Task
        &lt;/span&gt;
    &lt;/button&gt;
&lt;/div&gt;

&lt;!-- Add New Popup --&gt;
&lt;div class=&quot;add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto&quot; id=&quot;add-new-popup&quot;&gt;
    &lt;div class=&quot;popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto&quot;&gt;
        &lt;div class=&quot;trezo-card w-full bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md&quot;&gt;
            &lt;div class=&quot;trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md&quot;&gt;
                &lt;div class=&quot;trezo-card-title&quot;&gt;
                    &lt;h5 class=&quot;mb-0&quot;&gt;
                        Add New Task
                    &lt;/h5&gt;
                &lt;/div&gt;
                &lt;div class=&quot;trezo-card-subtitle&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500&quot; id=&quot;add-new-popup-toggle&quot;&gt;
                        &lt;i class=&quot;ri-close-fill&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class=&quot;trezo-card-content&quot;&gt;
                &lt;form&gt;
                    &lt;div class=&quot;grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]&quot;&gt;
                        &lt;div class=&quot;sm:col-span-2&quot;&gt;
                            &lt;label class=&quot;mb-[10px] text-black dark:text-white font-medium block&quot;&gt;
                                Task Name
                            &lt;/label&gt;
                            &lt;input type=&quot;text&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot; placeholder=&quot;Task name&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;label class=&quot;mb-[10px] text-black dark:text-white font-medium block&quot;&gt;
                                Assigned To
                            &lt;/label&gt;
                            &lt;select class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500&quot;&gt;
                                &lt;option&gt;
                                    Select
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Shawn Kennedy
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Roberto Cruz
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Juli Johnson
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Catalina Engles
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Louis Nagle
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Michael Marquez
                                &lt;/option&gt;
                            &lt;/select&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;label class=&quot;mb-[10px] text-black dark:text-white font-medium block&quot;&gt;
                                Due Date
                            &lt;/label&gt;
                            &lt;input type=&quot;date&quot; class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500&quot;&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;label class=&quot;mb-[10px] text-black dark:text-white font-medium block&quot;&gt;
                                Priority
                            &lt;/label&gt;
                            &lt;select class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500&quot;&gt;
                                &lt;option&gt;
                                    Select
                                &lt;/option&gt;
                                &lt;option&gt;
                                    High
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Medium
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Low
                                &lt;/option&gt;
                            &lt;/select&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;label class=&quot;mb-[10px] text-black dark:text-white font-medium block&quot;&gt;
                                Status
                            &lt;/label&gt;
                            &lt;select class=&quot;h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500&quot;&gt;
                                &lt;option&gt;
                                    Select
                                &lt;/option&gt;
                                &lt;option&gt;
                                    In Progress
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Pending
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Completed
                                &lt;/option&gt;
                                &lt;option&gt;
                                    Not Started
                                &lt;/option&gt;
                            &lt;/select&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;mt-[20px] md:mt-[25px] ltr:text-right rtl:text-left&quot;&gt;
                        &lt;button type=&quot;button&quot; class=&quot;rounded-md inline-block transition-all font-medium ltr:mr-[15px] rtl:ml-[15px] px-[26.5px] py-[12px] bg-danger-500 text-white hover:bg-danger-400&quot; id=&quot;add-new-popup-toggle&quot;&gt;
                            Cancel
                        &lt;/button&gt;
                        &lt;button type=&quot;button&quot; class=&quot;inline-block bg-primary-500 text-white py-[12px] px-[26.5px] transition-all rounded-md hover:bg-primary-400&quot;&gt;
                            &lt;span class=&quot;inline-block relative ltr:pl-[25px] rtl:pr-[25px]&quot;&gt;
                                &lt;i class=&quot;material-symbols-outlined !text-[20px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2&quot;&gt;
                                    add
                                &lt;/i&gt;
                                Create
                            &lt;/span&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/form&gt;
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

        <!-- Add New Popup -->
        <div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="add-new-popup">
            <div class="popup-dialog flex transition-all max-w-[550px] min-h-full items-center mx-auto">
                <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header bg-gray-50 dark:bg-[#15203c] mb-[20px] md:mb-[25px] flex items-center justify-between -mx-[20px] md:-mx-[25px] -mt-[20px] md:-mt-[25px] p-[20px] md:p-[25px] rounded-t-md">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0">
                                Add New Task
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <button type="button" class="text-[23px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="add-new-popup-toggle">
                                <i class="ri-close-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="trezo-card-content">
                        <form>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px] md:gap-[25px]">
                                <div class="sm:col-span-2">
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Task Name
                                    </label>
                                    <input type="text" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500" placeholder="Task name">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Assigned To
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option>
                                            Select
                                        </option>
                                        <option>
                                            Shawn Kennedy
                                        </option>
                                        <option>
                                            Roberto Cruz
                                        </option>
                                        <option>
                                            Juli Johnson
                                        </option>
                                        <option>
                                            Catalina Engles
                                        </option>
                                        <option>
                                            Louis Nagle
                                        </option>
                                        <option>
                                            Michael Marquez
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Due Date
                                    </label>
                                    <input type="date" class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500">
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Priority
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option>
                                            Select
                                        </option>
                                        <option>
                                            High
                                        </option>
                                        <option>
                                            Medium
                                        </option>
                                        <option>
                                            Low
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <label class="mb-[10px] text-black dark:text-white font-medium block">
                                        Status
                                    </label>
                                    <select class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[14px] block w-full outline-0 cursor-pointer transition-all focus:border-primary-500">
                                        <option>
                                            Select
                                        </option>
                                        <option>
                                            In Progress
                                        </option>
                                        <option>
                                            Pending
                                        </option>
                                        <option>
                                            Completed
                                        </option>
                                        <option>
                                            Not Started
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-[20px] md:mt-[25px] ltr:text-right rtl:text-left">
                                <button type="button" class="rounded-md inline-block transition-all font-medium ltr:mr-[15px] rtl:ml-[15px] px-[26.5px] py-[12px] bg-danger-500 text-white hover:bg-danger-400" id="add-new-popup-toggle">
                                    Cancel
                                </button>
                                <button type="button" class="inline-block bg-primary-500 text-white py-[12px] px-[26.5px] transition-all rounded-md hover:bg-primary-400">
                                    <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px]">
                                        <i class="material-symbols-outlined !text-[20px] absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2">
                                            add
                                        </i>
                                        Create
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.front.scripts')
    </body>
</html>
