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
        @include('partials.front.light_dark_btn')
        @include('partials.front.navigation')

        <!-- Page Banner -->
            <div class="pt-[125px] md:pt-[145px] lg:pt-[185px] xl:pt-[195px] text-center">
                <div class="container 2xl:max-w-[1320px] mx-auto px-[12px] relative z-[1]">
                    <h1 class="!mb-0 !leading-[1.2] !text-[32px] md:!text-[40px] lg:!text-[50px] xl:!text-[60px] -tracking-[.5px] md:-tracking-[1px] xl:-tracking-[1.5px]">
                        Our Team
                    </h1>
                    <div class="absolute bottom-0 -z-[1] ltr:-right-[30px] rtl:-left-[30px] blur-[250px]">
                        <img src="/assets/images/front-pages/shape3.png" alt="shape3">
                    </div>
                    <div class="absolute -top-[220px] -z-[1] ltr:-left-[50px] rtl:-right-[50px] blur-[150px]">
                        <img src="/assets/images/front-pages/shape5.png" alt="shape3">
                    </div>
                </div>
            </div>
            <!-- End Page Banner -->
            
            <!-- Team -->
            <div class="pt-[60px] md:pt-[80px] lg:pt-[100px] xl:pt-[150px] relative z-[2]">
                <div class="container 2xl:max-w-[1320px] mx-auto px-[12px] relative z-[1]">
                    <div class="md:max-w-[500px] lg:max-w-[675px] mb-[35px] md:mb-[50px] lg:mb-[65px] xl:mb-[90px]">
                        <div class="inline-block relative mt-[10px] mb-[20px]">
                            <span class="absolute top-[4.5px] w-[5px] h-[5px] ltr:-left-[3.6px] rtl:-right-[3.6px] bg-purple-600 -rotate-[6.536deg]"></span>
                            <span class="absolute -top-[9.5px] w-[5px] h-[5px] ltr:right-0 rtl:left-0 bg-purple-600 -rotate-[6.536deg]"></span>
                            <span class="inline-block relative text-purple-600 border border-purple-600 py-[5.5px] px-[17.2px] -rotate-[6.536deg]">
                                Our Team
                                <span class="absolute -bottom-[2.5px] w-[5px] h-[5px] ltr:-left-[3.5px] rtl:-right-[3.5px] bg-purple-600 -rotate-[6.536deg]"></span>
                                <span class="absolute -bottom-[2.5px] w-[5px] h-[5px] ltr:-right-[3.5px] rtl:-left-[3.5px] bg-purple-600 -rotate-[6.536deg]"></span>
                            </span>
                        </div>
                        <h2 class="!mb-0 !text-[24px] md:!text-[28px] lg:!text-[34px] xl:!text-[36px] -tracking-[.5px] md:-tracking-[.6px] lg:-tracking-[.8px] xl:-tracking-[1px] !leading-[1.2]">
                            Introducing Our Exceptional Team. Meet the Minds Driving Our Success
                        </h2>
                    </div>
                    <div class="relative" id="frontPageTeamSlides">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="mb-px pt-[15px] px-[15px] pb-[12px] rounded-[7px] bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <img src="/assets/images/front-pages/team1.jpg" alt="team-image" class="rounded-[7px]">
                                    </div>
                                    <div class="p-[20px] md:p-[25px] lg:p-[30px] rounded-[7px] flex items-center justify-between bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <div>
                                            <h3 class="!font-semibold !mb-[5px] !text-[16px] md:!text-lg !leading-[1.2]">
                                                Michael Johnson
                                            </h3>
                                            <span class="block">
                                                CEO
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-[8px]">
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-twitter-x-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mb-px pt-[15px] px-[15px] pb-[12px] rounded-[7px] bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <img src="/assets/images/front-pages/team2.jpg" alt="team-image" class="rounded-[7px]">
                                    </div>
                                    <div class="p-[20px] md:p-[25px] lg:p-[30px] rounded-[7px] flex items-center justify-between bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <div>
                                            <h3 class="!font-semibold !mb-[5px] !text-[16px] md:!text-lg !leading-[1.2]">
                                                Emily Davis
                                            </h3>
                                            <span class="block">
                                                Project Manager
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-[8px]">
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-twitter-x-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mb-px pt-[15px] px-[15px] pb-[12px] rounded-[7px] bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <img src="/assets/images/front-pages/team3.jpg" alt="team-image" class="rounded-[7px]">
                                    </div>
                                    <div class="p-[20px] md:p-[25px] lg:p-[30px] rounded-[7px] flex items-center justify-between bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <div>
                                            <h3 class="!font-semibold !mb-[5px] !text-[16px] md:!text-lg !leading-[1.2]">
                                                Daniel Lee
                                            </h3>
                                            <span class="block">
                                                Sales Team Lead
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-[8px]">
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-twitter-x-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mb-px pt-[15px] px-[15px] pb-[12px] rounded-[7px] bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <img src="/assets/images/front-pages/team4.jpg" alt="team-image" class="rounded-[7px]">
                                    </div>
                                    <div class="p-[20px] md:p-[25px] lg:p-[30px] rounded-[7px] flex items-center justify-between bg-white/[.26] dark:bg-black/[.54] border border-white/[.24] dark:border-black/[.24] backdrop-blur-[3.5999999046325684px]">
                                        <div>
                                            <h3 class="!font-semibold !mb-[5px] !text-[16px] md:!text-lg !leading-[1.2]">
                                                Olivia John
                                            </h3>
                                            <span class="block">
                                                Frontend Lead
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-[8px]">
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-twitter-x-fill"></i>
                                            </a>
                                            <a href="#" class="inline-block leading-none text-[17px] md:text-[20px] transition-all text-primary-600 hover:text-primary-500">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-[25px] md:mt-0 md:absolute ltr:md:right-0 rtl:md:left-0 md:-top-[110px] lg:-top-[138px] xl:-top-[164px] flex items-center justify-center gap-[10px] md:gap-[15px]">
                            <div class="swiper-button-prev !text-[20px] lg:!text-[24px] !mt-0 !relative !left-0 !right-0 !top-0 !flex !items-center !justify-center !w-[40px] md:!w-[50px] lg:!w-[60px] xl:!w-[64px] !h-[40px] md:!h-[50px] lg:!h-[60px] xl:!h-[64px] !rounded-full !transition-all !text-gray-500 dark:!text-gray-400 !bg-primary-50 dark:!bg-[#15203c] hover:!bg-primary-600 hover:!text-white">
                                <i class="ri-arrow-left-line"></i>
                            </div>
                            <div class="swiper-button-next !text-[20px] lg:!text-[24px] !mt-0 !relative !left-0 !right-0 !top-0 !flex !items-center !justify-center !w-[40px] md:!w-[50px] lg:!w-[60px] xl:!w-[64px] !h-[40px] md:!h-[50px] lg:!h-[60px] xl:!h-[64px] !rounded-full !transition-all !text-gray-500 dark:!text-gray-400 !bg-primary-50 dark:!bg-[#15203c] hover:!bg-primary-600 hover:!text-white">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="ltr:left-[90px] rtl:right-[90px] -z-[1] bottom-[15px] absolute blur-[150px]">
                        <img src="/assets/images/front-pages/shape1.png" alt="shape1">
                    </div>
                    <div class="ltr:-right-[15px] rtl:-left-[15px] -z-[1] -bottom-[130px] absolute blur-[125px]">
                        <img src="/assets/images/front-pages/shape1.png" alt="shape1">
                    </div>
                </div>
            </div>
            <!-- End Team -->
            
            <!-- CTA -->
            <div class="py-[60px] md:py-[80px] lg:py-[100px] xl:py-[150px]">
                <div class="container md:max-w-[960px] 2xl:max-w-[1320px] mx-auto px-[12px] relative z-[1]">
                    <div class="text-center mx-auto md:max-w-[680px] lg:max-w-[830px]">
                        <h2 class="!text-[28px] md:!text-[36px] lg:!text-[45px] xl:!text-[48px] !mb-[13px] md:!mb-[20px] lg:!mb-[25px] xl:!mb-[35px] -tracking-[.5px] md:-tracking-[.8px] lg:-tracking-[1.2px] xl:-tracking-[1.5px] !leading-[1.2]">
                            Unlock a world of possibilities with Trezo Dashboard.
                        </h2>
                        <p class="mx-auto !leading-[1.6] md:max-w-[650px] lg:max-w-[680px] xl:max-w-[740px] md:text-[15px] lg:text-[16px] xl:text-lg xl:tracking-[.2px]">
                            Experience the difference with Trezo Dashboard. Sign up for a free trial today and see how our intuitive platform can revolutionize your data analysis process.
                        </p>
                        <a href="/" class="inline-block lg:text-[15px] xl:text-[16px] mt-[5px] md:mt-[10px] lg:mt-[20px] xl:mt-[30px] py-[12px] px-[17px] bg-purple-600 text-white rounded-md transition-all font-medium hover:bg-purple-500">
                            <span class="inline-block relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[29px] rtl:md:pr-[29px]">
                                <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] md:!text-[24px]">
                                    person
                                </i>
                                Get started - It is free
                            </span>
                        </a>
                    </div>
                    <div class="absolute ltr:left-[10px] rtl:right-[10px] -top-[200px] -z-[1] blur-[150px]">
                        <img src="/assets/images/front-pages/shape1.png" alt="shape1">
                    </div>
                    <div class="absolute ltr:right-[25px] rtl:left-[25px] top-[150px] -z-[1] blur-[125px] hidden md:block">
                        <img src="/assets/images/front-pages/shape2.png" alt="shape1">
                    </div>
                </div>
            </div>
            <!-- End CTA -->

        @include('partials.front.footer')
        @include('partials.front.scripts')
    </body>
</html>
