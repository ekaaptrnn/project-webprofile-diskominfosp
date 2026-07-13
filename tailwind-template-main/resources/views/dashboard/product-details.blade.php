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
                    Product Details
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
                        eCommerce
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Products
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Product Details
                    </li>
                </ol>
            </div>

            <!-- Product Details -->
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-content lg:max-w-[1070px] md:pt-[15px] md:px-[15px] md:pb-[75px]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px]">
                        <div class="lg:ltr:mr-[30px] lg:rtl:ml-[30px]" id="productDetailsImageSlides">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="rounded-md" src="/assets/images/products/product-details1.jpg" alt="product-details-image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="rounded-md" src="/assets/images/products/product-details2.jpg" alt="product-details-image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="rounded-md" src="/assets/images/products/product-details3.jpg" alt="product-details-image">
                                    </div>
                                </div>
                            </div>
                            <div thumbsSlider class="swiper mySwiper mt-[20px] md:mt-[25px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/products/product-details1.jpg" alt="product-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/products/product-details2.jpg" alt="product-details-image">
                                    </div>
                                    <div class="swiper-slide cursor-poiner">
                                        <img class="rounded-md cursor-pointer" src="/assets/images/products/product-details3.jpg" alt="product-details-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="inline-block text-xs relative rounded-sm text-success-700 mb-[14px] bg-success-50 dark:bg-[#15203c] py-[4px] ltr:pr-[16px] rtl:pl-[16px] ltr:pl-[37px] rtl:pr-[37px]">
                                <i class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-[12px] rtl:right-[12px] mt-[.2px] !text-[19px]">
                                    check
                                </i>
                                in stock
                            </span>
                            <h6 class="!font-medium !text-lg !leading-[1.5] !mb-[16px]">
                                Apple MacBook Pro 16.2" with Liquid Retina XDR Display, M2 Max Chip with 12-Core CPU
                            </h6>
                            <div class="leading-none border-b border-gray-100 dark:border-[#172036] pb-[20px] md:pb-[25px] mb-[21px] text-md text-warning-500 flex items-center">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <span class="text-xs text-gray-500 dark:text-gray-400 relative top-[2px] ltr:ml-[15px] rtl:mr-[15px]">
                                    (76 reviews)
                                </span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-black dark:text-white font-bold text-lg">
                                    $3,499
                                </span>
                                <span class="text-md ltr:ml-[7px] rtl:mr-[7px] line-through">
                                    $3,799
                                </span>
                            </div>
                            <div class="mt-[20px]">
                                <div class="flex items-center">
                                    <span>
                                        Style:
                                    </span>
                                    <span class="font-medium text-black dark:text-white ltr:ml-[3px] rtl:mr-[3px]">
                                        Apple M1 Pro Chip
                                    </span>
                                </div>
                                <div class="mt-[7px]">
                                    <button type="button" class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-gray-100 dark:border-[#172036]">
                                        Apple M1 Max Chip
                                    </button>
                                    <button type="button" class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-orange-400 text-black dark:text-white font-semibold">
                                        Apple M1 Pro Chip
                                    </button>
                                </div>
                            </div>
                            <div class="mt-[15px]">
                                <div class="flex items-center">
                                    <span>
                                        Capacity:
                                    </span>
                                    <span class="font-medium text-black dark:text-white ltr:ml-[3px] rtl:mr-[3px]">
                                        1 TB
                                    </span>
                                </div>
                                <div class="mt-[6px]">
                                    <button type="button" class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-gray-100 dark:border-[#172036]">
                                        512 GB
                                    </button>
                                    <button type="button" class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-orange-400 text-black dark:text-white font-semibold">
                                        1 TB
                                    </button>
                                </div>
                            </div>
                            <div class="mt-[15px]">
                                <div class="flex items-center">
                                    <span>
                                        Color:
                                    </span>
                                    <span class="font-medium text-black dark:text-white ltr:ml-[3px] rtl:mr-[3px]">
                                        Silver
                                    </span>
                                </div>
                                <div class="mt-[6px]">
                                    <button type="button" class="inline-block ltr:mr-[7px] rtl:ml-[7px] rounded-full w-[29px] h-[29px] bg-gray-100 border border-orange-400"></button>
                                    <button type="button" class="inline-block ltr:mr-[7px] rtl:ml-[7px] rounded-full w-[29px] h-[29px] bg-gray-200 border border-gray-200"></button>
                                </div>
                            </div>
                            <div class="mt-[26px] flex items-center gap-[8px]">
                                <div class="counter-container relative w-[102px]" id="inputCounter">
                                    <button class="decrease-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:left-[17px] rtl:right-[17px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                        -
                                    </button>
                                    <input type="text" class="counter text-base h-[34px] rounded-md text-center block w-full bg-primary-50 dark:bg-[#15203c] text-black outline-0 font-medium dark:text-white" value="1" readonly />
                                    <button class="increase-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:right-[17px] rtl:left-[17px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                        +
                                    </button>
                                </div>
                                <button type="button" class="rounded-md inline-block font-medium py-[6.5px] px-[21px] text-white bg-primary-500">
                                    <span class="inline-block relative ltr:pl-[24px] rtl:pr-[24px]">
                                        <i class="ri-shopping-cart-line absolute ltr:left-0 rtl:right-0 text-[17px] top-1/2 -translate-y-1/2"></i>
                                        Add To Cart
                                    </span>
                                </button>
                            </div>
                            <button type="button" class="mt-[20px] inline-block font-medium text-black dark:text-white">
                                <span class="flex items-center">
                                    <i class="ri-heart-line w-[31px] h-[31px] text-lg text-gray-500 dark:text-gray-400 leading-[33px] text-center ltr:mr-[10px] rtl:ml-[10px] rounded-full inline-block bg-gray-100 dark:bg-[#172036]"></i>
                                    Add to wishlist
                                </span>
                            </button>
                            <div class="mt-[11px] flex items-center">
                                <i class="material-symbols-outlined w-[31px] h-[31px] !text-lg text-gray-500 dark:text-gray-400 !leading-[33px] text-center ltr:mr-[10px] rtl:ml-[10px] rounded-full inline-block bg-gray-100 dark:bg-[#172036]">
                                    visibility
                                </i>
                                565 people are viewing the products
                            </div>
                            <ul class="my-[19px] border-t border-b border-gray-100 py-[15px] dark:border-[#172036]">
                                <li class="relative ltr:pl-[27px] rtl:pr-[27px] mb-[7px] last:mb-0 text-black dark:text-white">
                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] text-success-700">
                                        check
                                    </i>
                                    Free delivery today
                                </li>
                                <li class="relative ltr:pl-[27px] rtl:pr-[27px] mb-[7px] last:mb-0 text-black dark:text-white">
                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] text-success-700">
                                        check
                                    </i>
                                    100% money back Guarantee
                                </li>
                                <li class="relative ltr:pl-[27px] rtl:pr-[27px] mb-[7px] last:mb-0 text-black dark:text-white">
                                    <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] text-success-700">
                                        check
                                    </i>
                                    7 days product return policy
                                </li>
                            </ul>
                            <ul class="mb-[20px]">
                                <li class="mb-[6px] last:mb-0">
                                    SKU:
                                    <span class="font-medium text-black dark:text-white">
                                        SMTGS6T45
                                    </span>
                                </li>
                                <li class="mb-[6px] last:mb-0">
                                    Category:
                                    <span class="font-medium text-black dark:text-white">
                                        computer
                                    </span>
                                </li>
                                <li class="mb-[6px] last:mb-0">
                                    Tags:
                                    <span class="font-medium text-black dark:text-white">
                                        laptop, macbook, PC
                                    </span>
                                </li>
                            </ul>
                            <div class="flex items-center gap-[4px]">
                                <span class="relative text-md ltr:mr-[5px] rtl:ml-[5px] -top-px">
                                    Share:
                                </span>
                                <a href="#" class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500" target="_blank">
                                    <i class="ri-twitter-x-fill"></i>
                                </a>
                                <a href="#" class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500" target="_blank">
                                    <i class="ri-whatsapp-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trezo-tabs product-details-tabs" id="trezo-tabs">
                <ul class="navs">
                    <li class="nav-item inline-block">
                        <button type="button" data-tab="tab1" class="nav-link active block md:text-md py-[10px] md:py-[12px] px-[15px] md:px-[20px] transition-all relative font-medium rounded-t-md ltr:-mr-[4px] rtl:-ml-[4px]">
                            Description
                        </button>
                    </li>
                    <li class="nav-item inline-block">
                        <button type="button" data-tab="tab2" class="nav-link block md:text-md py-[10px] md:py-[12px] px-[15px] md:px-[20px] transition-all relative font-medium rounded-t-md ltr:-mr-[4px] rtl:-ml-[4px]">
                            Specifications
                        </button>
                    </li>
                    <li class="nav-item inline-block">
                        <button type="button" data-tab="tab3" class="nav-link block md:text-md py-[10px] md:py-[12px] px-[15px] md:px-[20px] transition-all relative font-medium rounded-t-md ltr:-mr-[4px] rtl:-ml-[4px]">
                            Reviews
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <p>
                                    The Apple MacBook Pro 16.2 is a cutting-edge laptop designed to deliver exceptional performance and advanced features for professionals and creative enthusiasts. With its sleek aluminum body and precision engineering, this MacBook Pro represents the pinnacle of Apple's laptop technology.
                                </p>
                                <p>
                                    Stay connected with a variety of ports, including Thunderbolt 3, USB-C, and audio jacks. These versatile ports support high-speed data transfer and external device connections. Enjoy a rich audio experience with high-fidelity speakers that deliver clear and immersive sound. Perfect for content creators and multimedia enthusiasts.
                                </p>
                                <p>
                                    Equipped with the latest processors, ample RAM, and high-performance graphics, the MacBook Pro 16.2 ensures smooth multitasking, fast rendering, and efficient handling of resource-intensive tasks. Seamlessly integrate with the macOS ecosystem, benefiting from features like iCloud, Siri, and a vast selection of applications available on the App Store.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <h6 class="!font-semibold !mb-[12px] !text-[15px]">
                                    General
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Brand:
                                        </span>
                                        Apple
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Model:
                                        </span>
                                        MacBook Pro
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Price:
                                        </span>
                                        $2499
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Dimensions (mm):
                                        </span>
                                        304.10 x 212.40 x 14.90
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Weight (kg):
                                        </span>
                                        1.37
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Colors:
                                        </span>
                                        Space Grey
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Operating system:
                                        </span>
                                        macOS
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Battery Life (up to hours):
                                        </span>
                                        10
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Display
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Size:
                                        </span>
                                        13.30-inch
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Resolution:
                                        </span>
                                        2560x1600 pixels
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Touch Screen:
                                        </span>
                                        No
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Processor
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Processor:
                                        </span>
                                        Intel Core i5 7th Gen
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Base Clock Speed:
                                        </span>
                                        2.3 GHz
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Memory
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            RAM:
                                        </span>
                                        12GB
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Storage
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Hard disk:
                                        </span>
                                        No
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            SSD:
                                        </span>
                                        512GB
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Connectivity
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Wi-Fi standards supported:
                                        </span>
                                        Apple
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Bluetooth version:
                                        </span>
                                        4.2
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Inputs
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Web Camera:
                                        </span>
                                        Yes
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Pointer Device:
                                        </span>
                                        Touchpad
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Touchpad:
                                        </span>
                                        Yes
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Internal Mic:
                                        </span>
                                        Yes
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Speakers:
                                        </span>
                                        Stereo Speakers
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Finger Print Sensor:
                                        </span>
                                        Yes
                                    </li>
                                </ul>
                                <h6 class="!font-semibold !mb-[12px] mt-[20px] md:mt-[25px] !text-[15px]">
                                    Ports and slots
                                </h6>
                                <ul>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Number of USB Ports:
                                        </span>
                                        2
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            USB Ports:
                                        </span>
                                        2 x USB 3.0
                                    </li>
                                    <li class="py-[11px] px-[20px] border-b border-l border-r border-gray-100 dark:border-[#172036] first:border-t">
                                        <span class="text-black dark:text-white">
                                            Mic In:
                                        </span>
                                        Yes
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-content">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-[25px] items-center gap-[25px]">
                                    <div class="md:col-span-2">
                                        <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                            <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 85%;"></div>
                                            </div>
                                            <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                                359
                                            </span>
                                        </div>
                                        <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                            <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                            </div>
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 50%;"></div>
                                            </div>
                                            <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                                208
                                            </span>
                                        </div>
                                        <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                            <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                            </div>
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 35%;"></div>
                                            </div>
                                            <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                                124
                                            </span>
                                        </div>
                                        <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                            <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                            </div>
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 15%;"></div>
                                            </div>
                                            <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                                89
                                            </span>
                                        </div>
                                        <div class="flex items-center relative gap-[15px] mb-[15px] ltr:pr-[48px] rtl:pl-[48px] last:mb-0">
                                            <div class="flex items-center justify-center text-[#ee8336] text-lg gap-[5px]">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                            </div>
                                            <div class="flex w-full h-[4px] overflow-hidden rounded-md bg-primary-50 dark:bg-[#172036]">
                                                <div class="flex flex-col justify-center overflow-hidden bg-primary-500 rounded-md" style="width: 5%;"></div>
                                            </div>
                                            <span class="absolute ltr:right-0 rtl:left-0 top-1/2 -translate-y-1/2">
                                                4
                                            </span>
                                        </div>
                                    </div>
                                    <div class="md:col-span-1">
                                        <div class="text-center">
                                            <h3 class="!mb-[7px] !leading-none !text-5xl">
                                                4.28
                                            </h3>
                                            <div class="flex items-center justify-center mb-[10px] text-[#ee8336] text-[30px] gap-[4px]">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-line text-[#e2e8f0] dark:text-[#334161]"></i>
                                            </div>
                                            <span class="block">
                                                of 3250 Reviews
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Manage Reviews
                                    </h5>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="table-responsive overflow-x-auto">
                                    <table class="w-full">
                                        <thead class="text-black dark:text-white">
                                            <tr>
                                                <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                                    ID
                                                </th>
                                                <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                                    Reviewer
                                                </th>
                                                <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                                    Review
                                                </th>
                                                <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                                    Date
                                                </th>
                                                <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                                    Status
                                                </th>
                                                <th class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap ltr:first:rounded-tl-md ltr:last:rounded-tr-md rtl:first:rounded-tr-md rtl:last:rounded-tl-md">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-black dark:text-white">
                                            <tr>
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    #999
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center">
                                                        <div class="rounded-md w-[40px] rounded-full">
                                                            <img src="/assets/images/users/user6.jpg" class="inline-block rounded-full" alt="product-image">
                                                        </div>
                                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                            <span class="block font-medium">
                                                                Olivia Clark
                                                            </span>
                                                            <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                                olivia@trezo.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <p class="mt-[10px] w-[350px]">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                    </p>
                                                </td>
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="block">
                                                        17 Dec 2025
                                                    </span>
                                                    <span class="block">
                                                        08:30 PM
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center gap-[9px]">
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                            <i class="material-symbols-outlined !text-md">
                                                                download_done
                                                            </i>
                                                        </button>
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                            <i class="material-symbols-outlined !text-md">
                                                                reply
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
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    #998
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center">
                                                        <div class="rounded-md w-[40px] rounded-full">
                                                            <img src="/assets/images/users/user7.jpg" class="inline-block rounded-full" alt="product-image">
                                                        </div>
                                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                            <span class="block font-medium">
                                                                Zephyr Zing
                                                            </span>
                                                            <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                                zephyr@trezo.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    </div>
                                                    <p class="mt-[10px] w-[350px]">
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                                                    </p>
                                                </td>
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="block">
                                                        16 Dec 2025
                                                    </span>
                                                    <span class="block">
                                                        10:11 PM
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center gap-[9px]">
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                            <i class="material-symbols-outlined !text-md">
                                                                download_done
                                                            </i>
                                                        </button>
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                            <i class="material-symbols-outlined !text-md">
                                                                reply
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
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    #997
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center">
                                                        <div class="rounded-md w-[40px] rounded-full">
                                                            <img src="/assets/images/users/user8.jpg" class="inline-block rounded-full" alt="product-image">
                                                        </div>
                                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                            <span class="block font-medium">
                                                                Nova Nectar
                                                            </span>
                                                            <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                                nova@trezo.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </div>
                                                    <p class="mt-[10px] w-[350px]">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </p>
                                                </td>
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="block">
                                                        15 Dec 2025
                                                    </span>
                                                    <span class="block">
                                                        11:11 AM
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center gap-[9px]">
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                            <i class="material-symbols-outlined !text-md">
                                                                download_done
                                                            </i>
                                                        </button>
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                            <i class="material-symbols-outlined !text-md">
                                                                reply
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
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    #996
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center">
                                                        <div class="rounded-md w-[40px] rounded-full">
                                                            <img src="/assets/images/users/user9.jpg" class="inline-block rounded-full" alt="product-image">
                                                        </div>
                                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                            <span class="block font-medium">
                                                                Isabella Chang
                                                            </span>
                                                            <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                                isabella@trezo.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-half-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                    </div>
                                                    <p class="mt-[10px] w-[350px]">
                                                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.
                                                    </p>
                                                </td>
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="block">
                                                        17 Dec 2025
                                                    </span>
                                                    <span class="block">
                                                        08:30 PM
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="px-[8px] py-[3px] inline-block bg-primary-50 dark:bg-[#15203c] text-primary-500 rounded-sm font-medium text-xs">
                                                        Pending
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center gap-[9px]">
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                            <i class="material-symbols-outlined !text-md">
                                                                download_done
                                                            </i>
                                                        </button>
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                            <i class="material-symbols-outlined !text-md">
                                                                reply
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
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    #995
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center">
                                                        <div class="rounded-md w-[40px] rounded-full">
                                                            <img src="/assets/images/users/user10.jpg" class="inline-block rounded-full" alt="product-image">
                                                        </div>
                                                        <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                            <span class="block font-medium">
                                                                Alina Bennett
                                                            </span>
                                                            <span class="block mt-[2px] text-gray-500 dark:text-gray-400">
                                                                alina@trezo.com
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="leading-none flex items-center gap-[2px] text-lg text-[#ee8336]">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <p class="mt-[10px] w-[350px]">
                                                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                    </p>
                                                </td>
                                                <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="block">
                                                        17 Dec 2025
                                                    </span>
                                                    <span class="block">
                                                        08:30 PM
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <span class="px-[8px] py-[3px] inline-block bg-danger-50 dark:bg-[#15203c] text-danger-500 rounded-sm font-medium text-xs">
                                                        Published
                                                    </span>
                                                </td>
                                                <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                                    <div class="flex items-center gap-[9px]">
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Approve">
                                                            <i class="material-symbols-outlined !text-md">
                                                                download_done
                                                            </i>
                                                        </button>
                                                        <button type="button" class="text-gray-500 dark:text-gray-400 leading-none custom-tooltip" id="customTooltip" data-text="Reply">
                                                            <i class="material-symbols-outlined !text-md">
                                                                reply
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
                                <div class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                                    <p class="!mb-0 text-sm">
                                        Showing 5 of 36 results
                                    </p>
                                    <ol class="mt-[10px] sm:mt-0">
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="/dashboard/product-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                <span class="opacity-0">
                                                    0
                                                </span>
                                                <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                                    chevron_left
                                                </i>
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="/dashboard/product-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-primary-500 bg-primary-500 text-white">
                                                1
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="/dashboard/product-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                2
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="/dashboard/product-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                3
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="/dashboard/product-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
                                                4
                                            </a>
                                        </li>
                                        <li class="inline-block mx-[1px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
                                            <a href="/dashboard/product-details" class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500">
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
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
