@php
    $sidebar = config('sidebar');
    $currentPath = request()->path();

    foreach ($sidebar as &$section) {
        foreach ($section['items'] as &$item) {
            if ($item['type'] === 'link') {
                $item['active'] = $currentPath === ltrim($item['url'], '/');
            } elseif ($item['type'] === 'accordion') {
                $item['active'] = false;
                foreach ($item['sub_items'] as &$sub_item) {
                    $sub_item['active'] = $currentPath === ltrim($sub_item['url'], '/');
                    if ($sub_item['active']) {
                        $item['active'] = true; // Open accordion if a sub-item is active
                    }
                }
            }
        }
    }
    unset($section, $item, $sub_item); // Clean up references
@endphp


<!-- Sidebar -->
<div class="sidebar-area bg-white dark:bg-[#0c1427] fixed overflow-hidden z-[7] top-0 h-screen transition-all rounded-r-md" id="sidebar-area">
    <div class="logo bg-white dark:bg-[#0c1427] border-b border-gray-100 dark:border-[#172036] px-[25px] pt-[19px] pb-[15px] absolute z-[2] right-0 top-0 left-0">
        <a href="/" class="transition-none relative flex items-center">
            <img src="/assets/images/logo-icon.svg" alt="logo-icon">
            <span class="font-bold text-black dark:text-white relative ltr:ml-[8px] rtl:mr-[8px] top-px text-xl">
                Trezo
            </span>
        </a>
        <button type="button" class="burger-menu inline-block absolute z-[3] top-[24px] ltr:right-[25px] rtl:left-[25px] transition-all hover:text-primary-500" id="hide-sidebar-toggle2">
            <i class="material-symbols-outlined">close</i>
        </button>
    </div>
    <div class="pt-[89px] px-[25px] pb-[20px] h-screen" data-simplebar>
        <div class="accordion">
            @foreach($sidebar as $index => $section)
                <span class="block relative font-medium uppercase text-gray-400 mb-[10px] text-xs {{ $index !== 0 ? '[&:not(:first-child)]:mt-[22px]' : '' }}">
                    {{ $section['name'] }}
                </span>
                @foreach($section['items'] as $item)
                    @if($item['type'] === 'link')
                        <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                            <a href="{{ $item['url'] }}" class="accordion-button flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c] {{ $item['active'] ? 'active' : '' }}">
                                <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                                    {{ $item['icon'] }}
                                </i>
                                <span class="title leading-none">
                                    {{ $item['name'] }}
                                </span>
                            </a>
                        </div>
                    @elseif($item['type'] === 'accordion')
                        <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                            <button class="accordion-button toggle flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[28px] rtl:pr-[14px] rtl:pl-[28px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c] {{ $item['active'] ? 'open active' : '' }}" type="button">
                                <i class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                                    {{ $item['icon'] }}
                                </i>
                                <span class="title leading-none">
                                    {{ $item['name'] }}
                                </span>
                                @if(isset($item['badge']))
                                    <span class="rounded-full font-medium inline-block text-center w-[20px] h-[20px] text-[11px] leading-[20px] text-{{ $item['badge']['class'] }}-500 bg-{{ $item['badge']['class'] }}-50 dark:bg-[#ffffff14] ltr:ml-auto rtl:mr-auto">
                                        {{ $item['badge']['text'] }}
                                    </span>
                                @endif
                            </button>
                            <div class="accordion-collapse {{ $item['active'] ? 'block' : 'hidden' }}">
                                <div class="pt-[4px]">
                                    <ul class="sidebar-sub-menu">
                                        @foreach($item['sub_items'] as $sub_item)
                                            <li class="sidemenu-item mb-[4px] last:mb-0">
                                                <a href="{{ $sub_item['url'] }}" class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c] {{ $sub_item['active'] ? 'active' : '' }}">
                                                    {{ $sub_item['name'] }}
                                                    @if(isset($sub_item['badge']))
                                                        <span class="text-[10px] font-medium py-[1px] px-[8px] ltr:ml-[8px] rtl:mr-[8px] text-{{ $sub_item['badge']['class'] }}-500 bg-{{ $sub_item['badge']['class'] }}-100 dark:bg-[#ffffff14] inline-block rounded-sm">
                                                            {{ $sub_item['badge']['text'] }}
                                                        </span>
                                                    @endif
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</div>
<!-- End Sidebar -->