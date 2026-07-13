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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Featured -->
                    <div
                        class="trezo-card p-[20px] md:p-[25px] rounded-md relative z-[1]"
                        style="background: linear-gradient(84deg, #23272E 3.5%, #526077 94.93%);"
                    >
                        <div class="trezo-card-header mb-[12px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <span class="inline-block text-xs text-white font-medium py-[1.5px] px-[15px] rounded-[30px] bg-gray-600">
                                    Featured
                                </span>
                            </div>
                        </div>
                        <div class="trezo-card-content relative" id="podcastFeaturedSlides">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="grid grid-cols-1 md:grid-cols-2">
                                            <div>
                                                <h1 class="!text-[22px] md:!text-2xl !text-white !font-medium !mb-[7px]">
                                                    Mastering Digital Marketing
                                                </h1>
                                                <p class="md:max-w-[370px] text-gray-200">
                                                    Learn the latest digital marketing strategies with insights from SEO expert James Lee.
                                                </p>
                                                <div class="-mt-[5px]">
                                                    <div class="inline-block text-gray-50 ltr:mr-[5px] rtl:ml-[5px] rounded-[30px] py-[3.5px] px-[12.5px] border border-gray-500 mt-[10px]">
                                                        <span class="text-white font-semibold">
                                                            Host:
                                                        </span>
                                                        Sarah J.
                                                    </div>
                                                    <div class="inline-block text-gray-50 ltr:mr-[5px] rtl:ml-[5px] rounded-[30px] py-[3.5px] px-[12.5px] border border-gray-500 mt-[10px]">
                                                        <span class="text-white font-semibold">
                                                            Guest:
                                                        </span>
                                                        James Lee, Expert
                                                    </div>
                                                </div>
                                                <div class="mt-[20px] md:mt-[30px] md:max-w-[370px]" data-player id="musicPlayer">
                                                    <audio src="https://cldup.com/qR72ozoaiQ.mp3"></audio>
                                                    <div class="flex items-center gap-[15px]">
                                                        <button type="button" class="playPauseBtn flex items-center justify-center w-[44px] h-[44px] text-xl transition-all text-primary-500 bg-primary-200 rounded-full hover:bg-primary-500 hover:text-white dark:bg-dark text-[20px]">
                                                            <span class="playPauseIcon">▶</span>
                                                        </button>
                                                        <button class="rewindBtn hidden" type="button">
                                                            <i class="ri-skip-left-fill"></i>
                                                        </button>
                                                        <button class="fastForwardBtn hidden" type="button">
                                                            <i class="ri-skip-right-fill"></i>
                                                        </button>
                                                        <button class="restartBtn hidden" type="button">
                                                            <i class="ri-reset-right-line"></i>
                                                        </button>
                                                        <div class="relative z-[1] grow">
                                                            <span class="current-time hidden ltr:text-right rtl:text-left text-white">0:00</span>
                                                            <span class="duration block ltr:text-right rtl:text-left text-white">0:00</span>
                                                            <div class="progress mt-[5px] h-[4px] w-full relative rounded-[30px] bg-gray-400">
                                                                <div class="progress-bar bg-primary-500 w-0 h-full rounded-[30px]"></div>
                                                            </div>
                                                            <div class="wave-container flex items-center absolute rtl:left-0 rtl:right-0 bottom-0 -z-[1]">
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mx-auto mt-[20px] md:mt-0 md:max-w-[332.5px]">
                                                <img src="/assets/images/featured/featured1.png" alt="featured-image">
                                            </div>
                                        </div>
                                        <div class="md:flex items-center md:mt-[20px] lg:mt-[9px] gap-[20px]">
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-customer-service-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Listens
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    8,200
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-thumb-up-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Likes
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    1,500
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-share-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Shares
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    350
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-bookmark-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Save for
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    Later
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid grid-cols-1 md:grid-cols-2">
                                            <div>
                                                <h1 class="!text-[22px] md:!text-2xl !text-white !font-medium !mb-[7px]">
                                                    Content Marketing Essentials
                                                </h1>
                                                <p class="md:max-w-[370px] text-gray-200">
                                                    This episode covers creating impactful content that resonates with audiences.
                                                </p>
                                                <div class="-mt-[5px]">
                                                    <div class="inline-block text-gray-50 ltr:mr-[5px] rtl:ml-[5px] rounded-[30px] py-[3.5px] px-[12.5px] border border-gray-500 mt-[10px]">
                                                        <span class="text-white font-semibold">
                                                            Host:
                                                        </span>
                                                        Sarah J.
                                                    </div>
                                                    <div class="inline-block text-gray-50 ltr:mr-[5px] rtl:ml-[5px] rounded-[30px] py-[3.5px] px-[12.5px] border border-gray-500 mt-[10px]">
                                                        <span class="text-white font-semibold">
                                                            Guest:
                                                        </span>
                                                        James Lee, Expert
                                                    </div>
                                                </div>
                                                <div class="mt-[20px] md:mt-[30px] md:max-w-[370px]" data-player id="musicPlayer">
                                                    <audio src="https://cldup.com/qR72ozoaiQ.mp3"></audio>
                                                    <div class="flex items-center gap-[15px]">
                                                        <button type="button" class="playPauseBtn flex items-center justify-center w-[44px] h-[44px] text-xl transition-all text-primary-500 bg-primary-200 rounded-full hover:bg-primary-500 hover:text-white dark:bg-dark text-[20px]">
                                                            <span class="playPauseIcon">▶</span>
                                                        </button>
                                                        <button class="rewindBtn hidden" type="button">
                                                            <i class="ri-skip-left-fill"></i>
                                                        </button>
                                                        <button class="fastForwardBtn hidden" type="button">
                                                            <i class="ri-skip-right-fill"></i>
                                                        </button>
                                                        <button class="restartBtn hidden" type="button">
                                                            <i class="ri-reset-right-line"></i>
                                                        </button>
                                                        <div class="relative z-[1] grow">
                                                            <span class="current-time hidden ltr:text-right rtl:text-left text-white">0:00</span>
                                                            <span class="duration block ltr:text-right rtl:text-left text-white">0:00</span>
                                                            <div class="progress mt-[5px] h-[4px] w-full relative rounded-[30px] bg-gray-400">
                                                                <div class="progress-bar bg-primary-500 w-0 h-full rounded-[30px]"></div>
                                                            </div>
                                                            <div class="wave-container flex items-center absolute rtl:left-0 rtl:right-0 bottom-0 -z-[1]">
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mx-auto mt-[20px] md:mt-0 md:max-w-[332.5px]">
                                                <img src="/assets/images/featured/featured2.png" alt="featured-image">
                                            </div>
                                        </div>
                                        <div class="md:flex items-center md:mt-[20px] lg:mt-[9px] gap-[20px]">
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-customer-service-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Listens
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    8,200
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-thumb-up-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Likes
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    1,500
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-share-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Shares
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    350
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-bookmark-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Save for
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    Later
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="grid grid-cols-1 md:grid-cols-2">
                                            <div>
                                                <h1 class="!text-[22px] md:!text-2xl !text-white !font-medium !mb-[7px]">
                                                    Social Media Trends
                                                </h1>
                                                <p class="md:max-w-[370px] text-gray-200">
                                                    Learn the latest digital marketing strategies with insights from SEO expert James Lee.
                                                </p>
                                                <div class="-mt-[5px]">
                                                    <div class="inline-block text-gray-50 ltr:mr-[5px] rtl:ml-[5px] rounded-[30px] py-[3.5px] px-[12.5px] border border-gray-500 mt-[10px]">
                                                        <span class="text-white font-semibold">
                                                            Host:
                                                        </span>
                                                        Sarah J.
                                                    </div>
                                                    <div class="inline-block text-gray-50 ltr:mr-[5px] rtl:ml-[5px] rounded-[30px] py-[3.5px] px-[12.5px] border border-gray-500 mt-[10px]">
                                                        <span class="text-white font-semibold">
                                                            Guest:
                                                        </span>
                                                        James Lee, Expert
                                                    </div>
                                                </div>
                                                <div class="mt-[20px] md:mt-[30px] md:max-w-[370px]" data-player id="musicPlayer">
                                                    <audio src="https://cldup.com/qR72ozoaiQ.mp3"></audio>
                                                    <div class="flex items-center gap-[15px]">
                                                        <button type="button" class="playPauseBtn flex items-center justify-center w-[44px] h-[44px] text-xl transition-all text-primary-500 bg-primary-200 rounded-full hover:bg-primary-500 hover:text-white dark:bg-dark text-[20px]">
                                                            <span class="playPauseIcon">▶</span>
                                                        </button>
                                                        <button class="rewindBtn hidden" type="button">
                                                            <i class="ri-skip-left-fill"></i>
                                                        </button>
                                                        <button class="fastForwardBtn hidden" type="button">
                                                            <i class="ri-skip-right-fill"></i>
                                                        </button>
                                                        <button class="restartBtn hidden" type="button">
                                                            <i class="ri-reset-right-line"></i>
                                                        </button>
                                                        <div class="relative z-[1] grow">
                                                            <span class="current-time hidden ltr:text-right rtl:text-left text-white">0:00</span>
                                                            <span class="duration block ltr:text-right rtl:text-left text-white">0:00</span>
                                                            <div class="progress mt-[5px] h-[4px] w-full relative rounded-[30px] bg-gray-400">
                                                                <div class="progress-bar bg-primary-500 w-0 h-full rounded-[30px]"></div>
                                                            </div>
                                                            <div class="wave-container flex items-center absolute rtl:left-0 rtl:right-0 bottom-0 -z-[1]">
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                                <span class="wave-bar w-[2px] h-[30px] ltr:ml-px rtl:mr-px ltr:md:ml-[2.5px] rtl:md:mr-[2.5px] ltr:xl:ml-[3px] rtl:xl:mr-[3px] ltr:first:ml-0 rtl:first:mr-0 bg-gray-600 transition-all"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mx-auto mt-[20px] md:mt-0 md:max-w-[332.5px]">
                                                <img src="/assets/images/featured/featured3.png" alt="featured-image">
                                            </div>
                                        </div>
                                        <div class="md:flex items-center md:mt-[20px] lg:mt-[9px] gap-[20px]">
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-customer-service-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Listens
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    8,200
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-thumb-up-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Likes
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    1,500
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-share-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Shares
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    350
                                                </h6>
                                            </div>
                                            <div class="inline-block relative ltr:pl-[40px] rtl:pr-[40px] mt-[15px] ltr:mr-[15px] rtl:ml-[15px] ltr:md:mr-0 rtl:md:ml-0 md:mt-0">
                                                <div class="ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2 !text-3xl text-primary-400">
                                                    <i class="ri-bookmark-line"></i>
                                                </div>
                                                <span class="block font-medium text-xs text-gray-200">
                                                    Save for
                                                </span>
                                                <h6 class="!mb-0 !font-medium !text-white !text-base mt-[3px]">
                                                    Later
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="absolute -z-[1] bottom-0 ltr:right-0 rtl:left-0 rtl:-scale-x-100">
                            <img src="/assets/images/featured/featured-shape.png" alt="shape-image">
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Popular Hosts -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Popular Hosts
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <a href="#" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                                    View All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                                </a>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px] -mb-[19px] md:-mb-[23px]">
                            <div class="table-responsive overflow-x-auto -mt-[9px] pb-[19px] md:pb-[23px]">
                                <table class="w-full without-top-bottom-border">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user54.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Sarah W.
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Marketing
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="font-medium inline-block mb-px">
                                                    25
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    Hosted
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="inline-block rounded-md py-[3.5px] px-[9.5px] text-primary-500 bg-primary-50 dark:bg-dark transition-all hover:bg-primary-500 hover:text-white">
                                                    Follow
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user53.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Tom R.
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Blogging
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="font-medium inline-block mb-px">
                                                    30
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    Hosted
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="inline-block rounded-md py-[3.5px] px-[9.5px] text-primary-500 bg-primary-50 dark:bg-dark transition-all hover:bg-primary-500 hover:text-white">
                                                    Follow
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user55.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Amanda G.
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Branding
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="font-medium inline-block mb-px">
                                                    28
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    Hosted
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="inline-block rounded-md py-[3.5px] px-[9.5px] text-white bg-primary-500 transition-all hover:bg-primary-500 hover:text-white">
                                                    Following
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user41.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            Lisa Kim
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Storytelling
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="font-medium inline-block mb-px">
                                                    20
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    Hosted
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="inline-block rounded-md py-[3.5px] px-[9.5px] text-primary-500 bg-primary-50 dark:bg-dark transition-all hover:bg-primary-500 hover:text-white">
                                                    Follow
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <div class="rounded-full w-[40px]">
                                                        <img src="/assets/images/users/user43.jpg" class="inline-block rounded-full" alt="user-image">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-px">
                                                            David C.
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Social Media
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="font-medium inline-block mb-px">
                                                    18
                                                </span>
                                                <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                    Hosted
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[11px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="inline-block rounded-md py-[3.5px] px-[9.5px] text-primary-500 bg-primary-50 dark:bg-dark transition-all hover:bg-primary-500 hover:text-white">
                                                    Follow
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

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Recently Played -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Recently Played
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <a href="#" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                                    View All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                                </a>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px] -mb-[19px] md:-mb-[23px]">
                            <div class="table-responsive overflow-x-auto -mt-[14px] pb-[19px] md:pb-[23px]">
                                <table class="w-full without-top-bottom-border">
                                    <tbody class="text-black dark:text-white">
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <a href="#" target="_blank" class="inline-block leading-none text-xl text-primary-500">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                    <div class="rounded-md w-[34px]">
                                                        <img alt="user-image" class="rounded-md" src="/assets/images/playlists/playlist1.jpg">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-[2.5px]">
                                                            Mastering Digital Marketing
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Sarah Johnson
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Played 40min. ago
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block text-gray-500 dark:text-gray-400 relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined !text-[20px] absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-primary-500">
                                                        headset_mic
                                                    </i>
                                                    8,200
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="leading-none text-xl text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                45:30
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-add-fill text-primary-500"></i>
                                                                Add to Playlist
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-multi-image-line text-primary-500"></i>
                                                                Go to Album
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-dropbox-line text-primary-500"></i>
                                                                View Credits
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <a href="#" target="_blank" class="inline-block leading-none text-xl text-primary-500">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                    <div class="rounded-md w-[34px]">
                                                        <img alt="user-image" class="rounded-md" src="/assets/images/playlists/playlist2.jpg">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-[2.5px]">
                                                            Content Marketing Essentials
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Tom Richards
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Played 1h. ago
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block text-gray-500 dark:text-gray-400 relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined !text-[20px] absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-primary-500">
                                                        headset_mic
                                                    </i>
                                                    9,500
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="leading-none text-xl text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                25:50
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-add-fill text-primary-500"></i>
                                                                Add to Playlist
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-multi-image-line text-primary-500"></i>
                                                                Go to Album
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-dropbox-line text-primary-500"></i>
                                                                View Credits
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <a href="#" target="_blank" class="inline-block leading-none text-xl text-primary-500">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                    <div class="rounded-md w-[34px]">
                                                        <img alt="user-image" class="rounded-md" src="/assets/images/playlists/playlist3.jpg">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-[2.5px]">
                                                            Social Media Trends for 2025
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            David Chen
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Played 1day ago
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block text-gray-500 dark:text-gray-400 relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined !text-[20px] absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-primary-500">
                                                        headset_mic
                                                    </i>
                                                    7,400
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="leading-none text-xl text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                30:20
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md top-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-add-fill text-primary-500"></i>
                                                                Add to Playlist
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-multi-image-line text-primary-500"></i>
                                                                Go to Album
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-dropbox-line text-primary-500"></i>
                                                                View Credits
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <a href="#" target="_blank" class="inline-block leading-none text-xl text-primary-500">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                    <div class="rounded-md w-[34px]">
                                                        <img alt="user-image" class="rounded-md" src="/assets/images/playlists/playlist4.jpg">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-[2.5px]">
                                                            Building Brand Loyalty
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Michael Young
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Played 2days ago
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block text-gray-500 dark:text-gray-400 relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined !text-[20px] absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-primary-500">
                                                        headset_mic
                                                    </i>
                                                    10,200
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="leading-none text-xl text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                15:35
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md bottom-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-add-fill text-primary-500"></i>
                                                                Add to Playlist
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-multi-image-line text-primary-500"></i>
                                                                Go to Album
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-dropbox-line text-primary-500"></i>
                                                                View Credits
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <a href="#" target="_blank" class="inline-block leading-none text-xl text-primary-500">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                    <div class="rounded-md w-[34px]">
                                                        <img alt="user-image" class="rounded-md" src="/assets/images/playlists/playlist5.jpg">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-[2.5px]">
                                                            Content Creation Techniques
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Lisa Kim
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Played 3days ago
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block text-gray-500 dark:text-gray-400 relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined !text-[20px] absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-primary-500">
                                                        headset_mic
                                                    </i>
                                                    9,300
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="leading-none text-xl text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                18:45
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md bottom-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-add-fill text-primary-500"></i>
                                                                Add to Playlist
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-multi-image-line text-primary-500"></i>
                                                                Go to Album
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-dropbox-line text-primary-500"></i>
                                                                View Credits
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="flex items-center gap-[10px]">
                                                    <a href="#" target="_blank" class="inline-block leading-none text-xl text-primary-500">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                    <div class="rounded-md w-[34px]">
                                                        <img alt="user-image" class="rounded-md" src="/assets/images/playlists/playlist6.jpg">
                                                    </div>
                                                    <div>
                                                        <span class="font-medium inline-block mb-[2.5px]">
                                                            The Future of AI in Marketing
                                                        </span>
                                                        <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                            Tom Richards
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                Played 4days ago
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <span class="block text-gray-500 dark:text-gray-400 relative ltr:pl-[27px] rtl:pr-[27px]">
                                                    <i class="material-symbols-outlined !text-[20px] absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-primary-500">
                                                        headset_mic
                                                    </i>
                                                    6,300
                                                </span>
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <button type="button" class="leading-none text-xl text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                                                    <i class="ri-heart-line"></i>
                                                </button>
                                            </td>
                                            <td class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                22:15
                                            </td>
                                            <td class="ltr:text-left rtl:text-right ltr:last:text-right rtl:last:text-left whitespace-nowrap px-[20px] py-[12.5px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] md:ltr:last:pr-[25px] md:rtl:last:pl-[25px] border-b border-gray-100 dark:border-[#172036]">
                                                <div class="trezo-card-dropdown relative ltr:-mr-[7px] rtl:-ml-[7px]">
                                                    <button type="button" class="trezo-card-dropdown-btn inline-block transition-all text-[20px] text-gray-500 dark:text-gray-400 leading-none hover:text-primary-500" id="dropdownToggleBtn">
                                                        <i class="ri-more-fill"></i>
                                                    </button>
                                                    <ul class="trezo-card-dropdown-menu transition-all bg-white shadow-3xl rounded-md bottom-full py-[15px] absolute ltr:right-0 rtl:left-0 w-[195px] z-[5] dark:bg-dark dark:shadow-none">
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-add-fill text-primary-500"></i>
                                                                Add to Playlist
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-multi-image-line text-primary-500"></i>
                                                                Go to Album
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                                <i class="ri-dropbox-line text-primary-500"></i>
                                                                View Credits
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Player -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Player
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
                                                Add Music
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Block Music
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Delete Music
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div
                                class="rounded-md h-[205px] bg-cover bg-no-repeat bg-center"
                                style="background-image: url(/assets/images/player.jpg);"
                            ></div>
                            <div class="flex justify-between mt-[19px]">
                                <div>
                                    <h6 class="!font-medium !text-base !mb-[7px]">
                                        Building an Online Presence
                                    </h6>
                                    <span class="block text-xs">
                                        Ethan Cooper
                                    </span>
                                </div>
                                <button type="button" class="leading-none relative text-[25px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500 -top-[5px]">
                                    <i class="ri-heart-line"></i>
                                </button>
                            </div>
                            <div id="musicPlayer" class="mt-[15px]" data-player>
                                <div class="time-info flex justify-between text-xs text-gray-500 dark:text-gray-400">
                                    <span class="current-time">0:00</span>
                                    <span class="duration">0:00</span>
                                </div>
                                <div class="progress mt-[6px] h-[4px] w-full relative rounded-[30px] bg-gray-200 dark:bg-dark">
                                    <div class="progress-bar bg-primary-500 w-0 h-full rounded-[30px]"></div>
                                </div>
                                <audio src="https://cldup.com/qR72ozoaiQ.mp3"></audio>
                                <div class="flex items-center justify-between mt-[15px]">
                                    <div class="flex items-center ltr:-ml-[5px] rtl:-mr-[5px]">
                                        <button class="rewindBtn leading-none text-[21px] transition-all text-primary-300 dark:text-gray-400 hover:text-primary-500" type="button">
                                            <i class="ri-skip-left-fill"></i>
                                        </button>
                                        <button class="fastForwardBtn leading-none text-[21px] transition-all text-primary-300 dark:text-gray-400 hover:text-primary-500" type="button">
                                            <i class="ri-skip-right-fill"></i>
                                        </button>
                                    </div>
                                    <button type="button" class="playPauseBtn flex items-center justify-center w-[44px] h-[44px] text-[20px] transition-all text-primary-500 bg-primary-50 rounded-full hover:bg-primary-500 hover:text-white dark:bg-dark">
                                        <span class="playPauseIcon">▶</span>
                                    </button>
                                    <button class="restartBtn leading-none text-lg transition-all text-primary-300 dark:text-gray-400 hover:text-primary-500" type="button">
                                        <i class="ri-reset-right-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="lg:col-span-2">

                    <!-- Most Popular -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                        <div class="trezo-card-header mb-[20px] md:mb-[23px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Most Popular
                                </h5>
                            </div>
                            <div class="trezo-card-subtitle">
                                <a href="#" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                                    View All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                                </a>
                            </div>
                        </div>
                        <div class="trezo-card-content">
                            <div class="trezo-tabs" id="trezo-tabs">
                                <ul class="most-popular-navs mb-[18px]">
                                    <li class="nav-item inline-block mb-[7px] ltr:mr-[4px] rtl:ml-[4px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab1" class="nav-link active inline-block font-medium text-xs rounded-[30px] py-[4px] px-[12px] text-gray-500 dark:text-gray-400 transition-all bg-gray-100 dark:bg-dark">
                                            Marketing
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[7px] ltr:mr-[4px] rtl:ml-[4px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab2" class="nav-link inline-block font-medium text-xs rounded-[30px] py-[4px] px-[12px] text-gray-500 dark:text-gray-400 transition-all bg-gray-100 dark:bg-dark">
                                            Content
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[7px] ltr:mr-[4px] rtl:ml-[4px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab3" class="nav-link inline-block font-medium text-xs rounded-[30px] py-[4px] px-[12px] text-gray-500 dark:text-gray-400 transition-all bg-gray-100 dark:bg-dark">
                                            Social
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[7px] ltr:mr-[4px] rtl:ml-[4px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab4" class="nav-link inline-block font-medium text-xs rounded-[30px] py-[4px] px-[12px] text-gray-500 dark:text-gray-400 transition-all bg-gray-100 dark:bg-dark">
                                            Analytics
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[7px] ltr:mr-[4px] rtl:ml-[4px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab5" class="nav-link inline-block font-medium text-xs rounded-[30px] py-[4px] px-[12px] text-gray-500 dark:text-gray-400 transition-all bg-gray-100 dark:bg-dark">
                                            Customer
                                        </button>
                                    </li>
                                    <li class="nav-item inline-block mb-[7px] ltr:mr-[4px] rtl:ml-[4px] ltr:last:mr-0 rtl:last:ml-0">
                                        <button type="button" data-tab="tab6" class="nav-link inline-block font-medium text-xs rounded-[30px] py-[4px] px-[12px] text-gray-500 dark:text-gray-400 transition-all bg-gray-100 dark:bg-dark">
                                            Trends
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast1.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Influencer Marketing
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda Garcia
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            6,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast2.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Data for Better Ads
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: David Chen
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast3.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Boosting Engagement
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Lisa Kim
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast4.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Real Engagement Metrics
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Sarah Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,700
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast5.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            SEO for E-Commerce
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,900
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast6.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Podcast Marketing 101
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,400
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast6.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Podcast Marketing 101
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,400
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast5.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            SEO for E-Commerce
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,900
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast4.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Real Engagement Metrics
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Sarah Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,700
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast3.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Boosting Engagement
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Lisa Kim
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast2.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Data for Better Ads
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: David Chen
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast1.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Influencer Marketing
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda Garcia
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            6,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast4.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Real Engagement Metrics
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Sarah Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,700
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast2.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Data for Better Ads
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: David Chen
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast5.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            SEO for E-Commerce
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,900
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast6.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Podcast Marketing 101
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,400
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast3.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Boosting Engagement
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Lisa Kim
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast2.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Data for Better Ads
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: David Chen
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast1.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Influencer Marketing
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda Garcia
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            6,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast6.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Podcast Marketing 101
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,400
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast5.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            SEO for E-Commerce
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,900
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast5.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            SEO for E-Commerce
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,900
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast6.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Podcast Marketing 101
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,400
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast4.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Real Engagement Metrics
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Sarah Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,700
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast2.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Data for Better Ads
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: David Chen
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast3.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Boosting Engagement
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Lisa Kim
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast1.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Influencer Marketing
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda Garcia
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            6,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab6">
                                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast2.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Data for Better Ads
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: David Chen
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,500
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast3.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Boosting Engagement
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Lisa Kim
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast6.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Podcast Marketing 101
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            9,400
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast1.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Influencer Marketing
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Amanda Garcia
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            6,300
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast4.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            Real Engagement Metrics
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Sarah Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,700
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="group">
                                                <div
                                                    class="relative rounded-md h-[185.06px] bg-cover bg-center bg-no-repeat"
                                                    style="background-image: url(/assets/images/podcasts/podcast5.jpg);"
                                                >
                                                    <a href="#" target="_blank" class="bg-primary-500 text-white rounded-full flex items-center justify-center w-[44px] h-[44px] absolute ltr:left-[15px] rtl:right-[15px] bottom-[15px] text-[22px] transition-all hover:bg-primary-600 opacity-0 group-hover:opacity-100">
                                                        <i class="ri-play-large-fill"></i>
                                                    </a>
                                                </div>
                                                <div class="mt-[16px]">
                                                    <h4 class="!font-medium !text-base !mb-[11px]">
                                                        <a href="#" target="_blank" class="transition-all hover:text-primary-500">
                                                            SEO for E-Commerce
                                                        </a>
                                                    </h4>
                                                    <div class="flex items-center gap-[15px] md:gap-[20px] lg:gap-[25px] text-xs">
                                                        <span class="block">
                                                            By: Johnson
                                                        </span>
                                                        <span class="relative block ltr:pl-[20px] rtl:pr-[20px]">
                                                            <i class="material-symbols-outlined !text-base text-primary-500 absolute top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 -mt-px">
                                                                headset_mic
                                                            </i>
                                                            8,900
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-1">

                    <!-- Upcoming Episodes -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md mb-[25px]">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <h5 class="!mb-0 !font-semibold">
                                    Upcoming Episodes
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
                                                Add Episode
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Block Episode
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                Delete Episode
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="trezo-card-content -mx-[20px] md:-mx-[25px]">
                            <div class="relative border-b border-gray-50 dark:border-[#172036] pb-[16px] mb-[16px] px-[70px] md:px-[76px] last:border-b-0 last:pb-0 last:mb-0">
                                <div class="w-[40px] h-[40px] bg-purple-500 rounded-full flex items-center justify-center absolute ltr:left-[20px] ltr:md:left-[25px] rtl:right-[20px] rtl:md:right-[25px] mt-[2px]">
                                    <img src="/assets/images/icons/note.svg" alt="note">
                                </div>
                                <h6 class="!text-base !font-medium !mb-[5px]">
                                    <a href="#" class="text-gray-700 dark:text-gray-400 transition-all hover:text-primary-500">
                                        AI for Content Strategy
                                    </a>
                                </h6>
                                <p class="text-xs max-w-[166px] !leading-[1.4] !mb-[5px]">
                                    Amanda Garcia
                                </p>
                                <span class="block relative text-primary-500 text-xs ltr:pl-[16px] rtl:pr-[16px]">
                                    <i class="ri-calendar-line absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-px"></i>
                                    October 28, 2025
                                </span>
                                <a href="javascript:void(0);" class="inline-block absolute ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px] top-1/2 -translate-y-1/2 -mt-[10px] w-[40px] h-[40px] md:w-[43px] md:h-[43px] text-center text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-[22px] top-1/2 -translate-y-1/2">
                                        arrow_outward
                                    </i>
                                </a>
                            </div>
                            <div class="relative border-b border-gray-50 dark:border-[#172036] pb-[16px] mb-[16px] px-[70px] md:px-[76px] last:border-b-0 last:pb-0 last:mb-0">
                                <div class="w-[40px] h-[40px] bg-primary-500 rounded-full flex items-center justify-center absolute ltr:left-[20px] ltr:md:left-[25px] rtl:right-[20px] rtl:md:right-[25px] mt-[2px]">
                                    <img src="/assets/images/icons/video-chat.svg" alt="video-chat">
                                </div>
                                <h6 class="!text-base !font-medium !mb-[5px]">
                                    <a href="#" class="text-gray-700 dark:text-gray-400 transition-all hover:text-primary-500">
                                        Secrets to Viral Marketing
                                    </a>
                                </h6>
                                <p class="text-xs max-w-[166px] !leading-[1.4] !mb-[5px]">
                                    Sarah Johnson
                                </p>
                                <span class="block relative text-primary-500 text-xs ltr:pl-[16px] rtl:pr-[16px]">
                                    <i class="ri-calendar-line absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-px"></i>
                                    November 1, 2025
                                </span>
                                <a href="javascript:void(0);" class="inline-block absolute ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px] top-1/2 -translate-y-1/2 -mt-[10px] w-[40px] h-[40px] md:w-[43px] md:h-[43px] text-center text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-[22px] top-1/2 -translate-y-1/2">
                                        arrow_outward
                                    </i>
                                </a>
                            </div>
                            <div class="relative border-b border-gray-50 dark:border-[#172036] pb-[16px] mb-[16px] px-[70px] md:px-[76px] last:border-b-0 last:pb-0 last:mb-0">
                                <div class="w-[40px] h-[40px] bg-orange-500 rounded-full flex items-center justify-center absolute ltr:left-[20px] ltr:md:left-[25px] rtl:right-[20px] rtl:md:right-[25px] mt-[2px]">
                                    <img src="/assets/images/icons/ball.svg" alt="ball">
                                </div>
                                <h6 class="!text-base !font-medium !mb-[5px]">
                                    <a href="#" class="text-gray-700 dark:text-gray-400 transition-all hover:text-primary-500">
                                        Social Media Strategy
                                    </a>
                                </h6>
                                <p class="text-xs max-w-[166px] !leading-[1.4] !mb-[5px]">
                                    David Chen
                                </p>
                                <span class="block relative text-primary-500 text-xs ltr:pl-[16px] rtl:pr-[16px]">
                                    <i class="ri-calendar-line absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-px"></i>
                                    November 12, 2025
                                </span>
                                <a href="javascript:void(0);" class="inline-block absolute ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px] top-1/2 -translate-y-1/2 -mt-[10px] w-[40px] h-[40px] md:w-[43px] md:h-[43px] text-center text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-[22px] top-1/2 -translate-y-1/2">
                                        arrow_outward
                                    </i>
                                </a>
                            </div>
                            <div class="relative border-b border-gray-50 dark:border-[#172036] pb-[16px] mb-[16px] px-[70px] md:px-[76px] last:border-b-0 last:pb-0 last:mb-0">
                                <div class="w-[40px] h-[40px] bg-secondary-500 rounded-full flex items-center justify-center absolute ltr:left-[20px] ltr:md:left-[25px] rtl:right-[20px] rtl:md:right-[25px] mt-[2px]">
                                    <img src="/assets/images/icons/celebration.svg" alt="celebration">
                                </div>
                                <h6 class="!text-base !font-medium !mb-[5px]">
                                    <a href="#" class="text-gray-700 dark:text-gray-400 transition-all hover:text-primary-500">
                                        Content Trends for 2025
                                    </a>
                                </h6>
                                <p class="text-xs max-w-[166px] !leading-[1.4] !mb-[5px]">
                                    Tom Richards
                                </p>
                                <span class="block relative text-primary-500 text-xs ltr:pl-[16px]">
                                    <i class="ri-calendar-line absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 -mt-px"></i>
                                    November 28, 2025
                                </span>
                                <a href="javascript:void(0);" class="inline-block absolute ltr:right-[20px] rtl:left-[20px] ltr:md:right-[25px] rtl:md:left-[25px] top-1/2 -translate-y-1/2 -mt-[10px] w-[40px] h-[40px] md:w-[43px] md:h-[43px] text-center text-gray-400 transition-all border border-gray-100 dark:border-[#172036] rounded-full hover:bg-primary-500 hover:border-primary-500 hover:text-white">
                                    <i class="material-symbols-outlined absolute left-0 right-0 !text-[22px] top-1/2 -translate-y-1/2">
                                        arrow_outward
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Today's Earnings -->
                    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md relative">
                        <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                            <div class="trezo-card-title">
                                <div class="flex items-center gap-[10px] mb-[2px]">
                                    <h5 class="!mb-0 !font-semibold !text-md !text-lg lg:!text-[20px]">
                                        $3,425.78
                                    </h5>
                                    <span class="inline-block text-xs rounded-sm px-[7px] text-success-700 bg-success-100 dark:bg-[#15203c]">
                                        +9.1%
                                    </span>
                                </div>
                                <span class="block">
                                    Today’s Earnings
                                </span>
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
                        <div class="trezo-card-content h-[72px]">
                            <div class="absolute -bottom-[29px] -ml-[12px] -mr-[10px] left-0 right-0">
                                <div id="podcastTodaysEarningsChart"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] mb-[25px]">

                <!-- Listener Analytics -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !font-semibold">
                                Listener Analytics
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
                    <div class="trezo-card-content relative">
                        <div class="-ml-[15px] md:-mb-[25px]">
                            <div id="podcastListenerAnalyticsChart"></div>
                        </div>
                        <div class="top-0 right-0 md:absolute md:max-w-[240px]">
                            <div id="podcastListenerAnalyticsChart2"></div>
                        </div>
                    </div>
                </div>

                <!-- Top Podcasters -->
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md">
                    <div class="trezo-card-header mb-[20px] md:mb-[25px] flex items-center justify-between">
                        <div class="trezo-card-title">
                            <h5 class="!mb-0 !font-semibold">
                                Top Podcasters
                            </h5>
                        </div>
                        <div class="trezo-card-subtitle">
                            <a href="#" class="inline-block relative ltr:pr-[13px] rtl:pl-[13px] leading-none transition-all hover:text-primary-500">
                                View All <i class="ri-arrow-right-s-line absolute top-1/2 -translate-y-1/2 ltr:-right-[8px] rtl:-left-[8px] text-[23px] -mt-px"></i>
                            </a>
                        </div>
                    </div>
                    <div class="trezo-card-content -mx-[20px] md:-mx-[25px] -mb-[19px] md:-mb-[23px]">
                        <div class="table-responsive overflow-x-auto pb-[19px] md:pb-[23px]">
                            <table class="w-full without-top-bottom-border">
                                <thead class="text-black dark:text-white">
                                    <tr>
                                        <th class="font-medium text-xs ltr:text-left rtl:text-right px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-gray-50 dark:bg-[#15203c] whitespace-nowrap text-gray-500 dark:text-gray-400">
                                            Name
                                        </th>
                                        <th class="font-medium text-xs ltr:text-left rtl:text-right px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-gray-50 dark:bg-[#15203c] whitespace-nowrap text-gray-500 dark:text-gray-400">
                                            Episodes
                                        </th>
                                        <th class="font-medium text-xs ltr:text-left rtl:text-right px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-gray-50 dark:bg-[#15203c] whitespace-nowrap text-gray-500 dark:text-gray-400">
                                            Earnings
                                        </th>
                                        <th class="font-medium text-xs ltr:text-left rtl:text-right px-[20px] py-[8px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 bg-gray-50 dark:bg-[#15203c] whitespace-nowrap text-gray-500 dark:text-gray-400">
                                            Ratings
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-black dark:text-white">
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center gap-[10px]">
                                                <div class="rounded-full w-[40px]">
                                                    <img src="/assets/images/users/user24.jpg" class="inline-block rounded-full" alt="user-image">
                                                </div>
                                                <div>
                                                    <span class="font-medium inline-block mb-px">
                                                        Tom Richards
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                        Content Strategist
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            95
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            $125,000
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center gap-[10px]">
                                                <div class="rounded-full w-[40px]">
                                                    <img src="/assets/images/users/user25.jpg" class="inline-block rounded-full" alt="user-image">
                                                </div>
                                                <div>
                                                    <span class="font-medium inline-block mb-px">
                                                        Amanda Garcia
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                        Social Media
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            110
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            $140,000
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="text-[15px] leading-none text-orange-400">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center gap-[10px]">
                                                <div class="rounded-full w-[40px]">
                                                    <img src="/assets/images/users/user26.jpg" class="inline-block rounded-full" alt="user-image">
                                                </div>
                                                <div>
                                                    <span class="font-medium inline-block mb-px">
                                                        Lisa Kim
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                        Branding Consultant
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            85
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            $160,000
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center gap-[10px]">
                                                <div class="rounded-full w-[40px]">
                                                    <img src="/assets/images/users/user27.jpg" class="inline-block rounded-full" alt="user-image">
                                                </div>
                                                <div>
                                                    <span class="font-medium inline-block mb-px">
                                                        Michael Young
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                        Data Analytics
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            130
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            $90,000
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="text-[15px] leading-none text-orange-400">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line"></i>
                                                <i class="ri-star-line"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            <div class="flex items-center gap-[10px]">
                                                <div class="rounded-full w-[40px]">
                                                    <img src="/assets/images/users/user28.jpg" class="inline-block rounded-full" alt="user-image">
                                                </div>
                                                <div>
                                                    <span class="font-medium inline-block mb-px">
                                                        Ravi Patel
                                                    </span>
                                                    <span class="block text-gray-500 dark:text-gray-400 text-xs">
                                                        SEO & SEM
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            75
                                        </td>
                                        <td class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
                                            $85,000
                                        </td>
                                        <td class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[12px] md:ltr:first:pl-[25px] md:rtl:first:pr-[25px] ltr:first:pr-0 rtl:first:pl-0 border-b border-gray-100 dark:border-[#172036]">
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
                    </div>
                </div>

            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
