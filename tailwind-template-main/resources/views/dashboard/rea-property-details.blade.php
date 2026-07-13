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
                    Property Details
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
                        Real Estate Agent
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Properties
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Property Details
                    </li>
                </ol>
            </div>

            <!-- Property Details -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="xl:col-span-1">
                    <div class="trezo-card">
                        <div class="trezo-card-content relative" id="roomDetailsImageSlides">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md" src="/assets/images/properties/property-details1.jpg" alt="property-details-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md" src="/assets/images/properties/property-details2.jpg" alt="property-details-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md" src="/assets/images/properties/property-details3.jpg" alt="property-details-image">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                                            <img class="rounded-md" src="/assets/images/properties/property-details4.jpg" alt="property-details-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div thumbsSlider class="swiper mySwiper mt-[15px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/properties/property-details1.jpg" alt="property-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md" src="/assets/images/properties/property-details2.jpg" alt="property-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md" src="/assets/images/properties/property-details3.jpg" alt="property-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md" src="/assets/images/properties/property-details4.jpg" alt="property-details-image">
                                    </div>
                                </div>
                            </div>
                            <span class="inline-block absolute top-[25px] ltr:right-[25px] rtl:left-[25px] bg-primary-50 dark:bg-[#0c1427] text-primary-500 text-xs font-medium py-[2px] px-[8px] rounded-[4px] z-[1]">
                                For Sale
                            </span>
                        </div>
                    </div>
                </div>
                <div class="xl:col-span-2">
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md lg:h-full">
                        <div class="trezo-card-content">
                            <div class="sm:flex items-center justify-between">
                                <div>
                                    <span class="block text-xs">
                                        Code: TRZ-32
                                    </span>
                                    <h3 class="!text-[20px] md:!text-xl !mb-[10px] mt-[7px]">
                                        The Golden Haven
                                    </h3>
                                    <span class="block ltr:pl-[23px] rtl:pr-[23px] font-semibold relative">
                                        <i class="ri-map-pin-line absolute ltr:left-0 rtl:right-0 text-primary-500 top-1/2 -translate-y-1/2 text-[17px] font-normal mt-px"></i>
                                        123 Sunshine Boulevard, Vancouver, BC
                                    </span>
                                </div>
                                <div class="mt-[12px] sm:mt-0 flex items-center leading-none gap-[2px]">
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
                            <div class="sm:flex items-center justify-between border-t border-b border-gray-100 dark:border-[#172036] my-[20px] md:my-[25px] py-[12px]">
                                <ul class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px]">
                                    <li class="inline-block relative ltr:pl-[24px] rtl:pr-[24px]">
                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-lg">
                                            open_run
                                        </i>
                                        425 sft
                                    </li>
                                    <li class="inline-block relative ltr:pl-[24px] rtl:pr-[24px]">
                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-lg">
                                            bed
                                        </i>
                                        3 Beds
                                    </li>
                                    <li class="inline-block relative ltr:pl-[24px] rtl:pr-[24px]">
                                        <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-lg">
                                            bathtub
                                        </i>
                                        2 Baths
                                    </li>
                                </ul>
                                <div class="mt-[10px] sm:mt-0 font-bold text-black dark:text-white text-lg">
                                    $4,274/m
                                </div>
                            </div>
                            <h4 class="!text-lg !mb-[13px]">
                                Property Description
                            </h4>
                            <p>
                                Nestled in a serene neighborhood, this modern 3-bedroom home boasts an open-concept layout with abundant natural light. The chef’s kitchen features state-of-the-art appliances and a spacious island for entertaining.
                            </p>
                            <p>
                                Enjoy the tranquility of a private backyard oasis with a patio and lush landscaping. Located minutes from top-rated schools, shopping, and parks, it offers convenience and comfort. This home is the perfect blend of style and functionality.
                            </p>
                            <div class="mb-[20px] md:mb-[25px]"></div>
                            <h4 class="!text-lg !mb-[13px]">
                                Property Details
                            </h4>
                            <ul class="mb-[20px] md:mb-[25px] grid grid-cols-1 sm:grid-cols-2">
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Beds
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">03</span>
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Ceiling Height
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">3.20</span> m
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Baths
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">02</span>
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Property Type
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">Villa</span>
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Floor
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">Ground</span>
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Year Built
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">2010</span>
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Garage
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">Yes</span>
                                    </span>
                                </li>
                                <li class="flex items-center justify-between py-[10px] px-[20px] border border-gray-100 dark:border-[#15203c]">
                                    <span class="block">
                                        Status
                                    </span>
                                    <span class="block">
                                        <span class="text-black dark:text-white">For Sale</span>
                                    </span>
                                </li>
                            </ul>
                            <h4 class="!text-lg !mb-[13px]">
                                Amenities
                            </h4>
                            <div class="mb-[20px] md:mb-[25px] grid grid-cols-1 sm:grid-cols-4 gap-[12px]">
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    A/C & Heating
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Parking
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    WiFi
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Pet Friendly
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Furniture
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Ceiling Height
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Play Ground
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Elevator
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Garage
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Fireplace
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Garden
                                </div>
                                <div class="relative ltr:pl-[22px] rtl:pr-[22px]">
                                    <i class="ri-check-line absolute top-1/2 -translate-y-1/2 ltr:-left-[3px] rtl:-right-[3px] text-primary-500 text-lg"></i>
                                    Disabled Access
                                </div>
                            </div>
                            <h4 class="!text-lg !mb-[13px]">
                                Location
                            </h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.94539481518!2d-74.26675559025065!3d40.69739290398433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1678355274384!5m2!1sen!2sbd" class="w-full rounded-md border-0 h-[250px]" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        User ID
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Customer Name
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Ratings
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Reviews
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                        Date
                                    </th>
                                    <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tr-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md"></th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        #001
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="flex items-center gap-[12px]">
                                            <img src="/assets/images/users/user58.jpg" class="inline-block rounded-full w-[30px]" alt="user-image">
                                            <span class="block font-medium">
                                                Joanna Watson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                5.0
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="w-[620px] whitespace-normal">
                                            <span class="block mb-[6px] font-medium">
                                                Amazing Ambiance and Delicious Food!
                                            </span>
                                            <p class="text-[13px] text-gray-500 dark:text-gray-400 leading-[1.6]">
                                                Trezo was a fantastic dining experience. The ambiance is warm and inviting, perfect for a date night or celebration. I ordered the truffle pasta, which was rich and perfectly seasoned. The service was impeccable, and the staff made us feel like family. Highly recommend!
                                            </p>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        13 Nov, 25
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        #002
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="flex items-center gap-[12px]">
                                            <img src="/assets/images/users/user59.jpg" class="inline-block rounded-full w-[30px]" alt="user-image">
                                            <span class="block font-medium">
                                                Jenelia Anderson
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                4.9
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="w-[620px] whitespace-normal">
                                            <span class="block mb-[6px] font-medium">
                                                Best Brunch Spot in Town
                                            </span>
                                            <p class="text-[13px] text-gray-500 dark:text-gray-400 leading-[1.6]">
                                                Visited Trezo for brunch with friends, and it exceeded our expectations. The avocado toast was fresh, and their mimosas were spot-on. Our server was attentive without being intrusive. Definitely coming back!
                                            </p>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        14 Nov, 25
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
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
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        #003
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="flex items-center gap-[12px]">
                                            <img src="/assets/images/users/user60.jpg" class="inline-block rounded-full w-[30px]" alt="user-image">
                                            <span class="block font-medium">
                                                Jonathon Ronan
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="flex items-center leading-none gap-[2px]">
                                            <i class="ri-star-fill text-orange-500"></i>
                                            <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                                                4.0
                                            </span>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        <div class="w-[620px] whitespace-normal">
                                            <span class="block mb-[6px] font-medium">
                                                Good Food, Slow Service
                                            </span>
                                            <p class="text-[13px] text-gray-500 dark:text-gray-400 leading-[1.6]">
                                                The food at Trezo was delicious, but the service was a bit slow. We had to wait a while for our appetizers, and our main course was delayed. It’s a nice spot, but they could work on speeding up their service.
                                            </p>
                                        </div>
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
                                        15 Nov, 25
                                    </td>
                                    <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l align-top">
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
                    <div class="px-[20px] py-[12px] md:py-[15px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                        <p class="!mb-0 text-sm">
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
