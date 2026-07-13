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
                    Dish Details
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
                        Restaurant
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Menus
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Dish Details
                    </li>
                </ol>
            </div>

            <!-- Dish Details -->
            <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="2xl:col-span-1">
                    <div class="trezo-card">
                        <div class="trezo-card-content" id="dishDetailsImageSlides">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md cursor-pointer w-full" src="/assets/images/restaurant/dish-details1.jpg" alt="dish-details-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md cursor-pointer w-full" src="/assets/images/restaurant/dish-details2.jpg" alt="dish-details-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md cursor-pointer w-full" src="/assets/images/restaurant/dish-details3.jpg" alt="dish-details-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md cursor-pointer w-full" src="/assets/images/restaurant/dish-details4.jpg" alt="dish-details-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div thumbsSlider class="swiper mySwiper mt-[15px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/restaurant/dish-details1.jpg" alt="dish-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/restaurant/dish-details2.jpg" alt="dish-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/restaurant/dish-details3.jpg" alt="dish-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/restaurant/dish-details4.jpg" alt="dish-details-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:col-span-2">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md lg:h-full">
                        <div class="trezo-card-content">
                            <div class="flex items-center justify-between">
                                <div>
                                    <span class="block text-xs">
                                        Code: 3479
                                    </span>
                                    <h2 class="!text-lg md:!text-xl !my-[8.5px]">
                                        Beef Cheesy Burger
                                    </h2>
                                    <span class="block font-semibold text-danger-600 md:text-md">
                                        $11.50 USD
                                    </span>
                                </div>
                                <div class="flex items-center justify-end leading-none gap-[2px]">
                                    <i class="ri-star-fill text-orange-500"></i>
                                    <i class="ri-star-fill text-orange-500"></i>
                                    <i class="ri-star-fill text-orange-500"></i>
                                    <i class="ri-star-fill text-orange-500"></i>
                                    <i class="ri-star-fill text-orange-500"></i>
                                    <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                        5.0
                                    </span>
                                </div>
                            </div>
                            <div class="h-[1px] bg-gray-100 dark:bg-[#172036] my-[20px] md:my-[25px]"></div>
                            <h4 class="!font-semibold !text-lg !mb-[12px]">
                                Ingredients Details
                            </h4>
                            <p>
                                Spaghetti, shredded chicken, buffalo sauce, ranch dressing, mozzarella.
                            </p>
                            <div class="mb-[20px] md:mb-[25px]"></div>
                            <h4 class="!font-semibold !text-lg !mb-[15px]">
                                Nutrition Values
                            </h4>
                            <ul class="mb-[20px] md:mb-[25px] grid grid-cols-1 sm:grid-cols-2">
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Calories
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">1200</span> Kcal
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Carbs
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">120</span> gm
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Protein
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">120</span> gm
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Fibres
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">400</span> gm
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Fat
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">890</span> gm
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Vitamins
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">350</span> gm
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Sugar
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">30</span> gm
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Minerals
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">5</span> gm
                                    </span>
                                </li>
                            </ul>
                            <h4 class="!font-semibold !text-lg flex items-center justify-between">
                                Orders In Queue
                                <span>17</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviews -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">
                            Reviews
                        </h5>
                    </div>
                </div>
                <div class="trezo-card-content">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        User ID
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Customer Name
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Ratings
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Reviews
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0">
                                        Date
                                    </th>
                                    <th class="whitespace-nowrap uppercase text-[10px] font-bold tracking-[1px] ltr:text-left rtl:text-right pt-0 pb-[11px] px-[20px] text-gray-500 dark:text-gray-400 ltr:first:pl-0 rtl:first:pr-0 ltr:last:pr-0 rtl:first:pl-0"></th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #001
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[30px]">
                                                <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Joanna Watson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px] font-semibold">
                                                5.0
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="whitespace-normal w-[620px]">
                                            <span class="block text-xs mb-[5px] font-semibold text-gray-600 dark:text-gray-400">
                                                Amazing Ambiance and Delicious Food!
                                            </span>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                                Trezo was a fantastic dining experience. The ambiance is warm and inviting, perfect for a date night or celebration. I ordered the truffle pasta, which was rich and perfectly seasoned. The service was impeccable, and the staff made us feel like family. Highly recommend!
                                            </p>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            13 Nov, 25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #002
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[30px]">
                                                <img src="/assets/images/users/user59.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Jenelia Anderson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px] font-semibold">
                                                4.9
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-normal px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top w-[620px]">
                                        <span class="block text-xs mb-[5px] font-semibold text-gray-600 dark:text-gray-400">
                                            Best Brunch Spot in Town
                                        </span>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            Visited Trezo for brunch with friends, and it exceeded our expectations. The avocado toast was fresh, and their mimosas were spot-on. Our server was attentive without being intrusive. Definitely coming back!
                                        </p>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            14 Nov, 25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            #003
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center gap-[10px]">
                                            <div class="rounded-full w-[30px]">
                                                <img src="/assets/images/users/user60.jpg" class="inline-block rounded-full" alt="user-image">
                                            </div>
                                            <span class="font-semibold inline-block">
                                                Jonathon Ronan
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px] font-semibold">
                                                4.0
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-normal px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top w-[620px]">
                                        <span class="block text-xs mb-[5px] font-semibold text-gray-600 dark:text-gray-400">
                                            Good Food, Slow Service
                                        </span>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">
                                            The food at Trezo was delicious, but the service was a bit slow. We had to wait a while for our appetizers, and our main course was delayed. It’s a nice spot, but they could work on speeding up their service.
                                        </p>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
                                        <span class="block text-xs font-semibold text-gray-600 dark:text-gray-400">
                                            15 Nov, 25
                                        </span>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] ltr:first:pl-0 rtl:first:pr-0 border-b border-primary-50 dark:border-[#172036] ltr:last:pr-0 rtl:last:pl-0 align-top">
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
                    <div class="pt-[11px] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-xs">
                            Showing 3 of 36 results
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
