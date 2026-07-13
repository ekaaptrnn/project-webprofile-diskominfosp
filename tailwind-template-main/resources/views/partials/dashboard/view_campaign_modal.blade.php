<!-- View Campaign Modal -->
<div class="add-new-popup z-[999] fixed transition-all inset-0 overflow-x-hidden overflow-y-auto lg:py-[20px]" id="scrollingLongContentModal">
    <div class="popup-dialog flex transition-all sm:max-w-[540px] md:max-w-[720px] lg:max-w-[1320px] min-h-full items-center mx-auto">
        <div class="trezo-card w-full bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] lg:p-[50px]">
            <div class="trezo-card-header mb-[20px] md:mb-[25px] pb-[20px] md:pb-[25px] border-b border-primary-50 dark:border-[#172036] flex items-center justify-between">
                <div class="trezo-card-title flex items-center gap-[18px] ltr:lg:pl-[45px] rtl:lg:pr-[45px]">
                    <div class="bg-[#E8EDE7] rounded-[8px] w-[64px] h-[64px] flex items-center justify-center">
                        <img src="/assets/images/icons/supabase.svg" alt="supabase">
                    </div>
                    <div>
                        <span class="block text-gray-900 dark:text-gray-400 font-bold text-lg md:text-xl mb-[3px] md:mb-0">
                            Christmas Eve
                        </span>
                        <span class="block font-medium md:text-md">
                            From 10 Oct - 15 Oct, 24
                        </span>
                    </div>
                </div>
                <div class="trezo-card-subtitle">
                    <button type="button" class="text-[28px] transition-all leading-none text-black dark:text-white hover:text-primary-500" id="scrollingLongContentModalToggle">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
            </div>
            <div class="trezo-card-content ltr:lg:pl-[45px] rtl:lg:pr-[45px]">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
                    <div>
                        <div class="trezo-card bg-gray-50 dark:bg-[#0a0e19] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[14px] pb-[17px] border-b border-primary-50 dark:border-[#172036] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Campaign Goal:
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
                                                    Update
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Cancel
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content md:pb-[12px]">
                                <span class="block font-medium text-gray-900 dark:text-gray-400 mb-[6px]">
                                    Get more visitors
                                </span>
                                <p>
                                    Increase impression traffic onto the platform
                                </p>
                            </div>
                        </div>
                        <div class="trezo-card bg-gray-50 dark:bg-[#0a0e19] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[20px] pb-[17px] border-b border-primary-50 dark:border-[#172036] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Team Members:
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
                                                    Update
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Cancel
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content md:pb-[45px]">
                                <div class="inline-block py-[4px] ltr:pl-[7px] rtl:pr-[7px] ltr:pr-[20px] rtl:pl-[20px] bg-gray-100 dark:bg-[#0c1427] rounded-[3px] ltr:mr-[8px] mb-[10px] last:mr-0">
                                    <div class="flex items-center font-medium text-gray-900 dark:text-gray-400 gap-[7px]">
                                        <img src="/assets/images/users/user1.jpg" class="w-[22px] rounded-full border border-white dark:border-black" alt="use-image">
                                        Jonathon Ronan
                                    </div>
                                </div>
                                <div class="inline-block py-[4px] ltr:pl-[7px] rtl:pr-[7px] ltr:pr-[20px] rtl:pl-[20px] bg-gray-100 dark:bg-[#0c1427] rounded-[3px] ltr:mr-[8px] mb-[10px] last:mr-0">
                                    <div class="flex items-center font-medium text-gray-900 dark:text-gray-400 gap-[7px]">
                                        <img src="/assets/images/users/user2.jpg" class="w-[22px] rounded-full border border-white dark:border-black" alt="use-image">
                                        Walter White
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="trezo-card bg-gray-50 dark:bg-[#0a0e19] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[10px] pb-[17px] border-b border-primary-50 dark:border-[#172036] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Audiences:
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
                                                    Update
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Cancel
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[10px]">
                                    <span class="font-medium text-gray-900 dark:text-gray-400">
                                        Gender:
                                    </span>
                                    All
                                </div>
                                <div class="border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[10px]">
                                    <span class="font-medium text-gray-900 dark:text-gray-400">
                                        Age Range:
                                    </span>
                                    18-60
                                </div>
                                <div class="border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[10px]">
                                    <span class="font-medium text-gray-900 dark:text-gray-400">
                                        Location:
                                    </span>
                                    Canada, USA
                                </div>
                                <div class="border-b border-primary-50 dark:border-[#172036] pb-[10px] mb-[10px]">
                                    <span class="font-medium text-gray-900 dark:text-gray-400">
                                        Media:
                                    </span>
                                    Facebook, Instagram
                                </div>
                                <div class="md:pt-[200px]"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="trezo-card bg-gray-50 dark:bg-[#0a0e19] p-[20px] md:p-[25px] rounded-md">
                            <div class="trezo-card-header mb-[14px] pb-[17px] border-b border-primary-50 dark:border-[#172036] flex items-center justify-between">
                                <div class="trezo-card-title">
                                    <h5 class="!mb-0">
                                        Uploaded Files:
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
                                                    Update
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Cancel
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="block w-full transition-all text-black ltr:text-left rtl:text-right relative py-[8px] px-[20px] hover:bg-gray-50 dark:text-white dark:hover:bg-black">
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="trezo-card-content">
                                <div class="relative ltr:pl-[39px] rtl:pr-[39px] ltr:pr-[39px] rtl:pl-[39px] border-b border-primary-50 dark:border-[#172036] pb-[13px] mb-[13px] last:pb-0 last:border-b-0 last:mb-0">
                                    <img src="/assets/images/icons/pdf.png" class="w-[26px] absolute top-[5px] ltr:left-0 rtl:right-0" alt="pdf">
                                    <span class="block mb-[5px] font-medium text-gray-900 dark:text-gray-400">
                                        Campaign_Requirements.pdf
                                    </span>
                                    <p class="!leading-[1.6] !mb-0">
                                        Increase impression traffic onto the platform.
                                    </p>
                                    <button type="button" class="inline-block w-[30px] transition-all h-[30px] rounded-full bg-white dark:bg-black text-primary-500 leading-[23px] text-md absolute ltr:right-0 top-[5px] hover:bg-primary-500 hover:text-white">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </div>
                                <div class="relative ltr:pl-[39px] rtl:pr-[39px] ltr:pr-[39px] rtl:pl-[39px] border-b border-primary-50 dark:border-[#172036] pb-[13px] mb-[13px] last:pb-0 last:border-b-0 last:mb-0">
                                    <img src="/assets/images/icons/doc.png" class="w-[26px] absolute top-[5px] ltr:left-0 rtl:right-0" alt="doc">
                                    <span class="block mb-[5px] font-medium text-gray-900 dark:text-gray-400">
                                        Campaigns_mission_and_vision.txt
                                    </span>
                                    <p class="!leading-[1.6] !mb-0">
                                        Increase impression traffic onto the platform.
                                    </p>
                                    <button type="button" class="inline-block w-[30px] transition-all h-[30px] rounded-full bg-white dark:bg-black text-primary-500 leading-[23px] text-md absolute ltr:right-0 top-[5px] hover:bg-primary-500 hover:text-white">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </div>
                                <div class="relative ltr:pl-[39px] rtl:pr-[39px] ltr:pr-[39px] rtl:pl-[39px] border-b border-primary-50 dark:border-[#172036] pb-[13px] mb-[13px] last:pb-0 last:border-b-0 last:mb-0">
                                    <img src="/assets/images/icons/gif.svg" class="w-[26px] absolute top-[5px] ltr:left-0 rtl:right-0" alt="gif">
                                    <span class="block mb-[5px] font-medium text-gray-900 dark:text-gray-400">
                                        Campaign_Banner.gif
                                    </span>
                                    <p class="!leading-[1.6] !mb-0">
                                        Increase impression traffic onto the platform.
                                    </p>
                                    <button type="button" class="inline-block w-[30px] transition-all h-[30px] rounded-full bg-white dark:bg-black text-primary-500 leading-[23px] text-md absolute ltr:right-0 top-[5px] hover:bg-primary-500 hover:text-white">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </div>
                                <div class="relative ltr:pl-[39px] rtl:pr-[39px] ltr:pr-[39px] rtl:pl-[39px] border-b border-primary-50 dark:border-[#172036] pb-[13px] mb-[13px] last:pb-0 last:border-b-0 last:mb-0">
                                    <img src="/assets/images/icons/jpg.png" class="w-[26px] absolute top-[5px] ltr:left-0 rtl:right-0" alt="jpg">
                                    <span class="block mb-[5px] font-medium text-gray-900 dark:text-gray-400">
                                        Campaign_Image.jpg
                                    </span>
                                    <p class="!leading-[1.6] !mb-0">
                                        Increase impression traffic onto the platform.
                                    </p>
                                    <button type="button" class="inline-block w-[30px] transition-all h-[30px] rounded-full bg-white dark:bg-black text-primary-500 leading-[23px] text-md absolute ltr:right-0 top-[5px] hover:bg-primary-500 hover:text-white">
                                        <i class="ri-download-2-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>